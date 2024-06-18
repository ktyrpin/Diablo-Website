<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona</title>
    <link rel="stylesheet" href="logowanie.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <?php include 'motyw.php'; ?> 
    <?php include 'sesja.php'; ?>
</head>
<body>
<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li><a href="index.php">Strona główna</a></li>
        <li><a href="bohaterowie.php">Bohaterowie</a></li>
        <li><a href="kontakt.php">Kontakt</a></li>
        <li class="active"><a href="dane.php">Dane</a></li>
    </ul>
</nav>
<div class="container">
<h1>Dane</h1>
  </div>

    <h2>Formularz logowania</h2>
    <p>Aby zobaczyć zawartość strony zaloguj się!</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <form action="#">
    <label for="username">Nazwa użytkownika: admin</label><br>
    <input type="text" id="username" name="username" style="background-color: white; color: black; border-radius: 8px"><br>
    <label for="password">Hasło: admin</label><br>
    <input type="password" id="password" name="password" style="background-color: white; color: black; border-radius: 8px"><br><br>
    <input type="submit" value="Zaloguj" style="background-color: white; color: black; border-radius: 8px">
</form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $poprawna_nazwa_uzytkownika = "admin";
        $poprawne_haslo = "admin";

        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === $poprawna_nazwa_uzytkownika && $password === $poprawne_haslo) {

            session_start();
            $_SESSION['user'] = $username;
          
            header('Location: dane.php');
            exit;
        } else {
         
            echo "<p>Błędny login lub hasło.</p>";
        }
    }
    ?>
</div>
<script src="script.js"></script>
</body>
</html>
