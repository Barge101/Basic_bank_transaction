<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=content-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Public Welfare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  </head>
  <body style="background-color: skyblue;height: 1000px;">
    
  <div class="container">
  <center> <h2>TRANSACTION HISTORY</h2> </center>	           
  <table class="table table-bordered table-dark">
    <thead>
        <tr>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
              </tr>
          <tbody>
      <?php
       $servername="localhost";
       $username="root";
       $password="";
       $database_name="bank_data";
       $conn=mysqli_connect($servername,$username,$password,$database_name);
      
      $q="SELECT * FROM transfer ORDER BY transid DESC";
      
      $sq=mysqli_query($conn,$q);
      while($res=mysqli_fetch_array($sq)){?>
        <tr>
          <td><?php echo $res['sender']; ?></td>
          <td><?php echo $res['receiver']; ?></td>
          <td><?php echo $res['amount']; ?></td>
        </tr>
      <?php } ?>
          </tbody>
    </table>
    <center class="btn-1">
       <a href="1.php"><button type="button" class="btn btn-lg btn-dark" name="button">View Customers</button></a>
    </center>
  </body>
</html>
