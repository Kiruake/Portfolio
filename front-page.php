<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="Portfolio de Ayrton CHAVES, développeur web">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <script src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Accueil</title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>

<body>

<div class="container">
  <div class="neon">Developpeur</div>
  <div class="flux">Web</div>
</div>

<section class="section-bar">
        <h2 class="line-title">Ma séléction de projets</h2>
        <div class="animated-bar"></div>
    </section>

    <?php

$project_ids_to_display = array(46, 50, 48);

$args = array(
    'post_type'      => 'projet',
    'posts_per_page' => count($project_ids_to_display),
    'post__in'       => $project_ids_to_display,
    'order'          => 'ASC',
    'orderby'        => 'post__in',
);

$query = new WP_Query($args);

if ($query->have_posts()) :
?>

    <section class="section">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">
            <div class="item" alt="Photo d'un projet" style="background-image: url(<?php the_post_thumbnail_url('custom-thumbnail'); ?>);">
                <div class="item-desc">
                    <h3 class="typoCyber"><?php the_title(); ?></h3>
                    <p><?php echo substr(get_field('description'), 0, 220); ?></p>
                </div>
            </div>
        <?php endwhile; ?>
    </section>
    </a>
    <?php
    wp_reset_postdata();
endif;
?>

  <a id="btn1" href="<?php echo get_post_type_archive_link('projet'); ?>">

    <span></span>
    <span></span>
    <span></span>
    <span></span>
    Tout mes projets
</a>


<section id="competences"></section>

  <section class="section-bar3">
        <h2 class="line-title2">Mes compétences</h2>
        <div class="animated-bar5"></div>
    </section>


  <div class="skills">
   
  <div class="flexcol">

    <div class="col">

      <div class="skill">
            <div class="flex">
              <div class="skill-name">HTML</div>
              <img id="imgSkill" src="<?php echo get_template_directory_uri(); ?>/img/html.svg" alt="Photo logo HTML" width=28px height=34px>
            </div>

            <div class="skill-bar">
              <div class="skill-per" per="95%" style="max-width:95%"></div>
            </div>
        </div>

        <div class="skill">
            <div class="flex">
              <div class="skill-name">CSS</div>
              <img id="imgSkill" src="<?php echo get_template_directory_uri(); ?>/img/css.svg" alt="Photo logo CSS" width=28px height=34px>
            </div>

            <div class="skill-bar">
              <div class="skill-per" per="80%" style="max-width:85%"></div>
            </div>
        </div>

      </div>

  <div class="col">

      <div class="skill">
          <div class="flex">
            <div class="skill-name">Tailwind</div>
            <img id="imgSkill" src="<?php echo get_template_directory_uri(); ?>/img/tailwind.svg" alt="Photo logo Tailwind" width=28px height=34px>
          </div>

          <div class="skill-bar">
            <div class="skill-per" per="65%" style="max-width:65%"></div>
          </div>
      </div>
      

      <div class="skill">
          <div class="flex">
            <div class="skill-name">Wordpress</div>
            <img id="imgSkill" src="<?php echo get_template_directory_uri(); ?>/img/wordpress.svg" alt="Photo logo Wordpress" width=28px height=34px>
          </div>

          <div class="skill-bar">
            <div class="skill-per" per="80%" style="max-width:80%"></div>
          </div>
      </div>
      

  </div>

</div>

