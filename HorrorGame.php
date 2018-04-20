<!DOCTYPE html>
<html>
  <head>
    <title> Horror Game by Lucky Team 007 </title>
    <style>
        body {
        background-color: black;
        color: red;
      }

    </style>
  </head>
    <body>
      <?php

        echo "<p> <center> Can you survive the night? </center> </p>"

        //initialize a link to the azure database
        $link = mysqli_init();

        //if the link is not established kill the connection
        if (!$link) {
          die('mysqli_init failed');
        }
        //if there is a timeout then tell the user there was a timeout
        if (!mysqli_options($link, MYSQLI_OPT_CONNECT_TIMEOUT, 5)) {
          die('Setting MYSQLI_OPT_CONNECT_TIMEOUT failed');
        }
        //if the link was not able to connect to the azure database then tell the user there was an error
        if (!mysqli_real_connect($link, 'iss414mysql.mysql.database.azure.com', 'group7@iss414mysql', 'Iss414H62KM4!', 'group7', 3306)) {
          die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
        }


      ?>


    </body>
</html>
