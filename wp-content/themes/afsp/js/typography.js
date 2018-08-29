jQuery("h2, h3, .features__body p").each(function() {
  if(jQuery(this).hasClass('email__cta'))
    return;
  var wordArray = jQuery(this).text().split(" ");
  if (wordArray.length > 1 && jQuery(this).children().length == 0) {
    wordArray[wordArray.length-2] += "&nbsp;" + wordArray[wordArray.length-1];
    wordArray.pop();
    jQuery(this).html(wordArray.join(" "));
  }
});