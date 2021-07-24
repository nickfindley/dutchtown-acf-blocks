<?php
$first_name =           get_sub_field( 'first_name' );
$last_name =            get_sub_field( 'last_name' );
$organization =         get_sub_field( 'organization' );
$organization_url =     get_sub_field( 'organization_url' );
$title =                get_sub_field( 'title' );
$bio_link =             get_sub_field( 'bio_link' );
$photo =                get_sub_field( 'photo' );
$style =                get_sub_field( 'style' );

$item_class= 'card';

if ( $style ) :
    $item_class .= ' ' . $style;
else :
    $item_class .= ' plain-black';
endif;

if ( $photo ) :
    $item_class .= ' card-has-image';
endif;
?>

<div class="<?php echo $item_class; ?>">
<?php
if ( $photo ) :
?>
    <?php echo wp_get_attachment_image( $photo, 'xs', false, array( 'class' => 'card-img-top' ) ) ."\n"; ?>
<?php
endif;
?>
    <div class="card-body">
        <h3 class="card-title">
            <?php echo $first_name; ?> <?php echo $last_name; ?>
<?php
if ( $title ) :
?>
            <span class="subheading"><?php echo $title; ?></span>
<?php
endif;
?>
        </h3>

<?php
if ( $organization ) :
    if ( $organization_url ) :
?>
        <a href="<?php echo $organization_url; ?>"><?php echo $organization; ?></a>
<?php
    else :
?>
        <?php echo $organization; ?>
<?php
    endif;
endif;
?>
    </div>
<?php
if ( $bio_link ) :
?>
    <div class="card-footer">
        <a href="<?php echo $bio_link; ?>">Read <?php echo $first_name; ?>&rsquo;s bio</a>
    </div>
<?php
endif;
?>
</div>