<?php

session_start();
if(!isset ($_SESSION['id_patient'])){
	header("location:index.php");
}
    
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>choose hospital</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"  />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"  />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">


<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="../css/stylesheet.css" type="text/css">	
<link rel="stylesheet" href="../css/popout.css" type="text/css">	
</head>
<body>
<header>
	   <div class="container">
	     <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
	    <img class="logo" src="..//images/logo.png" >

	  </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
      <li class="nav-item">
          <a class="nav-link " href="log_out.php">تسجيل خروج</a>
        </li>	
        <li class="nav-item">
          <a class="nav-link " href="patient_Profile.php">حسابي</a>
        </li>	  
		 <li class="nav-item">
          <a class="nav-link " href="choose_hospital.php">انشاء موعد</a>
        </li> 
		<li class="nav-item">
			<a class="nav-link active"  href="main.php">الصفحة الرئيسية</a>
		  </li>
		<li class="nav-item">
          <a class="nav-link" href="index.php"><p> مرحبا بك <b><?php echo $_SESSION['patient_Fname']; ?></b></p> </a>
        </li>
		  
      </ul>
     
    </div>
  </div>
</nav>
	</div>
	</header>
    	
    <section class="hero-banner" id="home-section">
        <div class="container">
            <div class="row">
                 <div class="col-md-12">
                     <div class="banner-text-wrap">
                        
                          <h1 class="text-white">قم باختيار المستشفى </h1>
                          <p style="color: white;">لدينا اكثر من مستشفى واكثر من مركز </p>
                     </div>
                </div>
            </div>
       
          </div>
   </section>
   <section class="features-section">
    <br><br><br><br><br><br>
    <div class="container">
      <div class="row gx-0">  
          

        <div class="col-md-4">
          <div class="features-box bg1">
            <img class="hos" src="..//images/hos1.jpg" alt="">
              <h3>مستشفى المواساة</h3>
              <p>لجميع التخصصات</p>

              <a class="btn btn-white" href="http://localhost/pro/maoede/pages/choose_doctor.php?clinc_Name=Mowasat%20Hospital">انشئ موعدك </a>
              </div>
               </div>

      <div class="col-md-4">
          <div class="features-box bg2">
             <img class="hos" src="..//images/hos2.jpg" alt="">
              <h3>مستشفى سليمان الحبيب</h3>
              <p>لتخصصات العمليات الجراحية</p>
              <a class="btn btn-white" href="http://localhost/pro/maoede/pages/choose_doctor.php?clinc_Name=Suleiman al-Hab">انشئ موعدك </a>

         </div>
     </div>
     
       <div class="col-md-4">
          <div class="features-box bg3">
              <img class="hos" src="..//images/hos3.jpg" alt="">
              <h3>مستشفى الحرس الوطني</h3>
              <p>مخصص فقط للمسجلين في القطاع العسكري</p>
              <a class="btn btn-white" href="http://localhost/pro/maoede/pages/choose_doctor.php?clinc_Name=Special Forces Hospital">انشئ موعدك </a>

     </div>   
  </div>
</div>
<br>
<div class="container">
<div class="row gx-0">  
 
 <div class="col-md-4">
      <div class="features-box bg1">
        <img class="hos" src="..//images/hos4.jpg">
          <h3>مستشفى الملك سليمان</h3>
          <p>لجميع التخصصات (السعوديين)</p>

        <a class="btn btn-white" href="http://localhost/pro/maoede/pages/choose_doctor.php?clinc_Name=King Salman Hospital">انشئ موعدك </a>
</div>
 </div>
 
 
  <div class="col-md-4">
      <div class="features-box bg2">
         <img class="hos" src="..//images/hos5.jpg" alt="">
         <h3>مستشفى الموسى   </h3>
          <p>  تخصصات اسنان </p>
        <a class="btn btn-white" href="http://localhost/pro/maoede/pages/choose_doctor.php?clinc_Name=El Moussa Hospital">انشئ موعدك </a>

</div>

 </div>
 
   <div class="col-md-4">
      <div class="features-box bg3">
          <img class="hos" src="..//images/hos6.jpg" alt="">
          <h3>مستشفى  عسير المركزي</h3>
          <p>متخصص لجميع التخصصات (السعوديين)</p>
          <a class="btn btn-white" href="http://localhost/pro/maoede/pages/choose_doctor.php?clinc_Name=Asir Hospital">انشئ موعدك </a>
     </div>
 </div>
</div>
</div>
 <br>
 <br>
<div class="container">
<div class="row gx-0">  
 
 <div class="col-md-4">
      <div class="features-box bg1">
        <img class="hos" src="..//images/hos7.png">
          <h3>مستشفى  الحياة الوطني</h3>
          <p>لجميع التخصصات</p>
          <a class="btn btn-white" href="http://localhost/pro/maoede/pages/choose_doctor.php?clinc_Name=al-Hayat Hospital">انشئ موعدك </a>

         </div>
 </div>
 
 
  <div class="col-md-4">
      <div class="features-box bg2">
         <img class="hos" src="..//images/hos8.png" alt="">
          <h3>مستشفى السعودي الالماني  </h3>
          <p>  لجميع التخصصات</p>
          <a class="btn btn-white" href="http://localhost/pro/maoede/pages/choose_doctor.php?clinc_Name=Saudi German Hospital">انشئ موعدك </a>

</div>
 </div>
 
   <div class="col-md-4">
      <div class="features-box bg3">
          <img class="hos" src="..//images/hos9.jpg" alt="">
          <h3>المستشفى الجامعي لجامعه طيبة</h3>
          <p>متخصص لجميع التخصصات (تدريب الطلاب)</p>
          <a class="btn btn-white" href="http://localhost/pro/maoede/pages/choose_doctor.php?clinc_Name=medical school">انشئ موعدك </a>
</div>
</div>
</div>
 <br>
 <br>
 </div>
<div class="container">
<div class="row gx-0">  
 
 <div class="col-md-4">
      <div class="features-box bg1">
        <img class="hos" src="..//images/hos10.jpg">
          <h3>مستشفى دار الشفاء</h3>
          <p>لتخصصات الاسنان</p>
          <a class="btn btn-white" href="http://localhost/pro/maoede/pages/choose_doctor.php?clinc_Name=Dar al-Shifa hospital">انشئ موعدك </a>

</div>
 </div>
 
 
  <div class="col-md-4">
      <div class="features-box bg2">
         <img class="hos" src="..//images/hos11.png" alt="">
          <h3>مستشفى دلة  </h3>
          <p> لتخصصات المخ والاعصاب</p>
          <a class="btn btn-white" href="http://localhost/pro/maoede/pages/choose_doctor.php?clinc_Name=Dallah Hospital">انشئ موعدك </a>

</div>
 </div>
 <br> <br>
   <div class="col-md-4">
      <div class="features-box bg3">
          <img class="hos" src="..//images/hos12.jpg" alt="">
          <h3>مستشفى راية </h3>
          <p>لتخصصات القلب</p>
          <a class="btn btn-white" href="http://localhost/pro/maoede/pages/choose_doctor.php?clinc_Name=Raya Hospital">انشئ موعدك </a>
</div>
 </div>
 </div>
</div>
</div>
</div>
</section>
</body>
</html>