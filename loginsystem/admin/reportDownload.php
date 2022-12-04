<?php 
include_once('../includes/config.php');
?>
<!doctype html>
<html>
    <head>
        <title>How to Export MySQL data to CSV by Date range with PHP</title>
     
        <link href="style.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <style>
         form{
            margin-left:500px;

         }
         table {
        border-collapse: collapse;
        margin-left: 300px;
        width: 1000px;
        background-color: lightblue;
      }
         </style>
    </head>
    <body>
      <h1><center>Report Download<center></h1>
        <div >
            
            <form method='post' action='download.php'>

                <!-- Datepicker -->
                <input type='text' class='datepicker' placeholder="From date" name="from_date" id='from_date' readonly>&nbsp;&nbsp;&nbsp;&nbsp;
             <input type='text' class='datepicker' placeholder="To date" name="to_date" id='to_date' readonly>


                &nbsp;&nbsp;&nbsp;&nbsp;
                <!-- Export button -->
                <input type='submit' value='Export' name='Export'>
            </form>  
            <br>
            <br>
            <table border='1' style='border-collapse:collapse;'>
                <tr>
                    <th>ID</th>
                    <th>Temperature</th>
                    <th>Humidity</th>
                    <th>Body Temperature </th>
                    <th>HeartRate</th>
                    <th>SpO2</th>
                    <th>Date</th>
                </tr>
                <?php 
                $query = "SELECT * FROM phms ORDER BY id asc";
                $result = mysqli_query($con,$query);
                $employee_arr = array();
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $value1 = $row['value1'];
                    $value2 = $row['value2'];
                    $value3 = $row['value3'];
                    $value4 = $row['value4'];
                    $value5 = $row['value5'];
                    $dateReport = $row['reading_time'];
                    $employee_arr[] = array($id,$value1,$value2,$value3,$value4,$value5,$dateReport);
                ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $value1; ?></td>
                        <td><?php echo $value2; ?></td>
                        <td><?php echo $value3; ?></td>
                        <td><?php echo $value4; ?></td>
                        <td><?php echo $value5; ?></td>
                        <td><?php echo $dateReport; ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
            
            
        </div>

        <!-- Script -->
        <script type='text/javascript' >
        $(document).ready(function(){

            // From datepicker
            $("#from_date").datepicker({ 
                dateFormat: 'yy-mm-dd',changeYear: true,
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() + 1);
                    $("#to_date").datepicker("option", "minDate", dt);
                }
            });

            // To datepicker
            $("#to_date").datepicker({
                dateFormat: 'yy-mm-dd',changeYear: true,
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() - 1);
                    $("#from_date").datepicker("option", "maxDate", dt);
                }
            });
        });
        </script>
    </body>
</html>

