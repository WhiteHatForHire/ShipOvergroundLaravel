console.log('working');
var foundProfessor;
M.AutoInit();
$(document).ready(function(){
  $('textarea#body, input#title').characterCounter();
  let data = {};
  $.each(profData, function(i, item) {
    data[profData[i].last_name +', ' + profData[i].first_name] = null;
  })
  // AUTOCOMPLETE
  $('#autocomplete-input').autocomplete({
    data,
    limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
    onAutocomplete: function(val) {
      var professor_search_id = document.getElementById('professor_search_id');
      var professor_search_button = document.getElementById('professor_search_button');
      var currentProfessor;
      currentProfessor = val.split(', ');
      var compareValue = profData.filter(p => p.first_name == currentProfessor[1])[0];
      // Check to see if the selected string has a match in the data array then get that id
      if (currentProfessor[1] == compareValue.first_name && currentProfessor[0] == compareValue.last_name) {
        foundProfessor = compareValue;
      } else {
        // Block non professor
      }
      professor_search_id.value = foundProfessor.id;
      professor_search_button.href = '/professors/' + foundProfessor.id;

    },
    minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
  });
        



});

setTimeout(function() {
  $('.alert_card').fadeOut('slow');
  }, 3000
);
setTimeout(function() {
  $('#fade_out_section').fadeOut('slow');
  }, 3000
);

