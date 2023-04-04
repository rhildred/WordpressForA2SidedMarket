<?php

/*
Plugin Name: Split Call To Action
*/

add_action('init', function(){
    add_shortcode('split-plugin', function($atts = [], $content = null){
        return $content . <<<'EOT'
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<style>

.jobs img{
    margin-bottom: 1em;
    max-width: 100%
}

.jobs a{
    display: block;
    margin: 0 auto;
    width: fit-content;
}

.jobs h1{
    font-size:22pt;
}

</style>
<div class="row jobs">
<div class="col-md-6">
<h1>People looking for jobs</h1>
<img src="https://live.staticflickr.com/3842/15355669005_83e74c4e82_b.jpg" />
<a href="/?cat=2" class="btn btn-primary btn-lg">Post a Job</a>
</div>
<div class="col-md-6">
<h1>People with jobs to do</h1>
<img src="https://live.staticflickr.com/65535/49409213712_b9c0148d29_b.jpg" />
<a href="/?cat=3" class="btn btn-primary btn-lg">Find A Job</a>
</div>
</div>
EOT;

    });
});