document.getElementById('contactForm').addEventListener('submit', function(event) {
    let valid = true;

    // Reset error messages
    document.getElementById('nameError').style.display = 'none';
    document.getElementById('emailError').style.display = 'none';
    document.getElementById('subjectError').style.display = 'none';
    document.getElementById('serviceError').style.display = 'none';
    document.getElementById('messageError').style.display = 'none';

    // Validate Name
    const name = document.getElementById('Name').value;
    if (name === "") {
        document.getElementById('nameError').style.display = 'block';
        valid = false;
    }

    // Validate Email
    const email = document.getElementById('Email').value;
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (email === "" || !emailPattern.test(email)) {
        document.getElementById('emailError').style.display = 'block';
        valid = false;
    }

    // Validate Subject
    const subject = document.getElementById('Subject').value;
    if (subject === "") {
        document.getElementById('subjectError').style.display = 'block';
        valid = false;
    }

    // Validate Service selection
    const service = document.getElementById('Service').value;
    if (service === "..." || service === "") {
        document.getElementById('serviceError').style.display = 'block';
        valid = false;
    }

    // Validate Message
    const message = document.getElementById('Message').value;
    if (message === "") {
        document.getElementById('messageError').style.display = 'block';
        valid = false;
    }

    // If not valid, prevent form submission
    if (valid) {
        alert("Form Submitted Successfully");
    }
    else{
        event.preventDefault();
    }
});