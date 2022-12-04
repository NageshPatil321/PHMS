<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="refresh" content="5">
  <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

  <title> Sensor Data </title>
  <style>
    button {
      margin-left: 1200px;
      background-color: lightseagreen;
      color: white;
      padding: 10px 25px;

    }
    .btn{
      margin-left: 10px;
      background-color: black;
    }
  </style>

</head>

<body>
  <h1><center>Patient Health Monitoring Report</center></h1>
  <button onclick="window.location.href ='manage-users.php';"><i class="fa fa-file" aria-hidden="true"></i> Back</button>
  <button class="btn" onclick="window.location.href ='reportDownload.php';"><i class="fa fa-file" aria-hidden="true"></i> Download</button>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mainproject";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $sql = "SELECT * FROM phms"; /*select items to display from the sensordata table in the data base*/

  echo '<table cellspacing="5" cellpadding="5">
      <tr> 
        <th>ID</th> 
        <th>Date $ Time</th> 
        <th>Temperature &deg;C</th> 
        <th>Humidity &#37;</th>
        <th>Body Temperature &deg;C</th>  
        <th>HeartRate</th>
        <th>SpO2</th> 
     
      </tr>';


  if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
      $row_id = $row["id"];
      $row_reading_time = $row["reading_time"];
      $row_value1 = $row["value1"];
      $row_value2 = $row["value2"];
      $row_value3 = $row["value3"];
      $row_value4 = $row["value4"];
      $row_value5 = $row["value5"];


      // Uncomment to set timezone to - 1 hour (you can change 1 to any number)
      // $row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time - 1 hours"));

      // Uncomment to set timezone to + 4 hours (you can change 4 to any number)
      //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time + 4 hours"));

      echo '<tr> 
                <td>' . $row_id . '</td> 
                <td>' . $row_reading_time . '</td> 
                <td>' . $row_value1 . '</td> 
                <td>' . $row_value2 . '</td>
                <td>' . $row_value3 . '</td> 
                <td>' . $row_value4 . '</td>
                <td>' . $row_value5 . '</td>  
                          
              </tr>';
    }
    $result->free();
  }

  $conn->close();
  ?>
  </table>

</body>

</html>

</body>

</html>