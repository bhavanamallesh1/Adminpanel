var counter = 2;
document.getElementById("addButton1").addEventListener("click", function() {
  event.preventDefault();

  if (counter <= 3){
  var container = document.getElementById("inputContainer");
  var newInputFieldWrapper = document.createElement("div");
  newInputFieldWrapper.classList.add("inputFieldWrapper");

  var newInputField = document.createElement("input");
  newInputField.setAttribute("type", "number");
  newInputField.setAttribute("min",1000000000);
  newInputField.setAttribute("max",9999999999);
  newInputField.setAttribute("placeholder","Enter contact number ");
  newInputField.classList.add("inputField");

  var cancelButton = document.createElement("button");
  cancelButton.textContent = "Cancel";
  cancelButton.classList.add("cancelButton");

  cancelButton.addEventListener("click", function() {
    event.preventDefault();
    newInputFieldWrapper.remove();
    counter--;
    updateInputNames();
  });
  counter++;
 
  newInputFieldWrapper.appendChild(newInputField);
  newInputFieldWrapper.appendChild(cancelButton);
  container.appendChild(newInputFieldWrapper);
  
  } else {
    alert("Maximum fields for contact number reached");
  }
});
function updateInputNames() {
  var x = 1;
  var inputFields = inputContainer.querySelectorAll('.inputFieldWrapper input');
  for (var i = 0; i < inputFields.length; i++) {
    inputFields[i].setAttribute("name", "num" + x);
    x++;
  }
}
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

  // Populate the state dropdown with states
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

  // Clear existing options in the state dropdown
  stateDropdown2.innerHTML = "";

  // Populate the state dropdown with states
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
  function validateDateRange() {
    var fromDate = new Date(document.getElementById("fromDate").value);
    var toDate = new Date(document.getElementById("toDate").value);
  
    if (fromDate >= toDate) {
      document.getElementById("dateError").innerText = "Please select a valid date range. The 'From' date should be less than the 'To' date.";
      event.preventDefault();
    } else {
      document.getElementById("dateError").innerText = "";
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
  var newInputField2 = document.createElement("input");
  newInputField2.setAttribute("type", "url");
  newInputField2.setAttribute("placeholder","Paste Certification Link");
  newInputField2.classList.add("inputField");
  newInputField2.setAttribute("name", "clink" + skCounter);
  newInputField2.setAttribute("style"," margin-left: 4px");
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
  newInputFieldWrapper.appendChild(newInputField2);
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
// URL
var d = 2;
document.getElementById("addButton2").addEventListener("click", function () {
  event.preventDefault();

    var container = document.getElementById("pr");
    var newInputFieldWrapper = document.createElement("div");
    newInputFieldWrapper.classList.add("prw");

    var newInputField = document.createElement("input");
    newInputField.setAttribute("type", "url");
    newInputField.setAttribute("name", "url"+d);
    newInputField.setAttribute("placeholder", "Place Project URL");
    newInputField.classList.add("inputField");

    newInputField.setAttribute("style", "width: 350px;");
    var cancelButton = document.createElement("button");
    cancelButton.textContent = "Cancel";
    cancelButton.classList.add("cancelButton");

    cancelButton.addEventListener("click", function () {
      event.preventDefault();
      newInputFieldWrapper.remove();
      d--;
      kaka();
    });
    
    newInputFieldWrapper.appendChild(newInputField);
    newInputFieldWrapper.appendChild(cancelButton);
    container.appendChild(newInputFieldWrapper);
    d++;
});
function kaka(){
  var inputFields = pr.querySelectorAll(".prw input");
  console.log(inputFields.length);
  for (var i = 1; i < inputFields.length; i++) {
    inputFields[i].setAttribute("name", "url" + (i + 1));
  }
}