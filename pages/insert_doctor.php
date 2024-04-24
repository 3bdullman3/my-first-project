<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta charset="UTF-8">	
	
<title>maoede Sign in</title>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="../css/styleform.css">
<link rel="stylesheet" href="../css/select.css">
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
                  <input type="text" placeholder="رقم الهوية" name ="new_id_doctor">
                    <input type="text" placeholder="الاسم الاول " name="new_Fname">
                    <input type="text"placeholder="اللقب" name="new_lname">             
                    <input type="text" placeholder="التخصص" name="new_specialty">
                    <h4 >المستشفى</h4>
                    <select name="clinc_Name">
                      <option value="Suleiman al-Hab">سليمان الحبيب</option>
                      <option value="medical school">المستشفى الجامعي</option>
                      <option value="Dar al-Shifa hospital">دار الشفاء</option>
                      <option value="Dallah Hospital">مستشفى دلة</option>
                      <option value="Special Forces Hospital">مستشفى القوات الخاصه</option>
                      <option value="King Salman Hospital">مستشفى الملك سلمان</option>
                      <option value="al-Hayat Hospital">مستشفى الحياة</option>
                      <option value="Raya Hospital">مستشفى الرايه</option>
                      <option value="Mowasat Hospital">مستشفى المواسات</option>
                      <option value="Asir Hospital">مستشفى عسير</option>
                      <option value="El Moussa Hospital">مستشفى الموسى</option>
                      <option value="Saudi German Hospital">مستشفى الالماني</option>
              </select>
                    <input type="password" placeholder="الرمز السري" name="new_password">
                    <input type="text"placeholder="رقم الجوال" name="new_Phone" >
                  <input type="submit"VALUES="تسجيل" name="done" >
                  <?php
$conn =mysqli_connect('localhost', 'root','','maoede');

if (!$conn){
    die(":فصل الاتصال" . mysqli_connect_error());
}
if (isset($_POST['done'])){

   $new_id_doctor = $_POST['new_id_doctor'];
   $new_specialty = $_POST['new_specialty'];
   $new_fname     = $_POST['new_Fname'];
   $new_lname     = $_POST['new_lname'];
   $clinc_name    = $_POST['clinc_Name'];
   $new_password  = $_POST['new_password'];
   $new_Phone     = $_POST['new_Phone'];
    if(empty($new_id_doctor) || empty($new_password)){
        echo'<p class"eror" >  هناك حطا!!!!!! يرجى تعبئة البيانات اولا  </p> ';
        exit();

    }
    else{
      $sql = " INSERT INTO doctor (Id_doctor, Fname_doctor, Lname_doctor, specialty, Phone_doctor, clinc_Name, password)" 
      ."VALUES ('$new_id_doctor', '$new_fname', '$new_lname', '$new_specialty', '$new_Phone', '$clinc_name', '$new_password');";                   
       mysqli_query($conn, $sql) ;
      mysqli_close($conn);
                 }}
                    ?>
                </form>
                </div>
</body>
</html>