<div class="flexcol">

  <div class="col">

    <div class="skill">
          <div class="flex">
            <div class="skill-name">Javascript</div>
            <img id="imgSkill" src="<?php echo get_template_directory_uri(); ?>/img/javascript.svg" alt="Photo logo JS" width=28px height=34px>
          </div>

          <div class="skill-bar">
            <div class="skill-per" per="70%" style="max-width:70%"></div>
          </div>
      </div>


        <div class="skill">
            <div class="flex">
              <div class="skill-name">Vue.js</div>
              <img id="imgSkill" src="<?php echo get_template_directory_uri(); ?>/img/vue.svg" alt="Photo logo Vue.js" width=28px height=34px>
            </div>

            <div class="skill-bar">
              <div class="skill-per" per="70%" style="max-width:70%"></div>
            </div>
        </div>

  </div>

    <div class="col">

      <div class="skill">
            <div class="flex">
              <div class="skill-name">SQL</div>
              <img id="imgSkill" src="<?php echo get_template_directory_uri(); ?>/img/sql.svg" alt="Photo logo SQL" width=28px height=34px>
            </div>

            <div class="skill-bar">
              <div class="skill-per" per="85%" style="max-width:85%"></div>
            </div>
      </div>
   
      <div class="skill">
          <div class="flex">
            <div class="skill-name">Supabase / Pocketbase</div>
            <img id="imgSkill" src="<?php echo get_template_directory_uri(); ?>/img/supabase.svg" alt="Photo logo Supabase" width=28px height=34px>
          </div>

          <div class="skill-bar">
            <div class="skill-per" per="50%" style="max-width:50%"></div>
          </div>
      </div>
   
    </div>

  </div>
</div>


<section id="contact"></section>

    <section class="section-bar2">
        <div class="animated-bar3"></div>
    </section>


      <div class="flexcol2">

          <div class="person">
            <div class="container2">
              <div class="container-inner">
                <img
                  class="circle"
                  src="<?php echo get_template_directory_uri(); ?>/img/cercle.png" alt="Fond de couleur"
                />
                <img src="<?php echo get_template_directory_uri(); ?>/img/Profil.png" alt="Photo de profil" class="img img1">
              </div>
            </div>
          </div>

          <div speech-bubble pleft atop class="bubble">
      <div class="title">Passionné par le développement web et désireux de mettre en pratique mes compétences, je suis à la recherche d'un stage de 10 semaines à partir d'avril. Fort de ma formation et de mon intérêt pour les technologies émergentes, je suis enthousiaste à l'idée de contribuer à des projets innovants et d'apprendre au sein d'une équipe dynamique. N'hésitez pas à me contacter pour discuter de notre collaboration future.</div>
      </div>
        
    </div>


    <section class="section-bar">
        <h2 class="line-title2">Formulaire de contact</h2>
        <div class="animated-bar2"></div>
    </section>


    <div class="SectionForm">

    <div class="ParaForm">
        <p>Si vous avez des questions, des commentaires ou si vous souhaitez discuter d'une collaboration potentielle, n'hésitez pas à me contacter en utilisant le formulaire ci-dessous.</p>
        <p>Je suis toujours ravi d'entendre parler de nouveaux projets passionnants ou de répondre à toute demande d'information supplémentaire. </p>
    </div>


        <div class="FormPosition">
        <?php $form_id = 'dd58a85'; echo do_shortcode("[contact-form-7 id='$form_id' title='Formulaire de contact 1']");?>
        </div>
    </div>

    
    




<?php get_footer(); ?>
</body>

</html>

<style>

#wpcf7-f43-o1{

}

.SectionForm {
 display: flex;
 flex-direction: row-reverse;
 margin-top: 40px;
 margin-bottom: -80px;
}


.FormContainer {
	position: relative;
}

.FormPosition {
    margin-left: 75px;
    color: black;
   
}


.titleFooter {
	font-size: 48px;
	color: lightgrey;
	margin-bottom: 20px;
}

.wpcf7 input[type="text"] {
    display: block;
    width: 90%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    color: white;
    margin: auto;
    background-color: transparent;
}

.wpcf7 textarea {
    width: 90%;
    height: 150px;
    padding: 10px;
    margin: auto;
    border: 1px solid #ccc;
    border-radius: 5px;
    color: white;
    background-color: transparent;
    display: block;
}

.wpcf7 input[type="email"] {
    width: 90%;
    display: block;
    padding: 10px;
    margin: auto;
    border: 1px solid #ccc;
    border-radius: 5px;
    color: white;
    background-color: transparent;
}

.wpcf7 input[type="submit"] {
    background-color: transparent;
    margin: auto;
    padding: 15px 30px;
    text-align: center;
    text-transform: uppercase;
    transition: 0.5s;
    color: lightgrey;
    border-radius: 6px;
    display: block;
    margin-top: 30px;
    border: solid 1px lightgrey;
}

        
.wpcf7 input[type="submit"]:hover {
    background-position: right center; /* change the direction of the change here */
    color: black;
    text-decoration: none;
    background-color: lightgrey;
  }
         

