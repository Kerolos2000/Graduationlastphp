<!DOCTYPE html>
<html lang="ar"  dir="rtl" >
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="..\img\logo1.png" />
    <title>مركز الحاسب الالى - كلية تجارة</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/all.min.css" />
    <link rel="stylesheet" href="../css/main.css"/>
    <link rel="stylesheet" href="css/employee.css" />
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- google font -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
  </head>
  <body class="custom-scrollbar" id="employee-login">

<!-- nav section -->
  <header class="s" id="nav">
      <div class="container ">
        <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container-fluid">
      <a href="..\index.php"><img src="..\img\logo.png" alt="مركز الحاسب الآلى" id="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
      </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="..\index.php" class="nav-link active" aria-current="page">الرئيسية</a>
        </li>
            </ul>
          </div>
        </div>
      </nav>
      </div>
    </header>


<!-- form -->
<section id="form" class=" gradient-custom">
  <div class="container ">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card text-black-50" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class="mb-md-5 mt-md-4 pb-5">
              <h2 class="fw-bold mb-2 text-uppercase">تسجيل الدخول</h2>
              <p class="text-black-50 mb-5 mt-3">برجاء تسجيل اسم المسخدم و كلمة السر !</p>
              <form action="employee-main.php" class=" needs-validation" novalidate>
              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX"><i class="fa-solid fa-envelope"></i>البريد الالكترونى</label>
                <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" required>
                <div class="invalid-tooltip">البريد الالكترونى خطأ .</div>
              </div>
              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typePasswordX" ><i class="fa-solid fa-key"></i>كلمة السر </label>
                <input type="password" id="typePasswordX" class="form-control form-control-lg"name="password" required> 
                <i class="fa-solid fa-eye" id="color" onclick="myFunction()"></i> 
                <div class="invalid-tooltip">كلمة السر خطأ</div>             
              </div>
              <div>
                <button value="login" class="mouse-cursor-gradient-tracking text-black-50 px-5 mt-2" name="login" data-testid="royal_login_button" type="submit">دخول</button>
                

              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>
  </section>

  <footer style="background-color:#37506d;margin-top: 100px;" class="footer">
    <div class="container" style="padding-top: 110px;position: relative;">
        <div class="footercontent">
    
        <div class="follow" style="text-align: center;">
        <div class="followme" >

        </div>
        </div>
    
    <p style="text-align: center;">
        <img src="../img/silver.png" alt="" >
    </p>
        <div class="iconwarper">
    
        <a href="https://www.facebook.com/crcs.fca/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#" target="_blank"><i class="fa-brands fa-whatsapp" ></i></a>
        <a href="#" target="_blank"><i class="fa-brands fa-google-plus-g"></i></a>
        </div>
    
        <ul class="footerlink">
        <li><a href="Home.php" >Home</a></li>
        <li><a href="Services.php"  class="a1 aa">Services</a></li>
        <li><a href="AboutUs.php" class="ac" >AboutUs</a></li>
        <li><a href="HelpCentes.php"  class="a1 ab">HelpCentes</a></li>
    </ul>
        <p style="font-family: system-ui; text-align: center; color:#a3fffc;">الحقوق محفوظه كلية التجاره © 2022
        </p>
    </div>
        </div>
    
    </footer>

<script src="../js/popper.min.js"></script>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/main.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/all.min.js"></script>
</body>
</html>