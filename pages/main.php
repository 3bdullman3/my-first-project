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
<title>main</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"  />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"  />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">


<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="../css/stylesheet.css" type="text/css">	
</head>

<body>
<header>
	   <div class="container">
	     <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
			<img class="logo" src="../images/logo.png">
	  
		
</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
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
	  </span>
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
					       <h1 class="text-white">نحن نقدم أفضل الخدمات الطبية</h1>
						  <p class="text-white">تستطيع من هنا انشاء مواعيد بشكل سهل وسلس </p>
						  <a href="choose_hospital.php"  class="btn btn-white">انشئ موعدك </a>
					  </div>
				 </div>
			 </div>
		</div>
	</section>

	<section class="features-section">
	      <div class="container">
		     <div class="row gx-0">
			      
				 <div class="col-md-4">
				      <div class="features-box bg1">
					      <img src="../images/calendar.png" alt="">
						  <h3>موجودون لخدمتكم خلال 24 ساعه</h3>
						  <p>نستقبل جميع الحالات </p>
					 </div>
				 </div>
				 
				 
				  <div class="col-md-4">
				      <div class="features-box bg2">
					      <img src="../images/staff.png" alt="">
						  <h3>لدينا اطبه مختصون</h3>
						  <p>لدينا اطبة لجميع المشاكل والامراض</p>
					 </div>
				 </div>
				 
				   <div class="col-md-4">
				      <div class="features-box bg3">
					      <img src="../images/ambulance.png" alt="">
						  <h3>نهتم لصحتكم</h3>
						  <p>لدينا خدمه الاتصال في حال كان هناك حاله طارئة اتصلو على الرقم 0550822598</p>
					 </div>
				 </div>
				 
				 
			  </div>
		</div>
	</section>

	<section class="blog-section" id="blog-section">	
		<div class="container">
		     <div class="row">
			     <div  class="col-md-12">
				      <h2 class="section-title text-center">جديدنا</h2>
				 </div>
				 
				<div class="col-md-4">
				<div class="blog-box">
				 <div class="blog-media">
                <img src="../images/blog1.jpg" alt="">
				 </div>

				 <div class="blog-info">
				 <h3><a href="#">الدكتور  احمد سالم عبدالله</a></h3>
				<ul class="meta">
				 <li> <i class="fa fa-calendar" aria-hidden="true"></i> 18 Sep 2021 </li>
				 <li> <i class="fa fa-user-o" aria-hidden="true"></i> طبيب  عام (طب اسرة) </li>
				  </ul>
				  <p>متخصص لجميع انواع امراض العائلة والاطفال وجديدي الولادة  </p>
				 </div>
				</div>
				 </div> 
				 
				
				 <div class="col-md-4">
				 <div class="blog-box">
				 <div class="blog-media">
				   <img src="../images/blog2.jpg" alt="">
				    </div>
				     <div class="blog-info">
				     <h3><a href="#">الدكتور سالم احمد سالم</a></h3>
					  <ul class="meta">
					      <li> <i class="fa fa-calendar" aria-hidden="true"></i> 18 Sep 2015 </li>
					      <li> <i class="fa fa-user-o" aria-hidden="true"></i> جراحه وعمليات </li>
						  </ul>
				    		  <p>متخصص طب جراحه وعمليات جراحيه  مع اكثر من ممرض يعملون تحته</p>
						  </div>
					</div>
				 </div> 
				 
				 
				 <div class="col-md-4">
				    <div class="blog-box">
					   <div class="blog-media">
					     <img src="../images/blog3.jpg" alt="">
					    </div>
						  <div class="blog-info">
				      <h3><a href="#">الدكتورة سلمى </a></h3>
					  <ul class="meta">
				          <li> <i class="fa fa-calendar" aria-hidden="true"></i> 18 Sep 2022 </li>
					 	  <li> <i class="fa fa-user-o" aria-hidden="true"></i>تدريس</li>
							  </ul>
							  <p>متخصصه في تعليم الطلاب المستجدين لتخصص الطب</p>
						  </div>
					</div>
				 </div> 
				 
				 
			</div>
		</div>
		
	</section>
<footer>
     <div class="container">
	     <div class="row">
			 
		     <div class="col-md-4">
			      <div class="footer-widget">
				      <h3>تواصل معنا </h3>
					  
					  <ul class="footer-address">
					      					  
						  <li>
						    <i class="fa fa-phone" aria-hidden="true"></i>
							  <div>
							     <h4>Phone</h4>
								  <p> <a href="tel:+0123456789">0550822598</a></p>
							  </div>
						  </li> 
						  
						   <li>
						   <i class="fa fa-envelope-o" aria-hidden="true"></i>
							  <div>
							     <h4>Email</h4>
								  <p> <a href="tel:+0123456789">SupportMaoede@company.com</a></p>
							  </div>
						  </li> 
						  
						  
					  </ul>
				 </div>
			 </div> 
			 
			 
			 
			<div class="col-md-2">
			      <div class="footer-widget">
				      <h3>عياداتنا </h3>
					   <ul class="footer-menu">
						   <li> <a href="#"> عيادات الأعصاب </a> </li>
						   <li> <a href="#"> عيادات بالعيون </a> </li>
						   <li> <a href="#"> عيادات التنفسيه</a> </li>
						   <li> <a href="#"> عيادات القلب</a> </li>
					  </ul>
				 </div>
			 </div>  
			 
			 
			<div class="col-md-2">
			      <div class="footer-widget">
				      <h3>عياداتنا</h3>
					   <ul class="footer-menu">
						   <li> <a href="#"> عياده طب الاسرة </a> </li>
						   <li> <a href="#"> عيادة ما قبل الزواج</a> </li>
						   <li> <a href="#"> عيادة الامراض المزمنة</a> </li>
						   <li> <a href="#">عيادات الأسنان</a> </li>
					  </ul>
				 </div>
			 </div>   
					 </div>
	</div>	
</footer>		
</body>
</html>
