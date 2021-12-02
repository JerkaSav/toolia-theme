<?php
/*
Template Name: Contact
*/
get_header();
$hero_img = get_field('hero_image');
$contact_title = get_field('contact_title');
$contact_text = get_field('contact_text');

?>
<section class="container">
  <div class="position-relative">
    <img src="<?php echo $hero_img['sizes']['large']; ?>" alt="Hero image" class="img-fluid" />
    <h2 class="text-center position-absolute bottom-0 w-100 text-light display-1"><?php the_title(); ?> </h2>
  </div>

  <div class="accordion mb-5" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Jag vill boka in ett möte med er, Hur gör jag?
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          Fyll i formuläret med dina kontakt uppgifter så konkaktar vi dig så fort som möjligt.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Vilka tjänster kan era konsulter hjälpa oss med?
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          Våra konsulter är fullstack utvecklare och klarar av alla slags uppdrag. Om det är ett nytt programerings språk som vi inte är vana att använda, då går konsulten på en utbildning innan uppdraget för att ha dom senaste kunskaperna. Några ramverk som vi är experter på inom frontend är Vue, React, Svelte och Angular. Inom backendutveckling är vi extra vassa på node-js(express.js),Apache, Django och dom vanligaste noSql och Sql databaserna.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Vilka programeringsspråk kan ni?
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          Javascript, PHP, Python, C++, C#, Java, Kotlin och Rust.
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