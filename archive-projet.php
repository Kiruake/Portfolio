<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="Portfolio de Ayrton CHAVES, développeur web">
    <title>Projets</title>
</head>
<body>
    
</body>
</html>


<?php get_header(); ?>

<section class="section-bar4">
        <h1 class="line-title3">Liste de mes projets</h1>
        <div class="animated-bar4"></div>
    </section>

<section id="projets"></section>

<div class="container">
    <?php if (have_posts()) : ?>
        <?php $count = 0; ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php if ($count % 2 == 0) : ?>
                <div class="row">
            <?php endif; ?>

            <div class="card" id="box">
                <a href="<?php the_permalink(); ?>">
                    <div class="card-thumbnail" alt="Photo d'un projet" style="background-image: url(<?php the_post_thumbnail_url('custom-thumbnail'); ?>);">
                        <div>
                            <h3 class="card-titre"><?php the_title(); ?></h3>
                        </div>
                    </div>
                    <div class="card-info gradient-border">
                        <p><?php echo substr(get_field('description'), 0, 190) . ' [...]'; ?></p>
                    </div>
                </a>
            </div>

            <?php
            $count++;
            if ($count % 2 == 0) : ?>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
        <?php if ($count % 2 != 0) : ?>
            <?php // Add an empty card to align the row with a single card with the first column ?>
            <div class="card" id="box" style="visibility: hidden;"></div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>


<?php get_footer(); ?>

<style>

.section-bar4 {
    margin-left: 10%;
    margin-top: 170px;
    margin-bottom: 60px;
}

.line-title3 {
    font-family: 'Metropolis', sans-serif;
    letter-spacing: 2px;
    font-size: 30px;
    text-transform: uppercase;
    color: lightgrey;
}

.animated-bar4 {
    width: 39%;
    height: 4px;
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



.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 50px;
    margin-bottom: 5%;
}

.card {
    width: 35%;
    margin-bottom: 20px;
}

.card-thumbnail {
    position: relative;
    height: 200px;
    background-size: cover;
    background-position: center;
}

.card-info {
    padding: 20px;
    color: white;
}

.card-titre {
    font-family: 'Metropolis', sans-serif;
    letter-spacing: 2px;
    font-size: 24px;
    text-transform: uppercase;
    color: lightgrey;
    padding-top: 10px;
    padding-left: 10px;
    margin: 0;
}


.card-info p {
    color : lightgrey;
    font-family: 'Metropolis', sans-serif;
    letter-spacing: 1px;    
}

.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
}

.gradient-border {
  --borderWidth: 1px;
  background: #1D1F20;
  position: relative;
  border-radius: var(--borderWidth);
}
.gradient-border:after {
  content: '';
  position: absolute;
  top: calc(-1 * var(--borderWidth));
  left: calc(-1 * var(--borderWidth));
  height: calc(100% + var(--borderWidth) * 2);
  width: calc(100% + var(--borderWidth) * 2);
  background: linear-gradient(60deg,#ed4d5e,#7008cb 31%,#3f0198 69%, #1bb7f7);
  border-radius: calc(2 * var(--borderWidth));
  z-index: -1;
  animation: animatedgradient 3s ease alternate infinite;
  background-size: 300% 300%;
}


@keyframes animatedgradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

.card:hover {
    transform: scale(1.05);
    transition: 0.5s;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
}

@media (max-width: 768px) {
    .container {
        flex-wrap: nowrap;
        display: block;
    }

    .card {
        width: 80%;
        margin:auto;
        margin-bottom: 15%;
    }

    .row:last-child{
        margin-bottom: 125px;
    }

    .row {
        display: block;

    }


.section-bar4 {
  margin-top: 150px;
  margin-left: 0px;
  text-align: center;
}

.animated-bar4 {
    width: 80%;
    height: 4px;
    background: linear-gradient(135deg, #ed4d5e, #7008cb 31%, #3f0198 69%, #1bb7f7);
    border-radius: 16px 16px 16px 16px;
    animation: animatedgradient 5s ease infinite;
    background-size: 300% 300%;
    margin: auto;
}

.line-title3 {
  
    font-size: 22px;

}

}



</style>