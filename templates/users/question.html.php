<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=WEB_ROOT."css".DIRECTORY_SEPARATOR."style.question.css"?>">

    <title>Document</title>
</head>
<body class="body-quest">
<div class="question-quest">

<h3 class="grand">PARAMÉTRER VOTRE QUESTION</h3>
<div class="petit-quest">
   <form action="<?= WEB_ROOT ?>" method="POST">
   <input type="hidden" name="controller" value="user">
   <input type="hidden" name="action" value="creer.question">

   <div class="champ1-quest">
        <label for="">Questions</label>
        <input id="uno-quest"type="text" name="question">
    </div>

    <div class="champ2-quest">
        <label for="">Nbre de points</label>
        <input id="dos-quest"type="number" name="point">
    </div>

    <div class="champ3-quest">

        <label for="">Type de réponse</label> 
        <select name="repChoice-quest" id="repChoice_quest" onchange="genereChampsRepMulti()">
            <option disabled selected>Donnez le type de réponse</option>
            <option value="repMultiple">Reponse Multiple</option>
            <option value="repSimple">Réponse Simple</option>
            <option value="repText">Réponse Texte</option>
        </select>
        <button type="button" id="btnChoice" class="btnChoice" onclick=duplique()>+</button>
        <input type="hidden" name="nbrReponse" id="nbrReponse">   
    </div>

    <div id="champ4-quest" class="champ4-quest">
        <!-- <div id="div"+i>
            <label for="rep-quest">Reponse 1</label>
            <input type="text" id="rep-quest">
            <input type="checkbox">
            <input type="radio">
            <button></button>
        </div> -->
    </div>
    <!-- <input type="submit" name="enregistrer"> -->
    <button class="enregistrer" type="submit" name="enregistrer" >Enregistrer</button>
   </form>


</div>

</div>

<script src="<?=WEB_ROOT."js".DIRECTORY_SEPARATOR."creerQuestion.js"?>"></script>
    
</body>
</html>