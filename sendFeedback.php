<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>

  </head>
  <body style="background-color: #5F87B1;" topmargin="0" bottommargin="0">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="f2" onSubmit="return validateForm()">
    <div id="base" class="">

        <div id="u1" class="text" style="visibility: visible;">
          <h1 style="font-family:Verdana, Geneva, sans-serif"><span>Feedback Page</span></h1>
        </div>
      </div>

        <div id="u7" class="text" style="visibility: visible;">
          <h3 style="font-family:Verdana, Geneva, sans-serif"><span>Email address:</span></h3>
        </div>
      </div>
      
      <div>
        <input id="u2_input" type="email" value="" name="email"/>
      </div>

        <div id="u9" class="text" style="visibility: visible;">
          <h3 style="font-family:Verdana, Geneva, sans-serif"><span>Service Date:</span></h3>
        </div>
      </div>
      
      <div>
        <input id="u3_input" type="date" value="" name="date"/>
      </div>

        <div id="u11" class="text" style="visibility: visible;">
          <h3 style="font-family:Verdana, Geneva, sans-serif"><span>Service Time:</span></h3>
        </div>
      </div>
      
      <div>
        <input id="u4_input" type="time" value="" name="time"/>
      </div>

      <br>
      
      <div id="u11" class="text" style="visibility: visible;">
          <h5 style="font-family:Verdana, Geneva, sans-serif"><span>Enter feedback below:</span></h5>
        </div>
      
        <textarea id="u5_input"input style="height:200px;width:500px" name="feedback"></textarea>
      
      <br>
      <br>

      <div>
        <input id="u12_input" type="submit" value="Submit" name="s"/>
      </div>
    </div>
</form>
      
      <?php
if (isset($_POST['s'])) {
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $feedback = $_POST['feedback'];

    $connection = mysqli_connect('localhost', 'root', '', 'bus_rev');

    mysqli_query($connection, "INSERT INTO `feedback` (`email`, `date`, `time`, `feedback`) VALUES ($email, $date, $time, $feedback)");

    $id = mysqli_insert_id($connection);
    $history = $id . 'user_history';
    
    echo("Feedback sent successfully");
    echo('<br><a href="localhost/bus_res/myBookings.php">Back to My Bookings</a>');
}
?>
  </body>
</html>
