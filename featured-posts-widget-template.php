<style>
    #featured-posts-widget-template-container {
        padding: 10px;
        min-height: 300px;
        margin: 8px;
        
    }

    #featured-posts-widget-template-container a {
        color: black;
    }
    
    #featured-posts-widget-template-container h3 {
        text-align: center;
    }
    
    #featured-posts-widget-template-container h5 {
        margin-bottom: 5px;
    }
</style>

<div id="featured-posts-widget-template-container" class="bg-primary" style="color: black;">
<h3>
Důležité zprávy
</h3>
<hr>

<!-- Generate posts list -->
<?php 
    foreach ($selected_posts as $postId) :
        $selected_post = get_post($postId);
        $article_link = sprintf('<a href="%s">%s</a>', get_permalink($selected_post), $selected_post->post_title);
        $selected_post->post_date;
        echo "<h5>";
        echo '<i class="fa fa-info-circle fa-lg"></i> ';
        echo $article_link;
        echo "</h5>";
        echo get_the_date('', $selected_post);
        echo "<hr>";
    endforeach;
?>

</div>
