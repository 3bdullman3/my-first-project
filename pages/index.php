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
                    <br>         
                    <label > اختر نوع حسابك</label>  
                    <input type="button" value="مريض"  onclick="location.href='login_patient.php'" >
                    
                    <input type="button" value="طبيب"  onclick="location.href='login_doctor.php'" >
                    <input type="button" value="مستشفى"  onclick="location.href='./login_hospital.php'" >                  
                </form>
              </div>
</body>
</html>