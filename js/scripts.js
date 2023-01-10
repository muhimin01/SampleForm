$(document).ready(function () {

  // This function displays an alert to let the user know that the form submitted successfully
  function popupSuccess() {
    alert("Form submitted");
  }

  // Gets the postcode from the form and returns the coresponding state from the database
  let postcodeInput = document.getElementById("in-postcode");
  if (postcodeInput) {
    postcodeInput.addEventListener("change", function changeState() {

      $.ajax({
        type: "POST",
        url: "php/getState.php",
        data: {
          postcode: document.getElementById("in-postcode").value
        },
        success: function (response) {
          console.log(response);
          document.getElementById('in-state').disabled = false;
          document.getElementById("in-state").value = response;
        },
        error: function (xhr, status, error) {
          console.log(xhr, status, error);
        }
      })
    });
  }

  // Submits the form to the database
  let form = document.getElementById("form");
  if (form) {
    form.addEventListener("submit", function (event) {
      event.preventDefault();

      let name = document.getElementById("in-name").value;
      let dob = document.getElementById("in-dob").value;
      let address = document.getElementById("in-address").value;
      let postcode = document.getElementById("in-postcode").value;
      let state = document.getElementById("in-state").value;

      // Make the AJAX call
      $.ajax({
        type: "POST",
        url: "php/insert.php",
        data: {
          name: name,
          dob: dob,
          address: address,
          postcode: postcode,
          state: state
        },
        success: function (response) {
          console.log(response);
        },
        error: function (xhr, status, error) {
          console.log(xhr, status, error);
        }
      }).then(popupSuccess);
    });
  }

});