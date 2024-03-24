<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Page Title</title>
  <!-- Include jQuery and ScrollReveal libraries -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  </head>
<body>
<?php get_header(); ?>


<style>@import url('https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400&display=swap');</style>
<section class="design-section">
  <div class="timeline">

    <div class="timeline-empty"></div>

    <div class="timeline-middle">
      <div class="timeline-circle"></div>
    </div>
    <div class="timeline-component timeline-content js--fadeInLeft">
      <h3>HTML</h3>
      <p>Some Text</p>
    </div>

    <div class="timeline-component timeline-content js--fadeInRight">
      <h3>CSS</h3>
      <p>Some Text.</p>
    </div>

    <div class="timeline-middle">
      <div class="timeline-circle"></div>
    </div>
    <div class="timeline-empty"></div>

    <div class="timeline-empty"></div>

    <div class="timeline-middle">
      <div class="timeline-circle"></div>
    </div>
    <div class="timeline-component timeline-content js--fadeInLeft">
      <h3>Javascript</h3>
      <p>Some Text.</p>
    </div>

  </div>
</section>


</body> 

<script>
  $(function () {
    window.sr = ScrollReveal();

    if ($(window).width() < 768) {
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

<style>

.flex {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

body{
  background: #1f1f1f;
}


a {
  text-decoration: none;
}

.button, 
.button i {
  position: relative
}

.button {
  display: inline-block;
  cursor: pointer;
  outline: 0;
  white-space: nowrap;
  margin: 5px;
  padding: 5px 26px;
  font-size: 16px;
  height: 46px;
  line-height: 46px;
  color: #fff;
  font-weight: 300;
  letter-spacing: 1px;
  border: none;
  -webkit-transition: all .2s ease-in-out;
  -o-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
  background-color: #050505 !important;
}

.button i {
  top: 1px;
  line-height: 1;
  margin-right: 5px;
  width: 16px;
  text-align: center
}

.button span {
  text-align: center;
  display: block;
  vertical-align: middle;
  opacity: 1;
  -webkit-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0);
  -webkit-transition: all .25s;
  -moz-transition: all .25s;
  -ms-transition: all .25s;
  -o-transition: all .25s;
  transition: all .25s;
}

.button:hover span:first-child,
.button span:last-child {
  opacity: 0;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
}

.button:hover span:last-child {
  opacity: 1;
  -webkit-transform: translateY(-100%);
  -ms-transform: translateY(-100%);
  -o-transform: translateY(-100%);
  transform: translateY(-100%);
}

.gradient-border {
  background: #1D1F20;
  position: relative;
  border-radius: 0;
}

.gradient-border:after {
  content: '';
  position: absolute;
  top: calc(-1 * 3px);
  left: calc(-1 * 3px);
  height: calc(100% + 3px * 2);
  width: calc(100% + 3px * 2);
  background: linear-gradient(60deg, #f79533, #f37055, #ef4e7b, #a166ab, #5073b8, #1098ad, #07b39b, #6fba82);
  border-radius: 3px;
  z-index: -1;
  animation: animatedgradient 3s ease alternate infinite;
  background-size: 300% 300%;
}

@keyframes animatedgradient {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}


@import url('https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400&display=swap');
.design-section {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  padding: 100px 0;
  font-family: Jost;
}

.design {
  display: flex;
  align-items: center;
  justify-content: center;
}

.timeline {
  width: 80%;
  height: auto;
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
}

.timeline-content {
  padding: 20px;
  background: #1f1f1f;
  -webkit-box-shadow: 5px 5px 10px #1a1a1a, -5px -5px 10px #242424;
          box-shadow: 5px 5px 10px #1a1a1a, -5px -5px 10px #242424;
  border-radius: 5px;
  color: white;
  padding: 1.75rem;
  transition: 0.4s ease;
  overflow-wrap: break-word !important;
  margin: 1rem;
  margin-bottom: 20px;
  border-radius: 6px;
}

.timeline-component {
  margin: 0px 20px 20px 20px;
}

@media screen and (min-width: 768px) {
  .timeline {
    display: grid;
    grid-template-columns: 1fr 3px 1fr;
  }
  .timeline-middle {
    position: relative;
    background-image: linear-gradient(45deg, #F27121, #E94057, #8A2387);
    width: 3px;
    height: 100%;
  }
  .main-middle {
    opacity: 0;
  }
  .timeline-circle {
    position: absolute;
    top: 0;
    left: 50%;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background-image: linear-gradient(45deg, #F27121, #E94057, #8A2387);
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
  }
}

@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


</style>