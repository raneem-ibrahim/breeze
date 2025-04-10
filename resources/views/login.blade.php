<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glassmorphism Login Form | CodingNepal</title>
  <link rel="stylesheet" href="{{asset('css/loginstyle.css')}}">
</head>
<body>
  <div class="wrapper">
    <form action="#">
        <div>
       <img src="{{asset('image/Brown_Retro_Book_Store_Logo-removebg-preview.png')}}" width="100PX" height="100PX" > 
    </div>
        <div class="input-field">
        <input type="text" required>
        <label><h2>البريد الإلكتروني </h2></label>
      </div>
      <div class="input-field">
        <input type="password" required>
        <label> <h2>كلمة المرور  </h2>  </label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p> تذكرني</p>
        </label>
        <a href="#">هل نسيت كلمة المرور؟</a>
      </div>
      <button type="submit">سجل الأن</button>
      <!-- <div class="register">
        <p>Don't have an account? <a href="#">Register</a></p>
      </div> -->
    </form>
  </div>
</body>
</html>