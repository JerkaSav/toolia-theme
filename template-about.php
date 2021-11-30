<?php
get_header(); 
/*
Template Name: About
*/
?>
<!-- <h1><?php the_title();?></h1>
<?php the_content(); ?>
 -->
<div id="about-page">
  <div id="main">
    <h1>Meet <span>Toolia!</span></h1>
    <h2><span class="never">/never Stop </span> to Toolia</h2>
    <h4>
      <span class="line">___</span> We are a team of professionals
      <span class="line">___</span>
    </h4>
    <div>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        fill="currentColor"
        class="bi bi-instagram"
        viewBox="0 0 16 16"
      >
        <path
          d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
        />
      </svg>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        fill="currentColor"
        class="bi bi-facebook"
        viewBox="0 0 16 16"
      >
        <path
          d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
        />
      </svg>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        fill="currentColor"
        class="bi bi-twitter"
        viewBox="0 0 16 16"
      >
        <path
          d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
        />
      </svg>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        fill="currentColor"
        class="bi bi-google"
        viewBox="0 0 16 16"
      >
        <path
          d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"
        />
      </svg>
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

    <div class="section-work">
      <div>
        <h3>Development</h3>

        <div class="card">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="45"
            height="45"
            fill="currentColor"
            class="bi bi-code-slash"
            viewBox="0 0 16 16"
          >
            <path
              d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"
            />
          </svg>

          <p class="card-desc">
            1960s with the release of Letraset sheets containing Lorem Ipsum
            passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.
          </p>
          <button type="button" id="btn-info" class="btn btn-info">Info</button>
        </div>
      </div>
      <div>
        <h3>Branding</h3>
        <div class="card">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="45"
            height="45"
            fill="currentColor"
            class="bi bi-meta"
            viewBox="0 0 16 16"
          >
            <path
              fill-rule="evenodd"
              d="M8.217 5.243C9.145 3.988 10.171 3 11.483 3 13.96 3 16 6.153 16.001 9.907c0 2.29-.986 3.725-2.757 3.725-1.543 0-2.395-.866-3.924-3.424l-.667-1.123-.118-.197a54.944 54.944 0 0 0-.53-.877l-1.178 2.08c-1.673 2.925-2.615 3.541-3.923 3.541C1.086 13.632 0 12.217 0 9.973 0 6.388 1.995 3 4.598 3c.319 0 .625.039.924.122.31.086.611.22.913.407.577.359 1.154.915 1.782 1.714Zm1.516 2.224c-.252-.41-.494-.787-.727-1.133L9 6.326c.845-1.305 1.543-1.954 2.372-1.954 1.723 0 3.102 2.537 3.102 5.653 0 1.188-.39 1.877-1.195 1.877-.773 0-1.142-.51-2.61-2.87l-.937-1.565ZM4.846 4.756c.725.1 1.385.634 2.34 2.001A212.13 212.13 0 0 0 5.551 9.3c-1.357 2.126-1.826 2.603-2.581 2.603-.777 0-1.24-.682-1.24-1.9 0-2.602 1.298-5.264 2.846-5.264.091 0 .181.006.27.018Z"
            />
          </svg>
          <p class="card-desc">
            1960s with the release of Letraset sheets containing Lorem Ipsum
            passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.
          </p>
          <button type="button" id="btn-info" class="btn btn-info">Info</button>
        </div>
      </div>
      <div>
        <h3>Consultning</h3>
        <div class="card">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="45"
            height="45"
            fill="currentColor"
            class="bi bi-megaphone"
            viewBox="0 0 16 16"
          >
            <path
              d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z"
            />
          </svg>
          <p class="card-desc">
            1960s with the release of Letraset sheets containing Lorem Ipsum
            passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.
          </p>
          <button type="button" id="btn-info" class="btn btn-info">Info</button>
        </div>
      </div>
    </div>
  </div>
  <div class="team">
    <h2>MEET OUR TEAM</h2>
    <p>
      1960s with the release of Letraset sheets containing Lorem Ipsum passages,
      and more recently with desktop publishing software like Aldus PageMaker
      including versions of Lorem Ipsum.
    </p>
    <div class="team-toolia">
      <div class="profile-user">
        <div id="user-img">
          <img
            src="<?php echo THEME_IMG_PATH . '/user-solid.svg'; ?>"
            alt="toolia logo"
          />
        </div>
        <h4>Thomas</h4>
        <details>
          <summary>Frontend Developer</summary>
          passages, and more recently with desktop publishing software like
        </details>
      </div>
      <div class="profile-user">
        <div id="user-img">
          <img
            src="<?php echo THEME_IMG_PATH . '/user-solid.svg'; ?>"
            alt="toolia logo"
          />
        </div>
        <h4>Eric</h4>
        <details>
          <summary>Frontend Developer</summary>
          passages, and more recently with desktop publishing software like
        </details>
      </div>
      <div class="profile-user">
        <div id="user-img">
          <img
            src="<?php echo THEME_IMG_PATH . '/user-solid.svg'; ?>"
            alt="toolia logo"
          />
        </div>
        <h4>Ann</h4>
        <details>
          <summary>Frontend Developer</summary>
          passages, and more recently with desktop publishing software like
        </details>
      </div>
      <div class="profile-user">
        <div id="user-img">
          <img
            src="<?php echo THEME_IMG_PATH . '/user-solid.svg'; ?>"
            alt="toolia logo"
          />
        </div>
        <h4>MohammadAli</h4>
        <details>
          <summary>Frontend Developer</summary>
          passages, and more recently with desktop publishing software like
        </details>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="m1">
      <h1>Get in Touch</h1>
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
              <form class="row g-3" action="index.php" method="POST">
                <div class="col-md-4">
                  <label for="validationServer01" class="form-label"
                    >First name</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="FirstName"
                    name="FirstName"
                    required
                  />
                </div>
                <div class="col-md-4">
                  <label for="validationServer02" class="form-label"
                    >Last name</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="LastName"
                    name="LastName"
                    required
                  />
                </div>

                <div class="col-md-8">
                  <label for="validationCustomEmail" class="form-label"
                    >Email</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="Email"
                    name="Email"
                    aria-describedby="validationServer03Feedback"
                    required
                  />
                </div>

                <div class="col-md-8">
                  <textarea
                    class="form-control"
                    placeholder="Leave a comment here"
                    id="floatingTextarea2"
                    style="height: 150px"
                  ></textarea>
                </div>

                <div class="col-12">
                  <button class="btn btn-primary" type="submit" name="submit">
                    Submit form
                  </button>
                </div>
              </form>
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