.wpcf7-response-output {
	margin-top: 20px;
}

.wpcf7 form {
    width: 500px;
    margin: 40px auto;
    margin-bottom: 140px;
    border: solid 2px lightgrey;
    background-color: transparent;
}

.ParaForm {
    width: 50%;
    margin: auto;
    font-family: 'Metropolis', sans-serif;
    color: lightgrey;
    letter-spacing: 1px;
    font-size: 20px;
    margin-top: 10%;
    text-align: start;
    line-height: 130%;
    display: grid;
    gap: 15%;
}


.wpcf7 label {
    font-size: 20px;
    color: transparent;
}

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Roboto", sans-serif;
            font-size: 16px;
            background-color: #1f1f1f;
        }

        h2 {
            color: lightgrey;
            padding-bottom: 16px;
            font-size: 20px;
            line-height: 28px;
            font-weight: 700;
            position: relative;
            text-transform: capitalize;
        }

        .section {
            padding: 60px 50px;
            text-align: center;
            background-color: #1f1f1f;
        }

        .item {
            margin: 0 15px 60px;
            width: 320px;
            height: 400px;
            display: inline-block;
            background: #343434 no-repeat center center / cover;
            border-radius: 6px;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            transition: all 0.4s ease-in-out;
        }

        .item.active {
            width: 500px;
            box-shadow: 12px 40px 40px rgba(0, 0, 0, 0.25);
        }

        .item:after {
            content: "";
            display: block;
            position: absolute;
            height: 100%;
            width: 100%;
            left: 0;
            top: 0;
            background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1));
        }

        .item-desc {
            padding: 0 24px 12px;
            color: #fff;
            position: absolute;
            bottom: 0;
            z-index: 1;
            overflow: hidden;
            transform: translateY(calc(100% - 54px));
            transition: all 0.4s ease-in-out;
        }

        .item.active .item-desc {
            transform: none;
        }

        .item-desc h3 {
            margin: 0 0 10px;
            font-size: 28px;
            line-height: 36px;
            letter-spacing: 2px;
            color: lightgrey;
            font-family: 'Metropolis', sans-serif;
        }

        .item-desc p {
            opacity: 0;
            transform: translateY(32px);
            transition: all 0.4s ease-in-out 0.2s;
            color: lightgrey;
            font-family: 'Metropolis', sans-serif;
        }

        .item.active .item-desc p {
            opacity: 1;
            transform: translateY(0);
            margin-bottom: 20px;
        }

        .animated-bar {
    width: 440px;
    height: 4px;
    background:linear-gradient(135deg,#ed4d5e,#7008cb 31%,#3f0198 69%, #1bb7f7);
    border-radius: 16px 16px 16px 16px;
    animation: animatedgradient 5s ease infinite;
    background-size: 300% 300%;
    margin-bottom: 30px;
}

.animated-bar2 {
    width: 420px;
    height: 4px;
    background:linear-gradient(135deg,#ed4d5e,#7008cb 31%,#3f0198 69%, #1bb7f7);
    border-radius: 16px 16px 16px 16px;
    animation: animatedgradient 5s ease infinite;
    background-size: 300% 300%;
}

.animated-bar5 {
    width: 310px;
    height: 4px;
    background:linear-gradient(135deg,#ed4d5e,#7008cb 31%,#3f0198 69%, #1bb7f7);
    border-radius: 16px 16px 16px 16px;
    animation: animatedgradient 5s ease infinite;
    background-size: 300% 300%;
    margin-bottom: 20px;
}

.animated-bar3 {
    width: 1100px;
    height: 2px;
    background:linear-gradient(135deg,#ed4d5e,#7008cb 31%,#3f0198 69%, #1bb7f7);
    border-radius: 16px 16px 16px 16px;
    animation: animatedgradient 5s ease infinite;
    background-size: 300% 300%;
}

@keyframes animatedgradient {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.section-bar {
    margin-left: 120px;
    margin-top: 150px;
}

.section-bar3 {
    margin-left: 120px;
    margin-top: 200px;
}

.section-bar2 {
    margin-top: 130px;
    margin-bottom:30px;
    text-align: center;
    justify-content: center;
    display: flex;
}


.line-title {
    font-family: 'Metropolis', sans-serif;
    letter-spacing: 2px;
    font-size: 28px;
    text-transform: uppercase;
    color: lightgrey;
}

.line-title2 {
    font-family: 'Metropolis', sans-serif;
    letter-spacing: 2px;
    font-size: 28px;
    text-transform: uppercase;
    color: lightgrey;
    margin-top: -80px
}


.flex {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.skill:first-child {
  margin-top: 60px;
}

body{
  background: #1f1f1f;
}

.skills{

  padding: 0 20px;
  margin: auto;
}

.skill-name{
  font-size: 18px;
  font-weight: 700;
  letter-spacing: 2px;
  color: lightgrey;
  text-transform: uppercase;
  font-family: 'Metropolis', sans-serif;
  margin: 20px 0;
}

.skill-bar{
  height: 10px;
  background: #444;
  border-radius: 3px;
}

.skill-per{
  height: 10px;
  background: lightgrey;
  border-radius: 3px;
  position: relative;
  animation: fillBars 3.5s 1;
}

  
.flexcol {
  display: flex;
  justify-content: center;
  gap: 15%;
}

.flexcol2 {
  display: flex;
  justify-content: center;
  gap: 15%;
  margin-left: 100px;
  margin-bottom: 190px;
}
.col {
  width: 450px;
}

@keyframes fillBars{
  from{
    width: 0;
  }
  to{
    width: 100%;
  }
}

a {
  text-decoration: none;
}


#btn1 {
    position: relative;
    display: flex;
    padding: 25px 30px;
    margin: auto;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing: 4px;
    overflow: hidden;
    font-family: 'Metropolis', sans-serif;
    width: 350px;
    justify-content: center;
    background: linear-gradient(135deg, #ed4d5e, #7008cb 31%, #3f0198 69%);
    background-clip: text;
    -webkit-background-clip: text;
    color: lightgrey;
}

#btn1:hover {
    transform: scale(.95);
    box-shadow: 0 1px 4px -1px var(--shadow);
}

#btn1 span {
    position: absolute;
    display: block;
}

#btn1 span:nth-child(1) {
    top: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #ed4d5e, #7008cb 31%, #3f0198 69%);
    animation: animate1 1s linear infinite;
}

#btn1 span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #ed4d5e, #7008cb 31%, #3f0198 69%);
    animation: animate2 1s linear infinite;
    animation-delay: 0.25s;
}

#btn1 span:nth-child(3) {
    bottom: 0;
    right: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #ed4d5e, #7008cb 31%, #3f0198 69%);
    animation: animate3 1s linear infinite;
    animation-delay: 0.50s;
}

#btn1 span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #ed4d5e, #7008cb 31%, #3f0198 69%);
    animation: animate4 1s linear infinite;
    animation-delay: 0.75s;
}

