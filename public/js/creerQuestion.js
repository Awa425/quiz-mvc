const repChoice_quest = document.getElementById('repChoice_quest');
const point_quest = document.getElementById('pointQuest');
const champ4_quest = document.getElementById('champ4-quest');
const repChoice = document.getElementById('repChoice-quest');
const btnChoice = document.getElementById('btnChoice');
const btnEnregistre = document.getElementById('btnEnregistre');
const decremente = document.getElementById('decremente');
const incremente = document.getElementById('incremente');

///////////fonction/////////////

let i = 1;
function genereChamps() { 
 if(i<=4){
    const div = document.createElement('div');
    const label = document.createElement('label');
    const inputText = document.createElement('input');    
    const inputradio = document.createElement('input');
    const inputCheack = document.createElement('input');     
    const button_supp = document.createElement('input');  
    
    div.setAttribute('id', 'div_'+i);
    div.setAttribute('class', 'cham_quest');
    
    label.innerHTML = 'Reponse '+i;
    label.setAttribute('class', 'label');
    inputText.setAttribute('type', 'text');
    inputText.setAttribute('name', 'rep[]');
    inputText.setAttribute('class', 'input')
    inputText.setAttribute('id', 'rep-quest_'+i);
    inputradio.setAttribute('type', 'radio')
    inputradio.setAttribute('class', 'check');
    inputradio.setAttribute('id', 'idCheck_'+i);
    inputCheack.setAttribute('type', 'checkbox');
    inputCheack.setAttribute('class', 'check');
    inputCheack.setAttribute('id', 'idCheck_'+i);
    button_supp.setAttribute('type', 'submit')
    button_supp.value = 'x';
    
        if(repChoice_quest.value == 'repMultiple'){
            label.setAttribute('for', 'idCheck_'+i) 
            inputCheack.setAttribute('name', 'check[]');
            inputCheack.setAttribute('value', +i);
            div.appendChild(label);
            div.appendChild(inputText);
            div.appendChild(inputCheack);
            div.appendChild(button_supp);     
        }
        else if(repChoice_quest.value == 'repSimple'){
            label.setAttribute('for', 'idCheck_'+i) 
            inputradio.setAttribute('name', 'check[]');
            inputradio.setAttribute('value', +i); 
            div.appendChild(label);
            div.appendChild(inputText);
            div.appendChild(inputradio);
            div.appendChild(button_supp);     
        }
        else if(repChoice_quest.value == 'repText'){
            div.appendChild(label);
            div.appendChild(inputText);
        }
        champ4_quest.appendChild(div); 
        
        button_supp.addEventListener('click', ()=>{
            div.remove(); 
            update_label();
            update_input();
            update_check();
            update_valu_check();
        })
        i++;

    }  
}  
choix();
function choix(){
    champ4_quest.innerHTML='';
    i = 1
    genereChamps();
}

function update_label(){
    const labels = document.querySelectorAll('.label');
    labels.forEach((label,i) => {
        label.innerHTML = `Reponse ${i+1}`
        label.setAttribute('for', 'idCheck_'+(i+1));
    }); 
}


function update_input(){
    const inputs = document.querySelectorAll('.input');
    inputs.forEach((input,i) => {
        i++
        input.setAttribute('id', 'rep-quest_'+i);
    }); 
}

function update_check(){
    const checks = document.querySelectorAll('.check');
    checks.forEach((check,i) => {
        i++
        check.setAttribute('id', 'idCheck_'+i);
    }); 
}

function update_valu_check(){
    const checks = document.querySelectorAll('.check');
    checks.forEach((check,i) => {
        i++
        check.setAttribute('value', +i);
    }); 
}

///////////Events//////////////
// let j = 1;
btnChoice.addEventListener('click', ()=>{
   
    genereChamps(); 
    
})
decremente.addEventListener('click', ()=>{
    if (point_quest.value>=1) {
        point_quest.value--;
    }
   
})
incremente.addEventListener('click', ()=>{
    point_quest.value++;
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


