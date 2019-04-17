// Scroll top button

window.onscroll = function(){
  scrollFunction();
  scrollFuncNav();
};

function scrollFunction() {
    console.log ("bonjour");
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



// Scroll navbar

function scrollFuncNav() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("scrollbar").style.top = "-60px";
  } else {
    document.getElementById("scrollbar").style.top = "0";
  }
}



