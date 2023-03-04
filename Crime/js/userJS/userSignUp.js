console.log('Form Validation Demo');
// for getting the value from the radio btn
function displayRadioValue() {
    var ele = document.getElementsByName('gender');

    for (i = 0; i < ele.length; i++) {
        if (ele[i].checked)
            document.getElementById("result").innerHTML = "Gender: " + ele[i].value;
    }
}
let name = document.getElementById('name');
let email = document.getElementById('email');
let password = document.getElementById('password');
let confirmPassword = document.getElementById('confirmPassword');
let age = document.getElementById('age');

let contact = document.getElementById('contact');


let firstNameValid = false;
let emailValid = false;
let passwordValid = false;
let confirmPasswordValid = false;
let contactValid = false;
let gender = "";
let genderName = document.getElementsByName('genderMaleFemaleOther');


// console.log(firstName, secondName, email, password, termsAndCondition, address);

// first Name validation.
name.addEventListener('blur', () => {
    let reg = /^[a-zA-Z]([a-zA-Z]){3,9}$/; // Start with and end with.
    let str = name.value;
    if (reg.test(str)) {
        console.log('matched');
        name.classList.remove('is-invalid');
        firstNameValid = true;
    } else {
        console.log('not matched');
        name.classList.add('is-invalid');
        let firstNameValid = document.getElementById('firstNameValid');


        // document.getElementById('firstNameValid').style.color = 'red';
    }
});


// Email Name validation.
email.addEventListener('blur', () => {
    let reg = /^([_\-\.a-zA-Z0-9]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}/;
    let str = email.value;
    if (reg.test(str)) {
        console.log('matched');
        email.classList.remove('is-invalid');
        emailValid = true;
    } else {
        console.log('not matched');
        email.classList.add('is-invalid');
        // let firstNameValid = document.getElementById('firstNameValid');
        // firstNameValid.style.color = 'white';

    }
});

// Contact Name validation.
contact.addEventListener('blur', () => {
    let stringContact = String(contact.value);
    console.log(stringContact);
    if (stringContact.length == 10) {
        contact.classList.remove('is-invalid');
        contactValid = true;
        console.log('matched');

    } else {
        contact.classList.add('is-invalid');
        console.log('not matched');

    }
});


// Contact Name validation.
age.addEventListener('blur', () => {

    if (age.value >= 15) {
        age.classList.remove('is-invalid');
        ageValid = true;
        console.log('matched');

    } else {
        age.classList.add('is-invalid');
        console.log('not matched');

    }
});
// Password validation.
password.addEventListener('blur', () => {
    let reg = /^([a-zA-Z]){5,10}$/;
    let str = password.value;
    if (reg.test(str)) {
        console.log('matched');
        password.classList.remove('is-invalid');
        passwordValid = true;
    } else {
        console.log('not matched');
        password.classList.add('is-invalid');
        // let firstNameValid = document.getElementById('firstNameValid');
        // firstNameValid.style.color = 'white';

    }
});

confirmPassword.addEventListener('blur', () => {
    let passwordValue = password.value;
    if (passwordValue === confirmPassword.value) {
        console.log('matched');
        confirmPassword.classList.remove('is-invalid');
        confirmPasswordValid = true;
    } else {
        console.log('not matched');
        confirmPassword.classList.add('is-invalid');
        // let firstNameValid = document.getElementById('firstNameValid');
        // firstNameValid.style.color = 'white';

    }
});

// let checkBtnTerms = false;
// if (termsAndCondition.value === 'on') { // To checked whether a checked box is checked by the user or not.
//     checkBtnTerms = true;
//     console.log("YEs checked");
// } else {
//     checkBtnTerms = false;
// }

let userSignUpButton = document.getElementById('userSignUpButton');
userSignUpButton.addEventListener('click', (e) => {
    e.preventDefault();
    if (firstNameValid && passwordValid && confirmPasswordValid && emailValid && ageValid && contactValid) {

        // for (let i = 0; i < genderName.length; i++) {
        //     if (genderName[i].checked) {
        //         gender = genderName[i];
        //     }

        // }
        // console.log(gender.value);

        console.log('Success...');
        let str = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Form submitted successfully!!.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>`;
        let displayMessage = document.getElementById('displayMessage');
        displayMessage.innerHTML = str;
        setTimeout(() => {
            displayMessage.innerHTML = " ";
        }, 3000);
    } else {
        console.log('Error');
        let str = `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Form not submitted successfully!.<br>Please check the information you have provided.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>`;
        let displayMessage = document.getElementById('displayMessage');
        displayMessage.innerHTML = str;
        setTimeout(() => {
            displayMessage.innerHTML = " ";
        }, 3000);
    }

});