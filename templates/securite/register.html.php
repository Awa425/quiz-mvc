<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
  /* background: #1c242d; */
}
.box {
  border: 1px solid #c4c4c4;
  padding: 30px 25px 10px 25px;
  background: white;
  margin: 30px auto;
  width: 360px;
}
h1.box-logo a {
  text-decoration:none;
}
h1.box-title {
  color: #AEAEAE;
  background: #f8f8f8;
  font-weight: 300;
  padding: 15px 25px;
  line-height: 30px;
  font-size: 25px;
  text-align:center;
  margin: -27px -26px 26px;
}
.box-button {
  border-radius: 5px;
  background: green;
  text-align: center;
  cursor: pointer;
  font-size: 19px;
  width: 100%;
  height: 51px;
  padding: 0;
  color: #fff;
  border: 0;
  outline:0;
}
.box-register
{
  text-align:center;
  margin-bottom:0px;
}
.box-register a
{
  text-decoration:none;
  font-size:12px;
  color:#666;
}
.box-input {
  font-size: 14px;
  background: #fff;
  border: 1px solid #ddd;
  margin-bottom: 25px;
  padding-left:10px;
  border-radius: 5px;
  width: 347px;
  height: 50px;
}

</style>
<?php 
    function vers(string $ctr, string $action){
       echo "<input type='hidden' name='controller' value='$ctr'>
        <input type='hidden' name='action' value='$action'>";
    }
?>
<body>
<form class="box" action="" method="post">
	<h3 class="box-logo box-title" style="text-align: center;">JEUX-QUIZ</h3>
    <h1 class="box-title">S'inscrire</h1>
    <?php vers("securite", "inscription") ?> 
    <input type="text" class="box-input" name="nom" placeholder="Entrer votre nom"  />
    <input type="text" class="box-input" name="prenom" placeholder="Entrer votre prenom"  />
	<input type="text" class="box-input" name="login" placeholder="Votre Login"  />
    <input type="text" class="box-input" name="password" placeholder="votre mot de passe"  />
    <input type="password" class="box-input" name="password" placeholder="confirmer votre mot de passe"  />
    <!-- <input type="text" class="box-input" name="statut" placeholder="donner le statut"  /> -->
    <input type="submit" name="inscription" value="inscription" class="box-button" />
   
</form>
</body>
</html>