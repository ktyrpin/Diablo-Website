<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Strona</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php include 'motyw.php'; ?> 
<?php include 'sesja.php'; ?>
</head>
<style>
    table {
    border-collapse: collapse;
    width: 50%;
    margin: 0 auto;
    border-radius: 8px; 
    overflow: hidden; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    th, td {
    border-color: black;
    text-align: center;
    padding: 8px;
    }
</style>
<body>
<nav class="navbar navbar-inverse">
<ul class="nav navbar-nav">
<li><a href="index.php">Strona główna</a></li>
<li><a href="bohaterowie.php">Bohaterowie</a></li>
<li class="active"><a href="kontakt.php">Kontakt</a></li>
<li><a href="logowanie.php">Dane</a></li>
</ul>
</nav>
<div class="container">
<h1>Kontakt</h1>
  </div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kontakt";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM użytkownicy";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Stanowisko</th>";
    echo "<th>Imię i nazwisko</th>";
    echo "<th>Numer telefonu</th>";
    echo "</tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["Stanowisko"] . "</td>";
        echo "<td>" . $row["Imię i nazwisko"] . "</td>";
        echo "<td>" . $row["Numer telefonu"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

<div class="container">
    <div class="row">

            <h3 class="my-5">Formularz kontaktowy</h3>

            <form action="send.php" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Adres e-mail</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label">Tytuł wiadomości</label>
                    <input type="text" class="form-control" id="subject" name="subject">
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Treść wiadomości</label>
                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary" type="submit" name="send">Wyślij formularz</button>
                </div>
            </form>

        </div>
    </div>
</div>

</form>

<footer>
<hr>
<h2>Informacje o użytkowniku:</h2>
<p>Liczba wyświetleń strony:
<?php echo $_SESSION['page_views']; ?>
</p>
<p>Data rozpoczęcia sesji PHP:
<?php echo $session_start_time; ?>
</p>
</footer>
<script src="script.js"></script>
</body>

</html>

