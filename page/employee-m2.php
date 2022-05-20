<!DOCTYPE html>
<html lang="ar"  >
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="..\img\logo1.png" />
    <title>regestration</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="regestration.css">
    <link rel="stylesheet" href="../css/all.min.css" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- google font -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
    <link rel="stylesheet" href="../css/regestration.css">
    <link rel="stylesheet" href="../css/main.css"/>
  </head>
  <body class="custom-scrollbar" id="employee-m2">
    <!-- nav section -->
    <header dir="rtl" class="s" id="nav">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container-fluid">
      <a href="..\index.php"><img src="..\img\logo.png" alt="مركز الحاسب الآلى" id="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
      </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="..\index.php" class="nav-link" aria-current="page">الرئيسية</a>
          </li>
          <li class="nav-item">
            <a href="employee-m1.php" class="nav-link ">ادارة طلبات الطلاب</a>
          </li>
          <li class="nav-item">
            <a href="employee-m2.php" class="nav-link active">ادارة الكورسات بالمركز</a>
          </li> 

          <li class="nav-item">
            <a href="employee-m4.php" class="nav-link">ادارة طباعة التقرير</a>
          </li>

            </ul>
          </div>
        </div>
      </nav>
      </div>
    </header>

    <section class="container1">
      <h1 lang="ar">تسجيل</h1>
      <p lang="ar">قم بتسجيل بيانات الكورس هنا </p>
      <form>   
      <div class="contant">
        <div class="leftdiv">
            <input type="text"
            required="" id="nameSix" placeholder="اسم الكورس"> 
            <input placeholder="تاريخ البداية" type="text" onfocus="(this.type = 'date')"  id="date">
            <!-- <input type="date" 
            placeholder="تاريخ البداية"> -->
            <input type="number"  required
            placeholder="السعر  "> 
          </div>
            <div class="rightdiv">
            <input placeholder="ميعاد الامتحان" type="text" onfocus="(this.type = 'date')"  id="date">
            <!-- <input type="date"
            placeholder="ميعاد الامتحان"  -->
            <input placeholder="تاريخ النهاية" type="text" onfocus="(this.type = 'date')"  id="date">
            <!-- <input type="date" 
            placeholder="تاريخ النهاية"> -->
            <input type="number"  required
            placeholder="عدد ساعات الكورس"> 
            </div>

      </div>

            <div class="centerdiv">
              <input type="file" class="addimage" 
              required=""  >
            </div>
        <textarea lang="ar" class="textmessage"  placeholder="...ادخل تفصيل الكورس هنا" required></textarea> 
        <button type="submit" class="btn">اضافة</button>
    </form>
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
</body>
</html>