<!DOCTYPE html>
<html>
<title>Date Function PHP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>PHP DATE</b></h1>
  <p>Function date php</p>
</header>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
   
    <div class="w3-container">
	
	<?php
function ComputeDiff($date1,$date2,$format)
{
$datet1 = new DateTime($date1);
$datet2 = new DateTime($date2);
$difference = $datet1->diff($datet2);
return $difference->format($format);
}
//funzione che converte la data nel formato yyyy-mm-dd
function convertToAmericanFormat($data)
{
$data= str_replace('/', '-', $data);
return date('Y-m-d', strtotime($data));
}


$date1=$_GET['date1'];
$date2=$_GET['date2'];

$date1=convertToAmericanFormat($date1);
$date2=convertToAmericanFormat($date2);

$format="%a";


echo "<br>The difference from the 2 dates is ".ComputeDiff($date1,$date2,$format)." days <br>";
?>
	
	
	
	<h2>Compute Diffrence from this Date on american format yyyy-mm-aa </h2>
<p>Insert Date on format yyyy-mm-gg <p>
<form action="compute.php" method ="get" >
  <label for="fname">Date 1:</label><br>
  <input type="text" id="date1" name="date1"><br>
  <label for="lname">Date 2:</label><br>
  <input type="text" id="date2" name="date2"><br><br>
  <input type="submit" value="Submit">
</form>
	
<h2>Add days to a date</h2>

<p>Insert Date on format yyyy-mm-gg <p>
<form action="add-date.php" method ="get" >
  <label for="fname">Date :</label><br>
  <input type="text" id="date1a" name="date1a"><br>
  <label for="lname">add days:</label><br>
  <input type="text" id="date2a" name="date2a"><br><br>
  <input type="submit" value="Submit">
</form>

<h2>Convert date</h2>



<p>Insert Date on format yyyy-mm-gg <p>
<form action="conversion.php" method ="get" >
  <label for="fname">Date :</label><br>
  <input type="text" id="date1c" name="date1c"><br>
  
  <input type="submit" value="Submit">
</form>

		
	
	
	
	
    </div>
  </div>
  <hr>

  <!-- Blog entry -->

<!-- END BLOG ENTRIES -->
</div>





<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
  
    <div class="w3-container w3-white">
      <h4><b>Contact</b></h4>
      
	     <a href="http://wwww.noirsolutions.net" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16">Noir Solutions</a>
      <a href="https://www.noirsolutions.net/guide-sui-linguaggi-programmazione/guida-tutorial-al-linguaggio-php/guida-al-linguaggio-php-lezione-1-introduzione/" class="w3-button w3-black w3-block w3-hover-teal w3-padding-16">Tutorial PHP</a>
      <a href="https://www.noirsolutions.net/categoria/seo/" class="w3-button w3-black w3-block w3-hover-dark-grey w3-padding-16">SEO</a>
      <a href="https://www.noirsolutions.net/964-2/" class="w3-button w3-black w3-block w3-hover-brown w3-padding-16">Contact</a>
	  
    </div>
  </div>





<!-- END w3-content -->
</div>




<!-- Footer -->

</body>
</html>



