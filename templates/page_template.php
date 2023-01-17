<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
*/

if(!defined('e107_INIT'))
{
	exit;
}

$PAGE_WRAPPER = array();

$PAGE_WRAPPER['default']['CPAGESUBTITLE']   = '<h4>{---}</h4>';
$PAGE_WRAPPER['default']['CPAGEMESSAGE']    = '{---}<div class="clear"><!-- --></div>';
$PAGE_WRAPPER['default']['CPAGEAUTHOR']     = "{---}, ";
$PAGE_WRAPPER['default']['CPAGENAV']        = '<div class="f-right pull-right float-right col-md-3">{---}</div>';


#### default template - BC ####
// used only for parsing comment outside of the page tablerender-ed content
// leave empty if you integrate page comments inside the main page template


$PAGE_TEMPLATE['default']['page'] = '
		{PAGE}
		{PAGECOMMENTS}
	';

// always used - it's inside the {PAGE} sc from 'page' template
$PAGE_TEMPLATE['default']['start'] = '
<div id="cpage-view" class="cpage-view">
  <div class="cpage-image d-flex justify-content-center mb-5">
    {SETIMAGE: w=1600&h=1200&crop=1}
    {CPAGEFIELD: name=image1&class=img-fluid}
    <div class="cpage-title text-center text-white text-opacity-75 p-4">
      <h2>{CPAGETITLE}</h2>
      <div class="cpage-meta">
        <small>{GLYPH=fas fa-clock}&nbsp;{CPAGEDATE=yyyy. MM dd.}&nbsp;&nbsp;&nbsp;{GLYPH=fas fa-user}&nbsp;{CPAGEAUTHOR}</small>
      </div>
    </div>
  </div>
  <div class="row row-cols-1 row-cols-lg-2">
    <div class="col-lg-8 mb-4">
      <div id="{CPAGESEF}" class="cpage-body-inner p-5 mb-4">';

// page body
$PAGE_TEMPLATE['default']['body'] = ' 
        {CPAGEMESSAGE|default}
        {CPAGESUBTITLE|default}
        <div class="clear"><!-- --></div>		
        {CPAGENAV}
        {CPAGEBODY}
        <div class="clear"><!-- --></div>
        <div class="cpage-view-tags overflow-hidden mb-3">{CPAGETAGS}</div>
        {CPAGEEDIT}
';

// {CPAGEFIELD: name=image}

$PAGE_WRAPPER['default']['CPAGEEDIT'] = "
        <div class='text-right text-end'>{---}</div>";

// used only when password authorization is required
$PAGE_TEMPLATE['default']['authorize'] = '
        <div class="cpage-restrict ">
	      {message}
	      {form_open}
	      <div class="panel panel-default">
	        <div class="panel-heading">{caption}</div>
	        <div class="panel-body">
		      <div class="form-group">
		        <label class="col-sm-3 control-label">{label}</label>
		        <div class="col-sm-9">
			      {password} {submit} 
		        </div>
		      </div>
	        </div>
          </div>
	      {form_close}
        </div>
';

// used when access is denied (restriction by class)
$PAGE_TEMPLATE['default']['restricted'] = '
        {text}
';

// used when page is not found
$PAGE_TEMPLATE['default']['notfound'] = '
        {text}
';

// always used
$PAGE_TEMPLATE['default']['end'] = '
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="nested-menu-box mb-5">
        <h4 class="nested-menu-title text-center">{LAN=LAN_THEME_30}</h4>
        <div class="nested-menu-body">
          <div class="cpage-view-share">{SOCIALSHARE}</div>
        </div>
      </div> 
      <div class="nested-menu-box mb-5">
        <h4 class="nested-menu-title text-center">{LAN=LAN_THEME_31}</h4>
        <div class="nested-menu-body">  
          <div class="cpage-view-rate overflow-hidden mb-3 text-center">{CPAGERATING|default}</div>
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
</div>
<div class="cpage-related my-4">
  {CPAGERELATED: types=page&limit=7}
</div>
';

// options per template - disable table render
//	$PAGE_TEMPLATE['default']['noTableRender'] = false; //XXX Deprecated

// define different tablerender mode here
$PAGE_TEMPLATE['default']['tableRender'] = 'cpage';

$PAGE_TEMPLATE['default']['related']['caption'] = '{LAN=RELATED}';
$PAGE_TEMPLATE['default']['related']['start'] = '
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
    </div>
';
$PAGE_TEMPLATE['default']['related']['item'] = '
    <div class="col mb-4">
      <div class="related-image">
        {SETIMAGE: w=350&h=350&crop=1}
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
$PAGE_TEMPLATE['default']['related']['end'] = '
  </div>
';

// $PAGE_TEMPLATE['default']['editor'] = '<ul class="fa-ul"><li><i class="fa fa-li fa-edit"></i> Level 1</li><li><i class="fa fa-li fa-cog"></i> Level 2</li></ul>';


#### No table render example template ####


$PAGE_TEMPLATE['custom']['start'] = '<div id="{CPAGESEF}" class="cpage-body">';
$PAGE_TEMPLATE['custom']['body'] = '';
$PAGE_TEMPLATE['custom']['authorize'] = '
	';

$PAGE_TEMPLATE['custom']['restricted'] = '
	';

$PAGE_TEMPLATE['custom']['end'] = '</div>';
$PAGE_TEMPLATE['custom']['tableRender'] = '';


$PAGE_WRAPPER['profile']['CMENUIMAGE: template=profile'] = '<span class="page-profile-image pull-left col-xs-12 col-sm-4 col-md-4">{---}</span>';
$PAGE_TEMPLATE['profile'] = $PAGE_TEMPLATE['default'];
$PAGE_TEMPLATE['profile']['body'] = '
		{CPAGEMESSAGE}
		{CPAGESUBTITLE}
		<div class="clear"><!-- --></div>

		{CPAGENAV|default}
		{SETIMAGE: w=320}
		{CMENUIMAGE: template=profile}
		{CPAGEBODY}

		<div class="clear"><!-- --></div>
		{CPAGERATING}
		{CPAGEEDIT}
	';
	
	
	
	







	
	
	
