// Setting the background image
// console.log('Crime website');
let imgBackground = document.getElementById("backgroundImage");
let images = new Array(
    "images/backgroundImage1.jpg",
    "images/backgroundImage2.jpg",
    "images/backgroundImage3.jpg"
);
console.log(images);
let imageArrayLength = images.length - 1;
let imageIndex = 0;
// changeImage();

function changeImage() {
    if (imageIndex > imageArrayLength) {
        imageIndex = 0;
    } else {
        imgBackground.style.backgroundImage = "url(" + images[imageIndex] + ")";
        imgBackground.style.animation = 'zoom-in-zoom-out 1s ease infinite';
        imgBackground.classList.add('.img-fluid');
        console.log("call");
        imageIndex++;
    }
}
changeImage();

setInterval(() => {
    changeImage();
}, 1500);

// Nav bar color change.
// window.onscroll = function(e) {
//     // if (winedow.scrollY > 420.6166687011719) {
//     //     let nav = document.getElementById('nav');
//     //     console.log(nav);
//     // }
//     console.log(e.detail);
//     if (e.details == 0) {
//         let nav = document.getElementById('nav').scrollHeight;
//         console.log(nav);
//     }
// }


// Toggle the .pa-fixed-header class when the user 
// scroll 100px 

window.onscroll = () => { scrollNavbar() };

scrollNavbar = () => {
    // Target elements
    const navBar = document.getElementById("nav");
    // const links = document.querySelectorAll("#nav a");

    if (document.documentElement.scrollTop > 100) {
        navBar.classList.add("pa-fixed-header");

        // Change the color of links on scroll
        // for (let i = 0; i < links.length; i++) {
        //     const element = links[i];
        //     element.classList.add('text-black');
        // }

    } else {
        navBar.classList.remove("pa-fixed-header");

        // Change the color of links back to default
        // for (let i = 0; i < links.length; i++) {
        //     const element = links[i];
        //     element.classList.remove('text-black');
        // }
    }
}