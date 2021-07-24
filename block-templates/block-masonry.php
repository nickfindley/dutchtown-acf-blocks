<?php
$block_id = 'masonry-container-' . $block['id'];
$block_classes= 'masonry-container';

if ( ! empty( $block['className'] ) ) :
    $block_classes .= ' ' . $block['className'];
endif;

if ( have_rows( 'masonry_items' ) ) :
?>
<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $block_classes ); ?>">
<?php
    while ( have_rows( 'masonry_items' ) ) :
        the_row();

        require 'template-parts/block-masonry-item.php';
    endwhile;
?>
</div>
<?php
endif;