@keyframes animate1 {
    0% {
        left: -100%;
    }
    50%, 100% {
        left: 100%;
    }
}

@keyframes animate2 {
    0% {
        top: -100%;
    }
    50%, 100% {
        top: 100%;
    }
}

@keyframes animate3 {
    0% {
        right: -100%;
    }
    50%, 100% {
        right: 100%;
    }
}

@keyframes animate4 {
    0% {
        bottom: -100%;
    }
    50%, 100% {
        bottom: 100%;
    }
}

@font-face {
  font-family: neon;
  src: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/707108/neon.ttf);
}

.container {
  display: block;
  text-align: center;
  vertical-align: middle;
  margin: auto;
}

.neon, .flux {
  font-family: neon;
  font-display: swap;
  font-size: 9vw;
  line-height: 9vw;
  color: #FB4264;
  text-shadow: 0 0 3vw #F40A35;
  opacity: 1;
  transition: opacity 0.5s ease-in-out, color 0.5s ease-in-out, text-shadow 0.5s ease-in-out;
}

.neon.hide, .flux.hide {
  opacity: 0;
}



.neon {
  font-family: neon;
  color: #FB4264;
  font-size: 9vw;
  line-height: 9vw;
  text-shadow: 0 0 3vw #F40A35;

}

.flux {
  font-family: neon;
  color: #426DFB;
  font-size: 9vw;
  line-height: 9vw;
  text-shadow: 0 0 3vw #2356FF;
 
}

