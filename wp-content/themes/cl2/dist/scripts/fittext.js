!function(){var n=function(n,t,e){n.addEventListener?n.addEventListener(t,e,!1):n.attachEvent("on"+t,e)},t=function(n,t){for(var e in t)t.hasOwnProperty(e)&&(n[e]=t[e]);return n};window.fitText=function(e,i,o){var a=t({minFontSize:-1/0,maxFontSize:1/0},o),r=function(t){var e=i||1,o=function(){t.style.fontSize=Math.max(Math.min(t.clientWidth/(10*e),parseFloat(a.maxFontSize)),parseFloat(a.minFontSize))+"px"};o(),n(window,"resize",o),n(window,"orientationchange",o)};if(e.length)for(var f=0;f<e.length;f++)r(e[f]);else r(e);return e}}();
//# sourceMappingURL=fittext.js.map
