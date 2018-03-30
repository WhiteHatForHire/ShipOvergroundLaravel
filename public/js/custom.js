console.log('working');
M.AutoInit();
$(document).ready(function(){
  $('textarea#body, input#title').characterCounter();
});

setTimeout(function() {
  $('.alert_card').fadeOut('slow');
  }, 3000
);
setTimeout(function() {
  $('#fade_out_section').fadeOut('slow');
  }, 3000
);

// $('.grid').masonry({
//   // options
//   itemSelector: '.grid-item',
//   columnWidth: 200
// });