<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=WEB_ROOT.'css'.DIRECTORY_SEPARATOR.'style.question.css'?>">
    <title>Document</title>
</head>
<body>
<div class="container-question">
    <div class="para-question">
        <div class="quest-quest">
            <p>Questions</p>
            <textarea name="question" id="" cols="30" rows="2"></textarea>
        </div>
        <div class="nbre-point-quest">
            <p>Nbre de Points</p>
            <input type="number">
        </div>
        <div class="type-rep-quest">
            <p>Type de reponse</p>
            <select name="type_reponse">
                <option value="">Donner le type de reponse</option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
                <option value="d">D</option>
                <option value="e">E</option>
                <option value="f">F</option>
            </select>
            <img src="" alt="">
        </div>
        <div class="reponse-quest">
            <p>Reponse 1</p>
            <input type="text">
            <input type="checkbox">
            <input type="radio">
        </div>
    </div>
    <input type="submit" value="Enregistrer">
</div>
</body>
</html>