<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>MOVIES FOR YOU</title>
</head>
<body>
  <!-- Header -->

  <section id="header">
    <div class="header container">
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
    <div class="nav-bar">
    <div class="brand">
        <a href="index.html#hero"><h1><span>M</span>4<span>U</span></h1></a>
    </div>
    <div class="nav-list">
    <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="{{ route('home')}} " data-after="Home">Home</a></li>
            <li><a href="#projects" data-after="R S">questions</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#Donations" data-after="Donation">Donation</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
          </ul>
    </div>
    </div>
    </div>
  </section>
  <!-- End Header -->

  @yield('content')

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand"><h1><span>M</span>4<span>U</span></h1></div>
      <h2>Movies For You</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png"/></a>
        </div>
      </div>
      <p>Copyright © 2021 Nasir. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js')}}"></script>
    @stack('js')
</body>
</html>
