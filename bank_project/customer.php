<!DOCTYPE html>
<html lang="en">
<head>
  <title>Public Welfare</title>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    body{
    margin: 0;
    padding: 0;
    
    background-color: rgb(255, 163, 127);
    }
    
.btn {
  background-color: DodgerBlue;
  align-self:center;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}


.btn:hover {
  background-color: RoyalBlue;
}
.dropbtn {
  background-color: DodgerBlue;
  align-self:center;
  border: none;
  color: white;
  width: 75px;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
  <body>
    
  <div class="container">
  <center> <h2>Customer Profile</h2> </center>	           
  <table class="table table-bordered table-dark">
    <thead>
        <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Balance</th>
                <th>Number</th>
              </tr>
          <tbody>
            <?php
             $servername="localhost";
             $username="root";
             $password="Shubham@101";
             $database_name="bank_data";

             $conn=mysqli_connect($servername,$username,$password,$database_name);

            $selectquery="select * from `customer_detail`";
            $query=mysqli_query($conn,$selectquery);
            while($res=mysqli_fetch_array($query))
            {?>
              <tr>
              <td><?php echo $res['cus_name']; ?></td>
                <td><?php echo $res['cus_email']; ?></td>
                <td><?php echo $res['curr_balance']; ?></td>
                <td><?php echo $res['mobile']; ?></td>
                <td><a href="profile.php?id=<?php echo $res['id']; ?>"><button name='view' class='btn btn-sm btn-outline-danger'>View</button></td>
              </tr>
              <?php
            }
             ?>
          </tbody>
        </thead>
      </table>
    </div>
  </body>
</html>
