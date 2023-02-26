var logo = document.querySelector('.menu-button');
var menu = document.querySelector('.menu');
var wrapper = document.querySelector('.hidewrapper');
var heading = document.querySelector('.headingcontent');

logo.addEventListener('click',function(){
    menu.classList.toggle('showmenu');
    heading.classList.toggle('hideheading');
    wrapper.classList.toggle('hidewrapper');
});



