<!DOCTYPE html>
<html>
    <head>
        <title>APP informatique</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Register</h2>
        <p>
            <?php 



try
{
    $bdd = new PDO('mysql:host=localhost;dbname=domisep;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>


<form action="action_register.php" method="post">



        <p>
        <label for="username">username</label> :  <input type="text" name="username" id="username" /><br />
        <label for="name">password</label> :  <input type="text" name="password" id="password" /><br />
        <label for="name">password_confirmation</label> :  <input type="text" name="password_confirmation" id="password_confirmation" /><br />
        <input type="submit" value="Envoyer" />
    </p>
    </form>

        
    </body>
</html>