<?php
$id = 'callout-box-' . $block['id'];
if ( ! empty( $block['anchor'])  ) :
    $id = $block['anchor'];
endif;

$block_classes = 'callout-box';
if ( ! empty( $block['class_name'] ) ) :
    $block_classes .= ' ' . $block['class_name'];
endif;

if ( ! empty( $block['align'] ) ) :
    $block_classes .= ' align-' . $block['align'];
endif;

if ( get_field( 'color_scheme' ) == 'black_yellow' ) :
    $block_classes .= ' black-yellow';
else :
    $block_classes .= ' yellow-black';
endif;

$title = get_field( 'title' );
$title_link = get_field( 'title_link' );
$body = get_field( 'body' );
?>

<div class="<?php echo $block_classes; ?>">
    <h4>
    <?php
        if ( $title_link ) :
            if ( get_field( 'title_link_stretched' ) ) :
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

        if ( get_field( 'subtitle' ) ) :
            echo '<span class="subtitle">' . get_field( 'subtitle' ) . '</span>';
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