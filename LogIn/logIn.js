
const form = $('#form');
const email = $('#email');
const password = $('#password');


// error count
let errors = 0;
// show input error message
const showError = (displayPlace, message) => {
    displayPlace.html(message);
    errors += 1;
}

// check for required field 
const checkRequired = (inputArr) => {
    inputArr.forEach(function(input){
        if(input.val() === '') {
            showError(input.next(), `${input.attr('id')} field is required`);
        }
    })
}


// Check if email is valid
const checkEmail = (input) => {
    const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!regex.test(input.val())){
        showError(input.next(), 'Email missing or not valid');
    }
}

// When form is submitted
const validateForm = (e) =>{
   // e.preventDefault();
    $('small').html('');
    errors = 0;

    // TODO check for required inputs
    checkRequired([email, password]);
     // TODO check for valid email
    checkEmail(email);

    if(errors === 0){
        return true;
    }else{
        return false;
    }
    // Submit the form
}