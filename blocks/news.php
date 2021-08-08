<?php
if ( function_exists( 'acf_register_block_type' ) ) :
    function dutchtown_acf_init_news()
    {
        acf_register_block_type(array(
            'name'              => 'dutchtown-news',
            'title'             => 'Dutchtown News',
            'description'       => 'Display blog posts.',
            'render_template'   => dutchtown_acf_blocks_dir() . 'block-templates/block-news.php',
            'category'          => 'formatting',
            'icon'              => dutchtown_icon(),
            'keywords'          => array( 'news', 'blog', 'posts' ),
            'enqueue_style'     => plugin_dir_url( __DIR__ ) . 'css/news/news.css',
            'supports'          => array ('align' => false, 'jsx' => true ),
            'mode'              => 'preview'
        ));
    }
    add_action( 'acf/init', 'dutchtown_acf_init_news' );
endif;

if ( function_exists('acf_add_local_field_group') ):
    acf_add_local_field_group( array(
        'key' => 'group_5f405c72bb23b',
        'title' => 'Front Page Posts',
        'fields' => array(
            array(
                'key' => 'field_5f405c7978bbd',
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
                'key' => 'field_5f405c8078bbe',
                'label' => 'Body',
                'name' => 'body',
                'type' => 'textarea',
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
                'key' => 'field_5f405c2378bbe',
                'label' => 'More',
                'name' => 'more',
                'type' => 'textarea',
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
                'key' => 'field_5f405cf08e0cd',
                'label' => 'Posts URL',
                'name' => 'posts_url',
                'type' => 'url',
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
            ),
            array(
                'key' => 'field_5f405c8f78bbf',
                'label' => 'Number of Posts',
                'name' => 'number_of_posts',
                'type' => 'number',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 3,
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => 1,
                'max' => 10,
                'step' => '',
            ),
             array(
                'key' => 'field_60ffd6fb5a547__trashed',
                'label' => 'Categories',
                'name' => 'categories',
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
                ),
                'default_value' => array(
                ),
                'allow_null' => 0,
                'multiple' => 1,
                'ui' => 1,
                'ajax' => 0,
                'return_format' => 'value',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_60ffe03641407',
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
                    'compact' => 'Compact',
                    'full' => 'Full',
                ),
                'default_value' => 'compact',
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_60fff1ceb97c9',
                'label' => 'Excerpts',
                'name' => 'excerpts',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_60ffe03641407',
                            'operator' => '==',
                            'value' => 'full',
                        ),
                    ),
                ),
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
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/dutchtown-news',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
endif;

function dutchtown_acf_load_categories_field_choices( $field )
{
    switch_to_blog( 1 );
    $categories = get_categories();
    foreach ( $categories as $category ) :
        $field['choices'][$category->term_id] = $category->name;
    endforeach;
    restore_current_blog();

    return $field;
}

add_filter( 'acf/load_field/name=categories', 'dutchtown_acf_load_categories_field_choices' );