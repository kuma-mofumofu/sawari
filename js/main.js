// businesses


const headerBusinesses = document.querySelector("header .businesses");
const headerDl = document.querySelector("header dl");

headerBusinesses.addEventListener("mouseenter",(e)=>{
  headerDl.style.transition ="opacity .3s";
});
headerBusinesses.addEventListener("mouseleave",(e)=>{
  setTimeout(()=>{
    headerDl.style.transition ="none";
  },300);
});





// hamburger
const hamburger = document.querySelector(".hamburger");
const navOuter = document.querySelector(".nav-outer");
const body = document.querySelector("body");
let clickIndex = 0;

hamburger.addEventListener("click",()=>{
  hamburger.classList.toggle("cross");
  navOuter.classList.toggle("appear");
  hamburger.disabled = true;


  if(clickIndex == 0){
    navOuter.style.transition ="opacity .3s , transform .3s";
    navOuter.style.top ="0";
    body.style.overflow= "hidden";
  }else{
    setTimeout(()=>{
      navOuter.style.transition = "none";
      navOuter.style.top ="100dvh";
      body.style.overflow="scroll";
    },300);
  }

  clickIndex = (clickIndex +1) %2;


  setTimeout(()=>{
    hamburger.disabled = false;
  },300);

});

