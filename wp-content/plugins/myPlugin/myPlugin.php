<?php
/**
 * MyPlugin Class Doc Comment
 * Plugin Name: MyPlugin
 * Description: Test plugin
 * Author:      David
 * Version:     1.0
 *
 * @category Class
 * @package  Template_Class
 * @author   Author <author@domain.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 **/


class MyPlugin
{

    /**
     * Constructor
     */
    function __construct()
    {
        add_action('template_redirect', array($this,'getLastPost'));
    }

    /**
     * Get last post and compare with this post
     *
     * @return void
     */
    function getLastPost()
    {
        if (is_single()) {
            $recent_post = get_posts(array('numberposts' => 1));
            $current_post = get_post();
            if ($recent_post[0]->ID === $current_post->ID) {
                wp_enqueue_script('message', plugins_url('js/message.js', __FILE__));
            }
        }
    }

}

new MyPlugin();

?>
