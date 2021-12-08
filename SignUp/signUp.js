// Select UI elements or inputs
const form = $('#form'); //document.getElementById('form')
const username = $('#username');
const email = $('#email');
const blood_group = $('#blood_group');
const hospital_name = $('#hospital_name');
const hospital_address = $('#hospital_address');
const contact = $('#contact');
const password = $('#password');
const password2 = $('#password2');


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

// check for input length
const checkInputLength = (input, min, max) => {
    if(input.val().length <= min){
        showError(input.next(), `${input.attr('id')} must be more than ${min} characters long`);
    } else if( input.val().length >= max){
        showError(input.next(), `${input.attr('id')} must be less than ${max} characters long`);
    }
}

// Check if email is valid
const checkEmail = (input) => {
    const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!regex.test(input.val())){
        showError(input.next(), 'Email is not valid');
    }
}

const checkPasswordMatch = (password, password2) => {
    if(password.val() != password2.val()){
        showError(password2.next(), 'Your passwords do not match');
    }
}

// When form is submitted
const validateForm = (e) =>{
    //e.preventDefault();
    $('small').html('');
    errors = 0;

    // TODO check for required inputs
    checkRequired([username, email, blood_group, hospital_name, hospital_address, contact, password, password2]);
    // TODO check for username length
    checkInputLength(username, 3, 50);
    // TODO check for password length
    checkInputLength(password, 8, 15);
    // TODO check for valid email
    checkEmail(email);
    // TODO check if the passwords match
    checkPasswordMatch(password, password2);


    if(errors === 0){
        return true;
    }else{
        return false;
    }
    // Submit the form  
}