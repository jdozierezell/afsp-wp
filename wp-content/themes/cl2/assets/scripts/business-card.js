/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/  // Just a comment
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.addAppendFormArray = exports.appendFormEl = exports.addAppendArray = exports.addAppend = exports.addEl = undefined;

var _inputTypes = __webpack_require__(4);

var _inputTypes2 = _interopRequireDefault(_inputTypes);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var addEl = function addEl(el, identifier, name, innerHTML) {
  if (identifier !== 'id' && identifier !== 'class') {
    throw new Error('Identifier must be equal to either "id" or "class".');
  }
  var elToAdd = document.createElement(el);
  if (identifier === 'id') {
    elToAdd.id = name;
  } else if (identifier === 'class') {
    elToAdd.classList.add(name);
  }
  elToAdd.innerHTML = innerHTML !== undefined ? innerHTML : '';
  return elToAdd;
};

var addAppend = function addAppend(appendTo, _ref) {
  var el = _ref.el,
      identifier = _ref.identifier,
      name = _ref.name,
      innerHTML = _ref.innerHTML;

  var elToAdd = addEl(el, identifier, name, innerHTML);
  appendTo.appendChild(elToAdd);
};

var addAppendArray = function addAppendArray(appendTo, elArray) {
  if (!Array.isArray(elArray)) {
    throw new Error('addAppendArray() is intended to process arrays only. If you are only intending to add a single element, use addAppend() instead.');
  }
  elArray.forEach(function (el) {
    addAppend(appendTo, el);
  });
};

var appendFormEl = function appendFormEl(appendTo, _ref2) {
  var type = _ref2.type,
      value = _ref2.value,
      label = _ref2.label,
      id = _ref2.id,
      name = _ref2.name,
      required = _ref2.required;

  var inputEl = void 0;
  var labelEl = document.createElement('label');
  labelEl.setAttribute('for', 'form-' + id);
  labelEl.setAttribute('id', 'form-' + id + '-label');
  labelEl.innerHTML = label;

  if (_inputTypes2.default.includes(type)) {
    inputEl = document.createElement('input');
    inputEl.type = type;
    inputEl.id = 'form-' + id;
    if (name) {
      inputEl.setAttribute('name', name);
    }
    if (required) {
      inputEl.required = true;
    }
    inputEl.value = value;
  } else if (type === 'select') {
    inputEl = document.createElement('select');
    inputEl.id = 'form-' + id;
    if (required) {
      inputEl.required = true;
    }
    for (var i = 0; i < value.length; i += 1) {
      var option = document.createElement('option');
      option.value = value[i].value;
      option.text = value[i].text;
      inputEl.appendChild(option);
    }
  }
  // } else if (type === 'radio') {
  //   for (let i = 0; i < value.length; i += 1) {
  //     console.log(value[i])
  //     inputEl = document.createElement('input')
  //     inputEl.type = type
  //     inputEl.id = `form-${name}-${value[i].value}`
  //     inputEl.setAttribute('name', name)
  //     inputEl.value = value[i].value
  //   }
  // }
  if (type !== 'hidden' || type !== 'submit') {
    // add label if input is not hidden or submit
    appendTo.appendChild(labelEl);
  }
  appendTo.appendChild(inputEl);

  return document.getElementById('form-' + name);
};

var addAppendFormArray = function addAppendFormArray(appendTo, elArray) {
  if (!Array.isArray(elArray)) {
    throw new Error('addAppendArray() is intended to process arrays only. If you are only intending to add a single element, use addAppend() instead.');
  }
  elArray.forEach(function (el) {
    appendFormEl(appendTo, el);
  });
};

