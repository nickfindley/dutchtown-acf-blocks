<?php
$block_classes= 'follow';

if ( ! empty( $block['className'] ) ) :
     $block_classes .= ' ' . $block['className'];
endif;

$title =    get_field( 'title' );
$body =     get_field( 'body' );

switch_to_blog( 1 );
$ig =       get_field( 'instagram', 'option' );
$fb =       get_field( 'facebook', 'option' );
$tw =       get_field( 'twitter', 'option' );
$yt =       get_field( 'youtube', 'option' );
restore_current_blog();
?>

<section class="<?php echo esc_attr( $block_classes ); ?>">
    <h2><?php echo $title; ?></h2>
    
    <?php echo $body; ?>

    <div class="follow-icons">
        <a href="<?php echo $fb; ?>"><i class="fab fa-facebook-f"></i><span class="sr-only">Facebook</span></a>
        <a href="<?php echo $tw; ?>"><i class="fab fa-twitter"></i><span class="sr-only">Twitter</span></a>
        <a href="<?php echo $ig; ?>"><i class="fab fa-instagram"></i><span class="sr-only">Instagram</span></a>
        <a href="<?php echo $yt; ?>"><i class="fab fa-youtube"></i><span class="sr-only">YouTube</span></a>
    </div>
</section>