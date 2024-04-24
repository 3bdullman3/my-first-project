<?php   
session_start();
if(!isset ($_SESSION['id_patient']) ){
    header("location:index.php");
}
?>

<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>patient Profile</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/account_style.css">
</head>
<body>


</table>
	<section class="py-5 my-5">
		<div class="container">
			<h1 class="mb-5">الحساب الشخصي</h1>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="../images/avatar_boy.png" alt="Image" class="shadow">
						</div>
						<h4 class="text-center"> </h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							الحساب
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							مواعيدي
						</a>
						
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
					<div>
					<form  method="post">
    <input class="btn btn-primary" type="submit" name="update" value="تحديث">

    <input class="btn btn-light" type="button" value="تسجيل خروج" onclick="location.href='log_out.php'">

</form>

<?php
    if(isset($_POST['update'])){
        $read = "";

    }
	else{
        $read = "readonly";
    }

	?>

<br>
<h3 class="mb-4"> البيانات الشخصية</h3>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">


			<form  method="get">
            <label>الاسم الاول</label>
            <input type="text" class="form-control" name="patient_Fname" value="<?php echo  $_SESSION['patient_Fname'];?>" <?php echo"$read" ; ?>>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>اللقب </label>
								  	<input type="text" name="patient_Lname" class="form-control" value="<?php echo  $_SESSION['patient_Lname'];?>" <?php echo"$read" ; ?>>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>الايميل </label>
								  	<input type="text" name="patient_email" class="form-control" value="<?php echo  $_SESSION['patient_email'];?>" readonly>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>رقم الجوال</label>
								  	<input type="text" name="patient_phone" class="form-control" value="<?php echo  $_SESSION['patient_phone'];?>" <?php echo"$read" ; ?>>
								</div>
							</div>

							<div class="col-md-6">
							<div class="form-group">

								  	<label> المنطقة</label>
								  	<input type="text" name="address" class="form-control" value="<?php echo $_SESSION['patient_address'];?>" <?php echo"$read" ; ?> >
									
									
								</div>
								<div class="form-group">
								  	<label> الرقم السري</label>
								  	<input name="password" type="password" class="form-control"  <?php echo"$read" ; ?> >

									  <input class="btn btn-light" name="ok" type="submit" value="تحديث البيانات  " >
									  </form>


								</div>
							</div>
						</div>
						
					</div>
   
        <?php
             $conn = mysqli_connect("localhost","root", "","maoede");
                if (isset($_GET['ok'])){
                    $patient_Fname = $_GET['patient_Fname'];
                    $patient_Lname = $_GET['patient_Lname'];
					$patient_phone = $_GET['patient_phone'];
					$address = $_GET['address'];                    
                    $password = $_GET['password'];
                    $sql = "update patient set patient_Fname = '$patient_Fname', patient_Lname = '$patient_Lname' ,
					patient_phone = '$patient_phone', address = '$address'   where id_patient = '".$_SESSION['id_patient']."';";
                    mysqli_query($conn, $sql);
                    mysqli_close($conn);
					header("location: update_patient.php"); 	
                    }
					?>

					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">جدول المواعيد</h3>
                                               
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>مواعيدي</label>
                                      <table>

                                                  <tr>
    <th>رقم الدورة</th><th>اسم الدورة </th><th>تاريخها</th><th>رقم المدرب </td><td>رابط الدورة</td>
                                    </tr> 

<?php

$conn = mysqli_connect('localhost', 'root','','maoede');
$sql = " SELECT * from appointment WHERE id_doctor = '".$_SESSION['id_doctor'] ."';";
                $result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) >0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $row['Order_Of_Date'] . "</td>";
        echo "<td>" . $row['Date'] . "</td>";
        echo "<td>" . $row['id_patient'] . "</td>";
        echo "<td>" . $row['id_doctor'] . "</td>";
         echo "<td>" . $row['clinc_Name'] . "</td>";
        echo "</tr>";

    }
}                  ?>      
</table>          
                             	</div>
							</div>
						</div>



						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	
								</div>
							</div>
							
						</div>
						<div>
							<button class="btn btn-primary">تحديث</button>
							<button class="btn btn-light">إلغاء</button>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
    
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>