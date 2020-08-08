<html lang="ar" dir="rtl">
<head>
    <title>Telecom</title>
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/43af4b3caa.js" crossorigin="anonymous"></script>

</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light  mynav ">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">الرئيسية  </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#services">خدماتنا</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">الأسعار</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#About">من نحن؟</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">تواصل معنا</a>
            </li>
            <li>
                <input type="checkbox" class="checkbox" id="chk" />
                <label class="label" for="chk">
                    <i class="fas fa-moon"></i>
                    <i class="fas fa-sun"></i>
                    <div class="ball"></div>
                </label>
            </li>
        </ul>
        <div class="mr-auto navDiv2 ">
            <ul class="navbar-nav">
                <li class="nav-item " >
                    <a class="nav-link"  href="{{ route('login') }}">تسجيل دخول</a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link" href="#">انشاء حساب</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!---------- banner section-------->
<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="promo-title"> العراب للاتصالات</p>
                <p> المركز الأول في تقديم الخدمات عن بعد
                    <br>
                    دفع فواتير الانترنيت من المنزل
                    <br>
                    تحويل رصيد ام تي ان وسيرياتيل
                    <br>
                    ولسا كمان وكمان اي شي بيخطر عبالك عنا
                </p>
                <div class="bdiv text-center ml-auto">
                    <a id="log" class="nav-link "  href="{{ route('login') }}" >تسجيل دخول</a>
                    <a id="sign" class="nav-link " href="#">انشاء حساب</a>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img  src="img/home1.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

<!------------------------ services --------------------->
<section id="services" >
    <div class="container text-center">
        <h1 class="title">خدماتنا</h1>
        <div class="row ">
            <div class="col-md-2"></div>

            <div class="col-md-4 services">
                <h4>متجر خاص للصفحة</h4>
                <p>باللغة العربية الفصحى يوجد العديد من الخدمات لكي نقدمها تحويل رصيد ام تي ان وسيريتيل
                    <br> دفع فواتير بوابات ADSL بالاضافة الى العديد والعديد
                </p>
            </div>
            <div class="col-md-4">
                <img src="img/service1.png" class="img-fluid service-img" alt="">
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row ">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <img src="img/service2.png" class="img-fluid service-img" alt="">
            </div>
            <div class="col-md-4 services">
                <h4>متجر خاص للصفحة</h4>
                <p>باللغة العربية الفصحى يوجد العديد من الخدمات لكي نقدمها تحويل رصيد ام تي ان وسيريتيل
                    <br> دفع فواتير بوابات ADSL بالاضافة الى العديد والعديد
                </p>
            </div>

            <div class="col-md-2"></div>
        </div>
        <a type="button" class="btn btn-primary" href="{{ route('payment_services') }}" > كل الخدمات </a>
    </div>
</section>
<!------------------------- About ------------------------->
<section id="About">
    <div class="container text-center">
        <h1 class="title">من نحن؟</h1>
        <div class="row">
            <div class=" text-center">
                <p> من نحن ؟ سؤال يُسأل لنا كل يوم لا ادري من نحن ولا ماذا نفعل حبك حبك ما حبك تصطفل
                    المهم عبي كم سطر بالعربي لحتى شوف التنسيق كيف رح يطلع
                    يعني بصراحة أغبى شي ممكن تعملو لما بدك تحط اي نص وتوقف متل الحمار ما
                    تعرف شو تكتب
                    يعني بصراحة أغبى شي ممكن تعملو لما بدك تحط اي نص وتوقف متل الحمار ما
                    يعني بصراحة أغبى شي ممكن تعملو لما بدك تحط اي نص وتوقف متل الحمار ما
                    يعني بصراحة أغبى شي ممكن تعملو لما بدك تحط اي نص وتوقف متل الحمار ما
                    يعني بصراحة أغبى شي ممكن تعملو لما بدك تحط اي نص وتوقف متل الحمار ما
                    تعرف شو اللي بدك تكتبو المهم التنسيق طلع ظريف وضا متل ما هو وما عملي مشاكل .
                </p>
            </div>
        </div>
    </div>
</section>
<!------------------------------- contact ----------------------------->
<section id="contact">
    <div class="container text-center">
        <h1 class="title">  تواصل معنا </h1>
        <div class="row contact-icon">
            <div class="col-md-4  ">
                <i class="fas fa-map-marker-alt"></i>
                <p class="text-center my-2">طرطوس - دوير الشيخ سعد - جانب المشفى</p>
            </div>
            <div class="col-md-4  ">
                <i class="fas fa-phone-alt"></i>
                <p class="text-center mt-2 mb-0"> 0999-888777</p>
                <p class="text-center mt-0"> 0999-888777</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-envelope"></i>
                <p class="text-center my-2">Email : info@example.com</p>

            </div>
        </div>

    </div>

</section>
<!------------------------------- footer ----------------------------->
<section id="footer">
    <div>
        <svg class=" img-fluid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#008080" fill-opacity="1"
                  d="M0,160L40,176C80,192,160,224,240,213.3C320,203,400,149,480,133.3C560,117,640,139,720,170.7C800,203,880,245,960,234.7C1040,224,1120,160,1200,122.7C1280,85,1360,75,1400,69.3L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">

            </path>
        </svg>
    </div>
    <div class="fdiv">
        <p class="text-center"> Website Created By HYBA Team <br><br></p>
    </div>
</section>
<script  src="js/main.js"></script>
</body>
</html>
