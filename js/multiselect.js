/*
  Dropdown with Multiple checkbox select with jQuery - May 27, 2013
  (c) 2013 @ElmahdiMahmoud
  license: http://www.opensource.org/licenses/mit-license.php
*/

/* AMENITIES */

$(".dropdown-amenities dt a").on('click', function() {
  $(".dropdown-amenities dd ul").slideToggle('fast');
});

$(".dropdown-amenities dd ul li a").on('click', function() {
  $(".dropdown-amenities dd ul").hide();
});

function getSelectedValue(id) {
  return $("#" + id).find("dt a .hida-amenities span.value").html();
}

$(document).bind('click', function(e) {
  var $clicked = $(e.target);
  if (!$clicked.parents().hasClass("dropdown-amenities")) $(".dropdown-amenities dd ul").hide();
});

$('.mutliSelect-amenities input[type="checkbox"]').on('click', function() {

  var title = $(this).closest('.mutliSelect-amenities').find('input[type="checkbox"]').val(),
    title = $(this).val() + "&nbsp;&nbsp;";

  if ($(this).is(':checked')) {
    var html = '<span title="' + title + '">' + title + '</span>';
    $('.multiSel-amenities').append(html);
    $(".hida-amenities").hide();
  } else {
    $('span[title="' + title + '"]').remove();
    var ret = $(".hida-amenities");
    $('.dropdown-amenities dt a').append(ret);

  }
});


/* STYLE */

$(".dropdown-style dt a").on('click', function() {
  $(".dropdown-style dd ul").slideToggle('fast');
});

$(".dropdown-style dd ul li a").on('click', function() {
  $(".dropdown-style dd ul").hide();
});

function getSelectedValue(id) {
  return $("#" + id).find("dt a .hida-style span.value").html();
}

$(document).bind('click', function(e) {
  var $clicked = $(e.target);
  if (!$clicked.parents().hasClass("dropdown-style")) $(".dropdown-style dd ul").hide();
});

$('.mutliSelect-style input[type="checkbox"]').on('click', function() {

  var title = $(this).closest('.mutliSelect-style').find('input[type="checkbox"]').val(),
    title = $(this).val() + "&nbsp;&nbsp;";

  if ($(this).is(':checked')) {
    var html = '<span title="' + title + '">' + title + '</span>';
    $('.multiSel-style').append(html);
    $(".hida-style").hide();
  } else {
    $('span[title="' + title + '"]').remove();
    var ret = $(".hida-style");
    $('.dropdown-style dt a').append(ret);

  }
});
