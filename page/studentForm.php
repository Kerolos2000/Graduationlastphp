<!DOCTYPE html>
<html  lang="ar"  dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="..\img\logo1.png" />
    <title>مركز الحاسب الالى - كلية تجارة</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/all.min.css" />
    <link rel="stylesheet" href="../css/main.css" />
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- google font -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
</head>
    <body class="custom-scrollbar" id="studentForm">
<!-- nav section -->
    <header class="s" id="nav">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
        <a href="..\index.php"><img src="..\img\logo.png" alt="مركز الحاسب الآلى" id="logo" ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
            <a href="..\index.php" class="nav-link" aria-current="page">الرئيسية</a>
        </li>
        <li class="nav-item">
            <a href="student-c1.php" class="nav-link active">التسجيل</a>
        </li>
        <li class="nav-item">
            <a href="student-c2.php" class="nav-link">الكورسات</a>
        </li>  

        <li class="nav-item">
            <a href="student-c4.php" class="nav-link">تواصل معنا</a>
        </li>

            </ul>
            </div>
        </div>
        </nav>
        </div>
    </header>

<!-- form -->
<section id="form" class="gradient-custom">
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center ">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card text-black-50" style="border-radius: 1rem;">
            <div class="card-body pt-2 pb-2 ps-4 pe-4 text-center">
                <div class="mb-md-5 mt-md-4 ">
                <h3 class="fw-bold mb-4 ">انشاء حساب جديد</h3>
                <form action="" class=" needs-validation" novalidate>
                <div class="row">
                    <div class="form-outline form-white mb-3 col-6">
                    <input type="text" id="typeTextX" class="form-control form-control-lg " placeholder="الاسم الاول" name="lname" minlength="2" maxlength="10" required>
                    <div class="invalid-tooltip">تاكد من كتابة اسمك الاول</div>  
                    </div>
                    <div class="form-outline form-white mb-3 col-6">
                    <input type="text" id="typeTextX" class="form-control form-control-lg" placeholder="اسم العائلة" name="fname" minlength="2" maxlength="10" required>
                    <div class="invalid-tooltip">تاكد من كتابة اسم العائلة</div> 
                    </div>
                    <div class="form-outline form-white mb-3 ">
                        <input type="text" id="typeTextX" class="form-control form-control-lg"  placeholder="اسمك رباعى بالعربية لطباعة الشهادة" minlength="10" maxlength="100"  name="name" required>           
                        <div class="invalid-tooltip">تاكد من كتابة اسمك الرباعى بشكل صحيح لطباعة الشهادة</div> 
                    </div>
                    <div class="form-outline form-white mb-3 ">
                        <input type="text" id="typeTextX" class="form-control form-control-lg"  placeholder="اسمك رباعى بالانجليزية لطباعة الشهادة" minlength="10" maxlength="100"  name="name" required>           
                        <div class="invalid-tooltip">تاكد من كتابة اسمك الرباعى بشكل صحيح لطباعة الشهادة</div> 
                    </div>
                    <div>
                    <div class="form-outline form-white mb-3 ">
                        <input type="number" id="typeNationalIDX" class="form-control form-control-lg" placeholder="الرقم القومى" name="NationalID" min="20000000000000" max="39999999999999" required>           
                        <div class="invalid-tooltip">تاكد من كتابة رقمك القومى بشكل صحيح</div> 
                    </div>

                    <div class="form-outline form-white mb-3 ">
                    
                        <input type="text" id="typeNumberX" class="form-control form-control-lg" placeholder="رقم الهاتف" name="phone"  onkeypress="isInputNumber(event)" minlength="10" maxlength="10" required>
                        <div class="input-group">
                        <div class="input-group-append">
                        <span class="input-group-text">0</span>
                        </div>

                    </div>
                    <div class="invalid-tooltip inphone">تاكد من كتابة اخر 10 ارقم بشكل صحيح</div> 
                    </div>



                    <div class="form-outline form-white mb-3">
                        <input type="text" class="form-control form-control-lg" id="typeAddressX" placeholder="العنوان" maxlength="100" required>
                        <div class="invalid-tooltip">تاكد من كتابة العنوان بشكل صحيح</div> 
                    </div>
                    <div class="form-outline form-white mb-3 ">
                        <input type="email" id="typeEmailX" class="form-control form-control-lg"  placeholder="البريد الالكترونى" name="email" required>           
                        <div class="invalid-tooltip">تاكد من كتابة بريدك الالكترونى بشكل صحيح</div> 
                    </div>
                    <div class="form-outline form-white mb-3 pass">  
                        <input type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="كلمة السر" minlength="6" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="password" required >
                        <i class="fa-solid fa-eye" id="color" onclick="myFunction()"></i>
                        <div class="invalid-tooltip inpass">تاكد من كتابة خليط من 6 ارقام و حروف كبيرة و صغيرة</div>                       
                    </div>

                    <div class="form-outline form-white mb-3 ">
                        <input type="password" id="typePasswordX1" class="form-control form-control-lg text-end" placeholder="تاكيد كلمة السر" minlength="6" name="password" required>  
                        <i class="fa-solid fa-eye" id="color1" onclick="myFunction1()"></i>         
                        <div class="invalid-tooltip">اعد كتابة كلمة السر</div> 
                    </div>
                        <div class="row">
                            <h6 class="text-end mb-3">اختر تاريخ ميلادك</h6>
                        <div class="col-4">
                            <select name="Day" id="Day" class="form-control form-control-lg" required>
                                <option value="" disabled selected>اليوم</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                </select>   
                                <div class="invalid-tooltip">اختر يوم ميلادك</div>                             
                        </div>

                        <div class="col-4">
                            <select name="Month" id="Month" class="form-control form-control-lg" required>
                                <option value="" disabled selected>الشهر</option>
                                <option value="jan">يناير</option>
                                <option value="feb">فبراير</option>
                                <option value="mar">مارس</option>
                                <option value="apr">ابريل</option>
                                <option value="may">مايو</option>
                                <option value="jun">يونيو</option>
                                <option value="jul">يوليو</option>
                                <option value="agu">أغسطس</option>
                                <option value="sep">سبتمبر</option>
                                <option value="oct">أكتوبر</option>
                                <option value="nov">نوفمبر</option>
                                <option value="dec">ديسمبر</option>
                                </select>
                                <div class="invalid-tooltip">اختر شهر ميلادك</div>
                        </div>

                        <div class="col-4">
                            <select name="Year" id="Year" class="form-control form-control-lg" required >
                                <option value="" disabled selected>السنة</option>
                                <option value="2021">2021</option>	
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                </select>
                                <div class="invalid-tooltip">اختر سنة ميلادك</div>
                        </div>

                        </div>
                </div> 
                </div>
                <div>
                    <button value="signup" class="mouse-cursor-gradient-tracking text-black-50 px-5 mt-3 text-center" name="signup" data-testid="royal_signup_button" type="submit">تسجيل</button>
                </div>
                <div class="mt-3">
                    <a href="../page/student-c1.php">تسجيل الدخول</a>
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