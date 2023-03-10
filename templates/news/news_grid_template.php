<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */


	$NEWS_GRID_TEMPLATE['col-md-6']['start'] = '<div class="row news-grid-default news-menu-grid">';

	$NEWS_GRID_TEMPLATE['col-md-6']['featured'] = '<div class="row featured">
													<div class="col-sm-12">
													<div class="item col-sm-6" >
														{SETIMAGE: w=600&h=400&crop=1}
														{NEWSTHUMBNAIL=placeholder}
													</div>
													<div class="item col-sm-6">
		                                                <h3>{NEWSTITLE}</h3>
		                                                <p>{NEWSMETADIZ: limit=100}</p>
		                                                <p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">' . LAN_READ_MORE . '</a></p>
	                                                </div>
	                                               </div>
	                                               </div>
            							          ';

	$NEWS_GRID_TEMPLATE['col-md-6']['item'] = '<div class="item col-md-6">
												{SETIMAGE: w=400&h=400&crop=1}
												{NEWSTHUMBNAIL=placeholder}
              									<h3>{NEWS_TITLE}</h3>
              									<p>{NEWS_SUMMARY}</p>
              									<p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">' . LAN_READ_MORE . '</a></p>
            							   </div>';

	$NEWS_GRID_TEMPLATE['col-md-6']['end'] = '</div>';


// ------------------ col-md-4 -----------------

	$NEWS_GRID_TEMPLATE['col-md-4']['start']    = $NEWS_GRID_TEMPLATE['col-md-6']['start'];
	$NEWS_GRID_TEMPLATE['col-md-4']['featured'] = $NEWS_GRID_TEMPLATE['col-md-6']['featured'];
    $NEWS_GRID_TEMPLATE['col-md-4']['item']     = '<div class="item col-md-4">
													{SETIMAGE: w=400&h=400&crop=1}
													{NEWSTHUMBNAIL=placeholder}
	                                                <h3>{NEWS_TITLE}</h3>
	                                                <p>{NEWS_SUMMARY}</p>
	                                                <p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">' . LAN_READ_MORE . '</a></p>
            							        </div>';
	$NEWS_GRID_TEMPLATE['col-md-4']['end']      = $NEWS_GRID_TEMPLATE['col-md-6']['end'];



// ------------------ col-md-3 -----------------


	$NEWS_GRID_TEMPLATE['col-md-3']['start']    = $NEWS_GRID_TEMPLATE['col-md-6']['start'];
	$NEWS_GRID_TEMPLATE['col-md-3']['featured'] = $NEWS_GRID_TEMPLATE['col-md-6']['featured'];
    $NEWS_GRID_TEMPLATE['col-md-3']['item']     = '<div class="item col-md-3">
													{SETIMAGE: w=400&h=400&crop=1}
													{NEWSTHUMBNAIL=placeholder}
	                                                <h3>{NEWS_TITLE}</h3>
	                                                <p>{NEWS_SUMMARY}</p>
	                                                <p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">' . LAN_READ_MORE . '</a></p>
            							        </div>';
	$NEWS_GRID_TEMPLATE['col-md-3']['end']      = $NEWS_GRID_TEMPLATE['col-md-6']['end'];




// ------------------ media-list -----------------



	$NEWS_GRID_TEMPLATE['media-list']['start'] = '<div class="row news-grid-default">';

	$NEWS_GRID_TEMPLATE['media-list']['featured'] = '<div class="featured item col-sm-6" >
														{SETIMAGE: w=600&h=400&crop=1}
														{NEWSTHUMBNAIL=placeholder}
														 <h3><a href="{NEWS_URL}">{NEWS_TITLE}</a></h3>
														 <p>{NEWS_SUMMARY: limit=60}</p>
													</div>


            							          ';


	$NEWS_GRID_TEMPLATE['media-list']['item'] = '<div class="item col-sm-6">
												{SETIMAGE: w=120&h=120&crop=1}
												<ul class="media-list">
													<li class="media">
													  <div class="media-left media-top">
													    <a href="{NEWS_URL}">
													      {NEWS_IMAGE: type=tag&class=media-object img-rounded&placeholder=1}
													    </a>
													  </div>
													  <div class="media-body">
													    <h4 class="media-heading"><a href="{NEWS_URL}">{NEWS_TITLE}</a></h4>
													    <p>{NEWS_SUMMARY: limit=60}</p>
													  </div>
													  </li>

												</ul>
            							    </div>';


	$NEWS_GRID_TEMPLATE['media-list']['end'] = '</div>';


/***********************************************************************************************************************************/
   
//  fizi - This News Grid for Latest News Items  
$NEWS_GRID_TEMPLATE['homepage-latestnews']['start'] = '
<div class="row" data-masonry=\'{"percentPosition": true }\'>
  <div class="col-md-6 overflow-hidden mb-4">
    <div class="news-title-item d-flex justify-content-center">
      <div class="align-self-center">
        <div class="news-icon text-center">
          {GLYPH=fas fa-blog}
          <h3 class="my-3"><a href="{SITEURL}news">{LAN=LAN_THEME_22}</a></h3>
        </div>
      </div>
    </div>
  </div>
';

$NEWS_GRID_TEMPLATE['homepage-latestnews']['featured'] = '
';

$NEWS_GRID_TEMPLATE['homepage-latestnews']['item'] = '
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

$NEWS_GRID_TEMPLATE['homepage-latestnews']['end'] = '
</div>';



