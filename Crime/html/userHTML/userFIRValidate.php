<?php
    echo "
        <script>
        let firstName = document.getElementById('names');
        let contact = document.getElementById('contact');
        let email = document.getElementById('email');
        let selectOption = document.getElementById('crimeType');
        let date = document.getElementById('date');
        let evidenceFile = document.getElementById('evidenceFile');
        let description = document.getElementById('description');

        let firstNameValid = false;
        let contactNumber = false;
        let emailValid = false;
        let selectOptionValid= false;
        let dateValid = false;
        let evidenceValid = false;
        let descriptionValid = false;
        

        // Validating the name enter by the user.
        firstName.addEventListener('blur', () => {
            let reg = /^[a-zA-Z]([a-zA-Z\s]){10,15}$/; // Start with and end with.
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

        // Validating the contact enter by the user.
        contact.addEventListener('blur', () => {
            let str = contact.value;
            if (str.length == 10) {
                console.log('matched');
                contact.classList.remove('is-invalid');
                contactNumber = true;
            } else {
                console.log('not matched');
                contact.classList.add('is-invalid');
                let phone = document.getElementById('phone');
                phone.style.color = 'red';
            }
        });

        // Validating the email 
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
        
                document.getElementById('email').style.color = 'red';
            }
        });
        
        // Validating the option selection.
        selectOption.addEventListener('blur', () => {
            
            if (selectOption.value != 'Not Selected') {
                console.log('matched');
                selectOption.classList.remove('is-invalid');
                selectOptionValid = true;
            } else {
                console.log('not matched');
                selectOption.classList.add('is-invalid');
                // let firstNameValid = document.getElementById('firstNameValid');
                // firstNameValid.style.color = 'white';
        
                document.getElementById('selectionOption').style.color = 'red';
            }
        });
        
        // Validating the date enter by the user.
        date.addEventListener('blur', () => {
           
            if (date.value != '') {
                console.log('matched');
                date.classList.remove('is-invalid');
                dateValid = true;
            } else {
                console.log('not matched');
                date.classList.add('is-invalid');
                document.getElementById('dateValid').style.color = 'red';
            }
        });

        // Validating the evidence given by the  user.
        evidenceFile.addEventListener('blur', () => {
           
            if (evidenceFile.value != '') {
                console.log('matched');
                evidenceFile.classList.remove('is-invalid');
                evidenceValid = true;
            } else {
                console.log('not matched');
                evidenceFile.classList.add('is-invalid');
                document.getElementById('evidence').style.color = 'red';
            }
        });

        // Validating the description given by the  user.
        description.addEventListener('blur', () => {
            let reg = /^[a-zA-Z\s]{5,}$/;
            let str = description.value;
            if (reg.test(str)) {
                console.log('matched');
                description.classList.remove('is-invalid');
                descriptionValid = true;
            } else {
                console.log('not matched');
                description.classList.add('is-invalid');
                document.getElementById('descriptionValid').style.color = 'red';
            }
        });

        // on click of the button.
        let submit = document.getElementById('submit');
        submit.addEventListener('click',(e)=>{
           
        
            if(firstNameValid && contactNumber && emailValid && selectOptionValid && dateValid && evidenceValid && descriptionValid){
                ".
                $valid = true
                .
                "
            }
            else{
            ".$valid = false."
                str = `
                <div class='alert alert-danger alert-dismissible' role='alert' id='errorMessage'>
                    <strong>Error!</strong> Please provide the information properly.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                `;
                firstName.classList.add('is-invalid');
                contact.classList.add('is-invalid');
                email.classList.add('is-invalid');
                selectOption.classList.add('is-invalid');
                date.classList.add('is-invalid');
                evidenceFile.classList.add('is-invalid');
                description.classList.add('is-invalid');
                document.getElementById('error').innerHTML = str;
            }
        });
        
        </script>
    ";

 
?>