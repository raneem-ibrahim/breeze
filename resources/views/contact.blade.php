<!DOCTYPE html>
<html lang="en">
 {{-- dir="rtl"> --}}
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقعنا</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Fonts Links For Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <!-- Amiri Quranic Font -->
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap" rel="stylesheet">
   

    {{-- start slider --}}
   <!-- استدعاء الخط من Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i&display=swap" rel="stylesheet">

<!-- استدعاء ملفات Owl Carousel من المجلد الجديد -->
<link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/owl.theme.default.min.css') }}">

<!-- استدعاء مكتبة الأيقونات Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">

<!-- استدعاء ملف الـ Style.css من المجلد الجديد -->
<link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">

    {{-- end slider --}}
  </head>
  <body class="page-other">
    <header >
      <nav class="navbar">
        <div> 
          <img src="{{asset('image/Brown_Retro_Book_Store_Logo-removebg-preview.png')}}" width="100px" height="100px">
        </div>
        <ul class="menu-links">
          <span id="close-menu-btn" class="material-symbols-outlined">close</span>
       
          <li><a href="{{url('index')}}"> الرئيسية</a></li>
          <li><a href="{{url('aboutus')}}">من نحن </a></li>
          <li><a href="{{url('contact')}}">اتصل بنا </a></li>
          <li><a href="{{url('bloge')}}"> مدونة </a></li>
          <li ><div class="dropdown ">
            <a class="btn btn-secondary dropdown-toggle droplist" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              الاعدادات
            </a>
          
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div></li>
        </ul>
        <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
      </nav>
    </header>
    <section class="hero-section">
        <div class="quran-verse">
          <p class="verse-text">اتصل بنا </p>
         
        </div>
      </section>

      <br><br>




      {{-- start contact --}}
      <div class="bodycontact">
        <section class="contact-section">
            <div class="image-containercon">
                <img src="{{asset('image/contactimage.jpg')}}" alt="صورة لشخص يصلي">
            </div>
            <div class="content-container">
                <h2><span>Contact</span> Us and Get in <span>Touch</span></h2>
                <p>لوريم إيبسوم دولور سيت أميت، كونسيكتيتور أديبيسينج إليت، سيد دو eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <ul class="contact-info">
                    <li>Paradise Road 70, Avenue Park, London, UK<i class="fas fa-map-marker-alt" style="color: #38678b;"></i></li>
                    <li>+123 456 789<i class="fas fa-phone" style="color: #38678b;"></i></li>
                    <li>mail@salam.co<i class="fas fa-envelope" style="color: #38678b;"></i></li>
                    <li>@salam.officiali <i class="fab fa-instagram" style="color: #38678b;"></i></li>
                    <li>Salam Islamic Center<i class="fab fa-facebook" style="color: #38678b;"></i></li>
                </ul>
            </div>
        </section>
      </div>
      {{-- end contact  --}}


  {{-- start form contact us --}}

  <div class="bodycontact2">
    <div class="container3">
      <div class="text_c">نموذج تواصل معنا</div>
      @if(session('success'))
  <div class="success-message">
    {{ session('success') }}
  </div>
@endif
      <form action="{{ url('contact') }}" method="POST">
        @csrf
        <div class="form-row">
          <!-- حقل الاسم الكامل -->
          <div class="input-data">
            <div class="input-field">
              <input type="text" name="full_name" required>
              <div class="underline"></div>
              <label>الاسم الكامل</label>
            </div>
          </div>
  
          <!-- حقل البريد الإلكتروني -->
          <div class="input-data">
            <div class="input-field">
              <input type="email" name="email" required>
              <div class="underline"></div>
              <label>البريد الإلكتروني</label>
            </div>
          </div>
        </div>
  
        <div class="form-row">
          <!-- حقل رقم الهاتف -->
          <div class="input-data">
            <div class="input-field">
              <input type="tel" name="phone" required>
              <div class="underline"></div>
              <label>رقم الهاتف</label>
            </div>
          </div>
  
          <!-- محتوى الرسالة حقل -->
          <div class="input-data">
            <div class="input-field">
              <input type="text" name="message" required>
              <div class="underline"></div>
              <label>محتوى الرسالة </label>
            </div>
          </div>
        </div>
  
        <!-- حقل محتوى الرسالة -->
        {{-- <div class="input-data">
          <div class="textarea-field">
            <textarea required></textarea>
            <div class="underline"></div>
            <label>محتوى الرسالة</label>
          </div>
        </div> --}}
  
        <div class="submit-btn">
          <div class="inner"></div>
          <input type="submit" value="إرسال">
        </div>
  
        <div class="contact-info">
          <p>للتواصل مع خدمة العملاء: <strong>+001 345 6889</strong></p>
        </div>
      </form>
    </div>
  </div>
  
  
</div>

  {{-- end form contact us --}}














  <br><br>
      <footer>
        <div class="footer-divider">
            <span class="footer-logo"><img src="{{asset('image/لوجو.png')}}" alt="الشعار" height="40"></span>
        </div>
        
        <div class="footer-content">
            <div class="footer-title-icons">
                <h2 class="footer-title"> <img src="{{asset('image/namelogo.png')}}" width="120px" height="100px"></h2>
                <div class="footer-icons">
                    <a href="#"><i class="fa-brands fa-facebook" style="color: #38678b;"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp" style="color: #2a5d84;"></i></a>
                </div>
            </div>
            <div>
                <h3 style="font-size: 16px; font-weight: bold; ">الخدمات</h3>
                <ul class="footer-links">
                    <li>المسجد الكبير</li>
                    <li>الحج والعمرة</li>
                    <li>الزكاة والصدقة</li>
                    <li>رمضان</li>
                    <li>تفسير القرآن</li>
                </ul>
            </div>
            <div>
                <h3 style="font-size: 16px; font-weight: bold;">البرامج</h3>
                <ul class="footer-links">
                    <li>التجمعات</li>
                    <li>العبادة</li>
                    <li>المجتمع</li>
                    <li>المعرفة</li>
                    <li>المركز الإعلامي</li>
                    <li>الوظائف</li>
                </ul>
            </div>
            <div>
                <h3 style="font-size: 16px; font-weight: bold;">روابط</h3>
                <ul class="footer-links">
                    <li>شركاؤنا</li>
                    <li>اتصل بنا</li>
                    <li>مركز المساعدة</li>
                    <li>المدونة الإسلامية</li>
                    <li>الرؤى</li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p style="font-size: 14px;">مدعوم من SocioLib.</p>
            <div>
                <a href="#" style="text-decoration: none; color: black;">سياسة الخصوصية</a> |
                <a href="#" style="text-decoration: none; color: black;">الشروط والأحكام</a>
            </div>
        </div>
    </footer>
     


    <script>
      const header = document.querySelector("header");
      const hamburgerBtn = document.querySelector("#hamburger-btn");
      const closeMenuBtn = document.querySelector("#close-menu-btn");
      // Toggle mobile menu on hamburger button click
      hamburgerBtn.addEventListener("click", () => header.classList.toggle("show-mobile-menu"));
      // Close mobile menu on close button click
      closeMenuBtn.addEventListener("click", () => hamburgerBtn.click());
    </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
        <script src="/asset/js/jquery.min.js"></script>
        <script src="/asset/js/popper.js"></script>
        <script src="/asset/js/bootstrap.min.js"></script>
        <script src="/asset/js/owl.carousel.min.js"></script>
        <script src="/asset/js/main.js"></script>
  </body>
</html>