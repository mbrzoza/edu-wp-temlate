<?php class featured_posts_widget extends WP_Widget {
    function __construct()
    {
        $widget_ops = array(
            'classname' => 'featured_posts_widget',
            'description' => 'My Widget is awesome',
        );
        parent::__construct( 'my_widget', 'Důležité příspěvky', $widget_ops );
    }

    // Creating widget front-end
    public function widget($args, $instance)
    {
        $selected_posts = $instance['selected_posts'];
        echo $args['before_widget'];
        
        include(get_template_directory() ."/featured-posts-widget-template.php");
            
        echo $args['after_widget'];
    }

    // Widget Backend
    public function form($instance)
    {
        $selectedPosts = $instance['selected_posts'];
		
        echo "<div>Vyberte příspěvky: </div>";		
        
        echo '<div style="margin: 10px 0 10px 0;">';
		$posts = get_posts();	
		foreach ($posts as $p) :
		      echo '<div class="checkbox">';
		      echo '<label>';
		      
		      // Build checkbox
		      $inputID = $this->get_field_id('selected_posts') .'_'. $p->ID;
		      $inputName = $this->get_field_name('selected_posts');
		      $inputValue = $p->ID;
		      $checked = in_array($inputValue, $selectedPosts) ? 'checked' : '';
		      
		      $input = sprintf('<input type="checkbox" id="%s" name="%s[]" value="%s" %s>', $inputID, $inputName, $inputValue, $checked);
		      
		      echo "<label>";
		      echo $input;
              echo $p->post_title;
              echo '</label>';
              echo '</div>'; 
		endforeach;
		echo '</div>';
    }

    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance['selected_posts'] = $new_instance['selected_posts'];
        return $instance;
    }
} ?>