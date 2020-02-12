<?php
/*
Plugin Name: Simplton
Plugin URI: 
Description: A simple example of a plugin for ista where u can add a page to admin panel
Author: MrMoustach
Author URI: https://github.com/MrMoustach/
Version: 1.0.0
*/
defined('ABSPATH') or die('This is not meant to be used in scripts !!');
add_action("admin_menu", "addMenu");
function addMenu()
{
  add_menu_page("Example Options", "Example Options", 4, "example-options", "exampleMenu" );
  add_submenu_page("example_options", "Option 1", "Option 1", 4, "example-option-1", "option1");
}

function exampleMenu()
{
/*echo <<< 'EOD'

  <h2> This is a simple text where u can</h2>


EOD;*/
include('test.php');
}

function option1()
{
  echo "Walrus";
}
