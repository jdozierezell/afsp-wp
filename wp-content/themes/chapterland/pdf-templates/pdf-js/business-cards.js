var BusinessCard = React.createClass({
  getInitialState: function() {
    return {
      name: '',
      title: '',
      chapter: '',
      landline: '',
      fax: '',
      cellphone: '',
      email: '',
      printing: '',
    }
  },
  handleChange: function(key) {
    return function(e) {
      var state = {};
      state[key] = e.target.value;
      this.setState(state);
    }.bind(this);
  },
  render: function() {
    return (
      <section className="business-card">
        <form className="business-card-form" action="http://chapterland.org/wp-content/themes/chapterland/pdf-templates/pdf-business-cards.php/" method="post">
          <BusinessName name={this.state.name} onChange={this.handleChange('name')} />
          <BusinessTitle title={this.state.title} onChange={this.handleChange('title')} />
          <BusinessChapter chapter={this.state.chapter} onChange={this.handleChange('chapter')} />
          <BusinessLandline landline={this.state.landline} onChange={this.handleChange('landline')} />
          <BusinessFax fax={this.state.fax} onChange={this.handleChange('fax')} />
          <BusinessCellphone cellphone={this.state.cellphone} onChange={this.handleChange('cellphone')} />
          <BusinessEmail email={this.state.email} onChange={this.handleChange('email')} />
          <BusinessPrint printing={this.state.printing} onChange={this.handleChange('printing')} />
          <BusinessHidden card={this.state} />
          <BusinessSubmit />
        </form>
        <div className="business-card-display">
          <CardWrapper card={this.state} />
          <div className="business-card-layout business-card-back"></div>
        </div>
      </section>
    );
  }
});

