
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=WEB_ROOT."css".DIRECTORY_SEPARATOR."style.liste.question.css"?>">
    <title>Document</title>
</head>
<body>
    <div class="container_liste_question">
        <div class="entete_liste_quest">
            <label>Nbre de question/Jeu </label>
            <input id="point" type="text" readonly>
            <input type="submit" value="OK">
        </div>
            <div id="liteQuestion">
                <ol id="ol_lisQuest">
                    <?php  foreach ($questions as $value) {?>
                        <li id="li_listeQuest"> 
                            <p><?= $value['question'] ; ?></p>
                            <div>
                                <?php if($value['Type_Reponse']=='repSimple'){?>
                                    <?php foreach($value['Reponse'] as $val){ ?>
                                       <div class="check_label">
                                            <small class="styleRadio">x</small>
                                            <label for=""><?= $val;?></label>
                                       </div>
                                    <?php }?>
                                <?php } 
                                elseif($value['Type_Reponse']=='repMultiple'){ ?>
                                    <?php foreach($value['Reponse'] as $val){ ?>
                                       <div class="check_label">
                                            <small class="styleCheck">o</small>
                                            <label for=""><?= $val;?></label>
                                       </div>
                                    <?php }?>
                                    <?php }
                                elseif($value['Type_Reponse']=='repSimple'){?>
                                         <?php foreach($value['Reponse'] as $val){ ?>
                                       <div class="check_label">
                                            <small class="styleText"></small>
                                            <label for=""><?= $val;?></label>
                                       </div>
                                    <?php }?>
                                    <?php }?>
                            </div>      
                        </li>
                    <?php } ?>  
                </ol>
            </div>
            <div class="btn_prec_sui_list_quest">
                <input type="button" value="precedant" onclick="lastPage()">
                <input type="button" value="suivant" onclick="nextPage()">
            </div>
    </div>
</body>
<script src="<?=WEB_ROOT."js".DIRECTORY_SEPARATOR."listeQuestion.js"?>"></script>
</html>