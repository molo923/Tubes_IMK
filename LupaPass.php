<!DOCTYPE html>
<html>

<head>
    <title>Lupa Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="logo.png">

    <style type="text/css">
      fieldset {
        margin: 145px auto;
        text-align: center;
      }

      fieldset form{
        text-align: center;
      }
      p{
        border: 10px;
      }
      input{
        padding: 1px 28px;
      }

    </style>

</head>

<body>
    <!-- <fieldset>
        <div class="row">
            <div class=" col-md-2" style="border: 1px grey solid;">
                <img style=" height: 100%;width: 80%; margin-left: 15%;" src="logo.png">
            </div>
            <div class=" col-md-10" style="background-color: #D3D3D3;height: 70px; border: 1px grey solid;">
                <li style="list-style-type:none; display:flex;">
                    <i class="fa fa-home" style="font-size: 45px; margin-top: 10px;margin-left: 5px;"></i>
                    <i class="fa fa-user" style="font-size: 45px; margin-top: 10px;margin-left: 60%;"></i>
                    <p style="margin-top: 20px; padding-left: 10px; padding-right: 15px;">Gde Agung Brhamana S</p>
                    <button type="button" class="btn btn-danger" style="padding-left: 25px;padding-right: 25px;margin: 16px;margin-top: 12px;">Logout</button>
                </li>
                <div class="row">
                    <div class="col-md-12" style="background-color: #F5F5F5;margin-left: -2px;height: 50px;width: 102%; border: 1px grey solid;">
                    <center>
                        <h5 style="padding-top: 10px;">Manage Account</h5>
                    </center>
                </div>
                </div>

                <div class="row">
                    <div class="col-md-3" style="background-color: red;">
                    dsdsd
                </div>
                <div class="col-md-4" style="background-color: blue">
                    ss
                </div>
                <div class="col-md-5" style="background-color: green">
                    asas
                </div>

                </div>

            </div>

        </div>
        <div class="row">
            <div class="side">
                <nav class="nav flex-column">
                	<center>
                		<a class="nav-link" href="#" style="color: white; border-bottom:1px solid #bbb;">Mulai Praktikum</a>
					  	<a class="nav-link" href="#" style="color: white;border-bottom:1px solid #bbb;">Upload Jawaban</a>
					  	<a class="nav-link" href="#" style="color: white;border-bottom:1px solid #bbb;">Nilai</a>
					  	<a class="nav-link" href="#" style="color: white;border-bottom:1px solid #bbb;">Download</a>
					  	<a class="nav-link" href="#" style="color: white;border-bottom:1px solid #bbb;">Jadwa</a>
					  	<a class="nav-link" href="#" style="color: white;border-bottom:1px solid #bbb;">Data IFLAB</a>
					  	<a class="nav-link" href="#" style="color: white;border-bottom:1px solid #bbb;">Manage Account</a>
                	</center>

				</nav>
            </div>
        </div>

    </fieldset> -->
    <form action="" method="post">
      <fieldset class="col-md-10">
          <div style="display: block;">
                <img style=" height: 20%;width: 20%;" src="logo.png">
          </div>
            <p>
              <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" id="nim" placeholder="1301174472" class="text-center" name="nim" label="NIM">
              </div>
            </p>
            <p>
              <div class="form-group">
                <label for="hint">Hint</label>
                <select name="hint" id="hint">
                  <option>1. apa kepanjangan KFC?</option>
                </select>
              </div>
            </p>
            <p>
              <div class="form-group">
                <label for="jawaban">Jawaban</label>
                <input type="text" id="jawaban" placeholder="Jawaban Anda.." class="text-center" name="jawaban" label="Jawaban">
              </div>
            </p>
            <p>
              <div class="form-group">
                <label for="pasword_baru">Password Baru</label>
                <input type="text" id="pasword_baru" placeholder="*************" class="text-center" name="password_baru" label="Password Baru">
              </div>
            </p>
            <p>
              <input type="submit" value="Submit" name="submit" style="background: #28d; border-color: transparent;" onclick="window.location.href='index.php'">
            </p>
      </fieldset>
    </form>
</body>

</html>
