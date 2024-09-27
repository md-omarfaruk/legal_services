// --------------------------------Appointment-Sesign-Scripts-----------------------------

// Function to handle the active state and display block/none
function showSection(activeId, sectionId) {
    // Elements IDs
    const sections = ['service', 'dateTime', 'basicDetails', 'summary'];
    const items = ['serviceItem', 'dateItem', 'basicItem', 'summaryItem'];

    // Loop through all sections and items
    sections.forEach(function(id) {
        document.getElementById(id).style.display = id === sectionId ? 'block' : 'none';
    });

    items.forEach(function(id) {
        document.getElementById(id).classList.toggle('active', id === activeId);
    });
}

// Event listeners for each clickable item
document.getElementById('serviceItem').addEventListener('click', function() {
    showSection('serviceItem', 'service');
});

document.getElementById('dateItem').addEventListener('click', function() {
    showSection('dateItem', 'dateTime');
});

document.getElementById('basicItem').addEventListener('click', function() {
    showSection('basicItem', 'basicDetails');
});

document.getElementById('summaryItem').addEventListener('click', function() {
    showSection('summaryItem', 'summary');
});

// Initially show the service section and set it active
showSection('serviceItem', 'service');


// ------------------------------functionality------------------------

// ------------------------dateCalendarFunctionality------------------------

    // Function to set the current date in the input field
    function setCurrentDate() {
      const dateInput = document.getElementById('select-date');
      const today = new Date();
      const yyyy = today.getFullYear();
      const mm = String(today.getMonth() + 1).padStart(2, '0'); // Month (01-12)
      const dd = String(today.getDate()).padStart(2, '0'); // Day (01-31)
      const currentDate = `${yyyy}-${mm}-${dd}`;
      dateInput.value = currentDate;  // Set the input field to the current date
    }

    // Event listener to handle date input opening and closing
    document.addEventListener("DOMContentLoaded", function () {
      setCurrentDate(); // Set current date on load

      const dateInput = document.getElementById('select-date');
      dateInput.focus();  // Open the calendar when the page loads

      // Close calendar automatically after selecting a date
      dateInput.addEventListener('change', function () {
        dateInput.blur(); // Close the calendar once the user selects a date
      });
    });
    
// ------------------AllOthersMainPartsFunctionality--------------------------------
document.addEventListener('DOMContentLoaded', function () {
    const serviceItem = document.getElementById('serviceItem');
    const dateItem = document.getElementById('dateItem');
    const basicItem = document.getElementById('basicItem');
    const summaryItem = document.getElementById('summaryItem');
    const service = document.getElementById('service');
    const selectService = document.getElementById('selectService');
    const dateTime = document.getElementById('dateTime');
    const basicDetails = document.getElementById('basicDetails');
    const summary = document.getElementById('summary');
    const serviceNextBtn = document.getElementById('serviceNextBtn');
    const dateTimeNextBtn = document.getElementById("dateTimeNextBtn");
    const basicDetailsNextBtn = document.getElementById("basicDetailsNextBtn");
    const dateTimeGoBackBtn = document.getElementById('dateTimeGoBackBtn');
    const basicDetailsGoBackBtn = document.getElementById("basicDetailsGoBackBtn");
    const summaryGoBackBtn = document.getElementById("summaryGoBackBtn");
    const serviceRequiredNote = document.getElementById('serviceRequiredNote');
    const dateTimeRequiredNote = document.getElementById("dateTimeRequiredNote");
    const slots = document.querySelectorAll(".slot");

    // Initially hide the serviceRequiredNote element
    serviceRequiredNote.style.display = 'none';
    dateTime.style.display = 'none';
    if (basicDetails) basicDetails.style.display = 'none';
    if (summary) summary.style.display = 'none';

    // Event listener for the 'serviceNextBtn' button
    serviceNextBtn.addEventListener('click', function (event) {
        event.preventDefault();

        // Check if selectService has the border color #12D488
        if (selectService.style.borderColor === 'rgb(18, 212, 136)') {
            // Show dateTime and add 'active' class to dateItem, remove 'active' from serviceItem
            dateItem.classList.add('active');
            serviceItem.classList.remove('active');

            // Show dateTime and hide other sections
            dateTime.style.display = 'block';
            service.style.display = 'none';
            if (basicDetails) basicDetails.style.display = 'none';
            if (summary) summary.style.display = 'none';
        } else {
            // Show the serviceRequiredNote element
            serviceRequiredNote.style.display = 'block';

            // Hide the serviceRequiredNote element after 5 seconds
            setTimeout(function () {
                serviceRequiredNote.style.display = 'none';
            }, 5000);
        }
    });

    // Event listener for the 'selectService' element
    selectService.addEventListener('click', function () {
        // Change the border color of the selectService element
        this.style.borderColor = '#12D488';
    });

    // Event listener for the 'dateTimeGoBackBtn' button
    dateTimeGoBackBtn.addEventListener('click', function (event) {
        event.preventDefault();

        // Show service and add 'active' class to serviceItem, remove 'active' from dateItem
        service.style.display = 'block';
        dateTime.style.display = 'none';

        serviceItem.classList.add('active');
        dateItem.classList.remove('active');
    });

    // Initially hide dateTimeRequiredNote
    dateTimeRequiredNote.style.display = "none";

    // Handle the click event on the "Next" button for Date & Time section
    dateTimeNextBtn.addEventListener("click", function() {
        let isSlotSelected = false;

        // Check if any slot has the selected color (#12D488)
        slots.forEach(function(slot) {
            if (slot.style.borderColor === "rgb(18, 212, 136)") {
                isSlotSelected = true;
            }
        });

        // Show the note if no slot is selected
        if (!isSlotSelected) {
            dateTimeRequiredNote.style.display = "block";
            setTimeout(function() {
                dateTimeRequiredNote.style.display = "none";
            }, 3000); // Hide the note after 3 seconds
        }

        // If a slot is selected, proceed to Basic Details
        if (isSlotSelected) {
            basicItem.classList.add("active");
            dateItem.classList.remove("active");

            // Hide other sections and show Basic Details section
            service.style.display = "none";
            dateTime.style.display = "none";
            basicDetails.style.display = "block";
            summary.style.display = "none";
        }
    });

    // Handle slot selection to change border color
    slots.forEach(function(slot) {
        slot.addEventListener("click", function() {
            // Reset the border color for all slots
            slots.forEach(function(s) {
                s.style.borderColor = ""; // Reset color
            });

            // Change the border color of the selected slot
            this.style.borderColor = "#12D488";
             // Get the innerHTML of the h5 tag inside the clicked slot
             const timeText = slot.querySelector('h5').innerHTML;

             // Set the innerHTML of the #summaryTime element with the timeText
             document.getElementById('summaryTime').innerHTML = timeText;
        });
    });

    // Handle the Go Back button click in the Basic Details section
    basicDetailsGoBackBtn.addEventListener("click", function() {
        // Show the Date & Time section again
        dateTime.style.display = "block";
        service.style.display = "none";
        basicDetails.style.display = "none";
        summary.style.display = "none";

        // Change active class from Basic Details to Date & Time
        dateItem.classList.add("active");
        basicItem.classList.remove("active");
    });
    summaryGoBackBtn.addEventListener('click', function (event) {
        event.preventDefault();

        // Show service and add 'active' class to serviceItem, remove 'active' from dateItem
        basicDetails.style.display = 'block';
        summary.style.display = 'none';

        basicItem.classList.add('active');
        summaryItem.classList.remove('active');
    });

    function showElement(element) {
        element.style.display = 'block';
    }

    function hideElement(element) {
        element.style.display = 'none';
    }


    basicDetailsGoBackBtn.addEventListener('click', function (e) {
        e.preventDefault(); // Prevent default link behavior

        // Show dateTime and update active class
        showElement(dateTimeElement);
        hideElement(serviceElement);
        hideElement(basicDetailsElement);
        hideElement(summaryElement);

        dateItem.classList.add('active');
        basicItem.classList.remove('active');
    });
    // Add an event listener for the element with the id "selectService"
    selectService.addEventListener("click", function() {
    
    // Get the inner HTML of the element with id "appointWith"
    let appointWithText = document.getElementById("appointWith").innerHTML;
    
    // Set the inner HTML of the element with id "summaryAppointWith" to the value of "appointWith"
    document.getElementById("summaryAppointWith").innerHTML = appointWithText;
    
    // Get the inner HTML of the element with class "amount" (which represents the price)
    let priceText = document.querySelector(".amount").innerHTML;
    
    // Set the inner HTML of the element with id "subTotal" to the value of "amount"
    document.getElementById("subTotal").innerHTML = priceText;
    document.getElementById("total").innerHTML = priceText;
});
});


