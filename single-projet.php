<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="Portfolio de Ayrton CHAVES, développeur web">
    <title><?php the_field("titre"); ?></title>
</head>
<body>
    
</body>
</html>


<?php get_header(); ?>

<?php if (have_posts()) : ?>
    
<?php while (have_posts()) : the_post(); ?>

<article>
          

    <div>
     
        <?php if( get_field('banniere') ): ?>
            <img src="<?php the_field('banniere'); ?>" class="banniere" alt="bannière du projet" />
        <?php endif; ?>

        <button class="BtnProjet"> 
            <div style="display: flex; align-items: center; gap:10px;">
            <?php if (get_field('lien2')) : ?>
                <a href="<?php echo esc_url(get_field('lien2')); ?>">Voir le projet</a>
            <?php endif; ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/Arrow.svg" alt="SVG d'une flèche" width="20px" height="20px">
            </div>
        </button>

    </div>
        


<h1 class="TitleProjet"><?php the_field("titre"); ?></h1>

<div class="content">

    <div class="Grille">

        <h2 class="Informations">Informations</h2>


        <div>
            <h3 class="borderB">Année : <span class="span1"> <?php the_field("annee"); ?> </h3>
        </div>

        <div>
            <h3 class="borderB">Catégorie : <span class="span2"> <?php the_field("categorie"); ?> </h3>
        </div>

        <div>
    <h3 class="Outils">Outils utilisés :
        <span class="span3">
            <?php
            $outils_utilises = get_the_terms(get_the_ID(), 'outil');
            if ($outils_utilises && !is_wp_error($outils_utilises)) {
                foreach ($outils_utilises as $outil) {
                    echo $outil->name . ', ';
                }
            }
            ?>
        </span>
    </h3>
</div>


    </div>

    <div class="Grille">

        <h2 class="Informations2">Brief du projet</h2>

        <div id="des" class=""> 
            <?php the_field("description"); ?>
        </div>

    </div>

</div>

    <div>

        <?php if( get_field('image') ): ?>
                    <img src="<?php the_field('image'); ?>" alt="Image Projet 1" class="ImageIde" />
                <?php endif; ?>

        <h2 class="Ide">Phase d'idéalisation</h2>

        <p class="IdeP"><?php the_field("idealisation"); ?></p>

    </div>


    <div>

    <?php

$lienfigma = get_field('lienfigma');
?>

        <iframe class="frame" title="Maquette Figma" width="800" height="450" src="<?php echo esc_url($lienfigma); ?>"allowfullscreen></iframe>

        <div>
            <h2 class="Ide">Phase de conception</h2>
            <p class="IdeP"><?php the_field("conception"); ?></p>
        </div>

    </div>

    <div>

    <?php if( get_field('image3') ): ?>
                    <img src="<?php the_field('image3'); ?>" alt="Image Projet 2"  class="ImageIde" />
                <?php endif; ?>

        <div>
            <h2 class="Ide">Phase de réalisation</h2>
            <p class="IdeP"><?php the_field("realisation"); ?></p>
        </div>

    </div>

    <button class="BtnProjetBottom"> 
        <div style="display: flex; align-items: center; gap:10px;">
            <?php if (get_field('lien')) : ?>
                <a href="<?php echo esc_url(get_field('lien')); ?>">Voir le projet</a>
            <?php endif; ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/ArrowGrey.svg" alt="SVG flèche"  width="20px" height="20px" class="ArrowIcon">
        </div>
    </button>

        
</article>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

<style>

.TitleProjet {  
  font-family: 'Metropolis', sans-serif;
  letter-spacing: 2px;
  font-size: 36px;
  text-transform: uppercase;
  color: lightgrey;
  margin-left:65px;
  margin-top:70px;
}

.content {
    display: flex;
    gap: 5%;
    margin-top: 35px;
}

.frame {
    display: block;
    border: 1px solid rgba(0, 0, 0, 0.1);
    width: 90%;
    margin: auto;
    margin-top: 80px;
}

.Titres {
    display: flex;
    gap: 20%;
}

.Informations {
    padding: 0px 0px 15px 0px;
    width: 685px;
    margin-bottom: 20px;
}

.Ide {
    margin-left:7.5%;
    margin-top: 80px;
}   

.IdeP {
    width: 90%;
    margin: auto;
    color: lightgrey;
    margin-top: 30px;
    letter-spacing: 1px;
    font-family: 'Metropolis', sans-serif;
    line-height: 160%;
    font-size: 18px;
}


.Informations2 {
    padding: 15px;
    margin-bottom: 20px;
}

.span1 {
    margin-left: 100px;
}

.span2 {
    margin-left: 65px;
}

.span3 {
    margin-left:30px;
}

.Grille {
    margin-left: 65px;
    width: 50%;
}

.banniere {
    width: 100%;
    height: 100%;
    max-height: 32rem;
    object-fit: cover;
    margin-top:50px;
}

