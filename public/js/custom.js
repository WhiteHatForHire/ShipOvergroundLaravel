M.AutoInit();
$(document).ready(function(){
  var autoInput = document.querySelector('#autocomplete-input');
  var autoInputAction = document.querySelector('.autoInputAction');
  autoInput.addEventListener('focus', function() {
    setTimeout(function() {
      for (var i = 0; i < autoInputAction.children.length; i++) {
        autoInputAction.children[i].classList.remove("hide");
      }
    },0);
  });
  console.log(autoInput);
  var foundProfessor
  // DROPDOWN LOGIC
  $('.dropdown-button').dropdown({
    inDuration: 300,
    outDuration: 225,
    hover: true, // Activate on hover
    belowOrigin: true, // Displays dropdown below the button
    alignment: 'right' // Displays dropdown with edge aligned to the left of button
  }
);
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
      var compareValue = profData.filter(p => (p.first_name == currentProfessor[1]) && (p.last_name == currentProfessor[0]))[0];
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


var stripe = Stripe('pk_test_fbrB3a4GjX6addNrsqS0tOz1');
var elements = stripe.elements();

var card = elements.create('card', {
  iconStyle: 'solid',
  style: {
    base: {
      iconColor: '#8898AA',
      //color: 'white',
      lineHeight: '36px',
      fontWeight: 300,
      fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
      fontSize: '19px',

      '::placeholder': {
        color: '#8898AA',
      },
    },
    invalid: {
      iconColor: '#e85746',
      color: '#e85746',
    }
  },
  classes: {
    focus: 'is-focused',
    empty: 'is-empty',
  },
});
card.mount('#card-element');

var inputs = document.querySelectorAll('input.field');
Array.prototype.forEach.call(inputs, function(input) {
  input.addEventListener('focus', function() {
    input.classList.add('is-focused');
  });
  input.addEventListener('blur', function() {
    input.classList.remove('is-focused');
  });
  input.addEventListener('keyup', function() {
    if (input.value.length === 0) {
      input.classList.add('is-empty');
    } else {
      input.classList.remove('is-empty');
    }
  });
});

function setOutcome(result) {
  var successElement = document.querySelector('.success');
  var errorElement = document.querySelector('.error');
  successElement.classList.remove('visible');
  errorElement.classList.remove('visible');

  if (result.token) {
    // Use the token to create a charge or a customer
    // https://stripe.com/docs/charges
    successElement.querySelector('.token').textContent = result.token.id;
    successElement.classList.add('visible');
  } else if (result.error) {
    errorElement.textContent = result.error.message;
    errorElement.classList.add('visible');
  }
}

card.on('change', function(event) {
  setOutcome(event);
});

document.querySelector('form').addEventListener('submit', function(e) {
  e.preventDefault();
  var form = document.querySelector('form');
  var extraDetails = {
    name: form.querySelector('input[name=cardholder-name]').value,
  };
  stripe.createToken(card, extraDetails).then(setOutcome);
});