<?php

// function jordi($wessel, $exit = false)
// {
//   echo "<pre>";
//   var_dump($wessel);
//   echo "</pre>";
//   if($exit)
//   {
//     die("houdoe en bedankt");
//   }
// }
//
// if($_SERVER['REQUEST_METHOD'] == "POST")
// {
//   jordi($_POST, 0);
// }


require("inc/connection.php");

$afmeting = $_POST['afmeting'];
$poten = $_POST['poten'];
$hoofdbord = $_POST['hoofdbord'];
$matraspocketLinks = $_POST['matras_pocket_links'];
$matraspocketRechts = $_POST['matras_pocket_rechts'];
$topperligcomfort = $_POST['topperligcomfort'];
$toppertype = $_POST['toppertype'];

$naam = $_POST['name'];
$adres = $_POST['adres'];
$postcode = $_POST['postcode'];
$email = $_POST['email'];
$telefoonnr = $_POST['telefoonnr'];
$stoffering = $_POST['materiaal'];
$kleur = $_POST['kleur'];

$sqlklant = "INSERT INTO klant (naam, adres, postcode, email, telefoonnr) VALUES ('$naam', '$adres', '$postcode', '$email', '$telefoonnr')";


if ($conn->query($sqlklant) === true) {
  $last_id = $conn->insert_id;
   echo "New record created successfully. Last inserted ID is: " . $last_id;

   $sqlinsert = "INSERT INTO bestelformulier (klantnr, afmetingid, potenid, hoofdbordid, matraspocketLid, matraspocketRid, topperligcomfortid, toppertypeid, stofferingid, kleurid, dateOrder)
   VALUES ('$last_id', '$afmeting', '$poten', '$hoofdbord', '$matraspocketLinks', '$matraspocketRechts', '$topperligcomfort', '$toppertype', '$stoffering', $kleur, NOW())";
}
else {
  echo "Error: ". $sqlklant . "<br>" . $conn->error;
  die();
}

if ($conn->query($sqlinsert) === true) {

  header("location: bestelling.php?succes=1");
  echo "";
}
else {
  echo "Error: ". $sqlinsert . "<br>" . $conn->error;
  die();
}


 ?>
