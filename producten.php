<?php
require("inc/connection.php");

$sqlafmeting = "SELECT * FROM afmeting";
$sqlpoten = "SELECT * FROM poten";
$sqlhoofdbord = "SELECT * FROM hoofdbord";
$sqlmatraspocket = "SELECT * FROM matraspocket";
$sqltopperligcomfort = "SELECT * FROM topperligcomfort";
$sqltoppertype = "SELECT * FROM toppertype";
$resultafmeting = $conn->query($sqlafmeting);
$resultpoten = $conn->query($sqlpoten);
$resulthoofdbord = $conn->query($sqlhoofdbord);
$resultmatraspocket= $conn->query($sqlmatraspocket);
$resulttopperligcomfort= $conn->query($sqltopperligcomfort);
$resulttoppertype= $conn->query($sqltoppertype);


$sql = "SELECT * FROM afmeting";
$materiaal = "SELECT * FROM stoffering";

$sql2 = "SELECT * FROM `stoffering` inner join `colors` on `stoffering`.`stofid` = `colors`.`materiaalid`";
$resource = $conn->query($sql2);
$kleurenenmaterialen = array();
while ($row = $resource->fetch_assoc()) {
  $kleurenenmaterialen[]= $row;
}

$resultmateriaal = $conn->query($materiaal);
$result = $conn->query($sql);
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <link rel="icon" href="img/logo.png" type="img/logo.jpg"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title>De Slaapmeesters</title>
  </head>
  <body>

    <div class="container">

  <div class="jumbotron">
    <a href="index.php">
   <img class="img-responsive logo" width="700" height="350" src="img/deslaapmeesters.png">
   </a>
    <p>Ervaring van toen, kennis van nu en een scherpe blik op de toekomst.</p>

  </div>
  <nav class="navbar navbar-expand-lg navbar-light navcolor">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="producten.php">Producten</a>
        </li>
      </ul>
      <div class="faPosition">
        <a href="https://www.facebook.com/De-Slaapmeesters-255553631589175/" class="fab fa-facebook"></a>
        <a href="https://www.instagram.com/slaapmeesters/" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-pinterest-square"></a>
      </div>
    </div>
  </nav>


	<div class="container-slider">
		        <div id="myCarousel" class="carousel slide" data-ride="carousel">
	            <ol class="carousel-indicators">
	                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
	                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
	                <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
	            </ol>
	            <div class="carousel-inner">
	                <div class="carousel-item">
	                    <img class="foto" src="img\bed.jpg" alt="" style="width:100%;">
	                    <div class="carousel-caption">
	                        <h3></h3>
	                        <p></p>
	                    </div>
	                </div>
	                <div class="carousel-item">
	                    <img  class="foto" src="img\bed.jpg" alt="" style="width:100%;">
	                    <div class="carousel-caption projectNameColor">
	                        <h3> </h3>
	                        <p></p>
	                    </div>
	                </div>
	                <div class="carousel-item active">
	                    <img  class="foto" src="img\bed.jpg" alt="" style="width:100%;">
	                    <div class="carousel-caption projectNameColor">
	                        <h3></h3>
	                        <p></p>
	                    </div>
	                </div>
	            </div>
	            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
	                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	                <span class="sr-only">Previous</span>
	            </a>
	            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
	                <span class="carousel-control-next-icon" aria-hidden="true"></span>
	                <span class="sr-only">Next</span>
	            </a>
	        </div>
	    </div>
<br />
<div class="jumbotron">
 <img class="img-responsive logo backColor" width="500" height="350">
 <h3 class="size">Producten</h3>
  <div class="ownStyle">Bij De Slaapmeesters ontwerpt de klant zelf een boxspring.
    Zo kunt u kiezen tussen 165 verschillende stofferingen onderverdeeld in 6 materialen. Ook de afmetingen, ligcomfort en poten worden door de klant gekozen.
    Dat alles wordt dan geproduceert door vakmannen met samen 100 jaar ervaring en is het binnen 4 tot 5 weken bij u thuis tegen een eerlijke prijs.
</div>

