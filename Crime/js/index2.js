// for making button as a drop down list.
//show and hide dropdown list item on button click  
console.log("jfs");

function show_hide() {
    var click = document.getElementById("list-items");
    if (click.style.display === "none") {
        click.style.display = "block";
        console.log('click');
    } else {
        click.style.display = "none";
        console.log('click');

    }
}