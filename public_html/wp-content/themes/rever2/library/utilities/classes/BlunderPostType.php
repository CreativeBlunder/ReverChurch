<?php

class BlunderPostType {

    protected $name;

    protected $labels = array(
        'name'               => '{plural}',
        'singular_name'      => '{name}',
        'menu_name'          => '{plural}',
        'name_admin_bar'     => '{name}',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New {name}',
        'new_item'           => 'New {name}',
        'edit_item'          => 'Edit {name}',
        'view_item'          => 'View {name}',
        'all_items'          => 'All {plural}',
        'search_items'       => 'Search {plural}',
        'parent_item_colon'  => 'Parent {plural}:',
        'not_found'          => 'No {plural} Found.',
        'not_found_in_trash' => 'No {plural} Found in Trash.'
    );

    protected $options = array(
        // Frontend
        'has_archive'        => false,
        'public'             => true,
        'publicly_queryable' => true,

        // Taxonomies
        'taxonomies'         => array('category'),

        // Admin
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-home',
        'menu_position'      => 25,
        'query_var'          => true,
        'show_in_menu'       => true,
        'show_ui'            => true,
        'supports'           => array('title', 'author', 'editor', 'thumbnail')
    );

    public function __construct($name, $plural, $slug, $options)
    {
        $this->name = $name;
        $this->plural = $plural;
        $this->slug = $slug;
        $this->options = array_merge($this->options, $options);

        // if (isset($options['supports'])) {
        //     $this->options['supports'] = $options['supports'];
        // }

        // Set labels
        $this->setLabels();

        add_action('init', array($this, 'register'));
    }

    public function register()
    {
        register_post_type($this->slug, $this->options);
    }

    protected function setLabels()
    {
        $this->labels = str_replace('{name}', $this->name, $this->labels);
        $this->labels = str_replace('{plural}', $this->plural, $this->labels);

        $this->options['labels'] = $this->labels;
    }

}
