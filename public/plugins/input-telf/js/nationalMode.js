if (window.location.pathname=='/contact') {


var input = document.querySelector("#phone"),
  output = document.querySelector("#output");
  errorMsg = document.querySelector("#error-msg"),
  validMsg = document.querySelector("#valid-msg");

var iti = window.intlTelInput(input, {
  nationalMode: true,
  utilsScript: "plugins/input-telf/js/utils.js" // just for formatting/placeholders etc
});

var handleChange = function() {
  var text = (iti.isValidNumber()) ? iti.getNumber(intlTelInputUtils.numberFormat.E164) : "";

  document.getElementById("output").value = text;
};


// here, the index maps to the error code returned from getValidationError - see readme
var errorMap = ["Invalid number", "Invalid country code", "Compruebe el número", "Too long", "Invalid number"];

var reset = function() {
  input.classList.remove("error");
  errorMsg.innerHTML = "";
  errorMsg.classList.add("d-none");
};

// on blur: validate
input.addEventListener('blur', function() {
  reset();
  if (input.value.trim()) {
    if (iti.isValidNumber()) {
        //correct
    } else {
      input.classList.add("error");
      var errorCode = iti.getValidationError();
      errorMsg.innerHTML = errorMap[errorCode];
      errorMsg.classList.remove("d-none");
    }
  }
});


// listen to "keyup", but also "change" to update when the user selects a country
input.addEventListener('change', handleChange);
input.addEventListener('keyup', handleChange);
}
