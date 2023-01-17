<?php

if(!defined('e107_INIT'))
{
	exit();
}

 // [multilanguage]
    e107::lan('theme'); // loads e107_themes/CURRENT_THEME/languages/English.php (when English is selected) 
    
    
class theme implements e_theme_render {

  public function init() {
  
    // e107::meta('viewport', 'width=device-width, initial-scale=1.0'); // added to <head>
    //  e107::link('rel="preload" href="{THEME}fonts/myfont.woff2?v=2.2.0" as="font" type="font/woff2" crossorigin');  // added to <head>

    //e107::meta('apple-mobile-web-app-capable','yes');
    
    
    $bootswatch = e107::pref('theme', 'bootswatch', false);
    if($bootswatch) {
      e107::css('url', 'https://bootswatch.com/4/' . $bootswatch . '/bootstrap.min.css');
      e107::css('url', 'https://bootswatch.com/4/' . $bootswatch . '/bootstrap.min.css');
    }
    
    // e107::library("load", "animate.css"); 
    
    // e107::css('url', 'https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap'); 
    // e107::css('url', 'https://fonts.googleapis.com/css?family=Exo+2:100,200,300,400,500,600,700,800,900&display=swap'); 
    // e107::css("theme", "css/aos.css"); 
    // e107::css("theme", "css/languages.css");     
    

    // e107::js("footer-inline", "$('.e-tip').tooltip({container: 'body'})"); // activate bootstrap tooltips.  
    e107::js("theme", "js/masonry.pkgd.min.js", "jquery");
    e107::js("theme", "js/custom.js", "jquery");
    
    /* @example prefetch  */
    //e107::link(array('rel'=>'prefetch', 'href'=>THEME.'images/browsers.png'));
    
  }


  /**
  * @param string $text
  * @return string without p tags added always with bbcodes
  * note: this solves W3C validation issue and CSS style problems
  * use this carefully, mainly for custom menus, let decision on theme developers
  */

  function remove_ptags($text = '') // FIXME this is a bug in e107 if this is required.
  {

    $text = str_replace(array("<!-- bbcode-html-start --><p>", "</p><!-- bbcode-html-end -->"), "", $text);

	return $text;
  }


  function tablestyle($caption, $text, $mode='', $options = array()) {

	$style = varset($options['setStyle'], 'default');
    
    // Override style based on mode.
	switch($mode){
      case 'cmenu-home-service':
      $style = 'service';
	  break;
      
      case 'contact-form':
      case 'contact-info':
      $style = 'contact-pageinfo';
	  break;
      
      case 'gallery-index-category':
      case 'gallery-index-list':
      case 'related':
      case 'news':
      $style = 'nocaption';
      break;
      
      case 'cpage':
      $style = 'cpage';
      break;

    }
			
	//this should be displayed only in e_debug mode			
    echo "\n<!-- tablestyle initial:  style=". $style."  mode=".$mode."  UniqueId=".varset($options['uniqueId'])." -->\n\n";

	switch($style){

	  /*  case 'home':
			echo $caption;
			echo $text;
		  break;
		  case 'menu':
			echo $caption;
			echo $text;
		  break;
		  case 'full':
			echo $caption;
			echo $text;
		  break;
	  */
    
	  case 'nocaption':
	  case 'main':
		echo $text;
	  break;
      
      case 'hero':
        echo $text;
      break;
      
      case "portfolio":
		  echo $text;	
	  break;
      
      case "service":
		echo "<div class='service-box mb-4'>";
        echo "<div class='service-flip'>";
        echo "<div class='service-flip-inner'>";
        echo "<div class='service-flip-front d-flex justify-content-center align-items-center'>";
		if(!empty($caption)) {
		  echo "<div class='service-title'><h2>{$caption}</h2></div>";
		}
		echo "</div>";
        echo "<div class='service-flip-back'>";
        echo "<div class='service-body-back'>{$text}</div>";
		echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
	  break;
      
      case "right-inner":
		echo "<div class='nested-menu-box mb-5'>";
		if(!empty($caption)) {
		  echo "<h4 class='nested-menu-title text-center'>{$caption}</h4>";
		}
		echo "<div class='nested-menu-body'>{$text}</div>";
		echo "</div>";
	  break;
      
      case "contact-pageinfo":
		echo "<div class='pageinfo-box'>";
		if(!empty($caption)) {
		  echo "<h4 class='pageinfo-title text-center'>{$caption}</h4>";
		}
		echo "<div class='pageinfo-body'>{$text}</div>";
		echo "</div>";
	  break;
      
      case "cpage":
		echo "<div class='cpage-box'>";
		echo "<div class='cpage-body'>{$text}</div>";
		echo "</div>";
	  break;
      
      case "left-menus":
		echo "<div class='left-menu-box'>";
		if(!empty($caption)) {
		  echo "<h4 class='left-menu-title text-center'>{$caption}</h4>";
		}
		echo "<div class='left-menu-body'>{$text}</div>";
		echo "</div>";
	  break;
      
      
      
      
      
      
      
      
      
      
      
      
      
      
     
      
      
      
      
      
      
      
            
      

	  case "main":
		echo "<div class='leftcol-content'>";
		if(!empty($caption)) {
		  echo "<div class='leftcol-content-title'><h2>{$caption}</h2></div>";
		}
		echo "<div class='leftcol-content-body'>{$text}</div>";
		echo "</div>";
	  break;

	  

	  default:
        // default style
	    // only if this always work, play with different styles
        if(!empty($caption)) {
		  echo "<h2 class='fw-bolder fs-5 mb-4'>{$caption}</h2>";
		}
		echo $text;
      return;
	}

  }

}