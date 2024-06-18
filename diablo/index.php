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

<body>

<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Strona główna</a></li>
      <li><a href="bohaterowie.php">Bohaterowie</a></li>
      <li><a href="kontakt.php">Kontakt</a></li>
      <li><a href="logowanie.php">Dane</a></li>
    </ul>
  </nav>
    <div class="container">
      <h1>Diablo IV</h1>
    <link rel="stylesheet" id="pageStyle" href="<?php echo ($style === 'dark') ? 'dark.css' : 'light.css'; ?>">
        <form id="styleForm">
            <label>
                <input type="radio" name="style" value="light" <?php echo ($style === 'light') ? 'checked' : ''; ?>>
                Jasny styl
            </label>
            <label>
                <input type="radio" name="style" value="dark" <?php echo ($style === 'dark') ? 'checked' : ''; ?>>
                Ciemny styl
            </label>
            <button type="submit" class="custom-button">Zastosuj</button>

        </form>
  </div>

</div>
  <div class="row">
    <div class="col-sm-4">
        <div class="img-zoom-container">
            <img id="myimage" src="https://blz-contentstack-images.akamaized.net/v3/assets/blt9c12f249ac15c7ec/blt197bfce3b1cb7880/6286c2cccf13bb4bbe6278ad/open-graph.jpg" width="500px" style="margin-left: 20px;">
        </div>
    </div>

    <div class="col-sm-4" style="text-align: center;">
            <h3>PIEKŁO CZEKA NA WSZYSTKICH</h3>
            <p>Diablo® IV to niezrównana fabularna gra akcji pełna niekończących się zastępów Piekła do pokonania, niezliczonych umiejętności do opanowania, koszmarnych podziemi do przemierzenia i legendarnych łupów do zdobycia. Podejmij się kampanii w pojedynkę lub w towarzystwie znajomych. Daj się oczarować przepięknej, mrocznej scenerii lub wyrusz naprzeciw przygodzie i zanurz się w rozgrywce w otwartym świecie, w którym gracze gromadzą się w miastach, aby handlować, łączą się w grupy, aby walczyć z bossami, lub przechodzą do stref walk między graczami (PvP), aby poddać próbie swe umiejętności w konfrontacji z innymi.</p>
        </section>
   

</div>
  <footer>
    <hr>
    <h2>Informacje o użytkowniku:</h2>
    <p>Liczba wyświetleń strony:
      <?php echo $_SESSION['page_views']; ?>
    </p>
    <p>Data rozpoczęcia sesji PHP:
      <?php echo $session_start_time; ?>
    </p>
    <script>
    var form = document.getElementById('styleForm');
    var radios = form.elements['style'];

    form.addEventListener('change', function() {
        var selectedStyle = form.querySelector('input[name="style"]:checked').value;
        document.getElementById('pageStyle').href = selectedStyle + '.css';
        document.cookie = 'style=' + selectedStyle + '; path=/; max-age=' + (30 * 24 * 60 * 60);
    });
</script>
  </footer>
  </div>
  <script src="script.js"></script>
</body>

</html>