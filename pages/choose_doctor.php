<?php

session_start();
if(!isset ($_SESSION['id_patient'])){
	header("location:index.php"); 
  
}
$_SESSION['clinc_name'] = $_GET['clinc_Name'];
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
          <a class="nav-link " href="#services-section">حسابي</a>
        </li>
		   <li class="nav-item">
          <a class="nav-link " href="#reviews-section">الشكاوى</a>
        </li>
		    <li class="nav-item">
          <a class="nav-link " href="#team-section">من نحن</a>
        </li>
		  
		    <li class="nav-item">
          <a class="nav-link " href="#blog-section">مواعيدي</a>

        </li>
		  
		 <li class="nav-item">
          <a class="nav-link " href="#booking-section">انشاء موعد</a>
        </li> 
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="#home-section">الصفحة الرئيسية</a>
		  </li>
		   <li class="nav-item">
          <a class="nav-link" href="#about-section">تسجيل الدخول</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
	</div>
	</header>
  <br><br><br><br>

  <?php
  $conn = mysqli_connect("localhost", "root", "", "maoede");
  
  $stmt = mysqli_prepare($conn, "SELECT * FROM doctor WHERE clinc_Name = ?");
  mysqli_stmt_bind_param($stmt, "s", $_GET['clinc_Name']);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  
  mysqli_close($conn);

  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)) {
      echo '<section class="features-section">'
              .' <br><br><br><br><br><br>' 
              .'<div class="container">' 
              .'<div class="row gx-0">' 
              .'<div class="col-md-4">' 
              .'<div class="features-box bg1">' 
              .'<img class="hos" src="..//images/avatar_doctor.png" >' 
              .'<h3> '.$row['Fname_doctor'].' '.$row['Lname_doctor'].'</h3>' 
              .'<p>'.$row['specialty'].'</p>' ;
              echo '<a class="btn btn-white" href="pay.php?Id_doctor='.$row['Id_doctor'].'">انشئ موعدك </a>' 
              .'</div>' 
              .'</div>'
              .'</div>'
              .'</div>'
              .'</section>'
              .'</div>';
      $_SESSION['id_doctor'] = $row['Id_doctor'];
      $_SESSION['doctor_Fname'] = $row['Fname_doctor'];
      $_SESSION['doctor_specialty'] = $row['specialty'];
    }    
  }
  else{
    echo "لم يتم الاتصال";
  }
?>
</div>
</div>

</body>

</html>