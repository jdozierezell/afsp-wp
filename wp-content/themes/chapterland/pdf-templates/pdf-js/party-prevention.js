var PartyPrevention = React.createClass({
  getInitialState: function() {
    return {
      image: '',
      title: '',
      chapter: '',
      short_description: '',
      date: '',
      time: '',
      location_name: '',
      location_address: '',
      contact: '',
      printing: '',
    }
  },
  handleChange: function(key) {
    return function(e) {
      var state = {};
      state[key] = e.target.value;
      this.setState(state);
      console.log(e.target.value);
    }.bind(this);
  },
  render: function() {
    return (
      <section className="party-prevention">
        <form className="party-prevention-form" action="http://chapterland.org/wp-content/themes/chapterland/pdf-templates/pdf-party-prevention.php/" method="post">
          <PartyImage title={this.state.image} onChange={this.handleChange('image')} />
          <PartyTitle title={this.state.title} onChange={this.handleChange('title')} />
          <PartyChapter chapter={this.state.chapter} onChange={this.handleChange('chapter')} />
          <PartyShortDescription short_description={this.state.short_description} onChange={this.handleChange('short_description')} />
          <PartyDate date={this.state.date} onChange={this.handleChange('date')} />
          <PartyTime time={this.state.time} onChange={this.handleChange('time')} />
          <PartyLocationName location_name={this.state.location_name} onChange={this.handleChange('location_name')} />
          <PartyLocationAddress location_address={this.state.location_address} onChange={this.handleChange('location_address')} />
          <PartyContact contact={this.state.contact} onChange={this.handleChange('contact')} />
          <PartyPrint printing={this.state.printing} onChange={this.handleChange('printing')} />
          <PartyHidden party={this.state} />
          <PartySubmit />
        </form>
        <div className="party-prevention-display">
          <PartyWrapper party={this.state} />
          <div className="party-prevention-layout party-prevention-back"></div>
        </div>
      </section>
    );
  }
});

