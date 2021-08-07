<?php
$name =         get_field( 'name' );
$subtitle =     get_field( 'subtitle' );
$mail =         get_field( 'email' );
$website =      get_field( 'website' );
$style =        get_field( 'style' );
$align_box =    get_field( 'align_box' );
$align_text =   get_field( 'align-text');

$block_classes = 'quick-contact';

if ( ! empty( $block['class_name'] ) ) :
    $block_classes .= ' ' . $block['class_name'];
endif;

if ( ! $style ) :
    $block_classes .= ' black-yellow';
else :
    $block_classes .= ' ' . $style;
endif;

if ( ! $align_box ) :
    $block_classes .= ' align-right';
else:
    $block_classes .= ' ' . $align_box;
endif;

if ( ! $align_text ) :
    $block_classes .= ' align-text-left';
else:
    $block_classes .= ' ' . $align_text;
endif;
?>

<div class="<?php echo $block_classes; ?>">
    <h4>
        <?php echo $name; ?>
<?php
if ( get_field( 'subtitle' ) ) :
?>
        <span class="subheading"><?php echo $subtitle; ?></span>
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
        <li><i class="fas fa-fw fa-envelope"></i> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
<?php
endif;

if ( get_field( 'website' ) ) :
?>
        <li><i class="fas fa-fw fa-external-link-alt"></i> <a href="<?php echo $website; ?>">Website</a></li>
<?php
endif;
?>
    </ul>        
</div>