</script>
<img class="img-responsiver imagePosition" width="500" height="350" src="img/Schermafbeelding 2017-12-20 om 14.22.22_resized.png">
</div>
<div class="container">
  <div class="col-md-4 mb-4 align-self-center">
    <div id="comfort">
      <div class="card">
         <div class="card-body cardColor">
            <div class="card-title ">
              <a onclick="document.getElementById('comfort').style.display='block';
               document.getElementById('excellent').style.display='none';
                document.getElementById('backbtn').style.display='block';
                 document.getElementById('textPositionOrder2').style.display='block';
                "><img class="card-img-top click "  src="img/20170912_De_Slaapmeesters-DSC_5302_thumb.jpg" alt="Card image cap"></a>
  <div class="card-body">
    <p class="card-text textColor">Comfort</p>
    <div id="backbtn">
    <a href="producten.php">
    <button type="button" class="btn btn-dark">Back</button>
    </a>
  </div>

         </div>
      </div>
  </div>
</div>
</div>
</div>
<div id="textPositionOrder2">
  <form action="bestelling.php" method="post">
    <div id="cointainerOrderInfo">
    <label class="mt-4 ml-5">Afmetingen:</label>
    <select class="text-dark" name="afmeting">
    <?php
  foreach ($resultafmeting as $afmeting ) {
    echo "<option  value='". $afmeting['afmetingid']. "'>".$afmeting['lengte']."x".$afmeting['breedte']."</option>";
  }
     ?>
   </select><br />
   <div class="ml-5 textStyle" id="poten">
     <label class="textColorOrder mb-3 mt-3">Poten:</label>
  <br />
     <?php
   foreach ($resultpoten as $poten ) {
     echo "<label>".$poten['materiaal']." ".$poten['diepte']."cm</label><input required type='radio' name='poten' value='". $poten['potenid']. "'><br />";
   }

      ?>

      <label class="textColorOrder mb-3 mt-3">Hoofdbord</label><br />
      <label class="textColorOrder">hoogte: 110</label><br />
      <?php
    foreach ($resulthoofdbord as $hoofdbord ) {
      echo "<label>diepte: ".$hoofdbord['diepte']."cm</label><input required type='radio' name='hoofdbord' value='". $hoofdbord['hoofdbordid']. "'><br />";
    }
       ?><br />
       <label class="textColorOrder mb-3 mt-3">Matraspocket:</label>
       <div id="tabelStyle">
       <table>
         <tr>
          <th>
          </th>
           <th>Links</th>
           <th>Rechts</th>
         </tr>
        <tr>
            <td>
              <label>Medium</label>
              <label>Stevig</label>
              <label>Extra stevig</label>
            </td>
            <td>
              <input required type="radio" name="matras_pocket_links" value="1" /><br />
              <input type="radio" name="matras_pocket_links" value="2" /><br />
              <input type="radio" name="matras_pocket_links" value="3" /><br />
            </td>
            <td>
              <input required type="radio" name="matras_pocket_rechts" value="1" /><br />
              <input type="radio" name="matras_pocket_rechts" value="2" /><br />
              <input type="radio" name="matras_pocket_rechts" value="3" /><br />
            </td>
        </tr>
        <tr>
          <td>

          </td>
        </tr>
      </table>
    </div>
      <label class="textColorOrder mb-3 mt-3">Topperligcomfort:</label><br />
      <?php
    foreach ($resulttopperligcomfort as $topperligcomfort ) {
      echo "<label> ".$topperligcomfort['waarde']."</label><input required type='radio' name='topperligcomfort' value='". $topperligcomfort['id']. "'><br />";
    }
       ?>
       <label class="textColorOrder mb-3 mt-3">Toppertype:  </label><br />
       <?php
     foreach ($resulttoppertype as $toppertype ) {
       echo "<label> ".$toppertype['waarde']."</label><input required type='radio' name='toppertype' value='". $toppertype['id']. "'><br />";
     }
        ?>


        </select><br>

        <label>Materiaal</label>
       <select class="text-dark" id="materiaal" onchange="displayBlocks()" required name="materiaal">
              <?php
            foreach ($resultmateriaal as $materiaal ) {

              echo "<option value='".$materiaal['stofid']."'>".$materiaal['naam']."</option>";
            }
               ?>
             </select><br>
             <script>
        function displayBlocks() {
            var x = document.getElementById("materiaal").value;
            if (x == 1) {
               document.getElementById("Board").style.display='block';
               document.getElementById("Jeep").style.display='none';
               document.getElementById("Pixel").style.display='none';
               document.getElementById("Crush").style.display='none';
               document.getElementById("Radar").style.display='none';
            }
            else if (x == 2) {
               document.getElementById("Jeep").style.display='block';
               document.getElementById("Board").style.display='none';
               document.getElementById("Pixel").style.display='none';
               document.getElementById("Crush").style.display='none';
               document.getElementById("Radar").style.display='none';
            }

            else if (x == 3) {
               document.getElementById("Pixel").style.display='block';
               document.getElementById("Jeep").style.display='none';
               document.getElementById("Board").style.display='none';
               document.getElementById("Crush").style.display='none';
               document.getElementById("Radar").style.display='none';
            }
            else if (x == 4) {
               document.getElementById("Crush").style.display='block';
               document.getElementById("Board").style.display='none';
               document.getElementById("Pixel").style.display='none';
               document.getElementById("Jeep").style.display='none';
               document.getElementById("Radar").style.display='none';
            }
            else if (x == 5) {
               document.getElementById("Radar").style.display='block';
               document.getElementById("Board").style.display='none';
               document.getElementById("Pixel").style.display='none';
               document.getElementById("Jeep").style.display='none';
               document.getElementById("Crush").style.display='none';
            }
        }
        </script>

           <div id="Board" style="display:none;">

             <?php
             $sqlBoard = "SELECT * FROM colors WHERE materiaalid = 1";
             $result = $conn->query($sqlBoard);

             while ($row = $result->fetch_assoc())
             {
               echo "<div class='fabricimg'>";
               echo "<img src='". $row['plaatje'] ."'width='50px' height='50px'/>";
               echo "<div class='name'>" .$row["kleurnaam"]."</div>";
               echo "</div>";
               ?>
               <input type="radio" required name="kleur" value="<?php echo $row["colorid"] ?>"/>
               <?php
             }
              ?>
           </div>
           <div  id="Jeep" style="display:none;">
             <?php
             $sqlJeep = "SELECT * FROM colors WHERE materiaalid = 2";
             $result = $conn->query($sqlJeep);

             while ($row = $result->fetch_assoc())
             {
               echo "<div class='fabricimg'>";
               echo "<img src='". $row['plaatje'] ."'width='50px' height='50px'/>";
               echo "<div class='overlay'>";
               echo "<div class='hoverimg'><img src='". $row['plaatje'] ."' width='120px' height='120px'><br>";
               echo "<div class='name'>" .$row["kleurnaam"]."</div>";
               echo "</div>";
               echo "</div>";
               ?>
               <input type="radio" name="kleur" value="<?php echo $row["colorid"] ?>"/>
               <?php
               echo "</div>";
             }
              ?>
           </div>
           <div id="Pixel" style="display:none;">
             <?php
             $sqlPixel = "SELECT * FROM colors WHERE materiaalid = 3";
             $result = $conn->query($sqlPixel);

             while ($row = $result->fetch_assoc())
             {
               echo "<div class='fabricimg'>";
               echo "<img src='". $row['plaatje'] ."'width='50px' height='50px'/>";
               echo "<div class='overlay'>";
               echo "<div class='hoverimg'><img src='". $row['plaatje'] ."' width='120px' height='120px'><br>";
               echo "<div class='name'>" .$row["kleurnaam"]."</div>";
               echo "</div>";
               echo "</div>";
               ?>
               <input type="radio" name="kleur" value="<?php echo $row["colorid"] ?>"/>
               <?php
               echo "</div>";
             }
              ?>
           </div>
           <div id="Crush" style="display:none;">
             <?php
             $sqlCrush = "SELECT * FROM colors WHERE materiaalid = 4";
             $result = $conn->query($sqlCrush);

             while ($row = $result->fetch_assoc())
             {
               echo "<div class='fabricimg'>";
               echo "<img src='". $row['plaatje'] ."'width='50px' height='50px'/>";
               echo "<div class='overlay'>";
               echo "<div class='hoverimg'><img src='". $row['plaatje'] ."' width='120px' height='120px'><br>";
               echo "<div class='name'>" .$row["kleurnaam"]."</div>";
               echo "</div>";
               echo "</div>";
               ?>
               <input type="radio" name="kleur" value="<?php echo $row["colorid"] ?>"/>
               <?php
               echo "</div>";
             }
              ?>
           </div>
           <div id="Radar" style="display:none;">
             <?php
             $sqlRadar = "SELECT * FROM colors WHERE materiaalid = 5";
             $result = $conn->query($sqlRadar);

             while ($row = $result->fetch_assoc())
             {
               echo "<div class='fabricimg'>";
               echo "<img src='". $row['plaatje'] ."'width='50px' height='50px'/>";
               echo "<div class='overlay'>";
               echo "<div class='hoverimg'><img src='". $row['plaatje'] ."' width='120px' height='120px'><br>";
               echo "<div class='name'>" .$row["kleurnaam"]."</div>";
               echo "</div>";
               echo "</div>";
               ?>
               <input type="radio" name="kleur" value="<?php echo $row["colorid"] ?>"/>
               <?php
               echo "</div>";
             }
              ?>
           </div>
      <button type="submit" class="btn btn-dark mb-5">Bestel</button>
        </div>
        <div class="containerklant">
          <label class="textStyle">Klantgegevens</label><br />
          <label>Naam</label>
           <input class="text-dark" required autocomplete="off" type="text" name="name"/><br>
           <label>Adres</label>
           <input class="text-dark" required autocomplete="off" type="text" name="adres"/><br>
           <label>Postcode</label>
           <input class="text-dark" required autocomplete="off" type="text" name="postcode"/><br>
           <label>Email</label>
           <input class="text-dark" required autocomplete="off" type="email" name="email"/><br>
           <label>Telefoonnr</label>
           <input class="text-dark" required autocomplete="off" type="number" name="telefoonnr"/><br>
        </div>
  </form>
