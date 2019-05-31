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
            .form-group.footable-filtering-search,
            .footable-filter {
                display: none;
            }
            .form-control {
                color: #262626;
            }
        </style>
		<section class="container">
			<p>New events are being added every day. If you don't find an event near you, please check back.</p>
            <!-- Table Markup -->
            <table id="isosld" class="tablepress" data-paging="false" data-filtering="true"
                   data-sorting="true" data-state="true"></table>
        </section>
		<section class="container">
			<div class="support-group__content">
				<?php the_content(); ?>
			</div>
		</section>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/footable3.1.6.js"></script>
        <script>
jQuery(function($) {
    ft = FooTable.init("#isosld", {

        // if you are working with a static table or are defining
        // the table in html using php etc, then you must define
        // data-name in the th of the column you wish to filter
        // by the data-name will be used for searching instead of
        // the actual cell value

        columns: [
            {
                name: "eventName",
                title: "Event Name",
                type: "text",
                style: {
                    width: "20%"
                }
            },
            {
                name: "city",
                title: "City",
                type: "text",
                style: {
                    width: "20%"
                }
            },
            {
                name: "state",
                title: "State/Province",
                type: "text",
                style: {
                    width: "20%"
                }
            },
            {
                name: "code",
                title: "Postal Code",
                type: "text",
                style: {
                    width: "20%"
                }
            },
            {
                name: "country",
                title: "Country",
                type: "text",
                style: {
                    width: "20%"
                }
            }
        ],
        rows: [
            {
                eventName: 'Montgomery, Alabama',
                city: 'Montgomery',
                state: 'Alabama',
                code: 36109,
                country: 'United States of America'
            },
            {
                eventName: 'Montgomery, Alabama',
                city: 'Montgomery',
                state: 'Alabama',
                code: 36109,
                country: 'United States of America'
            },
            {
                eventName: 'Montgomery, Alabama',
                city: 'Montgomery',
                state: 'Alabama',
                code: 36109,
                country: 'United States of America'
            },
            {
                eventName: 'Montgomery, Alabama',
                city: 'Montgomery',
                state: 'Alabama',
                code: 36109,
                country: 'United States of America'
            }
        ],
        components: {
            filtering: FooTable.MyFiltering
        }
    }),
        uid = 10001;
});

// advanced filter functions
// details at http://fooplugins.github.io/FooTable/docs/examples/advanced/filter-dropdown.html

//extend the default (base) filtering component
// and define variables as per our requirement
FooTable.MyFiltering = FooTable.Filtering.extend({
     construct: function(instance) {
         this._super(instance);
         // these will appear in the select/dropdown
         // and results will be filtered to reflect
         // these values
         this.usernames = ["Kyger", "Keasler"];
         // the default label, to clear the filter
         this.def = "All Users";
         // place holder for jQuery wrapper
         // this will be the name of the filter
         this.$users = null;
     },
     $create: function() {
         this._super();
         //create a dropdown select to append to our searchbox
         var self = this,
             $form_grp = jQuery("<div/>", { class: "form-group" })
             // text: is the label for the dropdown select box
                 .append(jQuery("<label/>", { class: "form-label", text:
                         "Select Your State" }))
                 .prependTo(self.$form);

         // define $users properties
         self.$users = jQuery("<select/>", { class: "form-control" })
             .on("change", { self: self }, self._onStatusDropdownChanged)
             .append(jQuery("<option/>", { text: self.def }))
             .appendTo($form_grp);

         // add each value from usernames to the selectbox
         jQuery.each(self.usernames, function(i, curruser) {
             self.$users.append(jQuery("<option/>").text(curruser));
         });
     },

     // function to be called when selection
     // is made
     _onStatusDropdownChanged: function(e) {
         var self = e.data.self,
             selected = jQuery(this).val();
         if (selected !== self.def) {
             // if selected value is not the default value
             // then filter instance (users) by the value
             // selected in the column 'lastName'
             // note as mentioned above if you are not using
             // json to define your table you must provide
             // the data-name value to the column th that
             // you want to refer below
             self.addFilter("users", selected, ["lastName"]);
         } else {
             // if default value then clear the filter
             self.removeFilter("users");
         }
         self.filter();
     },


     draw: function() {
         this._super();

         // this is used to maintain the filter state
         // across pagination

         // check if a filtered instance of users exists
         var filteredusers = this.find("users");
         if (filteredusers instanceof FooTable.Filter) {
             // if yes then set filter of the next page tp
             // the selected value
             this.$users.val(filteredusers.query.val());
         } else {
             // if not, clear it, that is set it
             // to default
             this.$users.val(this.def);
         }
     }
    });
        </script>
	<?php
	endwhile;
endif;
get_footer();
?>
