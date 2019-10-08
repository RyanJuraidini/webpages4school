<html>
  <head>
  <link href="../css/result.css" rel="stylesheet">
  </head>
      <body>
  <?php
  //temp converter
  if(isset($_POST['submit'])){
    $temp=$_POST['temperature'];
    $unit=$_POST['unit'];

    if($unit=="C"){
      $result=$temp * 1.8 + 32;
      echo "&nbsp;The new temperature is: " . $result, " Fahrenheit...";
    }
    else{
      $result=($temp-32)*5/9;
      echo "&nbsp;The new temperature is: " . $result, " Celsius...";
    }
  }
//length converter
  if(isset($_POST['submit2'])){
    $length=$_POST['length'];
    $unit=$_POST['unit2'];

    if($unit=="Ft"){
      $result=$length/3.28;
      echo "&nbsp;The new length is: " . $result, "  Meter(s)...";
    }
    else{
      $result=$length*3.2808;
      echo "&nbsp;The new length is: " . $result, " Feet...";
    }
  }
//weight converter
  if(isset($_POST['submit3'])){
    $weight=$_POST['weight'];
    $unit=$_POST['unit3'];

    if($unit=="P"){
      $result=$weight/2.2046;
      echo "&nbsp;The new weight is: " . $result, " Kilogram(s)...";
    }
    else{
      $result=$weight/0.45359237;
      echo "&nbsp;The new weight is: " . $result, " Pound(s)...";
    }
  }
  //speed converter
  if(isset($_POST['submit4'])){
    $speed=$_POST['speed'];
    $unit=$_POST['unit4'];

    if($unit=="MPH"){
      $result=$speed*1.609344;
      echo "&nbsp;The new speed is: " . $result, " Kilometers per Hour...";
    }
    else{
      $result=$speed*0.621371192;
      echo "&nbsp;he new speed is: " . $result, " Miles per Hour...";
    }
  }
  ?>
      </body>
      <a href="../index.html" type="button">&nbsp;Back&nbsp;</a>
</html>
