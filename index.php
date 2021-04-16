<?php
/*
Plugin Name: Split Call To Action
*/
add_action('init', function() {
    add_shortcode('split-plugin',function($atts = [], $content = null){
        return $content . <<<'EOT'
<div class="row">
<div class="col-md-6">I am just a poor boy</div>
<div class="col-md-6">From a poor family</div>
</div>
EOT;

    });
    wp_register_style('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
    wp_enqueue_style('bootstrap');
    wp_register_style('main_stylesheet', 
    plugins_url('main.css', __FILE__));
    wp_enqueue_style('main_stylesheet');
});    
