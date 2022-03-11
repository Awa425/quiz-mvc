const table = document.getElementById('table_liste');
const tbody = document.getElementById('tbody');
const tr = document.querySelectorAll('tr');
console.log(tr);



function showList() {
    let tableList = '';
    for (let i = 0; i < table.length; i++) {
        if(i<table.length){
            tableList+=`
                <tr>

                </tr>
            `
        }   
        
    }
}