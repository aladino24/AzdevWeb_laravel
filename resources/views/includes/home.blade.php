@extends('layouts.main')

@section('container')

<div class="container-fluid" id="introduction">
    <div class="row custom-section">
      <div class="col-12 col-lg-4">
        <h4 data-aos="fade-down" data-aos-duration="1050">Hello</h4>
        <h2>I'm Aladino Zulmar</h2>
        <h3>Web Developer</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odio illo beatae ducimus, et inventore consequatur minus optio, vero aliquid vel eum obcaecati, labore itaque eveniet soluta! Quod, asperiores excepturi?</p>
        <a onclick="playLagu()" href="/posts" >My Blog</a>
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
      <img src="{{ url('AzdevWeb/img/foto1.jpg') }}" alt="Foto Profil" data-aos="fade-right">
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
      <img src="{{ url('AzdevWeb/img/foto4.jpg') }}" alt="Foto Profil" data-aos="zoom-in" data-aos-once="true">
    </div>
  </div>
</div>
</section>


<!--Contact-->
<section class="section-contact" id="section-contact">
<h2 class="contact-title" data-aos="fade-down"><span class="contact-title-section">Contact</span></h2>
<div class="container">
  <span class="big-circle"></span>
  <img src="{{ url('AzdevWeb/img/shape.png') }}" class="square" alt="" />
  <div class="form">
    <div class="contact-info">
      <h3 class="title">Let's get in touch</h3>
      <p class="text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
        dolorum adipisci recusandae praesentium dicta!
      </p>

      <div class="info">
        <div class="information">
          <img src="{{ url('AzdevWeb/img/map.png') }}" class="icon" alt="" />
          <p>Kab.Pati, Jawa Tengah - Indonesia</p>
        </div>
        <div class="information">
          <img src="{{ url('AzdevWeb/img/email.png') }}" class="icon" alt="" />
          <p>aladino@azdev.my.id</p>
        </div>
        <div class="information">
          <img src="{{ url('AzdevWeb/img/phone-call.png') }}" class="icon" alt="" />
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

@endsection
