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

    <link rel="stylesheet" href="css/main.css">

    <title>Azdev</title>
    <link rel="icon" href="img/logotab.png">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"crossorigin="anonymous"
    ></script>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="3386f7b0-8485-4d86-8b0d-0ad1eb3b1f2e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
  </head>
  <body data-spy="scroll" data-target="#nav-scroll">
   
    <div class="container-fluid nav-box fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light custom-nav" id="section-home">    
        <a class="navbar-brand" href="#">
            <img src="img/logobrand.png" alt="Azdev Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav" id="nav-scroll">
            <li class="nav-item active">
              <a class="nav-link page-scroll" href="#section-home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#section-aboutScroll">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#section-skill">Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#section-contact">Contact</a>
            </li>
            <li class="nav-item">
                <a onclick="togglePlay()" class="nav-link btn btn-primary login-button" href="#">Login</a>
              </li>
          </ul>
        </div>
      </nav>
      </div>
  

    <div class="container-fluid" id="introduction">
      <div class="row custom-section">
        <div class="col-12 col-lg-4">
          <h4 data-aos="fade-down" data-aos-duration="1050">Hello</h4>
          <h2>I'm Aladino Zulmar</h2>
          <h3>Web Developer</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odio illo beatae ducimus, et inventore consequatur minus optio, vero aliquid vel eum obcaecati, labore itaque eveniet soluta! Quod, asperiores excepturi?</p>
          <a onclick="playLagu()" href="#" >Read More</a>
        </div>
      </div>
    </div>
  </div>

  <audio src="music/Gustixa - lemon tree.mp3" id="lagu"></audio>

  <!--About-->
  <section class="about section" id="section-aboutScroll">
    <h2 class="section-title" data-aos="fade-down"><span class="about-me">About Me</span></h2>
    <div class="container">
    <div class="about_container row bd-grid">
      <div class="about_img col-12 col-lg-3">
        <img src="img/foto1.jpg" alt="Foto Profil" data-aos="fade-right">
      </div>
      <div class="content-profil col-12 col-lg-8">
        <h2 class="about_subtitle">Aladino Zulmar Abadi</h2>
        <h6>Founder Azdev</h6>
        <p data-aos="fade-down">Halo, perkenalkan nama saya Aladino Zulmar Abadi dan saya merupakan seorang Web Developer dan Content Writer. Selain itu saya adalah orang yang tertarik dengan yang namanya science dan teknologi,hal tersebut yang membuat saya termotivasi untuk selalu belajar dengan teknologi-teknologi baru.</p>
        <p data-aos="fade-up" data-aos-delay="200">Saya memiliki pengalaman dalam belajar dan berkarya selama kurang lebih 5 tahun dalam bidang computer programming dan computer networking.</p>
        <a onclick="playMusic()" href="#" class="detail-me" data-aos="fade-up">Detail Me</a>
      </div>
    </div>
  </div>
  </section>

  <audio src="music/Gustixa - lemon tree.mp3" id="music"></audio>

  <!--Skill Menu-->
<section class="skill section" id="section-skill">
  <div class="container box-section">
  <h2 class="skill-title" data-aos="fade-down" data-aos-duration="1000"><span class="skill-title-section">Skills</span></h2>
    <div class="skill_container row">
      <div class="content-skill col-12 col-lg-6">
        <h3 class="skill_subtitle">My Tech Skills</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sunt enim iure architecto id incidunt repellendus.</p>
        <div class="box-skill">
          <div class="skill-bars">
            <div class="details">
              <span>Computer Networking</span>
              <span>90%</span>
            </div>
            <div class="bar">
                <div id="first-bar"></div>
            </div>
          </div>
          <div class="skill-bars">
            <div class="details">
              <span>Programming</span>
              <span>75%</span>
            </div>
            <div class="bar">
                <div id="second-bar"></div>
            </div>
          </div>
          <div class="skill-bars">
            <div class="details">
              <span>Technical Support</span>
              <span>80%</span>
            </div>
            <div class="bar">
                <div id="third-bar"></div>
            </div>
          </div>
          <div class="skill-bars">
            <div class="details">
              <span>Graphic Design</span>
              <span>70%</span>
            </div>
            <div class="bar">
                <div id="fourth-bar"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="skill_img col-12 col-lg-6">
        <img src="img/foto4.jpg" alt="Foto Profil" data-aos="zoom-in" data-aos-once="true">
      </div>
    </div>
  </div>
</section>


<!--Contact-->
<section class="section-contact" id="section-contact">
  <h2 class="contact-title" data-aos="fade-down"><span class="contact-title-section">Contact</span></h2>
  <div class="container">
    <span class="big-circle"></span>
    <img src="img/shape.png" class="square" alt="" />
    <div class="form">
      <div class="contact-info">
        <h3 class="title">Let's get in touch</h3>
        <p class="text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
          dolorum adipisci recusandae praesentium dicta!
        </p>

        <div class="info">
          <div class="information">
            <img src="img/map.png" class="icon" alt="" />
            <p>Kab.Pati, Jawa Tengah - Indonesia</p>
          </div>
          <div class="information">
            <img src="img/email.png" class="icon" alt="" />
            <p>aladino@azdev.my.id</p>
          </div>
          <div class="information">
            <img src="img/phone-call.png" class="icon" alt="" />
            <p>082-329-397-920</p>
          </div>
        </div>

        <div class="social-media">
          <p>Connect with us :</p>
          <div class="social-icons">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="contact-form">
        <span class="circle one"></span>
        <span class="circle two"></span>

        <form action="index.html" autocomplete="off">
          <h3 class="title">Contact us</h3>
          <div class="input-container">
            <input type="text" name="name" class="input" />
            <label for="">Username</label>
            <span>Username</span>
          </div>
          <div class="input-container">
            <input type="email" name="email" class="input" />
            <label for="">Email</label>
            <span>Email</span>
          </div>
          <div class="input-container">
            <input type="tel" name="phone" class="input" />
            <label for="">Phone</label>
            <span>Phone</span>
          </div>
          <div class="input-container textarea">
            <textarea name="message" class="input"></textarea>
            <label for="">Message</label>
            <span>Message</span>
          </div>
          <input type="submit" value="Send" data-aos="fade-up" class="btn"/>
        </form>
      </div>
    </div>
  </div>
</section>

<audio src="music/Gustixa - lemon tree.mp3" id="Audio"></audio>
 
<!--Footer-->

<footer class="text-center text-lg-start text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 top-footer">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span class="text-top-footer">Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f icon-footer"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter icon-footer"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google icon-footer"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram icon-footer"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin icon-footer"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github icon-footer"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="contain-footer">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          
            <img src="img/logobrand.png" alt="Azdev Logo" width="129px" height="50px">
          <p class="mt-3">
            Learn technology easily using azdev, get various benefits and features provided by azdev.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 part-footer">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 title-content-footer">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Graphic Design</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Web Apps</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Mobile Apps</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Content Writer</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 part-footer">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 title-content-footer">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Blog</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 part-footer">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 title-content-footer">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> Kab. Pati,Jawa Tengah - Indonesia</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
             aladino@azdev.my.id
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->
<hr>
  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="#">Aladino Zulmar</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


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

    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>