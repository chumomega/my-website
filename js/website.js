//the function getdropdown makes the dropdown visible when you click on the button

$(function(){
    $("#nav-bar-container").load("../html/header.html");
});

$(function(){
    $("#footer-container").load("../html/footer.html");    
});

function getDropdown(){
    document.getElementById("dropdown-group").classList.toggle("show");
}

window.onclick = function(event){
    if(!event.target.matches("#nav-button")){
        var dropdown = document.getElementById("dropdown-group");
    
        if(dropdown.classList.contains('show')){
            dropdown.classList.remove('show');
        }
    }
}