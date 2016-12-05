<?php

  include "myloader.php";

  $myCurl = new curlOperations();
  echo '<br>This is proof that my curl class was autoloaded<br>';
  print_r($myCurl);

  echo '<br><br>This is the output for my get request using my curl class<br>';
  echo $myCurl->httpGet("http://google.com");
  echo '<br><br> This is the output for my post function using my curl class<br>';
  echo $myCurl->httpPost("http://google.com", array("name" => "Brian", "age" => "Holly"));
  
  $myCSV = new importCSV();
  echo '<br><br> This proves that my CSV import class was autoloaded<br>';
  print_r($myCSV);
  echo '<br><br> This shows the function import CSV file working after being autoloaded<br>';
  $myCSV->importCSVfile("code/test.csv");
  
  $myCSV2 = new writeCSV();
  echo '<br><br> Proof that my writeCSV class was autloaded<br>';
  print_r($myCSV2);
  $list = array("Hello, there, how", "are, you, doing");
  //$myCSV2->writeCSVfile("test2.csv", $list );
  
  $myTable = new tableGenerate();
  echo '<br><br> This proves that my table generation class was autoloaded<br>';
  print_r($myTable);
  $categories = array("Name", "Age", "Team", "Country");
  $players = array(
        array('Wayne Gretzky', '50', 'Oilers', 'Canada'),
        array('Chris Drury', '40', 'Rangers', 'United States'),
        array('Petr Nedved', '44', 'Rangers', 'Czech Republic')
    );

  echo '<br><br> This is the output when the createtable function is called from my class<br>';
  echo $myTable->createTable($categories, $players);

  $myTable2 = new csvTableGenerate();
  echo '<br><br> Proof that my csv table generation class was autoloaded<br>';
  print_r($myTable2);
  echo '<br><br> Output from my function that creates the CSV table<br>';
  echo $myTable2->readCSV("code/test.csv", false);
  
  $myLink = new linkGenerator();
  echo'<br><br> This is proof that my link generation class gets autoloaded<br>';
  print_r($myLink);
  echo '<br><br> This is the output from my returnlink function from the above class that was loaded<br>';
  echo $myLink->returnLink("www.njit.edu", "NJIT WEBSITE");
  
  


 ?>
