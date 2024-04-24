
<?php   
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta charset="UTF-8">	
	
<title>patient Sign in</title>
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
                <form    method="post">
                  <input type="text" placeholder="رقم الهوية" name ="id">
                    <br>
                  <input type="password" placeholder="الرمز السري  " name="password">
                    <br>               
                  <input type="submit" name="go" value="تسجيل الدخول" >
                    <br>           
                  <input type="button" value="حساب جديد" onclick="location.href='insert_patient.php'" >
                </form>
             
              <?php

$conn =mysqli_connect('localhost', 'root','','maoede');

 if (!$conn){
    die(":فصل الاتصال" . mysqli_connect_error());
    }
    if (isset($_POST['go'])){

       $id_patient = $_POST['id'];
     $password = sha1($_POST['password']);

           if(empty($id_patient) || empty($password)){
            echo '<p style="color: red;"> <b> هناك حطا!!!!!! يرجى تعبئة البيانات اولا  <b> </p> ';
              exit();
                     }
              else{
                 $sql = " SELECT * from patient WHERE id_patient = '$id_patient' and password = '$password';";
                    $result = mysqli_query($conn, $sql);



                        if(mysqli_num_rows($result)){
                          session_start();
                          $row = mysqli_fetch_assoc($result);
                          $_SESSION['id_patient'] = $row['id_patient'];
                          $_SESSION['patient_Fname'] = $row['Fname'];
                          $_SESSION['patient_Lname'] = $row['Lname'];
                          $_SESSION['patient_email'] = $row['email'];
                          $_SESSION['patient_phone'] = $row['Phone'];
                          $_SESSION['patient_address'] = $row['address'];
                          header("Location: main.php?login=sucess");
                          exit();
                        }
                        else{

                          echo '<p style="color: red;"> <b> رقم الهوية او الرقم السري غير صحيح<b> </p> ';
                          exit();}

                        }

                      }
?>
 </div>
</body>
</html>
