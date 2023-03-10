<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 * 
 * News menus templates
 */

if (!defined('e107_INIT'))  exit;

global $sc_style;

// $sc_style['NEWS_CATEGORY_NEWS_COUNT']['pre']  = '(';
// $sc_style['NEWS_CATEGORY_NEWS_COUNT']['post'] = ')';



// category menu
$NEWS_MENU_TEMPLATE['category']['start']       = '<ul class="news-menu-category list-unstyled ps-0">';
$NEWS_MENU_TEMPLATE['category']['end']         = '</ul>';
$NEWS_MENU_TEMPLATE['category']['item']        = '
  <li class="py-3">
    <div class="news-category-item">
      <a class="e-menu-link newscats{active}" href="{NEWS_CATEGORY_URL}">
        <div class="d-flex justify-content-between">
          <div class="news-category-item-title">{GLYPH=fas fa-plus}&nbsp;&nbsp;&nbsp;{NEWS_CATEGORY_TITLE}</div>
          <div class="news-category-item-count">{NEWS_CATEGORY_NEWS_COUNT}</div>
        </div>
      </a>
    </div>
  </li>
';



// months menu
$NEWS_MENU_TEMPLATE['months']['start']       = '<ul class="news-menu-months list-unstyled ps-0">';
$NEWS_MENU_TEMPLATE['months']['end']         = '</ul>';
$NEWS_MENU_TEMPLATE['months']['item']        = '
  <li class="py-3">
    <div class="news-month-item">
    <a class="e-menu-link newsmonths{active}" href="{url}">
      <div class="d-flex justify-content-between">
        <div class="news-month-item-title"><i class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp;{month}</div>
        <div class="news-month-item-count"><span class="badge bg-secondary rounded-pill badge-secondary">{count}</span></div>
      </div>
    </a>
  </li>
';
//$NEWS_MENU_TEMPLATE['months']['separator']   = '<br />';

// sends value to tablestyle / $options['footer'];
// $NEWS_MENU_TEMPLATE['months']['footer']   = '<div class="e-menu-link news-menu-archive" ><a class="btn btn-default btn-secondary btn-sm btn-block" href="{e_PLUGIN}blogcalendar_menu/archive.php">{LAN=BLOGCAL_L2}</a></div>';;

//$NEWS_MENU_TEMPLATE['months']['separator']   = '<br />';

 
// latest menu
$NEWS_MENU_TEMPLATE['latest']['start'] = '
<div class="news-menu-latest">';

$NEWS_MENU_TEMPLATE['latest']['item'] = '
  <div class="news-latest-inner">
    <div class="row row-cols-1 row-cols-lg-2"> 
      <div class="col-lg-4 d-flex justify-content-center">
        <div class="news-latest-image align-self-center">
          {SETIMAGE: w=400&h=400&crop=1}
          <a href="{NEWSURL}">{NEWSIMAGE: item=1&type=tag}</a>
        </div>
      </div>
      <div class="col-lg-8">
        <h4 class="mb-1">{NEWS_TITLE: link=1}</h4>
        <div class="hits-count">{GLYPH=fas fa-chart-line} {HITS_COUNTER}</div>
      </div>
    </div>
  </div>
  <hr  class="text-white" />';

$NEWS_MENU_TEMPLATE['latest']['end'] = '
</div>'; // Example: $NEWS_MENU_TEMPLATE['latest']['end']  '<br />{currentTotal} from {total}';



// Other News Menu. 
$NEWS_MENU_TEMPLATE['other']['caption'] 	= TD_MENU_L1;
$NEWS_MENU_TEMPLATE['other']['start']		= "<div id='otherNews' data-interval='false' class='carousel slide othernews-block'>
												<div class='carousel-inner'>
												{SETIMAGE: w=400&h=200&crop=1}"; // set the {NEWSIMAGE} dimensions. 								