var PartyImage = React.createClass({
  render: function() {
    return (
      <div className="pp-form-image">
        <label for="image">Choose Image </label> 
        <select name="image" value={this.props.image} onChange={this.props.onChange} >
          <option></option>
          <option value="ValueTest">Test</option>
          <option value="ValueTest2">Test2</option>
          <option value="ValueTest3">Test3</option>
        </select>
      </div>
    );
  }
});
var PartyTitle = React.createClass({
  render: function() {
    return (
      <div className="pp-form-title">
        <label for="title">Title </label> 
        <input type="text" name="title" value={this.props.title} onChange={this.props.onChange} />
      </div>
    );
  }
});
var PartyChapter = React.createClass({
  render: function() {
    return (
      <div className="pp-form-chapter">
        <label for="chapter">Chapter </label>
        <select name="chapter" value={this.props.chapter} onChange={this.props.onChange} >
          <option></option>
          <option>Alabama</option>
          <option>Alaska</option>
          <option>Arizona</option>
          <option>Arkansas</option>
          <option>Capital Region New York</option>
          <option>Central Florida</option>
          <option>Central New Jersey</option>
          <option>Central New York</option>
          <option>Central Ohio</option>
          <option>Central Pennsylvania</option>
          <option>Central Texas</option>
          <option>Central Valley California</option>
          <option>Cincinnati</option>
          <option>Colorado</option>
          <option>Delaware</option>
          <option>Eastern Missouri</option>
          <option>Florida Panhandle</option>
          <option>Florida Southeast</option>
          <option>Florida Southwest</option>
          <option>Georgia</option>
          <option>Greater Boston</option>
          <option>Greater Kansas</option>
          <option>Greater Lehigh Valley Pennsylvania</option>
          <option>Greater Los Angeles</option>
          <option>Greater Mid-Missouri</option>
          <option>Greater Minnesota</option>
          <option>Greater Northeast Pennsylvania</option>
          <option>Greater Philadelphia</option>
          <option>Greater Sacramento</option>
          <option>Greater San Francisco</option>
          <option>Hawaii</option>
          <option>Hudson Valley</option>
          <option>Idaho</option>
          <option>Illinois</option>
          <option>Indiana</option>
          <option>Inland Empire and Desert Cities</option>
          <option>Iowa</option>
          <option>Kentucky</option>
          <option>Louisiana</option>
          <option>Maine</option>
          <option>Maryland</option>
          <option>Memphis/Mid-South</option>
          <option>Metro Detroit/Ann Arbor</option>
          <option>Middle Tennessee</option>
          <option>Mississippi</option>
          <option>Montana</option>
          <option>National Capital Area</option>
          <option>Nebraska</option>
          <option>Nevada</option>
          <option>New Hampshire</option>
          <option>New Mexico</option>
          <option>New York City</option>
          <option>New York Long Island</option>
          <option>North Carolina</option>
          <option>North Dakota</option>
          <option>North Florida</option>
          <option>North Texas</option>
          <option>Northern Connecticut</option>
          <option>Northern New Jersey</option>
          <option>Northern Ohio</option>
          <option>Oklahoma</option>
          <option>Orange County</option>
          <option>Oregon</option>
          <option>Rhode Island</option>
          <option>San Diego</option>
          <option>South Carolina</option>
          <option>South Central New York</option>
          <option>South Central Pennsylvania</option>
          <option>South Dakota</option>
          <option>South Texas</option>
          <option>Southeast Minnesota</option>
          <option>Southeast Texas</option>
          <option>Southern Connecticut</option>
          <option>Tampa Bay</option>
          <option>Utah</option>
          <option>Vermont</option>
          <option>Virginia</option>
          <option>Washington</option>
          <option>West Virginia</option>
          <option>Westchester</option>
          <option>Western Massachusetts</option>
          <option>Western New York</option>
          <option>Western Pennsylvania</option>
          <option>Wisconsin</option>
          <option>Wyoming</option>    
        </select>
      </div>
    );
  }
});
var PartyShortDescription = React.createClass({
  render: function() {
    return (
      <div className="pp-form-short-description">
        <label for="short_description">Short Description </label>
        <input type="text" name="short_description" value={this.props.short_description} onChange={this.props.onChange} />
      </div>
    );
  }
});
var PartyDate = React.createClass({
  render: function() {
    return (
      <div className="pp-form-date">
        <label for="date">Date </label>
        <input type="text" name="date" value={this.props.date} onChange={this.props.onChange} />
      </div>
    );
  }
});
var PartyTime = React.createClass({
  render: function() {
    return (
      <div className="pp-form-time">
        <label for="time">Time </label>
        <input type="text" name="time" value={this.props.time} onChange={this.props.onChange} />
      </div>
    );
  }
});
var PartyLocationName = React.createClass({
  render: function() {
    return (
      <div className="pp-form-location-name">
        <label for="location_name">Location Name </label>
        <input type="text" name="location_name" value={this.props.location_name} onChange={this.props.onChange} />
      </div>
    );
  }
});
var PartyLocationAddress = React.createClass({
  render: function() {
    return (
      <div className="pp-form-location-address">
        <label for="location_address">Location Address </label>
        <input type="text" name="location_address" value={this.props.location_address} onChange={this.props.onChange} />
      </div>
    );
  }
});
var PartyContact = React.createClass({
  render: function() {
    return (
      <div className="pp-form-contact">
        <label for="contact">Contact Information </label>
        <input type="text" name="contact" value={this.props.contact} onChange={this.props.onChange} />
      </div>
    );
  }
});
var PartyPrint = React.createClass({
  render: function() {
    return (
      <div className="pp-form-print">
        <label for="printing">How will you be printing? </label>
        <select name="printing" value={this.props.printing} onChange={this.props.onChange} required>
          <option></option>
          <option>Printing at home</option>
          <option>Printing locally</option>
          <option>Vistaprint or FedEx online</option>
        </select>
      </div>
    );
  }
});
 // let's do this last
