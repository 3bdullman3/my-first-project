<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta charset="UTF-8">	
	
<title>maoede Sign in</title>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="../css/styleform.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
            <div class="container">
                <h1> التسجيل الدخول في موعدي</h1>
                <br>
                <form method="post">
                  <input type="text" placeholder="رقم المستشفى" name ="id">
                    <br>
                  <input type="password" placeholder="الرمز السري  " name="password">
                    <br>               
                  <input type="submit" name="go" value="تسجيل الدخول" >
                </form>
              </div>
</body>
</html>
<?php
$conn =mysqli_connect('localhost', 'root','','maoede');

if (!$conn){
    die(":فصل الاتصال" . mysqli_connect_error());
}
if (isset($_POST['go'])){

  $Clinc_id = $_POST['id'];
  $password = $_POST['password'];

  if(empty($Clinc_id) || empty($password)){
    echo'<p style="color: red;" >  هناك حطا!!!!!! يرجى تعبئة البيانات اولا  </p> ';
      exit();

  }
  else{
      $sql = " SELECT * from  clinc WHERE Clinc_id  = '$Clinc_id' and password = '$password';";
      $result = mysqli_query($conn, $sql);

                  if(mysqli_num_rows($result)){
                        session_start();
                      $row = mysqli_fetch_assoc($result);
                      $_SESSION['id'] = $row['Clinc_id'];
                      $_SESSION['Clinc_name'] = $row['clinc_Name'];
                      $_SESSION['Address'] = $row['Address'];
                      $_SESSION['password'] = $row['password'];

                      header("Location: hospital_Profile.php?login=sucess");
                      exit();
                  }
                  else{

                    echo'<p style="color: red;" >  هناك حطا!!!!!!    رقم العمل او الرقم السري غير صحيح  </p> ';                      exit();}

                  }

               }
              
      ?>?>