$NEWS_MENU_TEMPLATE['other']['item']		= '<div class="item {ACTIVE}">
												{NEWSTHUMBNAIL=placeholder}
              									<h3>{NEWSTITLE}</h3>
              									<p>{NEWSSUMMARY}</p>
              									<p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">'.LAN_READ_MORE.' &raquo;</a></p>
            									</div>';									
$NEWS_MENU_TEMPLATE['other']['end']			= "</div></div>";








// Other News Menu. 2 

$NEWS_MENU_TEMPLATE['other2']['caption'] 	= TD_MENU_L2;
$NEWS_MENU_TEMPLATE['other2']['start'] 	= "<ul class='media-list unstyled list-unstyled othernews2-block'>{SETIMAGE: w=100&h=100&crop=1}"; // set the {NEWSIMAGE} dimensions.
$NEWS_MENU_TEMPLATE['other2']['item'] 	= "<li class='media'>
										<span class='media-object pull-left float-left'>{NEWSTHUMBNAIL=placeholder}</span> 
										<div class='media-body'><h4>{NEWSTITLELINK}</h4>
										<p class='text-right'><a class='btn btn-primary btn-othernews2' href='{NEWSURL}'>".LAN_READ_MORE." &raquo;</a></p>
										</div>
										</li>\n";
										
$NEWS_MENU_TEMPLATE['other2']['end'] 	= "</ul>";




// Grid Menu
// Moved to news_grid_template.php


// $NEWS_MENU_WRAPPER['grid']['NEWSTITLE'] = "<span style='color:red'>{---}</span>"; // example


/* Carousel Menu */

$NEWS_MENU_TEMPLATE['carousel']['start'] = '
										    <div id="news-carousel" class="carousel slide" data-ride="carousel">
										        <div class="row">
										      <!-- Wrapper for slides -->
										      <div id="news-carousel-images" class="col-md-8">
										      <div class="carousel-inner">';


$NEWS_MENU_TEMPLATE['carousel']['end'] = '

										      </div><!-- End Carousel Inner -->
											</div>
												<div id="news-carousel-titles" class="col-md-4 ">
													<ul id="news-carousel-nav" class="nav nav-inverse nav-stacked pull-right float-right">{NAV}</ul>
												</div>
											</div><!-- End Carousel -->
											</div>
										 ';


$NEWS_MENU_TEMPLATE['carousel']['item'] = '<!-- Start Item -->
											<div class="item {ACTIVE}">{SETIMAGE: w=800&h=370&crop=1}
									          {NEWS_IMAGE: class=img-responsive img-fluid}
									           <div class="carousel-caption">
									            <small>{NEWS_DATE=dd MM, yyyy}</small>
									            <h1>{NEWS_TITLE}</h1>

									          </div>
									        </div><!-- End Item -->';



$NEWS_MENU_TEMPLATE['carousel']['nav'] = '<li data-target="#news-carousel" data-slide-to="{COUNT}" class="{ACTIVE}"><a href="#">{NEWS_SUMMARY}</a></li>';


// TODO
$NEWS_MENU_TEMPLATE['archive']['start']       = '<ul class="news-archive-menu">';
$NEWS_MENU_TEMPLATE['archive']['end']         = '</ul>';

$NEWS_MENU_TEMPLATE['archive']['year_start']        = "<li>
												<a class='e-expandit {EXPANDOPEN}' href='#{YEAR_ID}'>{YEAR_NAME}</a>
												<ul id='{YEAR_ID}' class='news-archive-menu-months' style='display:{YEAR_DISPLAY}'>
												";
$NEWS_MENU_TEMPLATE['archive']['year_end']        = '</ul></li>';

$NEWS_MENU_TEMPLATE['archive']['month_start']        = "<li>
													 <a class='e-expandit' href='#{MONTH_ID}'>{MONTH_NAME}</a>
													 <ul id='{MONTH_ID}' class='news-archive-menu-items' style='display:none'>
													 ";
$NEWS_MENU_TEMPLATE['archive']['month_end']        = '</ul></li>';

$NEWS_MENU_TEMPLATE['archive']['item']        = "<li><a href='{ITEM_URL}'>{ITEM_TITLE}</a></li>\n";


