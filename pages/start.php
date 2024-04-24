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

<form method="post">
<div class="container">
<?php
    // الاتصال بقاعدة البيانات
    $conn = mysqli_connect("localhost", "root", "") or die("<br>لا يمكن الاتصال بخادم البيانات");
    echo "  <label >تم إنشاء الاتصال بخادم قاعدة البيانات </label>   <br>";
    // إنشاء قاعدة البيانات
    $sql = "CREATE DATABASE maoede";
    mysqli_query($conn, $sql) or die("<br>لا يمكن إنشاء قاعدة البيانات");
    echo " <label > تم إنشاء قاعدة البيانات</label>    <br>";

    // تحديد قاعدة البيانات المستخدمة
    mysqli_select_db($conn, "maoede");

    // إنشاء الجدول المريض
    $sql = "CREATE TABLE patient (
            id_patient VARCHAR(30) NOT NULL,
            Fname VARCHAR(30) NOT NULL,
            Lname VARCHAR(40) NOT NULL,
            address VARCHAR(40) NOT NULL,
            email VARCHAR(80) NOT NULL UNIQUE,
            Phone VARCHAR(30) NOT NULL UNIQUE,
            Age VARCHAR(10) NOT NULL,
            password VARCHAR(40) NOT NULL,
            PRIMARY KEY (id_patient)
        )";
    mysqli_query($conn, $sql) or die("لم يتم انشاء الجدول المريض");

    echo "<label >تم إنشاء الجدول المريض  </label> <br> ";

    // إنشاء جدول الطبيب
    $sql = "CREATE TABLE doctor (
            Id_doctor VARCHAR(20) NOT NULL,
            Fname_doctor VARCHAR(30) NOT NULL,
            Lname_doctor VARCHAR(30) NOT NULL,
            specialty VARCHAR(30) NOT NULL,
            Phone_doctor VARCHAR(20) NOT NULL UNIQUE,
            clinc_Name VARCHAR(30) NOT NULL,
            password VARCHAR(40) NOT NULL,
            PRIMARY KEY (Id_doctor)
        )";
    mysqli_query($conn, $sql) or die("لم يتم انشاء الجدول الطبيب");

    echo "<label > تم إنشاء الجدول الطبيب</label>      <br>";

    // إنشاء جدول المستشفى
    $sql = "CREATE TABLE clinc (
            Clinc_id VARCHAR(20) NOT NULL UNIQUE,
            clinc_Name VARCHAR(30) NOT NULL UNIQUE,
            Address VARCHAR(30) NOT NULL,
            password VARCHAR(40) NOT NULL,
            PRIMARY KEY (Clinc_id)
        )";
    mysqli_query($conn, $sql) or die("لم يتم انشاء الجدول المستشفى");

    echo " <label > تم إنشاء الجدول المستشفى</label>    <br>";

    // إنشاء جدول الموعد
    $sql = "CREATE TABLE appointment (
            Order_Of_Date VARCHAR(80) NOT NULL UNIQUE,
            Date VARCHAR(40) NOT NULL,
            id_patient VARCHAR(30) NOT NULL,
            id_doctor VARCHAR(30) NOT NULL,
            clinc_Name VARCHAR(30) NOT NULL,
            PRIMARY KEY";
            $sql = "ALTER TABLE appointment "
            ." ADD FOREIGN KEY (id_patient) REFERENCES patient(id_patient);"  
            ."ALTER TABLE appointment "
            ." ADD FOREIGN KEY (id_doctor) REFERENCES doctor(id_doctor);"
            ."ALTER TABLE appointment "
            ." ADD FOREIGN KEY (clinc_Name) REFERENCES clinc(clinc_Name);"
            ."ALTER TABLE doctor "
            ." ADD FOREIGN KEY (clinc_Name) REFERENCES clinc(clinc_Name);";
            mysqli_query($conn, $sql) or die("لم يتم انشاء العلاقات");
            echo"<label > تم انشاء العلاقات</label>";  
            mysqli_close($conn);
            echo "<label>تم تجهيز قاعدة البيانات</label> <br>";
?>
                <input type="button" value="الانتقال الى الصفحه الرئيسيه" onclick="location.href='index.php'">
</form>
</div>
</body>
</html>