exports.addEl = addEl;
exports.addAppend = addAppend;
exports.addAppendArray = addAppendArray;
exports.appendFormEl = appendFormEl;
exports.addAppendFormArray = addAppendFormArray;

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
var chapters = [{ text: '', value: '' }, {
  text: 'Alabama',
  value: '/Alabama',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Alabama.png'
}, {
  text: 'Alaska',
  value: '/Alaska',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Alaska.png'
}, {
  text: 'Arizona',
  value: '/Arizona',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Arizona.png'
}, {
  text: 'Arkansas',
  value: '/Arkansas',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Arkansas.png'
}, {
  text: 'Capital Region New York',
  value: '/CapitalRegionNY',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/CapitalRegionNY.png'
}, {
  text: 'Central Florida',
  value: '/CentralFlorida',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/CentralFlorida.png'
}, {
  text: 'Central New York',
  value: '/CentralNY',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/CentralNY.png'
}, {
//   text: 'Central Pennsylvania',
//   value: '/CentralPA',
//   logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/CentralPA.png'
// }, {
  text: 'Central Texas',
  value: '/CentralTexas',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/CentralTexas.png'
}, {
  text: 'Central Valley California',
  value: '/CentralValley',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/CentralValley.png'
}, {
  text: 'Colorado',
  value: '/Colorado',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Colorado.png'
}, {
  text: 'Connecticut',
  value: '/Connecticut',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/06/Connecticut.png'
}, {
  text: 'Delaware',
  value: '/Delaware',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Delaware.png'
}, {
  text: 'Eastern Missouri',
  value: '/EasternMissouri',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/EasternMissouri.png'
}, {
  text: 'Eastern Pennsylvania',
  value: '/EasternPA',
  logo: 'http://afsp.imgix.net/wp-content/uploads/2019/05/13544_AFSP_ChapterLogoLockup_Eastern_Pennsylvania.png'
}, {
  text: 'Florida Panhandle',
  value: '/Panhandle',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Panhandle.png'
}, {
  text: 'Georgia',
  value: '/Georgia',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Georgia.png'
}, {
  text: 'Greater Boston',
  value: '/Boston',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Boston.png'
}, {
  text: 'Greater Kansas',
  value: '/GreaterKansas',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/GreaterKansas.png'
}, {
//   text: 'Greater Lehigh Valley Pennsylvania',
//   value: '/GreaterLehighValley',
//   logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/GreaterLehighValley.png'
// }, {
  text: 'Greater Los Angeles',
  value: '/LA',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/LA.png'
}, {
  text: 'Greater Mid-Missouri',
  value: '/MidMissouri',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/MidMissouri.png'
}, {
  text: 'Greater Minnesota',
  value: '/GreaterMN',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/GreaterMN.png'
}, {
//   text: 'Greater Northeast Pennsylvania',
//   value: '/GreaterNEPA',
//   logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/GreaterNEPA.png'
// }, {
  text: 'Greater Philadelphia',
  value: '/Philadelphia',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Philadelphia.png'
}, {
  text: 'Greater Sacramento',
  value: '/Sacramento',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Sacramento.png'
}, {
  text: 'Greater San Francisco',
  value: '/SFBayArea',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/SFBayArea.png'
}, {
  text: 'Hawaii',
  value: '/Hawaii',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Hawaii.png'
}, {
  text: 'Hudson Valley/Westchester',
  value: '/HVWestchester',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/HVWestchester.png'
}, {
  text: 'Idaho',
  value: '/Idaho',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Idaho.png'
}, {
  text: 'Illinois',
  value: '/Illinois',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Illinois.png'
}, {
  text: 'Indiana',
  value: '/Indiana',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Indiana.png'
}, {
  text: 'Inland Empire and Desert Cities',
  value: '/InlandEmpire',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/InlandEmpire.png'
}, {
  text: 'Iowa',
  value: '/Iowa',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Iowa.png'
}, {
  text: 'Kentucky',
  value: '/Kentucky',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Kentucky.png'
}, {
  text: 'Louisiana',
  value: '/Louisiana',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Louisiana.png'
}, {
  text: 'Maine',
  value: '/Maine',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Maine.png'
}, {
  text: 'Maryland',
  value: '/Maryland',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Maryland.png'
}, {
  text: 'Michigan',
  value: '/Michigan',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Michigan.png'
}, {
//   text: 'Middle Tennessee',
//   value: '/MiddleTN',
//   logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/MiddleTN.png'
// }, {
  text: 'Mississippi',
  value: '/Mississippi',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Mississippi.png'
}, {
  text: 'Montana',
  value: '/Montana',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Montana.png'
}, {
  text: 'National Capital Area',
  value: '/NCAC',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/NCAC.png'
}, {
  text: 'Nebraska',
  value: '/Nebraska',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Nebraska.png'
}, {
  text: 'Nevada',
  value: '/Nevada',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Nevada.png'
}, {
  text: 'New Hampshire',
  value: '/NewHampshire',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/NewHampshire.png'
}, {
  text: 'New Jersey',
  value: '/NewJersey',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/06/NewJersey.png'
}, {
  text: 'New Mexico',
  value: '/NewMexico',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/NewMexico.png'
}, {
  text: 'New York City',
  value: '/NYC',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/NYC.png'
}, {
  text: 'New York Long Island',
  value: '/LongIsland',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/LongIsland.png'
}, {
  text: 'North Carolina',
  value: '/NorthCarolina',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/NorthCarolina.png'
}, {
  text: 'North Dakota',
  value: '/NorthDakota',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/NorthDakota.png'
}, {
  text: 'North Florida',
  value: '/NorthFlorida',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/NorthFlorida.png'
}, {
  text: 'North Texas',
  value: '/NorthTexas',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/NorthTexas.png'
}, {
  text: 'Ohio',
  value: '/Ohio',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Ohio.png'
}, {
  text: 'Oklahoma',
  value: '/Oklahoma',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Oklahoma.png'
}, {
  text: 'Orange County',
  value: '/OrangeCounty',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/OrangeCounty.png'
}, {
  text: 'Oregon',
  value: '/Oregon',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Oregon.png'
}, {
  text: 'Rhode Island',
  value: '/RhodeIsland',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/RhodeIsland.png'
}, {
  text: 'San Diego',
  value: '/SanDiego',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/SanDiego.png'
}, {
  text: 'South Carolina',
  value: '/SouthCarolina',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/SouthCarolina.png'
}, {
  text: 'South Central New York',
  value: '/SouthCentralNY',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/SouthCentralNY.png'
}, {
//   text: 'South Central Pennsylvania',
//   value: '/SouthCentralPA',
//   logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/SouthCentralPA.png'
// }, {
  text: 'South Dakota',
  value: '/SouthDakota',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/SouthDakota.png'
}, {
  text: 'South Texas',
  value: '/SouthTexas',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/SouthTexas.png'
}, {
  text: 'Southeast Florida',
  value: '/SoutheastFlorida',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/SoutheastFlorida.png'
}, {
  text: 'Southeast Minnesota',
  value: '/SoutheastMN',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/SoutheastMN.png'
}, {
  text: 'Southeast Texas',
  value: '/SoutheastTexas',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/SoutheastTexas.png'
}, {
  text: 'Southwest Florida',
  value: '/SouthwestFlorida',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/SouthwestFlorida.png'
}, {
  text: 'Tampa Bay',
  value: '/Tampa',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Tampa.png'
}, {
  text: 'Tennessee',
  value: '/Tennessee',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/06/Tennessee.png'
}, {
  text: 'Utah',
  value: '/Utah',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Utah.png'
}, {
  text: 'Vermont',
  value: '/Vermont',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Vermont.png'
}, {
  text: 'Virginia',
  value: '/Virginia',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Virginia.png'
}, {
  text: 'Washington',
  value: '/Washington',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Washington.png'
}, {
  text: 'West Virginia',
  value: '/WestVirginia',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/WestVirginia.png'
}, {
  text: 'Western Massachusetts',
  value: '/WesternMA',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/WesternMA.png'
}, {
  text: 'Western New York',
  value: '/WesternNY',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/WesternNY.png'
}, {
  text: 'Western Pennsylvania',
  value: '/WesternPA',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/WesternPA.png'
}, {
  text: 'Wisconsin',
  value: '/Wisconsin',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Wisconsin.png'
}, {
  text: 'Wyoming',
  value: '/Wyoming',
  logo: 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/Wyoming.png'
}];

