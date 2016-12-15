<!DOCTYPE html>
<html>
    <head>
        <title>APP informatique</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Connect or Register</h2>
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
<form action="login.php">
    <input type="submit" value="Login" />
</form>
<form action="register.php">
    <input type="submit" value="Register" />
</form>

        
    </body>
</html>