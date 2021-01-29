<ul class="elem-socialicons nav">

    <?php 

    // Custom function from globals.php

    $brk_socialicons = brk_socialnetworks();

    // --- Single icon -----

    foreach ($brk_socialicons as $key => $value) {

        if ( get_field('social_'.$key, 'option') ) { ?>

            <li class="socialicon nav-item">
                <a class="nav-link" href="<?php echo get_field('social_'.$key, 'option') ?>" target="_blank"><i class="<?php echo $value['icon-style'].' '.$value['icon-name'] ?>"></i></a>
            </li>
    
        <?php };
        
    };
    
    ?>

</ul>