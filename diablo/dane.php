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
      <li><a href="kontakt.php">Kontakt</a></li>
      <li class="active"><a href="dane.php">Dane</a></li>
    </ul>
  </nav>
  <div class="container">
    <h1>Dane</h1>
  </div>
  <table>
    <thead>
        <tr>
            <th style="text-align: center;">Imię i nazwisko</th> 
            <th style="text-align: center;">Miejsce zamieszkania</th> 
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Jan Kowalski</td>
            <td>Osiedle Przyjaźni (Poznań)</td>
        </tr>
        <tr>
            <td>Anna Nowak</td>
            <td>Osiedle Kosmonautów (Poznań)</td>
        </tr>
        <tr>
            <td>Adam Nowak</td>
            <td>Osiedle Zwycięstwa (Poznań)</td>
        </tr>
        <tr>
            <td>Ala Nowak</td>
            <td>Osiedle Kosmonautów (Poznań) </td>
        </tr>
        <tr>
            <td>Jan Nowak</td>
            <td>Osiedle Przyjaźni (Poznań)</td>
        </tr>
        <tr>
            <td>Marcin Nowak</td>
            <td>Osiedle Zwycięstwa (Poznań)</td>
        </tr>
    </tbody>
</table>


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