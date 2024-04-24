<?php   
session_start();
if(!isset ($_SESSION['id_patient'])){
	header("location:index.php");
}
date_default_timezone_set('Asia/Riyadh');



$conn =mysqli_connect('localhost', 'root','','maoede');

	if (!$conn){
		die(":فصل الاتصال" . mysqli_connect_error());
	}else{
		$date = date('Y-m-d');
		$id_doctor = $_SESSION['id_doctor'];
		$id_patient = $_SESSION['id_patient'];
		$clinc_name = $_SESSION['clinc_name'];
		$sql = "INSERT INTO appointment (Order_Of_Date, Date, id_patient, id_doctor, clinc_Name) 
				VALUES ('".$id_patient.$date."', '$date', '$id_patient', '$id_doctor', '$clinc_name')";
		mysqli_query($conn, $sql);
		mysqli_close($conn);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	
	
<title>pay</title>
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
    <a class="navbar-brand" href="main.php">
			<img class="logo" src="../images/logo.png" alt="">
	  
		
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
      <br><br>
	<section class="blog-section" id="blog-section">	
		<div class="container">
		     <div class="row">
			     <div  class="col-md-12">
				      <h2 class="section-title text-center">طرق الدفع</h2>
				 </div>
				 
				<div class="col-md-4">
				<div class="blog-box">
				 <div class="blog-media">
                <img class="pay" src="../images/cash.png" alt="">
				 </div>

				 <div class="blog-info">
				 <form method="post">
							  <h3><label >دفع نقدي</label></h3>
				           <input class="btn btn-white" type="button" name="pay" value="ادفع" onclick="location.href='done.php'" >
					     </form>			
				<ul class="meta">
				  </ul>
				 </div>
				</div>
				 </div> 
				 <div class="col-md-4">
				 <div class="blog-box">
				 <div class="blog-media">
				   <img src="../images/credit-card.png" alt="">
				    </div>
				     <div class="pay" class="blog-info">
					 <form method="post">
							  <h3><label >الدفع عن طريق البطاقة الاتمانية</label></h3>
				           <input class="btn btn-white" type="button" name="pay" value="ادفع" onclick="location.href='done.php'"  >
					     </form>
						  </div>
					</div>
				 </div> 
				 
				 
				 <div class="col-md-4">
				    <div class="blog-box">
					   <div class="blog-media">
					     <img class="pay" src="../images/apple-pay.png" alt="">
					    </div>
						  <div class="blog-info">	
                          <form method="post">
							  <h3><label >الدفع عن طريق الapple pay</label></h3>
				           <input  class="btn btn-white" type="button" name="pay"  value="ادفع" onclick="location.href='done.php'" >
					     </form>
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

<?php

if(isset($_POST['pay'])){
	
}
?>