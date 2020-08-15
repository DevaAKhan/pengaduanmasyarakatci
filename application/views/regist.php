<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.css');?>">
    <title>Register</title>
    <style>
      body {
        background-color: white;
        }
        .card{
            text-align:center;
            right:-500px;
            height:700px;
            top:0px;
            background-color: black;
        }
    </style>
</head>
<body>
<form action="<?php echo site_url('Dashboard/simpan_data');?>" method="post">
<div class="card" style="width: 22rem; height: 41rem">
<img src="<?php echo base_url('asset/img/lpm.png');?>" alt="" style="width:150px;margin-left:100px;margin-top:25px;">
  <div class="card-body">
    
    <br>

    <p style="margin-left:-150px;color: white;">Username</p>
    <input type="text" name="nama" placeholder="Username" style="width:220px;">

    <br>
    <br>

    <p style="margin-left:-190px;color: white;">NIK</p>
    <input type="text" name="nikk" placeholder="NIK" style="width:220px;">

    <br>
    <br>
    
    <p style="margin-left:-180px;color: white;">Email</p>
    <input type="text" name="emaill" placeholder="Email" style="width:220px;" >
    
    <br>
    <br>

    <p style="margin-left:-150px;color: white;">Password</p>
    <input type="text" name="pw" placeholder="Password" style="width:220px;" >

    <br>
    <br>

    <p style="margin-left:-100px;color: white;">Retype Password</p>
    <input type="text" name="rp" placeholder="Password" style="width:220px;"  >

    <br>
    <br>

    <div>
        <button  type="submit" name="simpan" style="background-color : #F1E9DB; width: 80px;height: 50px;border-color:#C1C1C1;">Daftar</button>
 
    </div>
    </form>
    <div class="row">
      <div class="col-sm-12 mt-4">
        <div class="table-responsive mb-4">

        <table id ="example" class="table table-striped table-bordered" style = "width:100%">
        <thead>
          <tr>
            <td>id</td>
            <td>name</td>
            <td>nik</td>
            <td>email</td>
            <td>Password</td>
            <td>retype_password</td>

          </tr> 
        </thead>
        <tbody>
        <?php
        if ($c_user>0){
          foreach ($user as $datas)
        {
          ?>

          <tr>
            <td><?php echo $datas->id;?></td>
            <td><?php echo $datas->name;?></td>
            <td><?php echo $datas->nik;?></td>
            <td><?php echo $datas->email;?></td>
            <td><?php echo $datas->password;?></td>
            <td><?php echo $datas->retype_password;?></td>
            </tr>
        <?php }
        
        }
        else {
          ?>
          <tr>
            <td colspan="8"><center>Data User Kosong</center></td>
          </tr>
          <?php
        }
        ?>
        </div>
      </div>
  </div>
</tbody>
</table>
  </div>
</div>
  
</body>
</html>