.neon {
    animation: neon 2s linear infinite;
  -moz-animation: neon 2s ease infinite;
  -webkit-animation: neon 2s ease infinite;
  -o-animation: neon 2s linear infinite;
  margin-top:180px;
}

@keyframes neon {
  0%,
  100% {
    text-shadow: 0 0 0.8vw #ed4d5e, 0 0 2.4vw #ed4d5e, 0 0 8vw #ed4d5e, 0 0 8vw #ed4d5e, 0 0 .32vw #7008cb, .4vw .4vw .08vw #7008cb;
    color: #ed4d5e;
  }
  50% {
    text-shadow: 0 0 0.4vw #a83356, 0 0 1.2vw #a83356, 0 0 4vw #a83356, 0 0 4vw #a83356, 0 0 .16vw #206496, .4vw .4vw .08vw #206496;
    color: #a83356;
  }
}



.flux {
  animation: flux 2s linear infinite;
  -moz-animation: flux 2s linear infinite;
  -webkit-animation: flux 2s linear infinite;
  -o-animation: flux 2s linear infinite;
}

@keyframes flux {
  0%,
  100% {
    text-shadow: 0 0 0.8vw #1041FF, 0 0 2.4vw #1041FF, 0 0 8vw #1041FF, 0 0 8vw #1041FF, 0 0 .32vw #8BFDFE, .5vw .5vw .1vw #147280;
    color: #28D7FE;
  }
  50% {
    text-shadow: 0 0 0.4vw #082180, 0 0 1.2vw #082180, 0 0 4vw #082180, 0 0 4vw #082180, 0 0 .16vw #082180, .5vw .5vw .1vw #0A3940;
    color: #146C80;
  }
}

.person {
  align-items: center;
  display: flex;
  flex-direction: column;

}
.container2 {
  border-radius: 50%;
  height: 312px;
  -webkit-tap-highlight-color: transparent;
  transform: scale(0.48);
  transition: transform 250ms cubic-bezier(0.4, 0, 0.2, 1);
  width: 400px;
}

.container2:hover {
  transform: scale(0.54);
}
.container-inner {
  clip-path: path(
    "M 390,400 C 390,504.9341 304.9341,590 200,590 95.065898,590 10,504.9341 10,400 V 10 H 200 390 Z"
  );
  position: relative;
  transform-origin: 50%;
  top: -200px;
}
.circle {
  border-radius: 50%;
  cursor: pointer;
  height: 380px;
  left: 10px;
  pointer-events: none;
  position: absolute;
  top: 210px;
  width: 380px;
}
.img {
  pointer-events: none;
  position: relative;
  transform: translateY(20px) scale(1.15);
  transform-origin: 50% bottom;
  transition: transform 300ms cubic-bezier(0.4, 0, 0.2, 1);
}
.container2:hover .img {
  transform: translateY(0) scale(1.2);
}
.img1 {
  left: 22px;
  top: 180px;
  width: 400px;
  height: unset;
}

[speech-bubble], [speech-bubble] * { 
  
  box-sizing: border-box ;
  font-family: 'Metropolis', sans-serif;

}

[speech-bubble]{
  --bbColor: grey;
  --bbArrowSize: 1.5rem;
  --bbBorderRadius: 0.25rem;
  --bbPadding: 1rem;
  background: var(--bbColor);
  border-radius: var(--bbBorderRadius);
  padding: var(--bbPadding);
  position: relative;
}

[speech-bubble]::before{
  content: ''; 
  position: absolute;
  background: var(--bbColor);
}

