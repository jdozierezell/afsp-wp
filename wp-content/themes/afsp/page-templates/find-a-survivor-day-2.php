<?php
/**
 * Template Name: Find International Survivors of Suicide Loss Day
 *
 * @package afsp
 */

get_header();
get_template_part( 'template-parts/title' );
?>
<section class="container">
	<h1 class="landing__title"><?php the_title(); ?></h1>
</section>
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>
        <style>
            .footable-filter-container {
                display: none;
            }
        </style>
		<section class="container">
			<p>New events are being added every day. If you don't find an event near you, please check back.</p>
			<table class="tablepress">
                <thead>
                    <tr>
                        <th>Lorem</th>
                        <th>Ipsum</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Lorem</td>
                    <td>Ipsum</td>
                </tr>
                <tr>
                    <td>Lorem</td>
                    <td>Ipsum</td>
                </tr>
                </tbody>
            </table>
		</section>
		<section class="container">
			<div class="support-group__content">
				<?php the_content(); ?>
			</div>
		</section>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/footable3.1.6.js"></script>
        <script>
            FooTable.MyFiltering = FooTable.Filtering.extend({
                 construct: function(instance){
                     this._super(instance);
                     this.statuses = ['Active','Disabled','Suspended'];
                     this.def = 'Any Status';
                     this.$status = null;
                 },
                 $create: function(){
                     this._super();
                     var self = this,
                         $form_grp = $('<div/>', {'class': 'form-group'})
                             .append($('<label/>', {'class': 'sr-only', text: 'Status'}))
                             .prependTo(self.$form);
console.log(self)
                     self.$status = $('<select/>', { 'class': 'form-control' })
                         .on('change', {self: self}, self._onStatusDropdownChanged)
                         .append($('<option/>', {text: self.def}))
                         .appendTo($form_grp);

                     $.each(self.statuses, function(i, status){
                         self.$status.append($('<option/>').text(status));
                     });
                 },
                 _onStatusDropdownChanged: function(e){
                     var self = e.data.self,
                         selected = $(this).val();
                     if (selected !== self.def){
                         self.addFilter('status', selected, ['status']);
                     } else {
                         self.removeFilter('status');
                     }
                     self.filter();
                 },
                 draw: function(){
                     this._super();
                     var status = this.find('status');
                     if (status instanceof FooTable.Filter){
                         this.$status.val(status.query.val());
                     } else {
                         this.$status.val(this.def);
                     }
                 }
             })
            jQuery('.tablepress').footable({
                components: {
                    filtering:FooTable.Dropdown
                }
            })
        </script>
	<?php
	endwhile;
endif;
get_footer();
?>
