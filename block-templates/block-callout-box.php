<?php
$title =        get_field( 'title' );
$subtitle =     get_field( 'subtitle' );
$title_link =   get_field( 'title_link' );
$stretched =    get_field( 'title_link_stretched' );
$body =         get_field( 'body' );
$style =        get_field( 'style' );
$align_box =    get_field( 'align_box' );
$align_text =   get_field( 'align-text');

$block_classes = 'callout-box';

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
<?php
if ( $title_link ) :
    if ( $title_link_stretched == 1 ) :
?>
        <a class="stretched-link" href="<?php echo $title_link; ?>">
<?php
    else :
?>
        <a href="<?php echo $title_link; ?>">
<?php
    endif;
endif;

echo $title;

if ( $subtitle ) :
?>
        <span class="subheading"><?php echo $subtitle; ?></span>
<?php
endif;

if ( $title_link ) :
?>
        </a>
<?php
endif;
?>
    </h4>
      
    <?php echo $body; ?>
</div>