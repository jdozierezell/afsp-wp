<div id="ais-wrapper">
	<main id="ais-main">
		<div id="algolia-hits"></div>
		<div id="algolia-pagination"></div>
	</main>
</div>

<script type="text/html" id="tmpl-instantsearch-hit">
	<article itemtype="http://schema.org/Article">
		<# if ( data.images.thumbnail ) { #>
		<div class="ais-hits--thumbnail">
			<a href="{{ data.permalink }}" title="{{ data.post_title }}">
				<img src="{{ data.images.thumbnail.url }}" alt="{{ data.post_title }}" title="{{ data.post_title }}" itemprop="image" />
			</a>
		</div>
		<# } #>
{{console.log(data)}}
		<div class="ais-hits--content">
			<h2 itemprop="name headline"><a href="{{ data.permalink }}" title="{{ data.post_title }}" itemprop="url">{{{ data._highlightResult.post_title.value }}}</a></h2>
			<div class="excerpt">
				<p>
					<# if ( data._snippetResult['content'] ) { #>
						<span class="suggestion-post-content">{{{ data._snippetResult['content'].value }}}</span>
					<# } #>
				</p>
			</div>
		</div>
		<div class="ais-clearfix"></div>
	</article>
</script>








<script type="text/javascript">
	jQuery(function() {
		if(jQuery('#ais-main').length > 0) {

			if (algolia.indices.searchable_posts === undefined && jQuery('.admin-bar').length > 0) {
				alert('It looks like you haven\'t indexed the searchable posts index. Please head to the Indexing page of the Algolia Search plugin and index it.');
			}

			/* Instantiate instantsearch.js */
			var search = instantsearch({
				appId: algolia.application_id,
				apiKey: algolia.search_api_key,
				indexName: algolia.indices.searchable_posts.name,
				urlSync: {
					mapping: {'q': 's'},
					trackedParameters: ['query']
				},
				searchParameters: {
					facetingAfterDistinct: true,
					highlightPreTag: '__ais-highlight__',
					highlightPostTag: '__/ais-highlight__'
				}
			});

			/* Hits widget */
			search.addWidget(
				instantsearch.widgets.hits({
					container: '#algolia-hits',
					hitsPerPage: 10,
					templates: {
						empty: 'No results were found for "<strong>{{query}}</strong>".',
						item: wp.template('instantsearch-hit')
					},
					transformData: {
						item: function (hit) {
							for(var key in hit._highlightResult) {
								// We do not deal with arrays.
								if(typeof hit._highlightResult[key].value !== 'string') {
									continue;
								}
								hit._highlightResult[key].value = _.escape(hit._highlightResult[key].value);
								hit._highlightResult[key].value = hit._highlightResult[key].value.replace(/__ais-highlight__/g, '<em>').replace(/__\/ais-highlight__/g, '</em>');
							}

							for(var key in hit._snippetResult) {
								// We do not deal with arrays.
								if(typeof hit._snippetResult[key].value !== 'string') {
									continue;
								}

								hit._snippetResult[key].value = _.escape(hit._snippetResult[key].value);
								hit._snippetResult[key].value = hit._snippetResult[key].value.replace(/__ais-highlight__/g, '<em>').replace(/__\/ais-highlight__/g, '</em>');
							}

							return hit;
						}
					}
				})
			);

			/* Pagination widget */
			search.addWidget(
				instantsearch.widgets.pagination({
					container: '#algolia-pagination'
				})
			);

			/* Start */
			search.start();
		}
	});
</script>
