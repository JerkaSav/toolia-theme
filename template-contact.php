<?php
/*
Template Name: Contact
*/
get_header();
$hero_img = get_field('hero_image');
$contact_title = get_field('contact_title');
$contact_text = get_field('contact_text');

?>
<section class="container" id="contact-container">
  <img id="hero-img-contact" src=" <?php echo $hero_img['sizes']['large']; ?>" alt="Hero image" class="img-fluid" />
  <div class="position-relative">
    <h2 class="text-center position-absolute bottom-0 w-100 text-light display-1"><?php the_title();
                                                                                  $hero_img['sizes']['large'] ?> </h2>

  </div>

  <div class="accordion mb-5" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          I want to schedule a meeting with you, how do I do it?
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          Fill out the form with your contact details and we will contact you as soon as possible.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          What services can your consultants help us with?
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          Our consultants are full stack developers and can handle all kinds of assignments. If it is a new programming language that we are not used to using, then the consultant goes on a training course before the assignment to have the latest knowledge. Some frameworks that we are experts in frontend are Vue, React, Svelte and Angular. In backend development, we are extra sharp on node-js(express.js), Apache, Django and the most common noSql and Sql databases.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          What programming languages do you know? </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          Javascript, PHP, Python, C++, C#, Java, Kotlin and Rust.
        </div>
      </div>
    </div>
  </div>
  <div style="margin-top:8rem"></div>
  <div class="row gx-5">
    <div class="col">
      <div>

        <?php get_template_part('/includes/sections', 'content'); ?>
      </div>
    </div>
    <div class="col ">
      <section class="shadow-sm p-5">

        <h2>
          <?php echo $contact_title; ?>
        </h2>
        <p><?php echo $contact_text; ?></p>
      </section>
    </div>
  </div>
</section>

<?php get_footer(); ?>