</div>

  <div class="col-md-4 mb-4 align-self-center">

      <div id="excellent">
      <div class="card">
         <div class="card-body cardColor">
            <div class="card-title">
              <a onclick="document.getElementById('comfort').style.display='none';
               document.getElementById('excellent').style.display='none';
               document.getElementById('backbtn2').style.display='block';
                document.getElementById('backbtn3').style.display='block';
               document.getElementById('opties').style.display='block';
               document.getElementById('textPositionOrder').style.display='block';
              "><img class="card-img-top click"  src="img/20170912_De_Slaapmeesters-DSC_5284_thumb.jpg" alt="Card image cap"></a>
  <div class="card-body">
    <p class="card-text textColor">Excellent</p>
    <div id="backbtn2">
    <a href="producten.php">
    <button type="button" class="btn btn-dark">Back</button>
    </a>
  </div>
         </div>
      </div>
  </div>
</div>

</div>
</div>
</div>
</div>
<div class="col-md-4 mb-4 align-self-center row">

    <div id="opties">
    <div class="card">
       <div class="card-body cardColor">
          <div class="card-title">
            <img class="card-img-top click"  src="img/20170912_De_Slaapmeesters-DSC_5284_thumb.jpg" alt="Card image cap"></a>
<div class="card-body">
  <div id="backbtn3">
  <a href="producten.php">
  <button type="button" class="btn btn-dark">Back</button>
  </a>
