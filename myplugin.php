<?php 
/*
 * Plugin Name: my plugin
 * description: this is my first plugin
 * version: 1.1.1
 * author:naeem
 * author URI:facebook.com
 */
class qr_code{
    public function __construct(){
        add_action('init', array($this, 'init'));
    }

    public function init(){
        add_filter('the_content', array($this, 'qr_code'));
    }
    public function qr_code($content){
        $current_link= get_permalink();
        $title = get_the_title();
        $custom_content.= "<img src='https://api.qrserver.com/v1/create-qr-code/?size=150x150&color=ccc&data={$current_link}' />";
        $content .= $custom_content;
        return $content;
        
    }
}
new qr_code();