var PartyHidden = React.createClass({
  render: function() {
    var styleSheet = '';
    var pageAtts = '';
    if(this.props.party.printing === 'Printing locally') {
      styleSheet = '<link rel="stylesheet" href="http://chapterland.org/wp-content/themes/chapterland/pdf-templates/pdf-css/business-cards-crop.css" type="text/css" />';
      pageAtts = 'size: 3.5in 2in; \
                  margin: -0.25in; \
                  marks: crop; \
                  prince-bleed: 0.25in; \
                  prince-trim: 0.25in;';
    } else if(this.props.party.printing === 'Vistaprint or FedEx online') {
      styleSheet = '<link rel="stylesheet" href="http://chapterland.org/wp-content/themes/chapterland/pdf-templates/pdf-css/business-cards-vista-fed.css" type="text/css" />';
      pageAtts = 'size: 3.62in 2.12in; \
                  margin: 0;';
    } else {
      styleSheet = '<link rel="stylesheet" href="http://chapterland.org/wp-content/themes/chapterland/pdf-templates/pdf-css/business-cards.css" type="text/css" />';
      pageAtts = 'size: 3.5in 2in; \
                  margin: 0;';
    }
    var hiddenValue = '<html> \
      <head> \
        ' + styleSheet + ' \
        <style> \
          @page{ \
          ' + pageAtts + '\
          } \
        </style> \
      </head> \
      <body> \
        <div class="party-prevention-layout"> \
          <div class="party-prevention-border"></div> \
          <div class="party-prevention-logo"> \
            <img src="http://chapterland.org/wp-content/uploads/sites/10/2016/04/AFSP_Logo_Blue-7707U.jpg"></img> \
          </div> \
          <div class="party-prevention-info"> \
            <h3 class="party-prevention-title">' + this.props.party.title + '</h3> \
            <p class="party-prevention-chapter">' + this.props.party.chapter + '</p> \
            <h2 class="party-prevention-website">afsp.dev.cc</h2> \
          </div> \
        </div> \
        <div class="party-prevention-layout party-prevention-back"></div> \
      </body> \
    </html>';
    return (
      <input type="hidden" name="html" value={hiddenValue} />
    );
  }
});
var PartySubmit = React.createClass({
  render: function() {
    return (
      <input type="submit" value="Create your custom flyer"/>
    );
  }
});

var PartyWrapper = React.createClass({
  render: function() {
    return (
      <div className="party-prevention-layout">
        <div className="party-prevention-logo">
          <img src="http://chapterland.org/wp-content/uploads/sites/10/2016/04/AFSP_Logo_Blue-7707U.jpg"></img>
        </div>
        <div className="party-prevention-info">
          <FlyerTitle title={this.props.party.title} />
          <FlyerChapter chapter={this.props.party.chapter} />
          <FlyerShortDescription short_description={this.props.party.short_description} />
          <FlyerDate date={this.props.party.date} />
          <FlyerTime time={this.props.party.time} />
          <FlyerLocationName location_name={this.props.party.location_name} />
          <FlyerLocationAddress location_address={this.props.party.location_address} />
          <FlyerContact contact={this.props.party.contact} />
          <FlyerWebsite chapter={this.props.party.chapter} />
        </div>
      </div>
    );
  }
});


