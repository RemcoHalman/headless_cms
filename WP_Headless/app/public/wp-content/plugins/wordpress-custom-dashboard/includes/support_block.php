<?php 


function my_custom_support_widget()
{
    global $wp_meta_boxes;

    wp_add_dashboard_widget('custom_help_widget', 'Website Support', 'custom_support_help');
}

function custom_support_help()
{
?>
<!-- Block content -->
<h1 style="text-align:center;">Support block</h1>


<?php

}
add_action('wp_dashboard_setup', 'my_custom_support_widget');