// //  so that the all the value will be fetch automatically without refreshing the page. 
// function loadXMLDoc() {
//     var xmlhttp;
//     if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
//         xmlhttp = new XMLHttpRequest();
//     } else { // code for IE6, IE5
//         xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//     }
//     xmlhttp.onreadystatechange = function() {
//         if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//             document.getElementById("data").innerHTML = "";
//             document.getElementById("data").innerHTML = xmlhttp.responseText;
//             // your div
//         }
//     }
//     xmlhttp.open("GET", "updateOfficerQuery.php", true); //your php file
//     xmlhttp.send();
// }
// let submit = document.getElementById("update");

// submit.addEventListener('click', () => {
//     console.log('click');
//     loadXMLDoc();
// });

// let delete = document.getElementById('')
const buttons = document.getElementsByTagName("button");
const result = document.getElementById("result");

const buttonPressed = e => {
    console.log(`ID of <em>${e.target.innerHTML}</em> is <strong>${e.target.id}</strong>`);
}

for (let button of buttons) {
    button.addEventListener("click", buttonPressed);
}