var BusinessName = React.createClass({
  render: function() {
    return (
      <div className="bc-form-name">
        <label for="name">Name </label> 
        <input type="text" name="name" value={this.props.name} onChange={this.props.onChange} required />
      </div>
    );
  }
});
var BusinessTitle = React.createClass({
  render: function() {
    return (
      <div className="bc-form-title">
        <label for="title">Title </label> 
        <input type="text" name="title" value={this.props.title} onChange={this.props.onChange} />
      </div>
    );
  }
});
var BusinessChapter = React.createClass({
  render: function() {
    return (
      <div className="bc-form-chapter">
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
var BusinessLandline = React.createClass({
  render: function() {
    return (
      <div className="bc-form-landline">
        <label for="landline">Landline </label>
        <input type="text" name="landline" value={this.props.landline} onChange={this.props.onChange} />
      </div>
    );
  }
});
var BusinessFax = React.createClass({
  render: function() {
    return (
      <div className="bc-form-fax">
        <label for="fax">Fax </label>
        <input type="text" name="fax" value={this.props.fax} onChange={this.props.onChange} />
      </div>
    );
  }
});
var BusinessCellphone = React.createClass({
  render: function() {
    return (
      <div className="bc-form-cellphone">
        <label for="cellphone">Cellphone </label>
        <input type="text" name="cellphone" value={this.props.cellphone} onChange={this.props.onChange} />
      </div>
    );
  }
});
var BusinessEmail = React.createClass({
  render: function() {
    return (
      <div className="bc-form-email">
        <label for="email">Email </label>
        <input type="email" name="email" value={this.props.email} onChange={this.props.onChange} />
      </div>
    );
  }
});
var BusinessPrint = React.createClass({
  render: function() {
    return (
      <div className="bc-form-print">
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
var BusinessHidden = React.createClass({
  render: function() {
    var phones = ''; 
    if(this.props.card.landline) {
      phones = '<p><span>t</span>' + this.props.card.landline + '</p>';
    }
    if(this.props.card.fax) {
      phones += '<p><span>f</span>' + this.props.card.fax + '</p>';
    }
    if(this.props.card.cellphone) {
      phones += '<p><span>m</span>' + this.props.card.cellphone + '</p>';
    }
    if(!this.props.card.landline && !this.props.card.fax && !this.props.card.cellphone) {
      phones = '<p>Please enter at least one phone number.</p>';
    }
    var fullCard = '';
    if(this.props.card.name && this.props.card.title && this.props.card.chapter && this.props.card.landline && this.props.card.fax && this.props.card.cellphone && this.props.card.email) {
      fullCard = ".business-card-info {top: 3vw;}";
    }
    var styleSheet = '';
    var pageAtts = '';
    if(this.props.card.printing === 'Printing locally') {
      styleSheet = '<link rel="stylesheet" href="http://chapterland.org/wp-content/themes/chapterland/pdf-templates/pdf-css/business-cards-crop.css" type="text/css" />';
      pageAtts = 'size: 3.5in 2in; \
                  margin: -0.25in; \
                  marks: crop; \
                  prince-bleed: 0.25in; \
                  prince-trim: 0.25in;';
    } else if(this.props.card.printing === 'Vistaprint or FedEx online') {
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
        <div class="business-card-layout"> \
          <div class="business-card-border"></div> \
          <div class="business-card-logo"> \
            <img src="http://chapterland.org/wp-content/uploads/sites/10/2016/04/AFSP_Logo_Blue-7707U.jpg"></img> \
          </div> \
          <style>' + fullCard + '</style> \
          <div class="business-card-info"> \
            <h2 class="business-card-name">' + this.props.card.name + '</h2> \
            <h3 class="business-card-title">' + this.props.card.title + '</h3> \
            <p class="business-card-chapter">' + this.props.card.chapter + '</p> \
            <div class="business-card-phone">' + phones + '</div> \
            <p class="business-card-email">' + this.props.card.email + '</p> \
            <h2 class="business-card-website">afsp.dev.cc</h2> \
          </div> \
        </div> \
        <div class="business-card-layout business-card-back"></div> \
      </body> \
    </html>';
    return (
      <input type="hidden" name="html" value={hiddenValue} />
    );
  }
});
var BusinessSubmit = React.createClass({
  render: function() {
    return (
      <input type="submit" value="Create your business card"/>
    );
  }
});

var CardWrapper = React.createClass({
  render: function() {
    var fullCard = '';
    if(this.props.card.name && this.props.card.title && this.props.card.chapter && this.props.card.landline && this.props.card.fax && this.props.card.cellphone && this.props.card.email) {
      fullCard = ".business-card-info {top: 3vw;}";
    }
    return (
      <div className="business-card-layout">
        <div className="business-card-border">&nbsp;</div>
        <div className="business-card-logo">
          <img src="http://chapterland.org/wp-content/uploads/sites/10/2016/04/AFSP_Logo_Blue-7707U.jpg"></img>
        </div>
        <style>{fullCard}</style>
        <div className="business-card-info">
          <CardName name={this.props.card.name} />
          <CardTitle title={this.props.card.title} />
          <CardChapter chapter={this.props.card.chapter} />
          <CardPhone landline={this.props.card.landline} fax={this.props.card.fax} cellphone={this.props.card.cellphone} />
          <CardEmail email={this.props.card.email} />
          <CardWebsite chapter={this.props.card.chapter} />
        </div>
      </div>
    );
  }
});

var CardName = React.createClass({
  render: function() {
    return (
      <h2 className="business-card-name">{this.props.name}</h2>
    );
  }
});
var CardTitle = React.createClass({
  render: function() {
    return (
      <h3 className="business-card-title">{this.props.title}</h3>
    );
  }
});
var CardChapter = React.createClass({
  render: function() {
    return (
      <p className="business-card-chapter">{this.props.chapter}</p>
    );
  }
});
var CardPhone = React.createClass({
  render: function() {
    var phones = ''; 
    if(this.props.landline) {
      phones = '<p><span>t</span>' + this.props.landline + '</p>';
    }
    if(this.props.fax) {
      phones += '<p><span>f</span>' + this.props.fax + '</p>';
    }
    if(this.props.cellphone) {
      phones += '<p><span>c</span>' + this.props.cellphone + '</p>';
    }
    if(!this.props.landline && !this.props.fax && !this.props.cellphone) {
      phones = '<p>Please enter at least one phone number.</p>';
    }
    return (
      <div className="business-card-phone" dangerouslySetInnerHTML={{__html: phones}} />
    );
  }
});
var CardEmail = React.createClass({
  render: function() {
    return (
      <p className="business-card-email">{this.props.email}</p>
    );
  }
});
var CardWebsite = React.createClass({
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
      <h2 className="business-card-website">afsp.dev.cc{url}</h2>
    );
  }
});

ReactDOM.render(
  <BusinessCard />,
  document.getElementById('cardHolder')
);