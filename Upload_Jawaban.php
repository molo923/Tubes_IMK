<?php
include('session.php');

if(!isset($_SESSION['login_user'])){
  header("location: index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Upload Jawaban</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="logo.png">

    <style type="text/css">
        img {
            height: 100%;
            width: 80%;
            margin-left: 15%;
        }

        .side {
            width: 16.7%;
       		background-color: #696969;
            height: 430px;
            border: 1px grey solid;

        }
        .active{
		  	background-color: #333;
		  	color: white;
		}
		a:hover:not(.active) {
  			background-color: #555;
		}
		i:hover:not(.active) {
  			background-color: white;
  			cursor: pointer;
		}


    </style>

</head>

<body>
    <fieldset>
        <div class="row">
            <div class=" col-md-2" style="border: 1px grey solid;">
                <img style=" height: 100%;width: 80%; margin-left: 15%;" src="logo.png">
            </div>
            <div class=" col-md-10" style="background-color: #D3D3D3;height: 70px; border: 1px grey solid;">
                <li style="list-style-type:none; display:flex;">
                    <i class="fa fa-home" style="font-size: 45px; margin-top: 10px;margin-left: 5px;"></i>
                    <i class="fa fa-user" style="font-size: 45px; margin-top: 10px;margin-left: 60%;"></i>
                    <p style="margin-top: 20px; padding-left: 10px; padding-right: 15px;"><?php echo $login_session; ?></p>
                    <button type="button" class="btn btn-danger" style="padding-left: 25px;padding-right: 25px;margin: 16px;margin-top: 12px;" onclick="window.location.href='logout.php'">Logout</button>
                </li>
                <div class="row">
                    <div class="col-md-12" style="background-color: #F5F5F5;margin-left: -2px;height: 50px;width: 102%; border: 1px grey solid;">
                    <center>
                        <h5 style="padding-top: 10px;">Manage Account</h5>
                    </center>
                </div>
                </div>


            </div>

        </div>
        <div class="row">
            <div class="side">
                <nav class="nav flex-column">
                	<center>
                    <a class="nav-link" href="Mulai_Praktikum.php" style="color: white; border-bottom:1px solid #bbb;">Mulai Praktikum</a>
					  	      <a class="nav-link" href="Upload_Jawaban.php" style="color: white;border-bottom:1px solid #bbb;">Upload Jawaban</a>
					  	      <a class="nav-link" href="Nilai.php" style="color: white;border-bottom:1px solid #bbb;">Nilai</a>
                	</center>

				        </nav>
            </div>
        </div>

    </fieldset>

</body>

</html>
