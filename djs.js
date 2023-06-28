// Get the dropdown elements
var countryDropdown = document.getElementById("countryDropdown");
var stateDropdown = document.getElementById("stateDropdown");

// Load the country-state data from the JSON
fetch('gistfile1.json')
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    var countries = data.countries;

    // Populate the country dropdown with countries
    countries.forEach(function(countryObj) {
      var country = countryObj.country;
      var option = document.createElement("option");
      option.text = country;
      countryDropdown.add(option);
    });

    // Store the country-state data for future use
    countryDropdown.dataset.states = JSON.stringify(data.countries);
  })
  .catch(function(error) {
    console.log(error);
  });

// Function to update the state dropdown based on the selected country
function updateStates() {
  var selectedCountry = countryDropdown.value;
  var states = [];

  // Retrieve the country-state data from the stored dataset
  var countryStateData = JSON.parse(countryDropdown.dataset.states);

  // Find the selected country object
  var selectedCountryObj = countryStateData.find(function(countryObj) {
    return countryObj.country === selectedCountry;
  });

  if (selectedCountryObj) {
    states = selectedCountryObj.states;
  }

  // Clear existing options in the state dropdown
  stateDropdown.innerHTML = "";
  var nullOption = document.createElement("option");
  nullOption.text = "Select state"; // Text for the null option
  nullOption.value = ""; // Value for the null option (can be empty or any desired value)
  stateDropdown.add(nullOption);
  states.forEach(function(state) {
    var option = document.createElement("option");
    option.text = state;
    stateDropdown.add(option);
  });
}
var countryDropdown1 = document.getElementById("countryDropdown1");
var stateDropdown1 = document.getElementById("stateDropdown1");

// Load the country-state data from the JSON
fetch('gistfile1.json')
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    var countries = data.countries;

    // Populate the country dropdown with countries
    countries.forEach(function(countryObj) {
      var country = countryObj.country;
      var option = document.createElement("option");
      option.text = country;
      option.value = country;
      countryDropdown1.add(option);
    });

    // Store the country-state data for future use
    countryDropdown1.dataset.states = JSON.stringify(data.countries);
  })
  .catch(function(error) {
    console.log(error);
  });

// Function to update the state dropdown based on the selected country
function updateState() {
  var selectedCountry = countryDropdown1.value;
  var states = [];

  // Retrieve the country-state data from the stored dataset
  var countryStateData = JSON.parse(countryDropdown1.dataset.states);

  // Find the selected country object
  var selectedCountryObj = countryStateData.find(function(countryObj) {
    return countryObj.country === selectedCountry;
  });

  if (selectedCountryObj) {
    states = selectedCountryObj.states;
  }

  // Clear existing options in the state dropdown
  stateDropdown1.innerHTML = "";
  var nullOption = document.createElement("option");
  nullOption.text = "Select state"; // Text for the null option
  nullOption.value = ""; // Value for the null option (can be empty or any desired value)
  stateDropdown1.add(nullOption);
  // Populate the state dropdown with states
  states.forEach(function(state) {
    var option = document.createElement("option");
    option.text = state;
    option.value = state;
    stateDropdown1.add(option);
  });
}
var countryDropdown2 = document.getElementById("countryDropdown2");
var stateDropdown2 = document.getElementById("stateDropdown2");

// Load the country-state data from the JSON
fetch('gistfile1.json')
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    var countries = data.countries;

    // Populate the country dropdown with countries
    countries.forEach(function(countryObj) {
      var country = countryObj.country;
      var option = document.createElement("option");
      option.text = country;
      option.value = country;
      countryDropdown2.add(option);
    });

    // Store the country-state data for future use
    countryDropdown2.dataset.states = JSON.stringify(data.countries);
  })
  .catch(function(error) {
    console.log(error);
  });

