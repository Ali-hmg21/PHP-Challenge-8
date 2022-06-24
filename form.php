<?php
$Sujets = array( "Choix1" => "Choix N°1", "Choix2" => "Choix N°2", "Choix3" => "Choix N°3");
?>

<form  action="thanks.php" method="post">

    <div>
      <label for="name">Nom :</label>
      <input type="text"  id="name"  name="user_name">
    </div>

    <div>
      <label for="firstname">Prénom :</label>
      <input type="text"  id="firstname"  name="user_firstname">
    </div>

    <div>
      <label  for="email">Courriel :</label>
        <input  type="email"  id="email"  name="user_email">
    </div>

    <div>
      <label for="phone">Portable :</label>
      <input type="tel"  id="phone"  name="user_phone">
    </div>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="conteneur">
        <h4>Choisir un sujet</h4>
        <select name="choix">
           
            <?php
           foreach( $Sujets as $k=>$v){
               echo "<option value=\"$k\">$v</option>"; 
           } 
           ?> 

        </select>
    </div>
</body>
</html>

    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>

    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
    
</form>


    
