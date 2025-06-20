<?php
// require_once("header.php");
require_once(APPPATH.'Views/templates/header.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link href="assets/styles.css" rel="stylesheet" />
    <title>Login</title>
</head>

<body>
    <div class="container">
    
    <form method="POST" action="/login">
        
        <label for="login">Identifiant</label>
        <p></p>
        <input id="login" name="login" type="text" />
        <p></p>   
        <label for="password">Mot de passe</label>
        <p></p>
        <input id="password" name="password" type="password" />
        <p></p>  
        <button type="submit">Se connecter</button>
        
    </div>   
    </form>
</body>

</html>
<?php
require_once(APPPATH.'Views/templates/footer.php');
?>