<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Public Welfare</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
      body{
    margin: 0;
    padding: 0;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    background-color: aquamarine;;
    }
.center{
 
    max-width: 800px;
     max-height: 700px;
     padding: 30px;
    background: white;
    border-radius: 10px;
    margin: auto;
  }
.center h1{
    text-align: center;
    padding: 0 0 20x 0;
    
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  max-height: 400px;
  margin: auto;
  text-align: center;
  font-family: arial;
  
}

.title {
  color: grey;
  font-size: 18px;
}
.title2 {
  
  font-size: 30px;
}
</style>
  
  </head>
  <body>
  
    <div class="subbody">
      <h2 class="vheading" align="center">Profile</h2>
            <?php
            $servername="localhost";
            $username="root";
            $password="";
            $database_name="bank_data";

            $conn=mysqli_connect($servername,$username,$password,$database_name);
            $id=$_GET['id'];
            $squery="select * from customer_detail where id=$id";
            $q=mysqli_query($conn,$squery);
            while($res=mysqli_fetch_array($q))
            {?>
                <div class="card">
            <img src="profile.png" alt="John" style="width:50%;align-self:center;">
            <h1><?php echo $res['cus_name']; ?></h1>
            <p class="title"><?php echo $res['cus_email']; ?></p>
            <p class="title2"><b>Balance:<?php echo $res['curr_balance']; ?>/-</b></p><br>
            
            </div>
            <?php
          } ?>
           
          <br><br>
              <form class="center" action="" method="post">
              <h2 class="vheading" align="center">Transaction</h2>
                <div class="form" >
                  <select class="form-select" placeholder="transfer to" name="rid">
                    <option selected hidden disabled >TRANSFER TO</option>
                    <?php
                    $servername="localhost";
                    $username="root";
                    $password="";
                    $database_name="bank_data";

                    $conn=mysqli_connect($servername,$username,$password,$database_name);
                    $selectquery="select * from customer_detail where id NOT LIKE $id";
                    $query=mysqli_query($conn,$selectquery);
                    while($res=mysqli_fetch_array($query)){?>
                      <option name="rid" value="<?php echo $res['id']; ?>"><?php echo $res['cus_name']; ?></option>
                      <?php } ?>
                  </select>
                </div>
                <div class="mb-3 row" >
                  <label for="amount" class="col-sm-2 col-form-label" id="amount">Amount</label>
                  <div class="col-sm-10">
                  <input required type="text" placeholder="amount" name="tamount" id="amountbtn" class="form-control" style="margin-top:20px; width:300px;">
                  </div>
                </div>
                    <div class="button-container" >
                  <center><button name="transfer" class="btn btn-lg btn-dark tbtn" style="padding-left:154px; padding-right:154px;">Transfer</button></center>
                </div>
              <?php
              $servername="localhost";
              $username="root";
              $password="";
              $database_name="bank_data";

              $conn=mysqli_connect($servername,$username,$password,$database_name);
              if(isset($_POST['transfer']))
              {
                $from=$_GET['id'];
                $rid=$_POST['rid'];
                $tamount=$_POST['tamount'];

                $q1="select * from customer_detail where id=$from";
                $query=mysqli_query($conn,$q1);
                $res1=mysqli_fetch_array($query);

                $q1="select * from customer_detail where id=$rid";
                $query=mysqli_query($conn,$q1);
                $res2=mysqli_fetch_array($query);

                if(($tamount)>$res1['curr_balance'])
                {
                  echo '<script type="text/javascript">alert("Insufficient curr_balance")</script>';
                }
                else {
                  $senderamnt=$res1['curr_balance'];
                  $recamnt=$res2['curr_balance'];
                  $snewamnt=$senderamnt-$tamount;
                  $sq1="update customer_detail set curr_balance=$snewamnt where id=$from";
                  mysqli_query($conn,$sq1);
                  $rnewamnt=$recamnt+$tamount;
                  $sq2="update customer_detail set curr_balance=$rnewamnt where id=$rid";
                  mysqli_query($conn,$sq2);

                  $sname=$res1['cus_name'];
                  $rname=$res2['cus_name'];
                  $sql = "INSERT INTO transfer(`sender`, `receiver`, `amount`) VALUES ('$sname', '$rname', '$tamount')";
                  $squery=mysqli_query($conn,$sql);
                  if($squery)
                  {
                    echo"<script> alert('Transaction Successful');
                                  window.location='transfer.php';
                          </script>";
                  }
                }
              }
              ?>
    </div>
    </form><br><br>
  </body>
</html>
