<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */




$NEWS_VIEW_INFO = array(

	'default' 	=> array('title' => LAN_DEFAULT, 							'description' => 'unused'),
	'videos' 	=> array('title' => "Videos (experimental)", 				'description' => 'unused'),
);


// Default
// $NEWS_VIEW_WRAPPER['default']['item']['NEWSIMAGE: item=1'] = '<span class="news-images-main pull-left float-left col-xs-12 col-sm-6 col-md-6">{---}</span>';
// $NEWS_VIEW_WRAPPER['default']['item']['NEWSRELATED'] = '<hr />{---}<hr />';

$NEWS_VIEW_TEMPLATE['default']['caption'] = '{NEWS_TITLE}'; // null; // add a value to user tablerender()
$NEWS_VIEW_TEMPLATE['default']['item'] = '
<div id="view-item" class="view-item">
  <div class="view-item-image d-flex justify-content-center mb-5">
    {SETIMAGE: w=1600&h=1200&crop:1}
    {NEWSIMAGE: item=1}
    <div class="view-item-title text-center text-white text-opacity-75 p-4">
	  <h1>{NEWS_TITLE}</h1>
	  <div class="view-item-meta">
		<small>{GLYPH=fas fa-clock}&nbsp;{NEWSDATE=yyyy. MM dd.}&nbsp;&nbsp;&nbsp;{GLYPH=fas fa-folder-open}&nbsp;{NEWSCATEGORY}&nbsp;&nbsp;&nbsp;{GLYPH=fas fa-user}&nbsp;{NEWSAUTHOR}</small>
	  </div>
	</div> 
  </div>
  <div class="row row-cols-1 row-cols-lg-2">
    <div class="col-lg-8 mb-4">  
      <div class="view-item-inner p-5">       
        <div class="view-item-lead lead pb-2">{NEWS_SUMMARY}</div>
        <div class="view-item-body">{NEWS_BODY=body}</div>
        <div class="row view-item-images" data-masonry=\'{"percentPosition": true }\'>
          {SETIMAGE: w=1600&h=1200&crop:1}
          <div class="col-md-6 mb-4">{NEWSIMAGE: item=2}</div>
          <div class="col-md-6 mb-4">{NEWSIMAGE: item=3}</div>
          <div class="col-md-6 mb-4">{NEWSIMAGE: item=4}</div>
          <div class="col-md-6 mb-4">{NEWSIMAGE: item=5}</div>
        </div>
        <div class="view-item-extended">{NEWS_BODY=extended}</div>           
        <div class="row view-item-videos" data-masonry=\'{"percentPosition": true }\'>
	      <div class="col-md-6 mb-4">{NEWSVIDEO: item=1}</div>
	      <div class="col-md-6 mb-4">{NEWSVIDEO: item=2}</div>
	      <div class="col-md-6 mb-4">{NEWSVIDEO: item=3}</div>
          <div class="col-md-6 mb-4">{NEWSVIDEO: item=4}</div>        
        </div>
        <div class="view-item-tags overflow-hidden mb-3">{NEWSTAGS: separator=&nbsp;}</div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="nested-menu-box mb-5">
        <h4 class="nested-menu-title text-center">{LAN=LAN_THEME_30}</h4>
        <div class="nested-menu-body">
          <div class="view-item-share">{NEWSCOMMENTLINK: glyph=comments}{PRINTICON}{SOCIALSHARE}</div>
        </div>
      </div> 
      <div class="nested-menu-box mb-5">
        <h4 class="nested-menu-title text-center">{LAN=LAN_THEME_31}</h4>
        <div class="nested-menu-body">  
          <div class="view-item-rate overflow-hidden mb-3 text-center">{NEWS_RATE}</div>
        </div>
      </div>
      <div class="nested-menus">
        {SETSTYLE=right-inner}    
        {MENU=tagcloud}
        {MENU=news/news_categories}
        {MENU=news/news_months}
      </div> 
    </div>
  </div>
  <div class="view-news-pagination d-flex justify-content-between my-3">
    <!-- Prev Post -->  
    <div class="view-new-prev p-2">{NEWS_NAV_PREVIOUS}</div>
    <!-- Go Back -->
    <div class="view-back p-2">{NEWS_NAV_CURRENT}</div>
    <!-- Next Post -->
    <div class="view-news-next p-2">{NEWS_NAV_NEXT}</div>
  </div>
</div>
<div id="related-news">
  {NEWS_RELATED: types=news&limit=7}
</div>
';


/*
 * 	<hr />
	<h3>About the Author</h3>
	<div class="media">
			<div class="media-left">{SETIMAGE: w=80&h=80&crop=1}{NEWS_AUTHOR_AVATAR: shape=circle}</div>
			<div class="media-body">
				<h4>{NEWS_AUTHOR}</h4>
					{NEWS_AUTHOR_SIGNATURE}
					<a class="btn btn-xs btn-primary" href="{NEWS_AUTHOR_ITEMS_URL}">My Articles</a>
			</div>
	</div>
 */


// @todo add more templates. eg. 'videos' , 'slideshow images', 'full width image'  - help and ideas always appreciated.


// Videos
 $NEWS_VIEW_TEMPLATE['videos']['item'] = '<div class="view-item"><div class="alert alert-warning">Empty news_view_template.php (videos) - have ideas? let us know.</div></div>';


$NEWS_VIEW_TEMPLATE['nav']['previous'] = '
<div class="prev d-flex justify-content-center align-items-center">
  <span class="icon float-start bg-opacity-10 me-3 py-4 px-2"><a href="{NEWS_URL}">{GLYPH=fas fa-chevron-left}</a></span>
  <h6 class="prev-title"><a rel="prev" href="{NEWS_URL}">{NEWS_TITLE}</a></h6>
</div>';

$NEWS_VIEW_TEMPLATE['nav']['current'] = '
<div class="back d-flex aligns-items-center justify-content-center">
  <div class="back-title"><h6><a href="{NEWS_NAV_URL}">{LAN=BACK}</a></h6></div>
</div>';

$NEWS_VIEW_TEMPLATE['nav']['next'] = '
<div class="next d-flex justify-content-center align-items-center">
  <h6 class="next-title"><a rel="next" href="{NEWS_URL}">{NEWS_TITLE}</a></h6>
  <span class="icon float-end bg-opacity-10 ms-3 py-4 px-2"><a href="{NEWS_URL}">{GLYPH=fas fa-chevron-right}</a></span>
</div>';