exports.default = chapters;

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(3);

__webpack_require__(6);

__webpack_require__(7);

var _chapters = __webpack_require__(1);

var _chapters2 = _interopRequireDefault(_chapters);

var _setBind = __webpack_require__(8);

__webpack_require__(9);

__webpack_require__(10);

__webpack_require__(11);

__webpack_require__(12);

__webpack_require__(13);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var bindings = [{
  form: 'form-name',
  display: 'name'
}, {
  form: 'form-role',
  display: 'role'
}, {
  form: 'form-chapter',
  display: 'chapter'
}];

var combine = [{
  form: 'form-office',
  pre: 'o: '
}, {
  form: 'form-cell',
  pre: 'c: '
}, {
  form: 'form-email',
  pre: 'e: '
}];

(0, _setBind.setEl)(bindings);
(0, _setBind.bindEl)(bindings);

(0, _setBind.setCombine)('contact', combine);
(0, _setBind.bindCombine)('contact', combine);

var member = document.getElementsByName('member');
var chapter = document.getElementById('form-chapter');
var chapterLabel = document.getElementById('form-chapter-label');
var chapterUrl = document.getElementById('chapter');
var logo = document.getElementById('logo');
var form = document.getElementById('design-form');
chapter.style.display = 'none';
chapterLabel.style.display = 'none';
chapterUrl.style.display = 'none';

