<!DOCTYPE html>
<?php
session_start();
?>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
<style type="text/css">
  .CSSTableGenerator {
  margin:0px;padding:0px;
  width:100%;
  box-shadow: 10px 10px 5px #888888;
  border:1px solid #000000;
  
  -moz-border-radius-bottomleft:0px;
  -webkit-border-bottom-left-radius:0px;
  border-bottom-left-radius:0px;
  
  -moz-border-radius-bottomright:0px;
  -webkit-border-bottom-right-radius:0px;
  border-bottom-right-radius:0px;
  
  -moz-border-radius-topright:0px;
  -webkit-border-top-right-radius:0px;
  border-top-right-radius:0px;
  
  -moz-border-radius-topleft:0px;
  -webkit-border-top-left-radius:0px;
  border-top-left-radius:0px;
}.CSSTableGenerator table{
    border-collapse: collapse;
        border-spacing: 0;
  width:100%;
  height:100%;
  margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
  -moz-border-radius-bottomright:0px;
  -webkit-border-bottom-right-radius:0px;
  border-bottom-right-radius:0px;
}
.CSSTableGenerator table tr:first-child td:first-child {
  -moz-border-radius-topleft:0px;
  -webkit-border-top-left-radius:0px;
  border-top-left-radius:0px;
}
.CSSTableGenerator table tr:first-child td:last-child {
  -moz-border-radius-topright:0px;
  -webkit-border-top-right-radius:0px;
  border-top-right-radius:0px;
}.CSSTableGenerator tr:last-child td:first-child{
  -moz-border-radius-bottomleft:0px;
  -webkit-border-bottom-left-radius:0px;
  border-bottom-left-radius:0px;
}.CSSTableGenerator tr:hover td{
  
}
.CSSTableGenerator tr:nth-child(odd){ background-color:#ffaa56; }
.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }.CSSTableGenerator td{
  vertical-align:middle;
  
  
  border:1px solid #000000;
  border-width:0px 1px 1px 0px;
  text-align:left;
  padding:21px;
  font-size:15px;
  font-family:Arial;
  font-weight:normal;
  color:#000000;
}.CSSTableGenerator tr:last-child td{
  border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
  border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td{
    background:-o-linear-gradient(bottom, #ff7f00 5%, #bf5f00 100%);  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff7f00), color-stop(1, #bf5f00) );
  background:-moz-linear-gradient( center top, #ff7f00 5%, #bf5f00 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff7f00", endColorstr="#bf5f00");  background: -o-linear-gradient(top,#ff7f00,bf5f00);
  background-color:#ff7f00;
  border:0px solid #000000;
  text-align:center;
  border-width:0px 0px 1px 1px;
  font-size:14px;
  font-family:Arial;
  font-weight:bold;
  color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
  background:-o-linear-gradient(bottom, #ff7f00 5%, #bf5f00 100%);  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff7f00), color-stop(1, #bf5f00) );
  background:-moz-linear-gradient( center top, #ff7f00 5%, #bf5f00 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff7f00", endColorstr="#bf5f00");  background: -o-linear-gradient(top,#ff7f00,bf5f00);
  background-color:#ff7f00;
}
.CSSTableGenerator tr:first-child td:first-child{
  border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:last-child{
  border-width:0px 0px 1px 1px;
}
</style>

  <body>

    <div class="form">
      
     <div class="field-wrap">
              <label>
                Select the Bus Routes<span class="req"></span></label>
      </div>

<div class="CSSTableGenerator" align="center" >
                <form action="" method="post">
                <table>
                <tr><td>Bus Route Number</td>
                    <td>Bus Route Information</td>
                    <td>Select Route</td>
                  </tr>
                <?php
                  
                  require 'connection.php';

                  $sql = "select * from routeMaster";
                  $result = mysqli_query($con, $sql);

                  $array = array();
                  $_SESSION["route"] = $array;
                  $count = 1;
                  $temp = 1;
                  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                  {
                    $array = explode(';', $row['route']);
                    
                    echo '<tr><td>'.$row['routeId'].'</td><td>';
                    
                    for ($i=0; $i < sizeof($array); $i++) 
                    { 
                      echo '-->'.$array[$i];
                    }
                    echo '</td><td><a href="www.google.com">Click</a></td></tr>';
                  }

                ?>
                </table>

                </form>
                <form action="">
            </div>
            
             
      </div><!-- tab-content -->
      
<!-- /form -->

 
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>