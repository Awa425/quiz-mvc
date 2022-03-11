const repChoice_quest = document.getElementById('repChoice_quest');
const champ4_quest = document.getElementById('champ4-quest');
const repChoice = document.getElementById('repChoice-quest');

// console.log(repChoice_quest.value);



///////////fonction/////////////
let i = 0;
function genereChampsRepMulti() {

   const div = document.createElement('div');
   div.setAttribute('id', 'div'+i);
   div.setAttribute('class', 'cham_quest');
   if(repChoice_quest.value == 'repMultiple'){
    const label = document.createElement('label');
    const inputText = document.createElement('input');    
    const inputCheack = document.createElement('input');    
    const button = document.createElement('button');    


    div.innerHTML=`
        <label>Reponse${i}</label>
        <input type="text" id="rep-quest">
        <input type="checkbox">
        <button>x</button>
    `
   }
   else if(repChoice_quest.value == 'repSimple'){
    div.innerHTML=`
        <label>Reponse${i}</label>
        <input type="text" id="rep-quest">
        <button>x</button>
    `
   }
   else if(repChoice_quest.value == 'repText'){
    div.innerHTML=`
        <label>Reponse${i}</label>
        <input type="text" id="rep-quest">
    `
   }
  
   champ4_quest.appendChild(div);
   i++ ;
}
function duplique() {
    genereChampsRepMulti();
}


///////////Events//////////////



