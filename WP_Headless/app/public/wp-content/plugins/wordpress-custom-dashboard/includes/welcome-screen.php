<?php

/*  Dashboard changes */
// function to add a custom admin stylesheet
function my_admin_style_sheet()
{
    echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/admin-style.css">';
}

add_action('admin_head', 'my_admin_style_sheet');
/*  Footer changes  */


function remove_footer_admin()
{

    echo 'Fueled by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Current theme: ' . get_current_theme() . ' | Created by Remco</p>';

}

add_filter('admin_footer_text', 'remove_footer_admin');