<?php
$block_classes = 'quick-contact';

if ( ! empty( $block['class_name'] ) ) :
    $block_classes .= ' ' . $block['class_name'];
endif;
?>

<div class="<?php echo $block_classes; ?>">
    <h4>
    <?php 
        the_field( 'name' );
        if ( get_field( 'subtitle' ) ) :
    ?>
        <span class="subheading"><?php the_field( 'subtitle' ); ?></span>
    <?php
        endif;
    ?>
    </h4>
    
    <ul>
    <?php
        if ( have_rows( 'phone' ) ) :
            while ( have_rows( 'phone' ) ) :
                the_row();
    ?>
        <li><i class="fas fa-fw fa-phone-alt"></i> <a href="tel:<?php the_sub_field( 'phone' ); ?>"><?php the_sub_field( 'phone' ); ?></a></li>
    <?php
            endwhile;
        endif;

        if ( get_field( 'email' ) ) :
    ?>
        <li><i class="fas fa-fw fa-envelope"></i> <a href="mailto:<?php the_field( 'email' ); ?>"><?php the_field( 'email' ); ?></a></li>
    <?php
        endif;

        if ( get_field( 'website' ) ) :
    ?>
        <li><i class="fas fa-fw fa-external-link-alt"></i> <a href="<?php the_field( 'website' ); ?>">Website</a></li>
    <?php
        endif;
    ?>
    </ul>        
</div>