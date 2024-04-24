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
                <form method="POST">
                  <input type="text" placeholder="رقم الهوية" name ="new_id_patient">
                    <input type="text" placeholder="الاسم الاول " name="new_Fname">
                    <input type="text"placeholder="اللقب" name="new_lname">
                    <input type="text"placeholder="البلد" name="new_address" >
                    <input type="email"placeholder="الايميل " name="new_email" >
                    <input type="password" placeholder="الرمز السري" name="new_password">
                    <input type="text"placeholder="رقم الجوال" name="new_Phone" >
                    <input type="text"placeholder="العمر" name="new_age" >
                  <input type="submit" VALUES="تسجيل" name="done" >
                </form>
 </div>
</body>
</html>
<?php               if(isset($_POST['done'])){
                    $new_id_patient = $_POST['new_id_patient'];
                    $new_fname = $_POST['new_Fname'];
                    $new_lname = $_POST['new_lname'];
                    $new_address = $_POST['new_address'];
                    $new_email = $_POST['new_email'];
                    $new_Phone = $_POST['new_Phone'];
                    $new_age = $_POST['new_age'];
                    $new_password = sha1($_POST['new_password']);
                    $conn = mysqli_connect("localhost","root","","maoede") ;
                    $sql = "INSERT into patient (id_patient, Fname, Lname, address, email, Phone, Age, password)" 
                   ." VALUES ('$new_id_patient', '$new_fname', ' $new_lname', '$new_address', '$new_email', '$new_Phone', '$new_age', '$new_password');";
                    mysqli_query($conn, $sql) ;
                    mysqli_close($conn);
                    header("location:index.php");
                  }
                  else{
                    echo '<p class"eror">رجاء قم بتعبئة البيانات اولا!!! </p>';
                  }

                 ?>