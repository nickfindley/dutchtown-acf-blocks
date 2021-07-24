<?php
$card_type = get_field( 'card_type' );

// Cards
if ( $card_type = 'card' ) :
    $block_classes= 'card-container';

    if ( ! empty( $block['className'] ) ) :
        $block_classes .= ' ' . $block['className'];
    endif;

    if ( have_rows( 'card_items' ) ) :
?>
<div class="<?php echo esc_attr( $block_classes ); ?>">
<?php
        while ( have_rows( 'card_items' ) ) :
            the_row();

            require 'template-parts/block-cards-card.php';
        endwhile;
?>
<!-- </div> -->
<?php
    endif;
endif;

// People
if ( $card_type = 'people' ) :
    $block_classes= 'card-container';

    if ( ! empty( $block['className'] ) ) :
        $block_classes .= ' ' . $block['className'];
    endif;
    
    if ( have_rows( 'people_items' ) ) :
?>
<div class="<?php echo esc_attr( $block_classes ); ?>">
<?php
        while ( have_rows( 'people_items' ) ) :
            the_row();
            
            require 'template-parts/block-cards-person.php';
        endwhile;
    endif;
?>
</div>
<?php
endif;