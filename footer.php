<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php wp_head(); ?>
</head>
<body>

<footer>

<div class="custom-footer">
  <!-- Social media icons -->

  <div class="social-container" style="--gradient-colors: #dd4b39, #4285f4;">
    <a class="social-link" href="#!" role="button">
      <div class="social-icon-container">
        <img src="<?php echo get_template_directory_uri(); ?>/img/mail-icon.svg" alt="Google" class="social-icon">
      </div>
    </a>
  </div>

  <div class="social-container" style="--gradient-colors: #405de6, #f56040;">
    <a class="social-link" href="#!" role="button">
      <div class="social-icon-container">
        <img src="<?php echo get_template_directory_uri(); ?>/img/instagram-icon.svg" alt="Instagram" class="social-icon">
      </div>
    </a>
  </div>

  <div class="social-container" style="--gradient-colors: #0077b5, #00a0dc;">
    <a class="social-link" href="#!" role="button">
      <div class="social-icon-container">
        <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin-icon.svg" alt="LinkedIn" class="social-icon">
      </div>
    </a>
  </div>

  <div class="social-container" style="--gradient-colors: #333, #fff;">
    <a class="social-link" href="#!" role="button">
      <div class="social-icon-container">
        <img src="<?php echo get_template_directory_uri(); ?>/img/github-icon.svg" alt="GitHub" class="social-icon">
      </div>
    </a>
  </div>

  
 
  <div class="animated-border"></div>
  <p class="copyright">© 2024 Ayrton CHAVES. All rights reserved.</p>
</div>

<button id="buttonCV"><a href="https://drive.google.com/file/d/17V92wO4Lk_qdplwmDdoN9B1PtHVaS8EP/view?usp=share_link" download="CV_AC.pdf">Télécharger CV</a></button>

</footer>


<?php wp_footer(); ?>
</body>
</html>

<style>

footer {
  background-color: #000; /* Footer background color */
}

.custom-footer {
  display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 50px;
    gap: 5%;
    align-items: center;
    background-color: #000;
    color: white;
    padding-top: 20px;

}

.social-container {
  display: flex;
  align-items: center;
  margin: 10px;
  position: relative;
}

.social-icon-container {
  width: 30px; /* Adjust the size of the container as needed */
  height: 30px;
  position: relative;
  overflow: hidden;
}


.social-icon {
  width: 100%;
  height: 100%;
}

.social-link {
  text-decoration: none;
  color: inherit;
}

.animated-border {
    width: 90%;
    height: 2px;
    background:linear-gradient(135deg,#ed4d5e,#7008cb 31%,#3f0198 69%, #1bb7f7);
    border-radius: 16px 16px 16px 16px;
    margin-top: 20px;
    margin-bottom: 20px;
    text-align: center;
    animation: animatedborder 5s ease infinite;
    background-size: 300% 300%;
}


@keyframes animatedborder {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.copyright {
  margin-top: 10px;
  text-align: center;
  letter-spacing : 2px;
  color: lightgrey;
  font-family: 'Metropolis', sans-serif;
}

#buttonCV:hover {
    transform: scale(.95);
    box-shadow: 0 1px 4px -1px var(--shadow);
    background-color: lightgrey;
    color: black;
}

#buttonCV {
  position: relative;
    display: flex;
    padding: 7px 17px;
    margin: auto;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing: 4px;
    overflow: hidden;
    width: 260px;
    justify-content: center;
    color: lightgrey;
    border-radius: 6px;
    border: 2px lightgrey solid;
    font-size: 14px;
    right: -32%;
    bottom: 126px;
    background-color: transparent;
}

@media only screen and (max-width: 768px) {
  
  #buttonCV {
    right: 0%;
    bottom: 220px;
  }
}

</style>
