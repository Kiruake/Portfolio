<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="Portfolio de Ayrton CHAVES, développeur web">
    <title>Accueil</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

    <?php wp_head(); ?>
</head>
<body>

<header>
    <div class="header-top">
        <a class="bg-transparent" href="<?php echo home_url(); ?>">
            <img class="Logo" src="<?php bloginfo('template_url'); ?>/img/Logo.svg" widht=52px height=38px alt="Logo">
        </a>
        
        <!-- Menu hamburger pour les écrans de téléphone et de tablette -->
        <div class="mobile-menu-icon">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>

        <div class="menu">
            <?php wp_nav_menu (  
                array( 
                    'theme_location' => 'header-menu',
                    'container' => 'nav',
                    'container_class' => 'header-menu-nav'
                ) ); 
            ?>
        </div>
    </div>
    
    <div class="reading-indicator"></div>
</header>

<!-- Ajout du menu hamburger pour les écrans de téléphone et de tablette -->
<div class="mobile-menu">
    <?php wp_nav_menu (  
        array( 
            'theme_location' => 'header-menu',
            'container' => 'nav',
            'container_class' => 'header-menu-nav'
        ) ); 
    ?>
</div>

<!-- Reste du contenu de la page -->
<script>
jQuery(document).ready(function($) {
    var currentUrl = window.location.href;
    var menuLinks = document.querySelectorAll('.header-menu-nav a');
    menuLinks.forEach(function(link) {
        if (link.href === currentUrl) {
            link.classList.add('current-menu-item');
        }
    });

    // Ajout d'un écouteur de scroll pour mettre à jour la barre de défilement
    window.addEventListener('scroll', function() {
        var scrollPosition = window.scrollY;
        var documentHeight = document.documentElement.scrollHeight - window.innerHeight;
        var scrollPercentage = (scrollPosition / documentHeight) * 100;

        document.querySelector('.reading-indicator').style.width = scrollPercentage + '%';
    });

    // Smooth scroll animation for links with the class 'scroll-link'
    $(".scroll-link").on('click', function(event) {
        event.preventDefault();

        var target = $(this.hash);
        if (target.length) {
            // Calculate the target offset from the top of the page
            var targetOffset = target.offset().top;

            // Animate the scroll to the target with a smooth effect
            $('html, body').animate({
                scrollTop: targetOffset
            }, 800); // You can adjust the duration (in milliseconds) as needed
        }
    });

    // Toggle mobile menu on icon click
    $('.mobile-menu-icon').on('click', function() {
        $('.mobile-menu').toggleClass('open'); // Toggle la classe 'open' sur le menu mobile
    });

    $(".header-menu-nav a").on('click', function(event) {
        var linkHref = $(this).attr("href");

        // Si le lien est une ancre interne sur la même page ou une autre page
        if (linkHref.startsWith("#") || linkHref.indexOf(window.location.pathname) !== -1) {
            event.preventDefault();

            // Si le lien pointe vers une ancre interne sur la même page (page "front-page.php")
            if (linkHref.startsWith("#")) {
                var target = $(linkHref);
                if (target.length) {
                    var targetOffset = target.offset().top;

                    // Animate the scroll to the target with a smooth effect
                    $('html, body').animate({
                        scrollTop: targetOffset
                    }, 800); // Vous pouvez ajuster la durée (en millisecondes) selon vos besoins
                }
            }
            // Sinon, le lien pointe vers une autre page
            else {
                // La navigation normale vers la nouvelle page se produira
                window.location.href = linkHref;
            }
        }
        // Si le lien pointe vers une autre page, y compris la page "projets"
        else {
            // La navigation normale vers la nouvelle page se produira
            window.location.href = linkHref;
        }
    });
});

</script>

<style>
header {
    background-color: rgba(31, 31, 31, 0.9);
    color: #333;
    position: fixed;
    width: 100%;
    z-index: 2;
    top: 0;
    backdrop-filter: blur(10px);
}

.header-top {
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    font-family: 'Poppins', sans-serif;
    font-size: 24px;
}

.menu ul {
    display: flex;
    list-style: none;
}

.menu ul li {
    margin-left: 20px;
}

.menu ul li a {
    font-family: 'Metropolis', sans-serif;
    text-decoration: none;
    color: lightgrey;
    padding: 0 45px;
    transition: color 0.3s ease-in-out;
    letter-spacing: 2px;
}

.menu a {
    text-decoration: none;
    position: relative;
    background-color: transparent;
    color: black;
    padding: 10px 20px;
    transition: color 0.3s ease-in-out;
}

.reading-indicator {
    position: relative;
    bottom: 0;
    left: 0;
    width: 0;
    height: 3.5px;
    z-index: 1;
    background: linear-gradient(135deg, #ed4d5e, #7008cb 31%, #3f0198 69%, #1bb7f7);
    transition: background-color 0.3s ease;
}

.Logo {
    width: 52px;
    align-items: center;
    margin-left: 10%;
}

/* Styles pour les écrans de téléphone et de tablette */
@media only screen and (max-width: 768px) {
    .menu {
        display: none;
    }

    .mobile-menu {
        display: block;
    }
}

.mobile-menu {
    display: none;
    position: absolute;
    top: 0; /* Positionner juste en dessous de l'en-tête */
    left: 0;
    width: 100%;
    height: 100vh;
    background-color: rgba(31, 31, 31, 0.9);
    z-index: 2; /* S'assurer que le menu mobile est au-dessus de l'en-tête */
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2); /* Ombre pour donner une profondeur */
}

.mobile-menu.open {
    display: block; /* Afficher le menu mobile lorsque la classe 'open' est ajoutée */
}
 

.mobile-menu-icon {
    display: none;
    cursor: pointer;
    padding: 10px;
}

.mobile-menu-icon .bar {
    width: 30px;
    height: 3px;
    background-color: lightgrey;
    margin: 6px 0;
}

/* Styles pour les écrans de téléphone et de tablette */
@media only screen and (max-width: 768px) {
    .mobile-menu-icon {
        display: block;
    }



    .header-menu-nav {
        display: none;
        width: 100%;
        position: absolute;
        top: 70px;
        left: 0;
        background-color: rgba(31, 31, 31, 0.9);
        z-index: 1;
    }

    .header-menu-nav a {
        display: block;
        padding: 15px;
        color: lightgrey;
        text-decoration: none;
    }

    .header-menu-nav a:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }
}
</style>

</body>
</html>