for (var i = 0; i < member.length; i += 1) {
  member[i].addEventListener('change', function (e) {
    if (e.target.value === 'volunteer' && e.target.checked === true) {
      chapter.style.display = 'inline-block';
      chapterLabel.style.display = 'inline-block';
      chapterUrl.style.display = 'inline';
    } else {
      chapter.style.display = 'none';
      chapterLabel.style.display = 'none';
      chapterUrl.style.display = 'none';
      logo.src = 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/national.png';
    }
  });
}

chapter.addEventListener('change', function (e) {
  var chapterIndex = _chapters2.default.map(function (chap) {
    return chap.value;
  }).indexOf(e.target.value);
  logo.src = _chapters2.default[chapterIndex].logo;
});

form.addEventListener('submit', function (e) {
  // e.preventDefault()
  var hidden = document.getElementById('form-hidden');
  var printing = document.getElementById('form-printing').value;
  var card = document.getElementById('design-wrapper').innerHTML;
  var staff = document.getElementById('form-member-staff');
  var stylesheet = '';
  var pageAtts = '';
  var top = '';
  var left = 0.75;
  var padding = 0;
  if (printing) {
    if (printing === 'atHome') {
      stylesheet = 'atHome';
      pageAtts = 'size: 3.5in 2in;\n        margin: 0;';
      padding = 0;
    } else if (printing === 'fedex' || printing === 'ups' || printing === 'vistaprint') {
      stylesheet = 'fedex';
      pageAtts = 'size: 3.62in 2.12in;\n        margin: 0;';
      padding = 0.06;
    } else if (printing === 'localPrinter' || printing === 'staples') {
      stylesheet = 'localPrinter';
      pageAtts = 'size: 3.75in 2.25in;\n        margin: 0;';
      padding = 0.125;
    }
    if (staff.checked === true) {
      top = 0.6 + padding;
    } else {
      top = 0.4 + padding;
    }
    left += padding;
    hidden.value = '<html>\n  <head>\n  <link rel="stylesheet" href="https://chapterland.org/wp-content/themes/cl2/dist/styles/templates/business-card/corsfonts.css" type="text/css" />\n  <link rel="stylesheet" href="https://chapterland.org/wp-content/themes/cl2/dist/styles/templates/business-card/' + stylesheet + '.css" type="text/css" />\n    <style>\n      @page{\n        ' + pageAtts + '\n      }\n      @media print {\n        #logo {\n          position: absolute;\n          width: 2in;\n          left: ' + left + 'in;\n          top: ' + top + 'in;\n        }\n      }\n    </style>\n  </head>\n  <body>\n    ' + card + '\n  </body>\n  </html>';
    console.log(hidden.value);
  }
});

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _addAppend = __webpack_require__(0);

