(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('input.autocomplete').autocomplete({
	data: {
	  "London Gatwick Airport": null,
	  "Cardiff international Airport": null,
	  "London Heathrow Airport": null
	},
	limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
	onAutocomplete: function(val) {
	  // Callback function when value is autcompleted.
	},
	minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
	});
  }); // end of document ready
})(jQuery); // end of jQuery name space

document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
      setTimeout(function(){
          document.getElementById('interactive');
         document.getElementById('load').style.visibility="hidden";
      },1000);
  }
}