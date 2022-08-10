import './bootstrap';

let sidebarToggle = document.querySelector(".sidebarToggle");
sidebarToggle.addEventListener("click", function(){
    document.querySelector("body").classList.toggle("active");
    document.getElementById("sidebarToggle").classList.toggle("active");
});

let admin_sidebarToggle = document.querySelector(".admin_sidebarToggle");
admin_sidebarToggle.addEventListener("click", function(){
    document.querySelector("#admin").classList.toggle("active");
    document.getElementById("admin_sidebarToggle").classList.toggle("active");
});