var _chapters = __webpack_require__(1);

var _chapters2 = _interopRequireDefault(_chapters);

var _printing = __webpack_require__(5);

var _printing2 = _interopRequireDefault(_printing);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var designForm = (0, _addAppend.addAppend)(document.getElementById('app'), {
  el: 'form',
  identifier: 'id',
  name: 'design-form'
});

var form = document.getElementById('design-form');
form.action = 'https://chapterland.org/wp-content/themes/cl2/pdf-templates/pdf-business-card.php';
form.method = 'post';

(0, _addAppend.addAppendFormArray)(form, [{
  type: 'text',
  value: 'Jamie Doe',
  label: 'Name',
  id: 'name',
  required: true
}, {
  type: 'text',
  value: 'Board Member',
  label: 'AFSP Role',
  id: 'role',
  required: true
}, {
  type: 'radio',
  value: 'staff',
  label: 'Staff',
  id: 'member-staff',
  name: 'member',
  required: true
}, {
  type: 'radio',
  value: 'volunteer',
  label: 'Volunteer',
  id: 'member-volunteer',
  name: 'member',
  required: true
}, {
  type: 'select',
  value: _chapters2.default,
  label: 'Chapter',
  id: 'chapter'
}, {
  type: 'text',
  value: '555.555.5555',
  label: 'Office Phone',
  id: 'office'
}, {
  type: 'text',
  value: '555.555.5555',
  label: 'Cell Phone',
  id: 'cell'
}, {
  type: 'email',
  value: 'jdoe@example.com',
  label: 'Email',
  id: 'email'
}, {
  type: 'select',
  value: _printing2.default,
  label: 'How will you be printing?',
  id: 'printing',
  required: true
}, {
  type: 'hidden',
  value: '',
  label: '',
  id: 'hidden',
  name: 'hidden'
}, {
  type: 'submit',
  value: 'Create your business card',
  label: '',
  id: 'submit'
}]);

exports.default = designForm;

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
var inputTypes = ['button', 'checkbox', 'color', 'date', 'datetime-local', 'email', 'file', 'hidden', 'image', 'month', 'number', 'password', 'radio', 'range', 'reset', 'search', 'submit', 'tel', 'text', 'time', 'url', 'week'];

exports.default = inputTypes;

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
var printing = [{ text: '', value: '' }, { text: 'At Home', value: 'atHome' }, { text: 'FedEx', value: 'fedex' }, { text: 'Local Printer', value: 'localPrinter' }, { text: 'Staples', value: 'staples' }, { text: 'UPS', value: 'ups' }, { text: 'Vistaprint', value: 'vistaprint' }];

exports.default = printing;

/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _addAppend = __webpack_require__(0);

