const table = document.getElementById('table_liste');
const tbody = document.getElementById('tbody');
const tr = document.querySelectorAll('tr');
const td = document.querySelectorAll('td');
let pas = 5;
let cpt = 1;
let actuelPage = 1;

// console.log(tr[1]);

showList();

function showList() {
    let tableList = `<tr>${tr[0].innerHTML}</tr>`;
    
    for (let i = cpt; i < cpt+pas; i++) {
        if(i<tr.length){
            tableList+=`
               <tr>${tr[i].innerHTML}</tr>
            `
        }   
        
    }
     table.innerHTML = tableList; 
}

function nextPage(){
    if(cpt + pas <= tr.length)
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

