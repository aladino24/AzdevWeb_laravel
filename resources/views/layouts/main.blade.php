<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!--Aos-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="{{ url('AzdevWeb/css/main.css') }}">
    <link rel="stylesheet" href="{{ url('AzdevWeb/login/style.css') }}">
    <title>Azdev</title>
    <link rel="icon" href="{{ url('AzdevWeb/img/logotab.png') }}">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"crossorigin="anonymous"
    ></script>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="3386f7b0-8485-4d86-8b0d-0ad1eb3b1f2e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
  </head>
  <body data-spy="scroll" data-target="#nav-scroll" onload="hide_loading();">

    @include('includes.navbar')

     @yield('container')


     @include('includes.footer')

     <div class="loading-page">
      <div class="loadingio-spinner-cube-s1jc41lr4n preloader"><div class="ldio-xwf4cahgz9c">
        <div></div><div></div><div></div><div></div>
        </div></div>
      </div>

<script type="text/javascript">
   var myAudio = document.getElementById("Audio");
   var isPlaying = false;
   function togglePlay(){
     myAudio.play();
     terakhir = document.querySelector('#section-home');
     terakhir.classList.add('hide');
   }
</script>

<script type="text/javascript">
  var myAudio = document.getElementById("music");
  var isPlaying = false;
  function playMusic(){
    myAudio.play();
    terakhir = document.querySelector('#section-aboutScroll');
    terakhir.classList.add('hide');
  }
</script>
<script src="{{ url('AzdevWeb/login/js/login.js') }}"></script>
<script type="text/javascript">
  var myAudio = document.getElementById("lagu");
  var isPlaying = false;
  function playLagu(){
    myAudio.play();
    terakhir = document.querySelector('#introduction');
    terakhir.classList.add('hide');
  }
</script>



    <!-- Optional JavaScript; choose one of the two! -->
    <script type="text/javascript">
      window.addEventListener("scroll",function(){
        var navbar = document.querySelector(".nav-box");
        navbar.classList.toggle("bg-light", window.scrollY > 0);
      })
      window.addEventListener("scroll",function(){
        var mobile = document.querySelector(".custom-nav");
        mobile.classList.toggle("bg-light", window.scrollY > 0);
      })
    </script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.min.js" integrity="sha512-HYG9E+RmbXS7oy529Nk8byKFw5jqM3R1zzvoV2JnltsIGkK/AhZSzciYCNxDMOXEbYO9w6MJ6SpuYgm5PJPpeQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <!--Aos-->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

    <script src="{{ url('AzdevWeb/js/script.js') }}"></script>
    <script src="{{ url('AzdevWeb/js/contact.js') }}"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