// Function to update the state dropdown based on the selected country
function updateState2() {
  var selectedCountry = countryDropdown2.value;
  var states = [];

  // Retrieve the country-state data from the stored dataset
  var countryStateData = JSON.parse(countryDropdown1.dataset.states);

  // Find the selected country object
  var selectedCountryObj = countryStateData.find(function(countryObj) {
    return countryObj.country === selectedCountry;
  });

  if (selectedCountryObj) {
    states = selectedCountryObj.states;
  }
  stateDropdown2.innerHTML = "";
  var nullOption = document.createElement("option");
  nullOption.text = "Select state"; // Text for the null option
  nullOption.value = ""; // Value for the null option (can be empty or any desired value)
  stateDropdown2.add(nullOption);
  states.forEach(function(state) {
    var option = document.createElement("option");
    option.text = state;
    option.value = state;
    stateDropdown2.add(option);
  });
}
  function toggle() {
    var experienceDropdown = document.getElementById("experience");
    var inputFieldsDiv = document.getElementById("selector");
  
    if (experienceDropdown.value === "Experienced") {
      inputFieldsDiv.style.display = "block";
    } else {
      inputFieldsDiv.style.display = "none";
    }
  }
  // SKILL
  var skillCounter = 2; // Counter for naming the input fields

  document.getElementById("addButton3").addEventListener("click", function() {
    event.preventDefault();
    var container = document.getElementById("skillcontainer");
    var newInputFieldWrapper = document.createElement("div");
    newInputFieldWrapper.classList.add("skillwrapper");
  
    var newInputField = document.createElement("input");
    newInputField.setAttribute("type", "text");
    newInputField.setAttribute("name", "skill" + skillCounter); // Set the name using the counter
    newInputField.setAttribute("placeholder","Enter Skill");
    newInputField.classList.add("inputField");
  
    var cancelButton = document.createElement("button");
    cancelButton.textContent = "Cancel";
    cancelButton.classList.add("cancelButton");
  
    cancelButton.addEventListener("click", function() {
      event.preventDefault();
      newInputFieldWrapper.remove();
      skillCounter--;
      updateInputNames12(); // Update the names after removing a field
    });
    newInputFieldWrapper.appendChild(newInputField);
    newInputFieldWrapper.appendChild(cancelButton);
    container.appendChild(newInputFieldWrapper);
    skillCounter++; // Increment the counter
  });
  
  function updateInputNames12() {
    var inputFields = document.querySelectorAll("#skillcontainer .skillwrapper input");
    console.log(inputFields.length);
    for (var i = 1; i < inputFields.length; i++) {
      inputFields[i].setAttribute("name", "skill" + (i + 1)); // Update the name based on the index
    }
  }
  //----------------------------------------------------------------------------------------------------------------------------
  var skCounter = 2;
document.getElementById("addButton4").addEventListener("click", function() {
  event.preventDefault();

  var container = document.getElementById("ccontainer");
  var newInputFieldWrapper = document.createElement("div");
  newInputFieldWrapper.classList.add("cwrapper");

  var newInputField = document.createElement("input");
  newInputField.setAttribute("type", "text");
  newInputField.setAttribute("placeholder","Enter Certification Name");
  newInputField.classList.add("inputField");
  newInputField.setAttribute("name", "c" + skCounter);
  var cancelButton = document.createElement("button");
  cancelButton.textContent = "Cancel";
  cancelButton.classList.add("cancelButton");

  cancelButton.addEventListener("click", function() {
    event.preventDefault();
    newInputFieldWrapper.remove();
    skCounter--;
    updateInput5();

  });
  newInputFieldWrapper.appendChild(newInputField);
  newInputFieldWrapper.appendChild(cancelButton);
  container.appendChild(newInputFieldWrapper);
  updateInput5();
});
function updateInput5() {
  var x = 1;
  var inputWrappers = document.querySelectorAll('#ccontainer .cwrapper');
  for (var i = 0; i < inputWrappers.length; i++) {
    var inputFields = inputWrappers[i].querySelectorAll('input');
    inputFields[0].setAttribute("name", "c" + x);
    inputFields[1].setAttribute("name", "clink" + x);
    x++;
  }
}