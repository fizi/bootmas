<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 * 
 * News default templates
 */

if (!defined('e107_INIT'))  exit;

global $sc_style;



$NEWS_TEMPLATE = array();


// $NEWS_MENU_TEMPLATE['list']['start']       = '<div class="thumbnails">';
// $NEWS_MENU_TEMPLATE['list']['end']         = '</div>';


$NEWS_INFO = array(
	'default' 	=> array('title' => LAN_DEFAULT, 	'description' => 'unused'),
	'list' 	    => array('title' => LAN_LIST, 		'description' => 'unused'),
	'2-column'  => array('title' => "2 Column (experimental)",     'description' => 'unused'), //@todo more default listing options.
);


// XXX The ListStyle template offers a listed summary of items with a minimum of 10 items per page. 
// As displayed by news.php?cat.1 OR news.php?all 
// {NEWSBODY} should not appear in the LISTSTYLE as it is NOT the same as what would appear on news.php (no query) 

// Template/CSS to be reviewed for best bootstrap implementation 
$NEWS_TEMPLATE['list']['caption'] = '{NEWSCATEGORY}';
$NEWS_TEMPLATE['list']['start']	= '
<!-- List News Template Start -->
<div class="default-news">
  <div class="row" data-masonry=\'{"percentPosition": true }\'>
    <div class="col-md-6 overflow-hidden mb-4">
      <div class="news-title-item d-flex justify-content-center">
        <div class="align-self-center">
          <div class="news-icon text-center">
            {GLYPH=fas fa-blog}
            <h3 class="my-3"><a href="{SITEURL}news">{LAN=PAGE_NAME}</a></h3>
          </div>
        </div>
      </div>
    </div>
';

/*
 // (optional)
$NEWS_TEMPLATE['list']['first'] = '
		{SETIMAGE: w=800&h=400}
		<div class="default-item">

          {NEWSIMAGE: item=1}
			<h2 class="news-title">{NEWS_TITLE: link=1}</h2>
          <p class="lead">{NEWS_SUMMARY}</p>
          {NEWSVIDEO: item=1}
          <div class="text-justify">
       
          </div>
           <div class="text-right">
			<a href="{NEWS_URL}" class="btn btn-primary">{LAN=LAN_READ_MORE}</a>
			</div>
        <hr>
		
			</div>
		{SETIMAGE: w=400&h=350&crop=1}
';
*/

$NEWS_TEMPLATE['list']['item'] = '
    <div class="flip-card-outer col-md-6 overflow-hidden mb-4">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            {SETIMAGE: w=1600}
            {NEWSIMAGE: item=1&class=rounded-0 img-fluid&type=tag}
            <div class="default-front-title">
              <div class="default-front-title-inner"><h3>{NEWS_TITLE}</h3></div>
            </div>
          </div>
          <div class="flip-card-back">
            <div class="default-title-back text-center"><h3>{NEWS_TITLE: link=1}</h3></div>
            <div class="default-summary-back">{NEWS_SUMMARY: limit=60}</div> 
            <div class="default-info-back d-block clearfix">
              <span class="default-news-author">{GLYPH=far fa-user}&nbsp;&nbsp;{NEWS_AUTHOR}</span>
              <span class="default-news-comment">&nbsp;&nbsp;&nbsp;{GLYPH=fa-comments-o}&nbsp;{NEWS_COMMENT_COUNT}</span>
              <span class="default-news-hits">&nbsp;&nbsp;&nbsp;{GLYPH=far fa-eye}&nbsp;{HITS_COUNTER: multi=1}</span>
            </div>
            <a class="default-button-back w-50 position-absolute bottom-0 start-50 translate-middle-x" href="{NEWSURL}">'.LAN_READ_MORE.'</a> 
          </div>
        </div>
      </div>
    </div> 
'; 
$NEWS_TEMPLATE['list']['end'] = '
  </div>
</div>
';






//$NEWS_MENU_TEMPLATE['list']['separator']   = '<br />';



// XXX As displayed by news.php (no query) or news.php?list.1.1 (ie. regular view of a particular category)
//XXX TODO GEt this looking good in the default Bootstrap theme. 
/*
$NEWS_TEMPLATE['default']['item'] = '
	{SETIMAGE: w=400}
	<div class="view-item">
		<h2>{NEWSTITLE}</h2>
		<small class="muted">
		<span class="date">{NEWSDATE=short} by <span class="author">{NEWSAUTHOR}</span></span>
		</small>

		<div class="body">
			{NEWSIMAGE}
			{NEWSBODY}
			{EXTENDED}
		</div>
		<div class="options">
			<span class="category">{NEWSCATEGORY}</span> {NEWSTAGS} {NEWSCOMMENTS} {EMAILICON} {PRINTICON} {PDFICON} {ADMINOPTIONS}
		</div>
	</div>
';
*/



/* FOR NEWS ITEM ON NEWS.PHP ***********************************************************************/

// $NEWS_WRAPPER['default']['item']['NEWSIMAGE: item=1'] = '<span class="news-images-main pull-left float-left col-xs-12 col-sm-6 col-md-6">{---}</span>';

$NEWS_TEMPLATE['default']['caption'] = '{NEWSCATEGORY}'; // add a value to user tablerender()