var FlyerTitle = React.createClass({
  render: function() {
    return (
      <h3 className="party-prevention-title">{this.props.title}</h3>
    );
  }
});
var FlyerChapter = React.createClass({
  render: function() {
    return (
      <p className="party-prevention-chapter">{this.props.chapter}</p>
    );
  }
});
var FlyerShortDescription = React.createClass({
  render: function() {
    return (
      <p className="party-prevention-short-description">{this.props.short_description}</p>
    );
  }
});
var FlyerDate = React.createClass({
  render: function() {
    return (
      <p className="party-prevention-date">{this.props.date}</p>
    );
  }
});
var FlyerTime = React.createClass({
  render: function() {
    return (
      <p className="party-prevention-time">{this.props.time}</p>
    );
  }
});
var FlyerLocationName = React.createClass({
  render: function() {
    return (
      <p className="party-prevention-location-name">{this.props.location_name}</p>
    );
  }
});
var FlyerLocationAddress = React.createClass({
  render: function() {
    return (
      <p className="party-prevention-location-address">{this.props.location_address}</p>
    );
  }
});
var FlyerContact = React.createClass({
  render: function() {
    return (
      <p className="party-prevention-contact">{this.props.contact}</p>
    );
  }
});
var FlyerWebsite = React.createClass({
  render: function() {
    var url = '';
    switch (this.props.chapter) {
      case "Alabama": url = "/alabama"; break;
      case "Alaska": url = "/alaska"; break;
      case "Arizona": url = "/arizona"; break;
      case "Arkansas": url = "/arkansas"; break;
      case "Capital Region New York": url = "/capitalregionny"; break;
      case "Central Florida": url = "/cfl"; break;
      case "Central New Jersey": url = "/centralnewjersey"; break;
      case "Central New York": url = "/centralny"; break;
      case "Central Ohio": url = "/centralohio"; break;
      case "Central Pennsylvania": url = "/centralpa"; break;
      case "Central Texas": url = "/centraltexas"; break;
      case "Central Valley California": url = "/centralvalley"; break;
      case "Cincinnati": url = "/cincinnati"; break;
      case "Colorado": url = "/colorado"; break;
      case "Delaware": url = "/delaware"; break;
      case "Eastern Missouri": url = "/easternmissouri"; break;
      case "Florida Panhandle": url = "/panhandle"; break;
      case "Florida Southeast": url = "/floridasoutheast"; break;
      case "Florida Southwest": url = "/flsouthwest"; break;
      case "Georgia": url = "/georgia"; break;
      case "Greater Boston": url = "/boston"; break;
      case "Greater Kansas": url = "/greaterkansas"; break;
      case "Greater Lehigh Valley Pennsylvania": url = "/greaterlehighvalley"; break;
      case "Greater Los Angeles": url = "/losangeles"; break;
      case "Greater Mid-Missouri": url = "/midmissouri"; break;
      case "Greater Minnesota": url = "/greatermn"; break;
      case "Greater Northeast Pennsylvania": url = "/greaternepa"; break;
      case "Greater Philadelphia": url = "/philadelphia"; break;
      case "Greater Sacramento": url = "/greater-sacramento"; break;
      case "Greater San Francisco": url = "/sfbayarea"; break;
      case "Hawaii": url = "/hawaii"; break;
      case "Hudson Valley": url = "/hudsonvalley"; break;
      case "Idaho": url = "/idaho"; break;
      case "Illinois": url = "/illinois"; break;
      case "Indiana": url = "/indiana"; break;
      case "Inland Empire and Desert Cities": url = "/inlandempiredc"; break;
      case "Iowa": url = "/iowa"; break;
      case "Kentucky": url = "/kentucky"; break;
      case "Louisiana": url = "/louisiana"; break;
      case "Maine": url = "/maine"; break;
      case "Maryland": url = "/maryland"; break;
      case "Memphis/Mid-South": url = "/memphis-midsouth"; break;
      case "Metro Detroit/Ann Arbor": url = "/metrodetroitannarbor"; break;
      case "Middle Tennessee": url = "/middletn"; break;
      case "Mississippi": url = "/mississippi"; break;
      case "Montana": url = "/montana"; break;
      case "National Capital Area": url = "/ncac"; break;
      case "Nebraska": url = "/nebraska"; break;
      case "Nevada": url = "/nevada"; break;
      case "New Hampshire": url = "/newhampshire"; break;
      case "New Mexico": url = "/newmexico"; break;
      case "New York City": url = "/nyc"; break;
      case "New York Long Island": url = "/longisland"; break;
      case "North Carolina": url = "/northcarolina"; break;
      case "North Dakota": url = "/northdakota"; break;
      case "North Florida": url = "/northfl"; break;
      case "North Texas": url = "/northtexas"; break;
      case "Northern Connecticut": url = "/northernct"; break;
      case "Northern New Jersey": url = "/northernnewjersey"; break;
      case "Northern Ohio": url = "/northernohio"; break;
      case "Oklahoma": url = "/oklahoma"; break;
      case "Orange County ": url = "/orangecounty"; break;
      case "Oregon": url = "/oregon"; break;
      case "Rhode Island": url = "/rhodeisland"; break;
      case "San Diego": url = "/sandiego"; break;
      case "South Carolina": url = "/southcarolina"; break;
      case "South Central New York ": url = "/scny"; break;
      case "South Central Pennsylvania": url = "/southcentralpa"; break;
      case "South Dakota": url = "/southdakota"; break;
      case "South Texas": url = "/southtexas"; break;
      case "Southeast Minnesota": url = "/southeastmn"; break;
      case "Southeast Texas": url = "/southeasttexas"; break;
      case "Southern Connecticut": url = "/southernconnecticut"; break;
      case "Tampa Bay": url = "/tampa"; break;
      case "Utah": url = "/utah"; break;
      case "Vermont": url = "/vermont"; break;
      case "Virginia": url = "/virginia"; break;
      case "Washington": url = "/washington"; break;
      case "West Virginia": url = "/westvirginia"; break;
      case "Westchester": url = "/westchester"; break;
      case "Western Massachusetts": url = "/westernma"; break;
      case "Western New York": url = "/westernny"; break;
      case "Western Pennsylvania": url = "/westernpa"; break;
      case "Wisconsin": url = "/wisconsin"; break;
      case "Wyoming": url = "/wyoming"; break;
    }
    return (
      <h2 className="party-prevention-website">afsp.dev.cc{url}</h2>
    );
  }
});

ReactDOM.render(
  <PartyPrevention />,
  document.getElementById('partyHolder')
);