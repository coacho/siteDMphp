<!DOCTYPE html> 
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Manager Entité</title>
        <meta name="viewport" content="width=device-width"> 
        <link href="View/style.css" rel="stylesheet" type="text/css"> 
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Glegoo" rel="stylesheet"> 
    </head>
    <body>
        <header>
            <h1>Login</h1>
        </header>
        <hr/>
        <section id="main-section">
            <form action="index.php?ctrl=UserController&action=doLogin" method="POST">
            <label>Mail :</label><br/>
            <input type="email" name="email"placeholder="Mail.."/><br>
            <label>Mot de passe :</label><br/>
            <input type="password" name="password"placeholder="Mot de passe.."/><br>
            <p>
                <input type="submit" class="submit-btn" value="Connexion">
            </p> 
            </form>
        </section>
    </body>
</html>