[speech-bubble][pbottom]{ margin-bottom: var(--bbArrowSize) }
[speech-bubble][ptop]   { margin-top: var(--bbArrowSize); }
[speech-bubble][pleft]  { margin-left: var(--bbArrowSize); }
[speech-bubble][pright] { margin-right: var(--bbArrowSize); }


/* bottom and top  */
[speech-bubble][pbottom]::before,
[speech-bubble][ptop]::before{
  --width: calc(var(--bbArrowSize) / 2 * 3);
  height: var(--bbArrowSize);
  width: var(--width);
}



/* top */
[speech-bubble][ptop]::before{
  bottom: calc(100% - 2px);
}
[speech-bubble][ptop][aleft]::before{
  left: var(--bbPadding);
  clip-path: polygon(0 0, 100% 100%, 25% 100%)
}
[speech-bubble][ptop][acenter]::before{
  left: calc(50% - var(--width) / 2);
  clip-path: polygon(12.5% 100%, 50% 0, 87.5% 100%)
}
[speech-bubble][ptop][aright]::before{
  right: var(--bbPadding);
  clip-path: polygon(0 100%, 100% 0, 75% 100%)
}

/* left and right  */
[speech-bubble][pleft]::before,
[speech-bubble][pright]::before{
  --height: calc(var(--bbArrowSize) / 2 * 3);
  width: var(--bbArrowSize);
  height: var(--height);
}



/* left */
[speech-bubble][pleft]::before{
  right: calc(100% - 2px);
}
[speech-bubble][pleft][atop]::before{
  top: var(--bbPadding);
  clip-path: polygon(0 0, 100% 25%, 100% 100%)
}

.bubble {
  --bbColor: #FFFFFF;
    width: 60%;
    height: fit-content;
    position: relative;
    bottom: -140px;
    left: -165px;
}

