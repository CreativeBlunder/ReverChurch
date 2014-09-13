<?php

class BlunderMetaBox {

    protected $options;

    public function __construct($prefix, $options)
    {
        $this->prefix = $prefix;
        $this->options = $options;

        add_action('admin_menu', array($this, 'addMetaBox'));
        add_action('save_post', array($this, 'save'));
    }

    public function addMetaBox()
    {
        add_meta_box(
            $this->options['id'],
            $this->options['title'],
            array($this, 'renderMetaBox'),
            $this->options['page'],
            $this->options['context'],
            $this->options['priority']
        );
    }

    public function save($post_id)
    {
        global $shortName;

        // verify nonce
        if (!wp_verify_nonce($_POST[$shortName . '_' . $this->prefix . 'nonce'], basename(__FILE__))) {
            return $post_id;
        }

        // check autosave
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return $post_id;
        }

        // check permissions
        if ('page' == $_POST['post_type']) {
            if (!current_user_can('edit_page', $post_id)) {
                return $post_id;
            }
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
        }

        foreach ($this->options['fields'] as $field) {
            $old = get_post_meta($post_id, $this->prefix . $field['id'], true);
            $new = $_POST[$this->prefix . $field['id']];

            if ($new && $new != $old) {
                update_post_meta($post_id, $this->prefix . $field['id'], $new);
            } elseif ('' == $new && $old) {
                delete_post_meta($post_id, $this->prefix . $field['id'], $old);
            }
        }
    }

    public function renderMetaBox()
    {
        global $shortName;

        echo '<input type="hidden" name="' . $shortName . '_' . $this->prefix . 'nonce" value="' . wp_create_nonce(basename(__FILE__)) . '">';

        $this->renderFields();
    }

    protected function renderFields()
    {
        global $post;

        foreach ($this->options['fields'] as $field) {
            // get current post meta data
            $meta = get_post_meta($post->ID, $this->prefix . $field['id'], true);

            echo '<div class="field-group">';

            switch ($field['type']) {
                case 'text':
                    echo '<label for="' . $this->prefix . $field['id'] . '">' . $field['name'] . '</label>';
                    echo '<input class="regular-text" type="text" name="' . $this->prefix . $field['id'] . '" id="' . $this->prefix . $field['id'] . '" value="' . ($meta ? $meta : $field['std']) . '" size="30" /><br />' . $field['desc'];
                    break;
                case 'textarea':
                    echo '<label for="' . $this->prefix . $field['id'] . '">' . $field['name'] . '</label>';
                    echo '<textarea name="' . $this->prefix . $field['id'] . '" id="' . $this->prefix . $field['id'] . '" cols="60" rows="4" style="width:97%">' . ($meta ? $meta : $field['std']) . '</textarea><br />' . $field['desc'];
                    break;
                case 'select':
                    echo '<label for="' . $this->prefix . $field['id'] . '">' . $field['name'] . '</label>';
                    echo '<select name="' . $this->prefix . $field['id'] . '" id="' . $this->prefix . $field['id'] . '">';
                    foreach ($field['options'] as $option) {
                        echo '<option ' . ($meta == $option ? ' selected="selected"' : '') . '>' . $option . '</option>';
                    }
                    echo '</select>';
                    break;
                case 'radio':
                    echo '<label for="' . $this->prefix . $field['id'] . '">' . $field['name'] . '</label>';
                    foreach ($field['options'] as $option) {
                        echo '<input type="radio" name="' . $this->prefix . $field['id'] . '" value="' . $option['value'] . '"' . ($meta == $option['value'] ? ' checked="checked"' : '') . ' />' . $option['name'];
                    }
                    break;
                case 'checkbox':
                    echo '<label for="' . $this->prefix . $field['id'] . '">' . $field['name'] . '</label>';
                    echo '<input type="checkbox" name="' . $this->prefix . $field['id'] . '" id="' . $this->prefix . $field['id'] . '"' . ($meta ? ' checked="checked"' : '') . ' />';
                    break;
                case 'upload':
                    echo '<label for="' . $this->prefix . $field['id'] . '">' . $field['name'] . '</label>';
                    echo '<input type="hidden" name="' . $this->prefix . $field['id'] . '" id="' . $this->prefix . $field['id'] . '" value="' . ($meta ? $meta : '') . '">';
                    echo '<div class="plupload-upload-uic hide-if-no-js" id="' . $this->prefix . $field['id'] . 'plupload-upload-ui">';
                    echo     '<input id="' . $this->prefix . $field['id'] . 'plupload-browse-button" type="button" value="Select Image" class="button">';
                    echo     '<span class="ajaxnonceplu" id="ajaxnonceplu' . wp_create_nonce($this->prefix . $field['id'] . 'pluploadan') . '"></span>';
                    echo     '<div class="filelist"></div>';
                    echo     '<div class="plupload-thumbs" id="' . $this->prefix . $field['id'] . 'plupload-thumbs"></div>';
                    echo '</div>';
                    break;
                default:
                    echo '<label for="' . $this->prefix . $field['id'] . '">' . $field['name'] . '</label>';
                    echo '<input class="regular-text ' . $field['type'] . '" type="text" name="' . $this->prefix . $field['id'] . '" id="' . $this->prefix . $field['id'] . '" value="' . ($meta ? $meta : $field['std']) . '" size="30" /><br />' . $field['desc'];
                    break;
            }

            echo '</div>';
        }
    }
}