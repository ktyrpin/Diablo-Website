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
      <li><a href="index.php">Strona główna</a></li>
      <li class="active"><a href="bohaterowie.php">Bohaterowie</a></li>
      <li><a href="kontakt.php">Kontakt</a></li>
      <li><a href="logowanie.php">Dane</a></li>
    </ul>
  </nav>
  <div class="container">
    <h1>Bohaterowie</h1>
</div>
  <div class="container2" style="max-width: 800px; max-height: 500px; margin: 0 auto;">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <img src="https://konsolowe.info/wp-content/uploads/2019/11/Diablo-4-barbarian.jpg"
                    alt="Barbarzyńca" style="width: 100%; max-height: 450px">
                <div class="carousel-caption">
                    <h3>Barbarzyńca</h3>
                    <div class="alert alert-info">
                        Barbarzyńcy odznaczają się niesamowitą siłą, a w ich arsenale
                        znajdzie się broń na każdą okazję. Sieją popłoch wśród napierających hord wrogów
                        straszliwymi okrzykami wojennymi.
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="https://assets-prd.ignimgs.com/2023/03/26/diablo-4-beta-druid-blogroll-1679857653617.jpg"
                    alt="Druid" style="width: 100%; max-height: 500px; height: auto;">
                <div class="carousel-caption">
                    <h3>Druid</h3>
                    <div class="alert alert-info">
                        Zmiennokształtni druidzi potrafią przemieniać się w dzikie
                        bestie, aby walczyć u boku leśnych stworzeń. Potęga ziemi, wiatru i burzy jest na ich
                        skinienie, dzięki czemu mogą władać pełnią niszczycielskiej mocy gniewu natury.
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="https://planetagracza.pl/wp-content/uploads/2022/06/diablo-iv-pg.jpg" alt="Nekromanta"
                    style="width: 100%; max-height: 500px; height: auto;">
                <div class="carousel-caption">
                    <h3>Nekromanta</h3>
                    <div class="alert alert-info">
                        Nekromantki to przebiegłe przywoływaczki, które wskrzeszają
                        krwiożercze hordy nieumarłych. Trzy filary ich mocy stanowią potężne bastiony Kości,
                        Krwi oraz Cienia, za sprawą których rzucają na kolana wrogów.
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="https://cdn1.naekranie.pl/media/cache/article-cover/2019/11/d4_5dc412babcd44.jpeg"
                    alt="Czarodziejka" style="width: 100%; max-height: 500px; height: auto;">
                <div class="carousel-caption">
                    <h3>Czarodziejka</h3>
                    <div class="alert alert-info">
                        Czarodziejki rozkazują mocom żywiołów, aby zapewnić sobie
                        zwycięstwo nad wrogami. Wykorzystując dzikość natury, miotają pioruny, sprowadzają na
                        przeciwników deszcz meteorytów, lub nabijają ich na lodowe kolce.
                    </div>
                </div>
            </div>
            
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
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
  </footer>
  <script src="script.js"></script>
</body>

</html>