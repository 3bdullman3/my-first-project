<?php
session_start();
if(isset($_SESSION['id_doctor'])){
    header("location:doctor_Profile.php");
}


?>
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
                  <input type="text" placeholder="رقم الهوية" name ="id">
                    <br>
                  <input type="password" placeholder="الرمز السري  " name="password">
                    <br>               
                  <input type="submit" name="go" value="تسجيل الدخول" >
                    <br>           
                  <input type="button" value="حساب جديد" onclick="location.href='insert_doctor.php'" >
                </form>

<?php
$conn =mysqli_connect('localhost', 'root','','maoede');

if (!$conn){
    die(":فصل الاتصال" . mysqli_connect_error());
}
if (isset($_POST['go'])){
    $id_doctor = $_POST['id'];
    $password = $_POST['password'];
    if(empty($id_doctor) || empty($password)){
      echo'<p style="color: red;" >  هناك حطا!!!!!! يرجى تعبئة البيانات اولا  </p> ';
        exit();

    }
    else{
        $sql = " SELECT * from doctor WHERE Id_doctor = '$id_doctor' and password = '$password';";
        $result = mysqli_query($conn, $sql);
        
                    if(mysqli_num_rows($result)>0){
                          session_start();
                        $row = mysqli_fetch_assoc($result);
                        $_SESSION['id_doctor'] = $row['Id_doctor'];
                        $_SESSION['doctor_Fname'] = $row['Fname_doctor'];
                        $_SESSION['doctor_Lname'] = $row['Lname_doctor'];
                        $_SESSION['doctor_specialty'] = $row['specialty'];
                        $_SESSION['doctor_phone'] = $row['Phone_doctor'];
                        $_SESSION['clinc_name'] = $row['clinc_Name'];

                        header("Location: doctor_Profile.php?login=sucess");
                        exit();
                    }
                    else{

                      echo'<p style="color: red;" >  هناك حطا!!!!!!    رقم العمل او الرقم السري غير صحيح  </p> ';
                      exit();}

                    }

                 }
                
        ?>              </div>
</body>
</html>