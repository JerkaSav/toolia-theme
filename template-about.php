<?php
/*
Template Name: About us
*/
get_header();
$textvy = get_field('brandingtext');
$icone = get_field('brandingicon');
$develop = get_field('developicon');
$developtext = get_field('developtext');
$consult = get_field('consulticon');
$consulttext = get_field('consulttext');

?>

<div id="about-page">
  <div id="main">
    <h1>Meet <span>Toolia!</span></h1>
    <h2><span class="never">/never Stop </span> to Toolia</h2>
    <h4>
      <span class="line">___</span> We are a team of professionals
      <span class="line">___</span>
    </h4>
    <div class="sociala-icon">
      <img src="<?php echo THEME_IMG_PATH . '/instagram.svg'; ?>" alt="instagram" />
      <img src="<?php echo THEME_IMG_PATH . '/facebook.svg'; ?>" alt="facebook" />
      <img src="<?php echo THEME_IMG_PATH . '/twitter.svg'; ?>" alt="twitter" />
    </div>
  </div>
  <div id="main-content" class="container-fluid">
    <h1>About Us</h1>

    <div class="main-description">
      <p class="desc-text">
        survived not only five centuries, but also the leap into electronic
        typesetting, remaining essentially unchanged. It was popularised in the
        1960s with the release of Letraset sheets containing Lorem Ipsum
        passages, and more recently with desktop publishing software like Aldus
        PageMaker including versions of Lorem Ipsum.
      </p>
    </div>

    <!--  -->

    <div class="section-work">
      <div>
        <h3>Development</h3>
        <div class="card">
          <img class="card-logo" src=" <?php echo $develop['url']; ?>" alt="icon" />

          <p class="card-desc">
            <?php echo $developtext ?>
          </p>

          <button type="button" id="btn-info" class="btn btn-info">
            <a href="<?php echo get_permalink(get_page_by_path('develop')); ?>">Development</a>
          </button>
        </div>
      </div>
      <div>
        <h3>Branding</h3>
        <div class="card">
          <img class="card-logo" src=" <?php echo $icone['url']; ?>" alt="icon" />
          <p class="card-desc">
            <?php echo $textvy ?>
          </p>
          <button type="button" id="btn-info" class="btn btn-info">
            <a href="<?php echo get_permalink(get_page_by_path('brand')); ?>">Branding</a>
          </button>
        </div>
      </div>
      <div>
        <h3>Consultning</h3>
        <div class="card">
          <img class="card-logo" src=" <?php echo $consult['url']; ?>" alt="icon" />
          <p class="card-desc">
            <?php echo $consulttext ?>
          </p>
          <button type="button" id="btn-info" class="btn btn-info">
            <a href="<?php echo get_permalink(get_page_by_path('konsult')); ?>">Consultning</a>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div id="team">
    <h2>We are Toolia</h2>
    <div class="team-toolia">
      <div class="profile-user">
        <div id="user-img">
          <a href="https://github.com/ThomasLaukkanen">
            <img src="<?php echo THEME_IMG_PATH . '/user-solid.svg'; ?>" alt="toolia logo" />
          </a>
        </div>
        <h4>Thomas</h4>
        <span>Fullstack Developer</span>
      </div>
      <div class="profile-user">
        <div id="user-img">
          <a href="https://github.com/JerkaSav">
            <img src="<?php echo THEME_IMG_PATH . '/user-solid.svg'; ?>" alt="toolia logo" />
          </a>
        </div>
        <h4>Eric</h4>
        <span>CTO</span>
      </div>
      <div class="profile-user">
        <div id="user-img">
          <a href="https://github.com/Gremlet">
            <img src="<?php echo THEME_IMG_PATH . '/user-solid.svg'; ?>" alt="toolia logo" />
          </a>
        </div>
        <h4>Ann</h4>
        <span>CEO</span>
      </div>
      <div class="profile-user">
        <div id="user-img">
          <img src="<?php echo THEME_IMG_PATH . '/user-solid.svg'; ?>" alt="toolia logo" />
        </div>
        <h4>MohammadAli</h4>
        <span>Developer</span>
      </div>
    </div>
  </div>

  <div id="content" class="content">
    <div class="m1">
      <h2>Get in Touch</h2>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">
              <h2 class="mb-5">
                Fill the form. <br />
                It's easy.
              </h2>
              <?php if (function_exists('ninja_forms_display_form')) ninja_forms_display_form(1); ?>
            </div>
            <div class="col-lg-4 ml-auto">
              <h3 class="mb-4">Let's talk about everything.</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil
                deleniti itaque similique magni. Magni, laboriosam perferendis
                maxime!
              </p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  get_footer();
  ?>
</div>