var design = (0, _addAppend.addAppend)(document.getElementById('app'), {
  el: 'div',
  identifier: 'id',
  name: 'design-wrapper'
});
// card front
(0, _addAppend.addAppend)(document.getElementById('design-wrapper'), {
  el: 'div',
  identifier: 'id',
  name: 'design'
});
(0, _addAppend.addAppendArray)(document.getElementById('design'), [{
  el: 'div',
  identifier: 'id',
  name: 'bar'
}, {
  el: 'h2',
  identifier: 'id',
  name: 'name'
}, {
  el: 'h4',
  identifier: 'id',
  name: 'role'
}, {
  el: 'div',
  identifier: 'id',
  name: 'contact'
}, {
  el: 'p',
  identifier: 'id',
  name: 'chapter-wrapper'
}, {
  el: 'img',
  identifier: 'id',
  name: 'lifesaver'
}]);
(0, _addAppend.addAppendArray)(document.getElementById('chapter-wrapper'), [{
  el: 'span',
  identifier: 'id',
  name: 'url-root'
}, {
  el: 'span',
  identifier: 'id',
  name: 'chapter'
}]);
// card back
(0, _addAppend.addAppend)(document.getElementById('design-wrapper'), {
  el: 'div',
  identifier: 'id',
  name: 'back'
});
(0, _addAppend.addAppend)(document.getElementById('back'), {
  el: 'img',
  identifier: 'id',
  name: 'logo'
});

document.getElementById('url-root').innerHTML = 'afsp.org';
document.getElementById('lifesaver').src = 'https://chapterland.imgix.net/wp-content/uploads/sites/13/2018/02/LifesaverColorCMYK.png';

exports.default = design;

/***/ }),
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _addAppend = __webpack_require__(0);

// overlay
var small = (0, _addAppend.addAppend)(document.body, {
  el: 'div',
  identifier: 'id',
  name: 'small',
  innerHTML: '<p>The business card requires some screen real estate. Please try again on a wider screen.</p>'
});

exports.default = small;

/***/ }),
/* 8 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.bindCombine = exports.setCombine = exports.bindEl = exports.setEl = undefined;

var _addAppend = __webpack_require__(0);

var setEl = function setEl(elements) {
  for (var i = 0; i < elements.length; i += 1) {
    var el = document.getElementById(elements[i].form);
    document.getElementById(elements[i].display).innerHTML = el.value;
  }
};

var bindEl = function bindEl(elements) {
  var _loop = function _loop(i) {
    var el = document.getElementById(elements[i].form);
    if (el.tagName === 'INPUT') {
      el.onkeyup = function () {
        document.getElementById(elements[i].display).innerHTML = el.value;
      };
    } else if (el.tagName === 'SELECT') {
      el.onchange = function () {
        document.getElementById(elements[i].display).innerHTML = el.value;
      };
    }
  };

  for (var i = 0; i < elements.length; i += 1) {
    _loop(i);
  }
};

var setCombine = function setCombine(bindTo, elements) {
  for (var i = 0; i < elements.length; i += 1) {
    var _el = document.getElementById(elements[i].form);
    var boundEl = document.getElementById(bindTo);
    if (_el.value !== '') {
      (0, _addAppend.addAppend)(boundEl, {
        el: 'p',
        identifier: 'id',
        name: 'combine-' + elements[i].form,
        innerHTML: '<span class="combine-pre">' + elements[i].pre + '</span>' + _el.value
      });
    }
  }
};

var bindCombine = function bindCombine(bindTo, elements) {
  var _loop2 = function _loop2(i) {
    var el = document.getElementById(elements[i].form);
    var boundEl = document.getElementById(bindTo);
    if (el.tagName === 'INPUT') {
      el.onkeyup = function () {
        boundEl.children[i].innerHTML = el.value ? '<span class="combine-pre">' + elements[i].pre + '</span>' + el.value : '';
      };
    }
  };

  for (var i = 0; i < elements.length; i += 1) {
    _loop2(i);
  }
};

exports.setEl = setEl;
exports.bindEl = bindEl;
exports.setCombine = setCombine;
exports.bindCombine = bindCombine;

/***/ }),
/* 9 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 10 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 11 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 12 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 13 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);
//# sourceMappingURL=business-card.js.map
