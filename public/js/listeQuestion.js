// const liste = document.getElementById('table_liste');
// const tbody = document.getElementById('tbody');
// const tr = document.querySelectorAll('tr');
// const td = document.querySelectorAll('td');
// let pas = 5;
// let cpt = 1;
// let actuelPage = 1;


const listeQuest = document.getElementById('liteQuestion');
const ol = document.querySelectorAll('#ol_lisQuest');
const li = document.querySelectorAll('#li_listeQuest');
let pas = 2;
let cpt = 0;
let actuelPage = 1;
console.log(ol)

// console.log(li[1]);

showList();

function showList() {
    let liste = `${li[cpt].innerHTML}`;
    
    for (let i = cpt+1; i < cpt+pas; i++) {
        if(i<li.length){
            liste+=`
               ${li[i].innerHTML}
            `
        }   
        
    }
    listeQuest.innerHTML = liste; 
}

function nextPage(){
    if(cpt + pas <= li.length)
    cpt += pas; 
    actuelPage++;
    showList()
}
function lastPage(){
    if(cpt - pas >= 0 )
    cpt -= pas; 
    actuelPage++;
    showList()
}

