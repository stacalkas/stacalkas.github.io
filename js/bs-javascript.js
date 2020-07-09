// BS Javascript

// Define Menu Vars
const menuLog = document.querySelector('.menu-Log');
const menuBooks = document.querySelector('.menu-Books');
const menuComics = document.querySelector('.menu-Comics');
const menuGames = document.querySelector('.menu-Games');
const menuImages = document.querySelector('.menu-Images');
const menuAbout = document.querySelector('.menu-About');
const menuContact = document.querySelector('.menu-Contact');
const menuModels = document.querySelector('.menu-Models');
const menuMoviesTV = document.querySelector('.menu-MoviesTV');
const menuQuotes = document.querySelector('.menu-Quotes');
const menuToys = document.querySelector('.menu-Toys');
const menuVideos = document.querySelector('.menu-Videos');
const menuExtras = document.querySelector('.menu-Extras');
const mobileBtn = document.querySelector('.mobile-btn');
const menuMobile = document.querySelector('.mobile-dropdown-content');
// Define Site Version Vars
const siteVerElement = document.querySelector('.site-ver');
const versionNumber = "4.3.01";
// Define Time Vars
const today = new Date();
const currentYear = today.getFullYear();
const dynYear = document.querySelector('.dynYearElement');
// Define Last Modified Vars
const lastModElement = document.querySelector('.last-Mod-Element');
// Lazy Load
var lazyLoadInstance = new LazyLoad({
     elements_selector: ".lazy"
});

// Run these functions, when this file loads
getYear();
getLastMod();

// Hide Form Success
// setTimeout(function(){
//      document.querySelector('.formSuccess').style.display = 'none';
// }, 5000);

// Toggle Mobile Menu //
mobileBtn.addEventListener('click', toggleMobileMenu);
let showMobileMenu = false;

function toggleMobileMenu(){
     if(!showMobileMenu){
          menuMobile.style.display = 'block';
          showMobileMenu = true;
     } else{
          menuMobile.style.display = 'none';
          showMobileMenu = false;
     }
}
// Toggle Extras //
lastModElement.addEventListener('click', toggleExtras);
let showExtras = false;

function toggleExtras(){
     if(!showExtras){
          menuExtras.style.display = 'inline';  
          showExtras = true;
          //console.log('extras shown');
     } else{
          menuExtras.style.display = 'none';        
          showExtras = false;
          //console.log('extras hidden');
     }
}
// Site Version //
function siteVersion(){
     siteVerElement.innerHTML = versionNumber;
     //clearTimeout(siteVersion); // Kill our setTimeout to stop calling this
}
// Dynamic Copyright Year //
function getYear(){
     dynYear.innerText = currentYear;
     //dynYear[1].innerText = currentYear;
     //clearTimeout(getYear); // Kill our setTimeout to stop calling this
}
// Document Last Modified //
function getLastMod(){
     lastModElement.innerText = document.lastModified;
     //clearTimeout(getLastMod); // Kill our setTimeout to stop calling this
}
// Load Markdown File //
function loadMarkdownFile(){
     // Create XHR Object
     var xhr = new XMLHttpRequest();
     // OPEN - type, url/file, async
     xhr.open('GET', 'CHANGELOG.md', true);

     xhr.onload = function(){
          if(this.status == 200){
               //console.log(this.responseText);
               var mdText = xhr.responseText;
               var mdConverter = new showdown.Converter(),
               convertedMarkdown = mdConverter.makeHtml(mdText);
               //console.log(mdText);

               // Define Markdown Holder Element Vars
               var mdHolder = document.querySelector('.md-holder');
               mdHolder.innerHTML = convertedMarkdown;
          }
     }
     // Sends request
     xhr.send();
}

// Filter Search //
var doc = {};
doc.getElements = function (id) {
     if (typeof id == "object") {
          return [id];
     } else {
          return document.querySelectorAll(id);
     }
};
doc.filterHTML = function(id, sel, filter) {
     var a, b, c, i, ii, iii, hit;
     a = doc.getElements(id);
     for (i = 0; i < a.length; i++) {
          b = doc.getElements(sel);
          for (ii = 0; ii < b.length; ii++) {
               hit = 0;
               if (b[ii].innerHTML.toUpperCase().indexOf(filter.toUpperCase()) > -1) {
                    hit = 1;
               }
               c = b[ii].getElementsByTagName("*");
               for (iii = 0; iii < c.length; iii++) {
                    if (c[iii].innerHTML.toUpperCase().indexOf(filter.toUpperCase()) > -1) {
                         hit = 1;
                    }
               }
               if (hit == 1) {
                    b[ii].style.display = "";
               } else {
                    b[ii].style.display = "none";
               }
          }
     }
};