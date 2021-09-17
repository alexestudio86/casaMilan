<!-- Get Header -->
<?php get_header(); ?>

<!-- Header -->
<header class="w3-row">
    <div class="w3-display-container bg-parallax">
        <div class="w3-display-middle w3-center">
            <h2 class="w3-text-white text-uppercase w3-xlarge font-weight-bold">Un espacio de arte, cultura y gastronomía</h2>
            <h3 class="w3-text-white text-uppercase w3-medium py-3">Vive la experiencia en Casa Milán</h3>
            <a href="#" class="w3-btn w3-text-white w3-hover-white w3-border text-uppercase">Conoce mas</a>
        </div>
    </div>
</header>

<!-- Blog -->
<section aria-label='Slideshow' class="w3-row">
    <div class="w3-content py-4">
        <div class="w3-row py-2">
            <div class="w3-half w3-row py-2 pr-1">
                <div class="w3-border w3-border-white">
                    <div class="w3-center">
                        <p class="w3-large">Realiza tu próximo evento en Casa Milán</p>
                        <p class="w3-large w3-text-gray">Será único e inolvidable</p>
                        <div class="w3-center">
                            <a href="#" class="w3-button w3-white w3-border w3-border-blue w3-text-blue">Contrata aquí</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w3-half w3-row py-2 pr-1">
                <div class="w3-border w3-border-white">
                    <h3 class="w3-center">Eventos pasados</h3>
                    <div class="py-2 w3-center">
                        <a href="#" class="w3-button w3-white w3-border w3-border-blue w3-text-blue">Noche de calaveras: Una cena de dìa de muertos</a>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <!-- Get post -->
        
        <?php
        if( have_posts( ) ):
            while ( have_posts() ) : the_post();
                if( is_home() ){
                    //get_template_part('content');
                    the_content();
                }
            endwhile;
        else:
            echo 'no hay post';
        endif;
        ?>
    </div>
</section>

<!-- Second parallax -->
<div class="w3-row">
    <div class="bg-parallax-02 w3-display-container">
        <div class='w3-display-middle w3-center'>
            <h2 class='w3-text-white text-uppercase w3-xlarge text-uppercase'>Realiza tu próximo evento en Casa Milán</h2>
            <p class='w3-text-white text-uppercase w3-medium py-3'>Será único e inolvidable</p>
            <a href="#" class='w3-btn w3-text-white w3-hover-white w3-border text-uppercase'>Conoce Más</a>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="w3 row">
    <div class="w3-row w3-gray">
        <div class="w3-content pt-3">
            <div class="w3-half w3-padding w3-center">
                <a href="">
                    <img src="https://1.bp.blogspot.com/-OpFDSfF8mEM/YN40G4UX3SI/AAAAAAABA1E/Jd78TPC_UK4EIAYKqQlMcAIrG7atdiZ5wCLcBGAsYHQ/s70/mexicraneos-logo-1.png" alt="Logo Mexicráneos" style='height:70px; width:auto'>
                </a>
            </div>
            <div class="w3-half w3-padding w3-center">
                <a href="">
                    <img src="https://1.bp.blogspot.com/-ZhrGI1ACLU4/YN40QQ1dTSI/AAAAAAABA1I/Uz0lAMTNy4E_454x3rU-C4iRKkp0CayWACLcBGAsYHQ/s70/pagano-logo.png" alt="Logo pagano" style='height:70px; width:auto'>
                </a>
            </div>
        </div>
    </div>
    <div class="w3-row w3-light-gray">
        <div class="w3-content pb-3">
            <div class="w3-col s12">
                <div class="w3-row">
                    <div class="w3-half">
                        <p class="w3-medium text-uppercase w3-padding">© Copyright 2019 - Casa Milán</p>
                    </div>
                    <div class="w3-half w3-right-align">
                        <a href="#" class="w3-button w3-large">
                            <i class='fab fa-facebook-f'></i>
                        </a>
                        <a href="#" class="w3-button w3-large"></a>
                            <i class="fab fa-instagram"></i>
                        <a href="#" class="w3-button w3-large">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Get footer -->
<?php get_footer(); ?>