$NEWS_TEMPLATE['default']['start'] = '
<!-- Default News Template -->
<div class="default-news">
  <div class="row" data-masonry=\'{"percentPosition": true }\'>
    <div class="col-md-6 overflow-hidden mb-4">
      <div class="news-title-item d-flex justify-content-center">
        <div class="align-self-center">
          <div class="news-icon text-center">
            {GLYPH=fas fa-blog}
            <h3 class="my-3"><a href="{SITEURL}news">{LAN=PAGE_NAME}</a></h3>
          </div>
        </div>
      </div>
    </div>
';

$NEWS_TEMPLATE['default']['item'] = '
    <div class="flip-card-outer col-md-6 overflow-hidden mb-4">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            {SETIMAGE: w=1600}
            {NEWSIMAGE: item=1&class=rounded-0 img-fluid&type=tag}
            <div class="default-front-title">
              <div class="default-front-title-inner"><h3>{NEWS_TITLE}</h3></div>
            </div>
          </div>
          <div class="flip-card-back">
            <div class="default-title-back text-center"><h3>{NEWS_TITLE: link=1}</h3></div>
            <div class="default-summary-back">{NEWS_SUMMARY: limit=60}</div> 
            <div class="default-info-back d-block clearfix">
              <span class="default-news-author">{GLYPH=far fa-user}&nbsp;&nbsp;{NEWS_AUTHOR}</span>
              <span class="default-news-comment">&nbsp;&nbsp;&nbsp;{GLYPH=fa-comments-o}&nbsp;{NEWS_COMMENT_COUNT}</span>
              <span class="default-news-hits">&nbsp;&nbsp;&nbsp;{GLYPH=far fa-eye}&nbsp;{HITS_COUNTER: multi=1}</span>
            </div>
            <a class="default-button-back w-50 position-absolute bottom-0 start-50 translate-middle-x" href="{NEWSURL}">'.LAN_READ_MORE.'</a> 
          </div>
        </div>
      </div>
    </div> 
';

$NEWS_TEMPLATE['default']['end'] = '
  </div>
</div>
';


/* FOR NEWS ITEM ON CATEGORY'S PAGE **************************************************************************/

// $NEWS_TEMPLATE['category'] = $NEWS_TEMPLATE['default'];
$NEWS_TEMPLATE['category']['start']	= '
<!-- News Category Template Start -->
<div class="default-news">
  <div class="row" data-masonry=\'{"percentPosition": true }\'>
    <div class="col-md-6 overflow-hidden mb-4">
      <div class="news-title-item d-flex justify-content-center">
        <div class="align-self-center">
          <div class="news-icon text-center">
            {GLYPH=fas fa-blog}
            <h3 class="my-3">{NEWS_CATEGORY_NAME}</h3>
          </div>
        </div>
      </div>
    </div>
'; 
$NEWS_TEMPLATE['category']['item']	= $NEWS_TEMPLATE['default']['item']; 
$NEWS_TEMPLATE['category']['end']	= $NEWS_TEMPLATE['default']['end'];

/**
 * @todo (experimental)
 */
$NEWS_TEMPLATE['2-column']['caption']  = '{NEWS_CATEGORY_NAME}';
$NEWS_TEMPLATE['2-column']['start']    = '<div class="row">';
$NEWS_TEMPLATE['2-column']['item']     = '<div class="item col-md-6">
											{SETIMAGE: w=400&h=400&crop=1}
											{NEWSTHUMBNAIL=placeholder}
	                                            <h3>{NEWS_TITLE}</h3>
	                                            <p>{NEWS_SUMMARY}</p>
	                                         	<p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">' . LAN_READ_MORE . '</a></p>
            							  </div>';
$NEWS_TEMPLATE['2-column']['end']      = '</div>';


### Related 'start' - Options: Core 'single' shortcodes including {SETIMAGE}
### Related 'item' - Options: {RELATED_URL} {RELATED_IMAGE} {RELATED_TITLE} {RELATED_SUMMARY}
### Related 'end' - Options:  Options: Core 'single' shortcodes including {SETIMAGE}
/*
$NEWS_TEMPLATE['related']['start'] = "<hr><h4>".defset('LAN_RELATED', 'Related')."</h4><ul class='e-related'>";
$NEWS_TEMPLATE['related']['item'] = "<li><a href='{RELATED_URL}'>{RELATED_TITLE}</a></li>";
$NEWS_TEMPLATE['related']['end'] = "</ul>";*/

$NEWS_TEMPLATE['related']['caption'] = '<div class="related-news-title"><h2>{LAN=RELATED}</h2></div>';

$NEWS_TEMPLATE['related']['start'] = '
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4" data-masonry=\'{"percentPosition": true }\'>
  <div class="col overflow-hidden mb-4">
    <div class="related-caption d-flex justify-content-center p-3">
      <div class="align-self-center">
        <div class="related-caption-icon text-center">
          {GLYPH=fas fa-blog}
          <h3 class="my-3">{LAN=RELATED}</h3>
        </div>
      </div>
    </div>
  </div>';

$NEWS_TEMPLATE['related']['item'] = '
  <div class="col mb-4">
    <div class="related-image">
      <a href="{RELATED_URL}">
        {RELATED_IMAGE}
        <div class="related-title">
          <div class="related-title-inner">
            <h3>{RELATED_TITLE}</h3>
          </div>
        </div>
      </a>
    </div>     
  </div>';

$NEWS_TEMPLATE['related']['end'] = '
</div>';