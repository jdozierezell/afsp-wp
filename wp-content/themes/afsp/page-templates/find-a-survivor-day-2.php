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
                name: "id",
                title: "ID",
                breakpoints: "xs sm",
                type: "number",
                style: { width: 80, maxWidth: 80 }
            },
            { name: "firstName", title: "First Name" },
            { name: "lastName", title: "Last Name" },
            {
                name: "something",
                title: "Never seen but always around",
                visible: false,
                filterable: false
            },
            {
                name: "jobTitle",
                title: "Job Title",
                breakpoints: "xs sm",
                style: {
                    maxWidth: 200,
                    overflow: "hidden",
                    textOverflow: "ellipsis",
                    wordBreak: "keep-all",
                    whiteSpace: "nowrap"
                }
            },
            {
                name: "started",
                title: "Started On",
                type: "date",
                breakpoints: "xs sm md",
                formatString: "MMM YYYY"
            },
            {
                name: "dob",
                title: "Date of Birth",
                type: "date",
                breakpoints: "xs sm md",
                formatString: "DD MMM YYYY"
            },
            { name: "status", title: "Status" }
        ],
        rows: [
            {
                id: 1,
                firstName: "Annemarie",
                lastName: "Bruening",
                something: 1381105566987,
                jobTitle: "Cloak Room Attendant",
                started: 1367700388909,
                dob: 122365714987,
                status: "Suspended"
            },
            {
                id: 2,
                firstName: "Nelly",
                lastName: "Lusher",
                something: 1267237540208,
                jobTitle: "Broadcast Maintenance Engineer",
                started: 1382739570973,
                dob: 183768652128,
                status: "Disabled"
            },
            {
                id: 3,
                firstName: "Lorraine",
                lastName: "Kyger",
                something: 1263216405811,
                jobTitle: "Geophysicist",
                started: 1265199486212,
                dob: 414197000409,
                status: "Active"
            },
            {
                id: 4,
                firstName: "Maire",
                lastName: "Vanatta",
                something: 1317652005631,
                jobTitle: "Gaming Cage Cashier",
                started: 1359190254082,
                dob: 381574699574,
                status: "Disabled"
            },
            {
                id: 5,
                firstName: "Whiney",
                lastName: "Keasler",
                something: 1297738568550,
                jobTitle: "High School Librarian",
                started: 1377538533615,
                dob: -11216050657,
                status: "Active"
            },
            {
                id: 6,
                firstName: "Nikia",
                lastName: "Badgett",
                something: 1283192889859,
                jobTitle: "Clown",
                started: 1348067291754,
                dob: -236655382175,
                status: "Active"
            },
            {
                id: 7,
                firstName: "Renea",
                lastName: "Stever",
                something: 1289586239969,
                jobTitle: "Work Ticket Distributor",
                started: 1312738712940,
                dob: 483475202947,
                status: "Disabled"
            },
            {
                id: 8,
                firstName: "Rayna",
                lastName: "Resler",
                something: 1351969871214,
                jobTitle: "Ordnance Engineer",
                started: 1300981406722,
                dob: 267565804332,
                status: "Disabled"
            },
            {
                id: 9,
                firstName: "Sephnie",
                lastName: "Cooke",
                something: 1318107009703,
                jobTitle: "Accounts Collector",
                started: 1348566414201,
                dob: 84698632860,
                status: "Suspended"
            },
            {
                id: 10,
                firstName: "Lauri",
                lastName: "Kyles",
                something: 1298847936600,
                jobTitle: "Commercial Lender",
                started: 1306984494872,
                dob: 647549298565,
                status: "Disabled"
            },
            {
                id: 11,
                firstName: "Maria",
                lastName: "Hosler",
                something: 1372447291002,
                jobTitle: "Auto Detailer",
                started: 1295239832657,
                dob: 92796339552,
                status: "Suspended"
            },
            {
                id: 12,
                firstName: "Lakeshia",
                lastName: "Sprinkle",
                something: 1296451003728,
                jobTitle: "Garment Presser",
                started: 1350695946669,
                dob: 6068444160,
                status: "Suspended"
            },
            {
                id: 13,
                firstName: "Isidra",
                lastName: "Dragoo",
                something: 1285852466255,
                jobTitle: "Window Trimmer",
                started: 1264658548150,
                dob: 129659544744,
                status: "Active"
            },
            {
                id: 14,
                firstName: "Marquia",
                lastName: "Ardrey",
                something: 1336968147859,
                jobTitle: "Broadcast Maintenance Engineer",
                started: 1281348596711,
                dob: 69513590957,
                status: "Disabled"
            },
            {
                id: 15,
                firstName: "Jua",
                lastName: "Bottom",
                something: 1322560108993,
                jobTitle: "Broadcast Maintenance Engineer",
                started: 1350354712910,
                dob: 397465403667,
                status: "Active"
            },
            {
                id: 16,
                firstName: "Delana",
                lastName: "Sprouse",
                something: 1367925208609,
                jobTitle: "High School Librarian",
                started: 1360754556666,
                dob: -101355021375,
                status: "Disabled"
            },
            {
                id: 17,
                firstName: "Annamaria",
                lastName: "Pennock",
                something: 1385602980951,
                jobTitle: "Photocopying Equipment Repairer",
                started: 1267426062440,
                dob: 129358493928,
                status: "Active"
            },
            {
                id: 18,
                firstName: "Junie",
                lastName: "Leinen",
                something: 1270540402378,
                jobTitle: "Roller Skater",
                started: 1343534987824,
                dob: 405467757390,
                status: "Suspended"
            },
            {
                id: 19,
                firstName: "Charles",
                lastName: "Hayton",
                something: 1309910398220,
                jobTitle: "Ships Electronic Warfare Officer",
                started: 1297511155831,
                dob: 603442557419,
                status: "Disabled"
            },
            {
                id: 20,
                firstName: "Lorriane",
                lastName: "Roling",
                something: 1278850931389,
                jobTitle: "Industrial Waste Treatment Technician",
                started: 1279697681249,
                dob: 236380359513,
                status: "Disabled"
            },
            {
                id: 21,
                firstName: "Alice",
                lastName: "Goodlow",
                something: 1268720188765,
                jobTitle: "State Archivist",
                started: 1381306773987,
                dob: 455731231484,
                status: "Disabled"
            },
            {
                id: 22,
                firstName: "Carie",
                lastName: "Dragoo",
                something: 1384770174557,
                jobTitle: "Financial Accountant",
                started: 1277771127047,
                dob: -219020252497,
                status: "Active"
            },
            {
                id: 23,
                firstName: "Gran",
                lastName: "Valles",
                something: 1337645396364,
                jobTitle: "Childrens Pastor",
                started: 1288986457843,
                dob: -227796663726,
                status: "Suspended"
            },
            {
                id: 24,
                firstName: "Jacqulyn",
                lastName: "Polo",
                something: 1326444321746,
                jobTitle: "Window Trimmer",
                started: 1301386589024,
                dob: 35495285174,
                status: "Suspended"
            },
            {
                id: 25,
                firstName: "Whiney",
                lastName: "Schug",
                something: 1307849405355,
                jobTitle: "Financial Accountant",
                started: 1306555903074,
                dob: 435274848084,
                status: "Disabled"
            },
            {
                id: 26,
                firstName: "Dennise",
                lastName: "Halladay",
                something: 1337981034973,
                jobTitle: "Geophysicist",
                started: 1322643709717,
                dob: 181548946421,
                status: "Active"
            },
            {
                id: 27,
                firstName: "Celia",
                lastName: "Leister",
                something: 1309315284479,
                jobTitle: "Commercial Lender",
                started: 1331516367758,
                dob: -264359348487,
                status: "Disabled"
            },
            {
                id: 28,
                firstName: "Karon",
                lastName: "Klotz",
                something: 1320236999249,
                jobTitle: "Route Sales Person",
                started: 1317976956544,
                dob: -305463328126,
                status: "Suspended"
            },
            {
                id: 29,
                firstName: "Myesha",
                lastName: "Kyger",
                something: 1314407559398,
                jobTitle: "LAN Systems Administrator",
                started: 1376934306176,
                dob: -218657222188,
                status: "Disabled"
            },
            {
                id: 30,
                firstName: "Beariz",
                lastName: "Ortego",
                something: 1310918048393,
                jobTitle: "Commercial Lender",
                started: 1326301928745,
                dob: 17930742800,
                status: "Suspended"
            },
            {
                id: 31,
                firstName: "Lauri",
                lastName: "Landa",
                something: 1299220719823,
                jobTitle: "Emergency Room Orderly",
                started: 1278297973662,
                dob: 389332600186,
                status: "Disabled"
            },
            {
                id: 32,
                firstName: "Lakeshia",
                lastName: "Cataldo",
                something: 1276655728605,
                jobTitle: "Biology Laboratory Assistant",
                started: 1345440531397,
                dob: 670737968811,
                status: "Active"
            },
            {
                id: 33,
                firstName: "Jack",
                lastName: "Goodlow",
                something: 1359264767205,
                jobTitle: "Wallpaperer Helper",
                started: 1325417690668,
                dob: 390860124904,
                status: "Disabled"
            },
            {
                id: 34,
                firstName: "Karon",
                lastName: "Weisz",
                something: 1385661528555,
                jobTitle: "Parachute Officer",
                started: 1381228657436,
                dob: 258279988522,
                status: "Disabled"
            },
            {
                id: 35,
                firstName: "Bernie",
                lastName: "Ates",
                something: 1290416240383,
                jobTitle: "Beveling and Edging Machine Operator",
                started: 1339828820306,
                dob: -241204720505,
                status: "Disabled"
            },
            {
                id: 36,
                firstName: "Alonzo",
                lastName: "Dragoo",
                something: 1385425643141,
                jobTitle: "Route Sales Person",
                started: 1283427599749,
                dob: -43286536918,
                status: "Active"
            },
            {
                id: 37,
                firstName: "Jacqulyn",
                lastName: "Boudreaux",
                something: 1301509564939,
                jobTitle: "Hemodialysis Technician",
                started: 1299186053429,
                dob: -28706770458,
                status: "Active"
            },
            {
                id: 38,
                firstName: "Whiney",
                lastName: "Smelcer",
                something: 1348107814490,
                jobTitle: "Offbearer",
                started: 1279051462500,
                dob: -83372379183,
                status: "Disabled"
            },
            {
                id: 39,
                firstName: "Laurena",
                lastName: "Ardrey",
                something: 1317463286660,
                jobTitle: "Master of Ceremonies",
                started: 1277026873583,
                dob: -265217817760,
                status: "Suspended"
            },
            {
                id: 40,
                firstName: "Lashanda",
                lastName: "Wohlwend",
                something: 1348081466228,
                jobTitle: "Offbearer",
                started: 1376204654140,
                dob: -244248898940,
                status: "Disabled"
            },
            {
                id: 41,
                firstName: "Gwyn",
                lastName: "Fuhrman",
                something: 1297825975376,
                jobTitle: "Internal Medicine Nurse Practitioner",
                started: 1360899610372,
                dob: 666149629137,
                status: "Active"
            },
            {
                id: 42,
                firstName: "Chun",
                lastName: "Cooke",
                something: 1367188188482,
                jobTitle: "Electrical Engineering Director",
                started: 1263546064404,
                dob: 51712931971,
                status: "Disabled"
            },
            {
                id: 43,
                firstName: "Mariko",
                lastName: "Furniss",
                something: 1350578370165,
                jobTitle: "National Association for Stock Car Auto Racing Driver",
                started: 1309447851039,
                dob: 464309188120,
                status: "Disabled"
            },
            {
                id: 44,
                firstName: "Londa",
                lastName: "Difranco",
                something: 1302061818121,
                jobTitle: "Periodontist",
                started: 1278471697817,
                dob: 114612210842,
                status: "Active"
            },
            {
                id: 45,
                firstName: "Junie",
                lastName: "Leinen",
                something: 1288710880233,
                jobTitle: "Geophysical Engineer",
                started: 1358658207175,
                dob: 467506533140,
                status: "Active"
            },
            {
                id: 46,
                firstName: "Chun",
                lastName: "Branco",
                something: 1352564545893,
                jobTitle: "LAN Systems Administrator",
                started: 1287347506646,
                dob: 647599930885,
                status: "Disabled"
            },
            {
                id: 47,
                firstName: "Rheba",
                lastName: "Branco",
                something: 1266316091624,
                jobTitle: "Telephone Lines Repairer",
                started: 1331066862260,
                dob: 452152850326,
                status: "Active"
            },
            {
                id: 48,
                firstName: "Isidra",
                lastName: "Sluss",
                something: 1276489295656,
                jobTitle: "Photocopying Equipment Repairer",
                started: 1271941169015,
                dob: 288909488866,
                status: "Active"
            },
            {
                id: 49,
                firstName: "Myesha",
                lastName: "Marco",
                something: 1372414008480,
                jobTitle: "Clinical Services Director",
                started: 1271766890324,
                dob: 374650329690,
                status: "Suspended"
            },
            {
                id: 50,
                firstName: "Karena",
                lastName: "Hosler",
                something: 1294015640769,
                jobTitle: "Automobile Body Painter",
                started: 1280013636936,
                dob: 398832948998,
                status: "Active"
            },
            {
                id: 51,
                firstName: "Whiney",
                lastName: "Falls",
                something: 1343358865538,
                jobTitle: "Childrens Pastor",
                started: 1270853037253,
                dob: -164518511726,
                status: "Active"
            },
            {
                id: 52,
                firstName: "Gran",
                lastName: "Dauenhauer",
                something: 1304876059529,
                jobTitle: "Commercial Lender",
                started: 1284449547894,
                dob: 23725605889,
                status: "Active"
            },
            {
                id: 53,
                firstName: "Rona",
                lastName: "Nicley",
                something: 1371323038673,
                jobTitle: "Ordnance Engineer",
                started: 1385711619364,
                dob: 644741897037,
                status: "Disabled"
            },
            {
                id: 54,
                firstName: "Charles",
                lastName: "Pennock",
                something: 1271111689368,
                jobTitle: "Pipe Organ Technician",
                started: 1313121452453,
                dob: 215809917048,
                status: "Suspended"
            },
            {
                id: 55,
                firstName: "Phoebe",
                lastName: "Hallett",
                something: 1365597767116,
                jobTitle: "Scale Clerk",
                started: 1372372052497,
                dob: 261671360690,
                status: "Disabled"
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
