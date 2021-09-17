<!-- Get Header -->
<?php get_header(); ?>


<!-- Page content -->
<div class="w3-row">
    <!-- Get post -->
    <?php
        if( have_posts( ) ):
            while ( have_posts() ) : the_post();
                //get_template_part('content');
                the_content();
            endwhile;
        else:
            echo 'no hay post';
        endif;
    ?>
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