.borderB {
    border-bottom: 2px solid lightgrey;
    width: 90%;
    padding: 0px 0px 25px 0px;
    font-size:22px;
    color:lightgrey;
}

.Outils {
    padding: 0px 0px 25px 0px;
    font-size:22px;
    color:lightgrey;
}

.carousel-container {
    width: 100%;
    overflow: hidden;
    position: relative;
    height: 60vh; /* Ajustez la hauteur selon vos besoins, par exemple, 60% de la hauteur de la vue du port */
}



.carousel-item {
    display: none;
    position: absolute;
    width: 100%;
    height: 100%;
}



.carousel-item img {
    margin: auto;
    width: 60%;
    height: auto;
    object-fit: cover;

}

.prev,
.next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 24px;
    background: transparent;
    border: none;
    cursor: pointer;
}

.prev {
    left: 10px; /* Ajustez la distance à gauche selon vos besoins */
}

.next {
    right: 10px; /* Ajustez la distance à droite selon vos besoins */
}

.ImageIde {
    text-align: center;
    margin: auto;
    margin-top: 80px;
    width: 90%;
    height: 450px;
    object-fit: cover;
    display: block;
    
}

.BtnProjet {
    position: relative;
    padding: 10px 20px;
    background-color: white;
    color: black;
    border: 1px solid black;
    font-size: 16px;
    font-family: 'Metropolis', sans-serif;
    letter-spacing: 1px;
    text-transform: uppercase;
    cursor: pointer;
    bottom: 80px;
    left: 30px;
    border-radius: 6px;
}

.BtnProjetBottom {
    margin: auto;
    display: block;
    padding: 10px 20px;
    background-color: transparent;
    color: lightgrey;
    border: 1px solid lightgrey;
    font-size: 16px;
    font-family: 'Metropolis', sans-serif;
    letter-spacing: 1px;
    text-transform: uppercase;
    cursor: pointer;
    margin-top: 80px;
    border-radius: 6px;
}

.BtnProjetBottom:hover {
    transform: scale(.95);
    box-shadow: 0 1px 4px -1px var(--shadow);
    animation: pulse 1.5s infinite;
}

@media only screen and (max-width: 768px) {
  
    h2 {
        font-size: 28px;
    }
    
.Ide {
    margin-left:0;
    margin-top: 50px;
    text-align: center; 
}

.BtnProjet {
    position: relative;
    padding: 10px 13px;
    background-color: white;
    color: black;
    border: 1px solid black;
    font-size: 14px;
    font-family: 'Metropolis', sans-serif;
    letter-spacing: 1px;
    text-transform: uppercase;
    cursor: pointer;
    bottom: 60px;
    margin: auto;
    left:auto;
    border-radius: 6px;
    display: block;
}

.TitleProjet {
    font-family: 'Metropolis', sans-serif;
    letter-spacing: 2px;
    font-size: 36px;
    text-transform: uppercase;
    color: lightgrey;
    margin-left: 5%;
    margin-top: 10px;
}

.content {
    display: block;
}

.Informations {
    padding: 0px;
    margin-bottom: 40px;
    margin-top:25px;
    width: 90%;
}


.Grille {
    margin-left: 5%;
    width: 95%;
}

.borderB {
    border-bottom: 2px solid lightgrey;
    width: 90%;
    padding: 0px 0px 15px 0px;
    font-size: 18px;
    color: lightgrey;
}

.Outils {
    padding: 0px 0px 15px 0px;
    font-size: 18px;
    color: lightgrey;
}

.Informations2 {
    padding: 0px;
    margin-bottom: 40px;
    margin-top: 40px;
}

#des {
    font-family: 'Metropolis', sans-serif;
    font-size: 15px;
    color: lightgrey;
    line-height: 160%;
    padding: 0px;
    letter-spacing: 1px;
    width: 90%;
    text-align: justify;
}

.banniere {
    width: 100%;
    height: 100%;
    max-height: 25rem;
    object-fit: cover;
    margin-top: 50px;
}

.ImageIde {
    margin: auto;
    margin-top: 50px;
    width: 90%;
    height: 20rem;
    object-fit: cover;
    display: block;
}

.IdeP {
    width: 90%;
    margin: auto;
    color: lightgrey;
    margin-top: 40px;
    letter-spacing: 1px;
    font-family: 'Metropolis', sans-serif;
    line-height: 160%;
    font-size: 15px;
    text-align: justify;
}

.frame {
    border: 1px solid rgba(0, 0, 0, 0.1);
    width: 90%;
    margin: auto;
    margin-top: 50px;
}

.BtnProjetBottom {
    margin: auto;
    display: block;
    padding: 10px 20px;
    background-color: transparent;
    color: lightgrey;
    border: 1px solid lightgrey;
    font-size: 16px;
    font-family: 'Metropolis', sans-serif;
    letter-spacing: 1px;
    text-transform: uppercase;
    cursor: pointer;
    margin-top: 50px;
    margin-bottom: 100px;
    border-radius: 6px;
}

}

</style>
