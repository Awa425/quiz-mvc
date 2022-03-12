const repChoice_quest = document.getElementById('repChoice_quest');
const champ4_quest = document.getElementById('champ4-quest');
const repChoice = document.getElementById('repChoice-quest');
const btnChoice = document.getElementById('btnChoice');
const btnEnregistre = document.getElementById('btnEnregistre');




///////////fonction/////////////


let i = 1;
function genereChamps() { 
 
   const div = document.createElement('div');
   const label = document.createElement('label');
   const inputText = document.createElement('input');    
   const inputradio = document.createElement('input');
   const inputCheack = document.createElement('input');     
   const button = document.createElement('input');  
   
   div.setAttribute('id', 'div_'+i);
   div.setAttribute('class', 'cham_quest');
   
   label.innerHTML = 'Reponse '+i;
   inputText.setAttribute('type', 'text');
   inputText.setAttribute('name', 'rep[]');
   inputText.setAttribute('id', 'rep-quest_'+i);
   inputradio.setAttribute('type', 'radio')
   inputradio.setAttribute('id', 'idRadio_'+i);
   inputCheack.setAttribute('type', 'checkbox');
   inputCheack.setAttribute('id', 'idCheckbox_'+i);
   button.setAttribute('type', 'submit')
   button.value = 'x';
   
   if(repChoice_quest.value == 'repMultiple'){
        label.setAttribute('for', 'idCheckbox_'+i) 
        inputCheack.setAttribute('name', 'check[]');
        div.appendChild(label);
        div.appendChild(inputText);
        div.appendChild(inputCheack);
        div.appendChild(button);     
   }
   else if(repChoice_quest.value == 'repSimple'){
        label.setAttribute('for', 'idRadio_'+i) 
        inputradio.setAttribute('name', 'check[]');
        div.appendChild(label);
        div.appendChild(inputText);
        div.appendChild(inputradio);
    }
    else if(repChoice_quest.value == 'repText'){
        div.appendChild(label);
        div.appendChild(inputText);
    }
    champ4_quest.appendChild(div); 
    i++;
}  

function choix(){
    champ4_quest.innerHTML='';
    i = 1
    genereChamps();
}

function getSelect() {
    let eltSelect =''
    reponse.forEach(rep=>{
        rep.addEventListener('click',function () {
            rep.setAttribute('checked', true)
            console.log(rep.value);
            eltSelect = rep
        })
        return rep.value
    })  
}


///////////Events//////////////
// let i = 2;
btnChoice.addEventListener('click', ()=>{
    genereChamps(); 

})
// btnEnregistre.addEventListener('click', ()=>{
//     $(".checkbox").on("change", function() {console.log('fzef');
//     var values = [];
//     $('.checkbox:checked').each(function() {
//         var result = $(this).val();
//         values.push(result);
//     });
//     console.log(values);
// });
// })


