<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://facebook.com/tsal3
 * @since      1.0.0
 *
 * @package    Rayolabs_music_king
 * @subpackage Rayolabs_music_king/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<?php
        //Grab all options
        $options = get_option($this->plugin_name);

        // Cleanup
        if(!empty($options['site_token'])){
        $site_token = $options['site_token'];
         }
     ?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <form method="post" name="<?php echo $this->plugin_name;?>" action="options.php">
    <?php settings_fields($this->plugin_name); ?>
        <!-- Enter Token Gotten From PublicApi  -->
        <fieldset>
            <legend class="screen-reader-text"><span>Site Token</span></legend>
            <label for="<?php echo $this->plugin_name; ?>-site_token">
            	<span>Site Token:</span>
                <input type="text" id="<?php echo $this->plugin_name; ?>-site_token" name="<?php echo $this->plugin_name; ?>[site_token]" value="<?php if(!empty($site_token)){ echo $site_token; } ?>"/>
                <span><?php esc_attr_e('Enter Site Token Gotten From https://publicapi.org.ng', $this->plugin_name); ?></span>
            </label>
        </fieldset>        

        <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>

    </form>

</div>
