<?php
/*
Plugin Name: DiceGame
Description: Module de lancemant de dés
Author: Anaelle
Version: 0.0.1
*/

include_once plugin_dir_path(__FILE__)."DiceGame.class.php";


add_action('widgets_init', function(){ if(is_user_logged_in()) { register_widget('DiceGame_widget');}});

register_activation_hook(__FILE__, array('DiceGame_widget', 'createTable'));
register_uninstall_hook(__FILE__, array('DiceGame_widget', 'deleteTable'));

add_action('init',array('DiceGame_widget','jet'));
/*add_action('init',array('DiceGame_widget','insertData'));*/
?>