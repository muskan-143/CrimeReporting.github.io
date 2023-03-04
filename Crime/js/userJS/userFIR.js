// To check whether the complain needs to be anonymous Complain
console.log("FIR.js");
let anonymousComplain = document.getElementById('anonymousComplain');
anonymousComplain.addEventListener('click', () => {
    // First we will check whether the switch is on or not.
    if (anonymousComplain.checked) {
        // As the className return number of element so we need to use for loop to make each and every element to hide.
        let anonymous = document.getElementsByClassName('anonymous');
        for (var x = 0; x < anonymous.length; x++) {
            anonymous[x].style.display = "none";
        }
    } else {
        // As the className return number of element so we need to use for loop to make each and every element to make is visible.

        let anonymous = document.getElementsByClassName('anonymous');
        for (var x = 0; x < anonymous.length; x++) {
            anonymous[x].style.display = "block";
        }
    }
})

let crimeType = document.getElementById('crimeType');
let textCrimeType = document.getElementsByClassName('textCrimeType')

if (crimeType.value == "anyOther") {
    for (var x = 0; x < textCrimeType.length; x++) {
        textCrimeType[x].style.display = "block";
    }
} else {
    for (var x = 0; x < textCrimeType.length; x++) {
        textCrimeType[x].style.display = "none";
    }
}

// Validating the form.

// Validating the name.
let firstName = document.getElementById('names');
let firstNameValid = false;

firstName.addEventListener('blur', () => {
    let reg = /^[a-zA-Z]([a-zA-Z]){4,9}$/; // Start with and end with.
    let str = firstName.value;
    if (reg.test(str)) {
        console.log('matched');
        firstName.classList.remove('is-invalid');
        firstNameValid = true;
    } else {
        console.log('not matched');
        firstName.classList.add('is-invalid');
        let firstNameValid = document.getElementById('firstNameValid');
        firstNameValid.style.color = 'red';

        // document.getElementById('firstNameValid').style.color = 'red';
    }
});