</div>
<div class="textPlace">

</div>
       </div>
    </div>
</div>
</div>

</div>
</div>
<div id="textPositionOrder">
  <form action="bestelling.php" method="post">
    <label>Afmetingen</label>
    <select name="afmeting">
    <?php
  foreach ($resultafmeting as $afmeting ) {
    echo "<option value='". $afmeting['afmetingid']. "'>".$afmeting['lengte']."x".$afmeting['breedte']."</option>";
  }
     ?>
   </select><br />
     <label>Poten</label>
     <label>Materiaal:</label><br />
     <?php
   foreach ($resultpoten as $poten ) {
     echo "<label>".$poten['materiaal']." ".$poten['diepte']."cm</label><input type='radio' name='poten' value='". $poten['potenid']. "'><br />";
   }

      ?>
      <label>Hoofdbord</label>
      <label>hoogte: 110</label><br />
      <?php
    foreach ($resulthoofdbord as $hoofdbord ) {
      echo "<label>diepte: ".$hoofdbord['diepte']."cm</label><input type='radio' name='hoofdbord' value='". $hoofdbord['hoofdbordid']. "'><br />";
    }
       ?><br />
       <label>Matraspocket</label>
       <div id="tabelStyle">
       <table>
         <tr>
          <th>
          </th>
           <th>Links</th>
           <th>Rechts</th>
         </tr>
        <tr>
            <td>
              <label>Medium</label>
              <label>Stevig</label>
              <label>Extra stevig</label>
            </td>
            <td>
              <input type="radio" name="matras_pocket_links" value="1" /><br />
              <input type="radio" name="matras_pocket_links" value="2" /><br />
              <input type="radio" name="matras_pocket_links" value="3" /><br />
            </td>
            <td>
              <input type="radio" name="matras_pocket_rechts" value="1" /><br />
              <input type="radio" name="matras_pocket_rechts" value="2" /><br />
              <input type="radio" name="matras_pocket_rechts" value="3" /><br />
            </td>
        </tr>
        <tr>
          <td>

          </td>
        </tr>
      </table>
    </div>
      <label>Topperligcomfort</label>
      <label>waarde:</label><br />
      <?php
    foreach ($resulttopperligcomfort as $topperligcomfort ) {
      echo "<label> ".$topperligcomfort['waarde']."</label><input type='radio' name='topperligcomfort' value='". $topperligcomfort['id']. "'><br />";
    }
       ?>
       <label>Toppertype</label>
       <label>waarde:</label><br />
       <?php
     foreach ($resulttoppertype as $toppertype ) {
       echo "<label> ".$toppertype['waarde']."</label><input type='radio' name='toppertype' value='". $toppertype['id']. "'><br />";
     }
        ?>
        <input type="submit" value="bestel" />
  </form>
