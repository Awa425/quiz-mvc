<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=WEB_ROOT.'css'.DIRECTORY_SEPARATOR.'style.show.user.css'?>">
    <title>Document</title>
</head>
<body>

    <div class="main-liste">
        <table class="table-liste" id="table_liste">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Score</th>
                
            </tr>
            </thead>
            <tbody id="tbody"> 
                <?php foreach ($data as $value) {?>
                    <tr> 
                        <td><?=$value['nom'];?></td>
                        <td><?=$value['prenom'];?></td>
                        <td><?=$value['score'];?></td> 
                    </tr> 
                    <?php
                    }?>
           
            <tbody>
        </table>
        <div class="pagineListe">
        <button onclick="lastPage()">Precedent</button>
        <button onclick="nextPage()">Suivant</button>
    </div> 
    </div>
    
</body>
<script src="<?=WEB_ROOT."js".DIRECTORY_SEPARATOR."listeJoueur.js"?>"></script>
</html>