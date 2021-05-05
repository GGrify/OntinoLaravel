'use strict';
let i = 0;
function openMenu(){
    if(i % 2 == 0){
        //Open
        document.getElementsByTagName("menu")[0].style.display = "flex";
        document.getElementsByClassName("headIcons")[0].style.display = "block";
        document.getElementsByTagName("header")[0].style.height = "380px";
        i++;
    } else{
        //Close
        document.getElementsByTagName("menu")[0].style.display = "none";
        document.getElementsByClassName("headIcons")[0].style.display = "none";
        document.getElementsByTagName("header")[0].style.height = "50px";
        i--;
    }
}