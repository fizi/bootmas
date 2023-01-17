<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */



$POPULAR_MENU_TEMPLATE['default']['start'] = "
<div class='popular-news-menu'>";  // set the {NEWSIMAGE} dimensions.

$POPULAR_MENU_TEMPLATE['default']['item'] = '
  <div class="pupular-inner">
    <div class="row row-cols-1 row-cols-lg-2">
      <div class="col-lg-4 d-flex justify-content-center">
        <div class="popular-image align-self-center">
          {SETIMAGE: w=400&h=400&crop=1}
          <a href="{NEWS_URL}">{NEWS_IMAGE: item=1&type=tag}</a>
        </div>
      </div>
      <div class="col-lg-8">
        <h4 class="mb-1">{NEWS_TITLE: link=1}</h4>
        <div class="hits-count">{GLYPH=fas fa-chart-line} {HITS_COUNTER}</div>
      </div>
    </div>
  </div>
  <hr class="text-white" />
';
										
$POPULAR_MENU_TEMPLATE['default']['end'] = "  
</div>";