</div>
</div>

</div>
</div>

<!--Footer-->
      <footer class="page-footer font-medium stylish-color-dark pt-4 mt-4">

          <!--Footer Links-->
          <div class="container text-center text-md-left">

              <!-- Footer links -->
              <div class="row text-center text-md-left mt-3 pb-3">

                  <!--First column-->
                  <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                      <h4 class="text-uppercase mb-4 font-weight-bold">De Slaapmeesters</h4>
                      <h5 >Ervaring van toen, kennis van nu en een scherpe blik op de toekomst.</h5>
                        <h5>Wij staan voor:
                          <li>Maatwerk</li>
                          <li>Vakmanschap</li>
                          <li>Korte levertijden</li>
                        </h5>
                  </div>
                  <!--/.First column-->

                  <hr class="w-100 clearfix d-md-none">

                  <!--Second column-->

                  <!--/.Second column-->

                  <hr class="w-100 clearfix d-md-none">

                  <!--Third column-->
                  <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                      <h4 class="text-uppercase mb-4 font-weight-bold">Menu</h4>
                      <h5><a href="index.php">Home</a></p>
                      <p><a href="producten.php">Producten</a></p>
                  </div>
                  <!--/.Third column-->

                  <hr class="w-100 clearfix d-md-none">

                  <!--Fourth column-->
                  <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                      <h4 class="text-uppercase mb-4 font-weight-bold">Openingstijden</h4>
                      <h5>Maandag&emsp; 9:00 - 17:00</h5>
                      <h5>Dinsdag&emsp; &nbsp; 9:00 - 17:00</h5>
                      <h5>Woensdag&nbsp;&nbsp; 9:00 - 17:00</h5>
                      <h5>Donderdag&nbsp;&nbsp; 9:00 - 17:00</h5>
                      <h5>Vrijdag&emsp;&emsp;&nbsp; 9:00 - 17:00</h5>
                      <h5>Zaterdag&emsp;&nbsp; 10:00 - 16:00</h5>
                      <h5>Zondag&emsp;&emsp; en in de avond uren op afspraak</h5>
                  </div>
                  <!--/.Fourth column-->

                  <hr class="w-100 clearfix d-md-none">

                  <!--Fourth column-->
                  <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                      <h4 class="text-uppercase mb-4 font-weight-bold">Contact</h4>
                      <h5><i class="fa fa-home mr-3"></i> Holtmeulen 3a, 5841 BX Oploo</p>
                      <p><i class="fa fa-envelope mr-3"></i> info@deslaapmeesters.nl</p>
                      <p><i class="fa fa-phone mr-3"></i> 0485-209003</p>
                      <p><i class="fa fa-print mr-3"></i> www.deslaapmeesters.nl<p>
                  </div>
                  <!--/.Fourth column-->
              </div>
              <!-- Footer links -->
              <hr>
              <div class="row py-3 d-flex align-items-center">
                  <!--Grid column-->
                  <div class="col-md-8 col-lg-8">
                      <!--Copyright-->
                      <h5 class="text-center text-md-left grey-text">© 2018 Copyright: De Slaapmeesers</p>
                      <!--/.Copyright-->
                  </div>
                  <!--Grid column-->
                  <!--Grid column-->
                  <div class="col-md-3 col-lg-3 ml-lg-3">
                      <!--Social buttons-->
                      <div class="text-center text-md-right">
                          <ul class="social list-unstyled list-inline">
                            <a href="https://www.facebook.com/De-Slaapmeesters-255553631589175/" class="mr-3 fab fa-facebook"></a>
                            <a href="https://www.instagram.com/slaapmeesters/" class="mr-3 fab fa-instagram"></a>
                            <a href="#" class="mr-3 fab fa-pinterest"></a>
                          </ul>
                      </div>
                      <!--/.Social buttons-->
                  </div>
                  <!--Grid column-->
              </div>
          </div>
      </footer>
      <!--/.Footer-->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