document.addEventListener('DOMContentLoaded', function () {
    const basicDetailsNextBtn = document.getElementById('basicDetailsNextBtn');
    const tellInput = document.getElementById('tel'); // Adjust the ID as needed
    const requiredNote = document.getElementById('required'); // Adjust the ID as needed
     requiredNote.style.display = "none"; // Adjust the ID as needed

    const basicDetailsElement = document.getElementById('basicDetails');
    const summaryElement = document.getElementById('summary');
    
    const basicItem = document.getElementById('basicItem');
    const summaryItem = document.getElementById('summaryItem');

    function showElement(element) {
        element.style.display = 'block';
    }

    function hideElement(element) {
        element.style.display = 'none';
    }

    basicDetailsNextBtn.addEventListener('click', function (e) {
        e.preventDefault(); // Prevent default form submission

        if (tellInput.value.trim() === '') {
            // Show required note if tell input is empty
            showElement(requiredNote);
        } else {
            // Hide required note if tell input is not empty
            // hideElement(requiredNote);

            // Show summary and update active class
            showElement(summaryElement);
            hideElement(basicDetailsElement);

            summaryItem.classList.add('active');
            basicItem.classList.remove('active');
        }
    });
});

// ---------------------------requiredFrontendFunctionalityForDevelopmentBackendAndLittleBitFrontend--------------

// -------------------------------------dateTimeFrontendFunctionality--------------------------------
// Get the date input elements from both sections
const dateTimeInput = document.querySelector('#dateTime #select-date');
const basicDetailsInput = document.querySelector('#basicDetails #select-date');
const summaryDate = document.getElementById('summaryDate');

// Function to synchronize both date inputs
function syncDateInputs() {
    // Sync the values between the two date inputs
    dateTimeInput.value = basicDetailsInput.value;
    // Update the summaryDate innerHTML with the selected date
    summaryDate.innerHTML = dateTimeInput.value;
    summaryDate.innerHTML = basicDetailsInput.value;
}

// Event listeners for changes in the date inputs
dateTimeInput.addEventListener('change', function() {
    basicDetailsInput.value = dateTimeInput.value;
    syncDateInputs();
});

basicDetailsInput.addEventListener('change', function() {
    dateTimeInput.value = basicDetailsInput.value;
    syncDateInputs();
});



