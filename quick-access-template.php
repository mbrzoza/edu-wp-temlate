<?php 
$img_calendar = get_template_directory_uri() . "/inc/assets/img/icons/basic/basic_calendar.png";
$img_book_pencil = get_template_directory_uri() . "/inc/assets/img/icons/basic/basic_book_pencil.png";
$img_info = get_template_directory_uri() . "/inc/assets/img/icons/basic/basic_info.png";
$img_mail = get_template_directory_uri() . "/inc/assets/img/icons/basic/basic_mail.png";
$img_images = get_template_directory_uri() . "/inc/assets/img/icons/basic/basic_picture_multiple.png";
$img_signs = get_template_directory_uri() . "/inc/assets/img/icons/basic/basic_signs.png";
$img_display = get_template_directory_uri() . "/inc/assets/img/icons/basic/basic_display.png";
$img_sport = get_template_directory_uri() . "/inc/assets/img/icons/sport-centre-svgrepo-com.svg";
$img_food = get_template_directory_uri() . "/inc/assets/img/icons/food-svgrepo-com.svg";

$jquery_color_script = get_template_directory_uri() . "/inc/assets/js/jquery.color-2.1.2.min.js";
?>

<style>
    .no-margin {
        margin: 0;
    }
</style>

<!-- 
<script src="<?php $jquery_color_script?>"></script>
 -->
 
<script>
(function( $ ) {
	$( function() {
		var columns = $("#quick-access-widget-container .row div");
		columns.each(function( i, column ) {
			var columnElement = $(column);
			var columnHeight = 80;
			var iconHeight = 50;
			var padding_top = (columnHeight-iconHeight)/2;
			columnElement.addClass("col bg-primary m-2");
			columnElement.height(columnHeight);
			columnElement.children().height(iconHeight);
			columnElement.children().tooltip();
			columnElement.children().css("display", "block");
			columnElement.children().css("margin", "auto");
			columnElement.css("padding-top", padding_top + "px");
			columnElement.mouseover(function() {
				$(this).stop().animate({
			        opacity: .5
			    });
		    });
			columnElement.mouseout(function() {
				$(this).stop().animate({
					opacity: 1
			    });
		    });   
		});
		
	} );
})( jQuery );
</script>

<div id="quick-access-widget-container">

    <div class="row no-margin">

        <div>
          	<img src="<?php echo $img_calendar?>" data-toggle="tooltip" data-placement="top" title="Kalendář akcí"></img>
        </div>
        <div>
          <img src="<?php echo $img_images?>" data-toggle="tooltip" data-placement="top" title="Fotogalerie"></img>
        </div>
        <div>
          <img src="<?php echo $img_mail?>" data-toggle="tooltip" data-placement="top" title="Napište nám"></img>
        </div>
    </div>

	<div class="row no-margin">
        <div>
          <img src="<?php echo $img_food?>" data-toggle="tooltip" data-placement="top" title="Školní jídelna"></img>
        </div>
        <div>
          <img src="<?php echo $img_info?>" data-toggle="tooltip" data-placement="top" title="Informace"></img>
        </div>
        <div>
          <img src="<?php echo $img_sport?>" data-toggle="tooltip" data-placement="top" title="Sportovní akce"></img>
        </div>
    </div>
    
    <div class="row no-margin">
        <div>
          <img src="<?php echo $img_signs?>" data-toggle="tooltip" data-placement="top" title="Zajímavé odkazy"></img>
        </div>
        <div>
          <img src="<?php echo $img_display?>" data-toggle="tooltip" data-placement="top" title="E-learning"></img>
        </div>
        <div>
          <img src="<?php echo $img_book_pencil?>" data-toggle="tooltip" data-placement="top" title="Kontakty"></img>
        </div>
    </div>
</div>