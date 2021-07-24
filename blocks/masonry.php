<?php
if ( function_exists( 'acf_register_block_type' ) ) :
    function dutchtown_acf_init_masonry()
    {
        acf_register_block_type( array(
            'name' => 'dutchtown-masonry',
            'title' => 'Dutchtown Masonry',
            'description' => 'A container for masonry blocks',
            'category' => 'dutchtown-blocks',
            'icon' => dutchtown_icon(),
            'mode' => 'preview',
            'keywords' => array( 'dutchtown', 'masonry', 'container' ),
            'render_template' => dutchtown_acf_blocks_dir() . 'block-templates/block-masonry.php',
            'enqueue_script' => plugin_dir_url( __DIR__ ) . 'js/masonry.min.js',
            'supports' => array( 'align' => false, 'jsx' => true )
            )
        );
    }

    add_action( 'acf/init', 'dutchtown_acf_init_masonry' );
endif;

if ( function_exists( 'acf_add_local_field_group' ) ) :
    acf_add_local_field_group(array(
        'key' => 'group_60fab7fa1c0f0',
        'title' => 'Masonry Block Fields',
        'fields' => array(
            array(
                'key' => 'field_60fab7fa267c9',
                'label' => 'Masonry Items',
                'name' => 'masonry_items',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => 'field_60f96a0d7cafc',
                'min' => 0,
                'max' => 0,
                'layout' => 'block',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_60fab7fa362e4',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_60fab7fa362ff',
                        'label' => 'Title Link',
                        'name' => 'title_link',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_60fab7fa36310',
                        'label' => 'Body',
                        'name' => 'body',
                        'type' => 'wysiwyg',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'tabs' => 'all',
                        'toolbar' => 'full',
                        'media_upload' => 1,
                        'delay' => 0,
                    ),
                    array(
                        'key' => 'field_60fab7fa3631b',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'id',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                    ),
                    array(
                        'key' => 'field_60fab7fa36329',
                        'label' => 'Stretched Link',
                        'name' => 'stretched_link',
                        'type' => 'true_false',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'message' => '',
                        'default_value' => 0,
                        'ui' => 1,
                        'ui_on_text' => '',
                        'ui_off_text' => '',
                    ),
                    array(
                        'key' => 'field_60fab7fa36336',
                        'label' => 'Style',
                        'name' => 'style',
                        'type' => 'select',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(
                            'plain-black' => 'Plain Black',
                            'plain-yellow' => 'Plain Yellow',
                            'flora-black' => 'Flora Black',
                            'flora-yellow' => 'Flora Yellow',
                        ),
                        'default_value' => 'plain-black',
                        'allow_null' => 0,
                        'multiple' => 0,
                        'ui' => 0,
                        'return_format' => 'value',
                        'ajax' => 0,
                        'placeholder' => '',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/dutchtown-masonry',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'seamless',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
endif;