<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.css');?>">
    <title>Log-In</title>
    <style>
        body {
         background-color: white;
        }
        .card{
            text-align:center;
            right:-500px;
            height:500px;
            top:50px;
            background-color: black;
        }
        
    </style>
</head>
<body>
 <form action="<?php echo site_url('Dashboard/login_action'); ?>" method="post">
 
<div class="card" style="width: 22rem;height: 31rem">
<img src="<?php echo base_url('asset/img/lpm.png');?>" alt="" style="width:250px;margin-left:50px;margin-top:50px;">
  <div class="card-body">
    <br>
    <form action="<?php echo site_url('Dashboard/login');?>" method="post">
    <p style="margin-left:-145px;color: white;">Email</p>
    <input type="text" placeholder="Email" name="Email" style="width:220px;">

    <br>
    <br>
    
    <p style="margin-left:-145px;color: white;">Password</p>
    <input type="password" placeholder="Password" name="Password" style="width:220px;" >
    
    <br>
    <br>

    <div>
        <button type="submit" name="simpan" style="background-color : #F1E9DB; width: 90px;height: 50px; border-color:white;">Login</button>
    </div>

    </form>

        <br>

    <p  class="card-link" style="color:red;">Don,t Have Any Acoount? <a href="<?php echo site_url('Dashboard/register')?>">Register Here </p>
    </form>
</div>
</div>
</body>
</html>