@media only screen and (max-width: 768px) {


.section {
    padding: 60px 0px;
}

.section-bar {
  margin-top: 100px;
  margin-left: 0px;
  text-align: center;
}

.animated-bar {
    width: 80%;
    height: 4px;
    background: linear-gradient(135deg, #ed4d5e, #7008cb 31%, #3f0198 69%, #1bb7f7);
    border-radius: 16px 16px 16px 16px;
    animation: animatedgradient 5s ease infinite;
    background-size: 300% 300%;
    margin: auto;
}

.animated-bar2 {
    width: 80%;
    height: 4px;
    background: linear-gradient(135deg, #ed4d5e, #7008cb 31%, #3f0198 69%, #1bb7f7);
    border-radius: 16px 16px 16px 16px;
    animation: animatedgradient 5s ease infinite;
    background-size: 300% 300%;
    margin: auto;
}

.animated-bar5 {
    margin: auto;
    width: 80%;
    height: 4px;
    background:linear-gradient(135deg,#ed4d5e,#7008cb 31%,#3f0198 69%, #1bb7f7);
    border-radius: 16px 16px 16px 16px;
    animation: animatedgradient 5s ease infinite;
    background-size: 300% 300%;
}


.animated-bar3 {
    width: 80%;
    margin-top: -40px;

}

.line-title {
 
    font-size: 22px;

}

.line-title2 {
 
 font-size: 22px;
 margin-top:-25px

}


.FormPosition {
    margin: auto;
    color: black;
   
}


.flux {
  font-size: 12vw;
  line-height: 12vw;
}

.neon {
  font-size: 12vw;
  line-height: 12vw;


}

.flexcol {
  display: block;
 
}

.col {
    width: 90%;
    margin: auto;
}


.skill-per {
  height: 4px;

}

.skill-bar {
  height: 4px;
}

.skill-name {
  font-size: 15px;
}


#btn1 {
    width: 246px;
    font-size:12px;
    margin-top:-75px;
    padding: 19px 30px;
   
}

#imgSkill {
  width: 24px;
 
}

.flexcol2 {
    display: block;
    justify-content: center;
    gap: 15%;
    margin-left: 0px;
    margin-bottom: 100px;
}

[speech-bubble][pleft] {
    margin: auto;
}

.bubble {
    width: 80%;
    height: auto;
    position: relative;
    bottom: 0px;
    left: 0px;
}

[speech-bubble] * {
    box-sizing: border-box;
    font-size: 12px;
}

.title {
    font-size: 12px;
    font-family: 'Metropolis', sans-serif;
    
}

[speech-bubble][pleft][atop]::before {
    clip-path: polygon(0 0, 100% 25%, 100% 100%);
    top: -17px;
    transform: rotate(304deg);
}

[speech-bubble][pleft]::before {
    right: calc(100% - 53%);
}

.wpcf7 form {
    width: 80%;
    margin: 40px auto;
    margin-bottom: 170px;
    border: solid 2px lightgrey;
    background-color: transparent;
}

.SectionForm {
 display: block;
}

.section-bar3 {
    margin-top: 90px;
    margin-left: 0px;
    text-align: center;
}

.ParaForm {
    width: 80%;
    margin: auto;
    font-family: 'Metropolis', sans-serif;
    color: lightgrey;
    letter-spacing: 1px;
    font-size: 13px;
    margin-top: 10%;
    text-align: justify;
    line-height: 130%;
    display: grid;
    gap: 5%;
}

.wpcf7 input[type="text"] {
   display: block;
 
}

.wpcf7 input[type="submit"] {
  background-color: transparent;
    margin: auto;
    padding: 10px 20px;
    text-align: center;
    text-transform: uppercase;
    transition: 0.5s;
    color: lightgrey;
    border-radius: 6px;
    display: block;
    margin-top: 24px;
    border: solid 1px lightgrey;
}

.container-inner {
    top: -300px;
}

.container2 {
  height: 250px;
}

}

    </style>

<script>

function changeText() {
  setTimeout(function () {
    // Show Ayrton Chaves
    $(".neon").text("Ayrton").removeClass("hide");
    $(".flux").text("Chaves").removeClass("hide");

    setTimeout(function () {
      // Transition: Hide Ayrton Chaves
      $(".neon, .flux").addClass("hide");

      setTimeout(function () {
        // Show Developpeur Web
        $(".neon").text("Developpeur").removeClass("hide");
        $(".flux").text("Web").removeClass("hide");

        setTimeout(function () {
          // Transition: Hide Developpeur Web
          $(".neon, .flux").addClass("hide");

          setTimeout(function () {
            // Show Ayrton Chaves again
            $(".neon").text("Ayrton").removeClass("hide");
            $(".flux").text("Chaves").removeClass("hide");

            changeText(); // Call the function again for the next cycle
          }, 1000); // 1-second transition delay
        }, 2000); // 2-second display duration
      }, 1000); // 1-second transition delay
    }, 2000); // 2-second display duration
  }, 0); // Initial delay, set to 0 to start immediately
}

$(document).ready(function () {
  $(".item").hover(function () {
    if ($(window).width() >= 768) {
      $(".item").not($(this)).removeClass("active");
      $(this).toggleClass("active");
    }
  });

  changeText();
});


$(function () {
    window.sr = ScrollReveal();

    if ($(window).width() < 600) {
      $('.timeline-content').each(function () {
        $(this).removeClass('js--fadeInLeft').addClass('js--fadeInRight');
      });

      sr.reveal('.js--fadeInRight', {
        origin: 'right',
        distance: '300px',
        easing: 'ease-in-out',
        duration: 800,
      });
    } else {
      sr.reveal('.js--fadeInLeft', {
        origin: 'left',
        distance: '300px',
        easing: 'ease-in-out',
        duration: 800,
      });

      sr.reveal('.js--fadeInRight', {
        origin: 'right',
        distance: '300px',
        easing: 'ease-in-out',
        duration: 800,
      });
    }

    sr.reveal('.js--fadeInLeft', {
      origin: 'left',
      distance: '300px',
      easing: 'ease-in-out',
      duration: 800,
    });

    sr.reveal('.js--fadeInRight', {
      origin: 'right',
      distance: '300px',
      easing: 'ease-in-out',
      duration: 800,
    });
  });

  // This is just to auto-update the data-text if you're editing it directly on the page and is not required for the actual effect
$('[data-text]').on('keyup', function(){
  $(this).attr('data-text', $(this).text());
});


    </script>