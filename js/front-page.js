
// musical-notes

const musicalNotes = document.querySelectorAll(".musical-notes img");
const oddNotes = document.querySelectorAll(".musical-notes :nth-child(2n+1) img");
const evenNotes = document.querySelectorAll(".musical-notes :nth-child(2n) img")

let intervalIndex = 0;
let intervalTimer;

window.onload = ()=>{

  oddNotes.forEach((oddNote)=>{
    oddNote.style.animationName="note-up";
  });
  evenNotes.forEach((evenNote)=>{
    evenNote.style.animationName="note-down";
  });


  intervalTimer = setInterval(()=>{
      musicalNotes[intervalIndex].classList.remove("hidden");
      intervalIndex++;
      if(intervalIndex >= 4){
          clearInterval(intervalTimer);
      }
  },1000);
}
