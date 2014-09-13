<?php

class BlunderAdminPanel {

    protected $themeName;

    protected $shortName;

    protected $options;

    public function __construct($themeName, $shortName, $options)
    {
        $this->themeName = $themeName;
        $this->shortName = $shortName;
        $this->options = $options;

        add_action('admin_menu', array($this, 'addThemeOptions'));
    }

    public function addThemeOptions()
    {
        if ($_GET['page'] == 'admin-options.php') {
            if ($_REQUEST['action'] == 'save') {
                foreach ($this->options as $value) {
                    update_option($value['id'], $_REQUEST[$value['id']]);
                }
                foreach ($this->options as $value) {
                    if (isset($_REQUEST[$value['id']])) {
                        update_option($value['id'], $_REQUEST[$value['id']]);
                    } else {
                        delete_option($value['id']);
                    }
                }
                header("Location: admin.php?page=admin-options.php&saved=true");
                die();
            } elseif ($_REQUEST['action'] == 'reset') {
                foreach ($options as $value) {
                    delete_option($value['id']);
                }
                header("Location: admin.php?page=admin-options.php&reset=true");
                die();
            }
        }

        add_menu_page($this->themeName, $this->themeName, 'administrator', 'admin-options.php', array($this, 'renderAdminPage'));
    }

    public function renderAdminPage()
    {
        $i = 0;
        ?>
        <h2><?php echo $this->themeName; ?> Options</h2>
        <?php
        if ($_REQUEST['saved']) echo '<div id="message" class="updated fade"><p><strong>' . $this->themeName . ' options have been saved!</strong></p></div>';
        if ($_REQUEST['reset']) echo '<div id="message" class="updated fade"><p><strong>' . $this->themeName . ' options have been reset!</strong></p></div>';
        ?>
        <div class="theme-options">
            <form method="post">
                <div class="meta-box-sortables metabox-holder">
                <?php foreach ($this->options as $option): ?>
                    <?php switch($option['type']):
                        case 'open': ?>
                            <?php break; ?>
                        <?php case 'close': ?>
                                </div>
                            </div>
                            <?php break; ?>
                        <?php case 'text': ?>
                            <div class="field-group">
                                <label for="<?php echo $option['id']; ?>"><?php echo $option['name']; ?></label>
                                <input name="<?php echo $option['id']; ?>" 
                                       id="<?php echo $option['id']; ?>" 
                                       type="<?php echo $option['type']; ?>" 
                                       value="<?php echo (get_option($option['id']) !== '' ? stripslashes(get_option($option['id'] )) : $option['default']); ?>">
                                <div><small><?php echo $option['description']; ?></small></div>
                            </div>
                            <?php break; ?>
                        <?php case 'textarea': ?>
                            <div class="field-group">
                                <label for="<?php echo $option['id']; ?>"><?php echo $option['name']; ?></label>
                                <textarea name="<?php echo $option['id']; ?>" 
                                       id="<?php echo $option['id']; ?>"><?php echo (get_option($option['id']) !== '' ? stripslashes(get_option($option['id'] )) : $option['default']); ?></textarea>
                                <div><small><?php echo $option['description']; ?></small></div>
                            </div>
                            <?php break; ?>
                        <?php case 'section': ?>
                            <div class="postbox">
                                <h3 class="hndle"><span><?php echo $option['name']; ?></span></h3>
                                <div class="inside">
                            <?php break; ?>
                    <?php endswitch; ?>
                <?php endforeach; ?>
                </div>
                <p>
                    <input type="hidden" name="action" id="action" value="save">
                    <input id="theme_save" class="button button-primary button-large" name="save" type="submit" value="Save Settings">
                </p>
            </form>
        </div>
<?php
    }

}