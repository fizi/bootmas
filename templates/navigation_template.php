<?php
/*
* Copyright (c) 2012 e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
* $Id: e_shortcode.php 12438 2011-12-05 15:12:56Z secretr $
*
* Navigation Template 
*/



// TEMPLATE FOR {NAVIGATION=main}
$NAVIGATION_TEMPLATE['main']['start'] = "
<ul class='navbar-nav flex-column w-100'>
";

// Main Link
$NAVIGATION_TEMPLATE['main']['item'] = "
  <li class='nav-item'>
    <a class='nav-link' role='button' href='{NAV_LINK_URL}'{NAV_LINK_OPEN} title='{NAV_LINK_DESCRIPTION}'>{NAV_LINK_ICON}{NAV_LINK_NAME}</a>
  </li>
";

// Main Link - active state
$NAVIGATION_TEMPLATE['main']['item_active'] = "
  <li class='nav-item active'>
    <a class='nav-link e-tip' role='button' data-target='#' href='{NAV_LINK_URL}'{NAV_LINK_OPEN} title='{NAV_LINK_DESCRIPTION}'>{NAV_LINK_ICON}{NAV_LINK_NAME}</a>
  </li>
";

$NAVIGATION_TEMPLATE['main']['end'] = '
</ul>';

// Main Link which has a sub menu.
$NAVIGATION_TEMPLATE['main']['item_submenu'] = "
  <li class='nav-item dropdown {NAV_LINK_IDENTIFIER}'>
    <a id='dropdownMenu-{NAV_LINK_ID}' class='nav-link dropdown-toggle' role='button' data-toggle='dropdown' data-bs-toggle='dropdown' data-target='#' href='{NAV_LINK_URL}' title='{NAV_LINK_DESCRIPTION}'>
	  {NAV_LINK_ICON}{NAV_LINK_NAME}
	</a>
	{NAV_LINK_SUB}
  </li> 
";

// Main Link which has a sub menu - active state.
$NAVIGATION_TEMPLATE['main']['item_submenu_active'] = '
  <li class="nav-item dropdown active {NAV_LINK_IDENTIFIER}">
    <a id="dropdownMenu-{NAV_LINK_ID}" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" data-bs-toggle="dropdown"  href="{NAV_LINK_URL}">
	  {NAV_LINK_ICON}{NAV_LINK_NAME}
	</a>
	{NAV_LINK_SUB}
  </li>
';

// Sub menu BUG: aria-labelledby= - it should be the same as navbarDropdownMenuLink-{NAV_LINK_ID} from submenu parent but LINK_PARENT returns 0
$NAVIGATION_TEMPLATE['main']['submenu_start'] = '
<ul class="dropdown-menu submenu-start submenu-level-{NAV_LINK_DEPTH}" role="menu">
';

// Sub menu Link
$NAVIGATION_TEMPLATE['main']['submenu_item'] = '
  <li role="menuitem" class="dropdown-item link-depth-{LINK_DEPTH}">
    <a class="dropdown-item" href="{NAV_LINK_URL}"{NAV_LINK_OPEN}>{NAV_LINK_ICON}{NAV_LINK_NAME}</a>
  </li>
';

// Sub menu Link - active state
$NAVIGATION_TEMPLATE['main']['submenu_item_active'] = '
  <li role="menuitem" class="dropdown-item link-depth-{LINK_DEPTH}">
    <a class="dropdown-item active" href="{NAV_LINK_URL}"{NAV_LINK_OPEN}>{NAV_LINK_ICON}{NAV_LINK_NAME}</a>
  </li> 
';
$NAVIGATION_TEMPLATE['main']['submenu_end'] = '
</ul>
';

// 3rd Sub menu
$NAVIGATION_TEMPLATE['main']['submenu_lowerstart'] = '
    <ul aria-labelledby="dropdownMenu-{NAV_LINK_PARENT}" class="dropdown-menu submenu-start submenu-level-{NAV_LINK_DEPTH}" role="menu">
';

// Sub Menu Link which has a sub menu. 
$NAVIGATION_TEMPLATE['main']['submenu_loweritem'] = '
      <li role="menuitem" class="dropdown-submenu lower">
        <a id="dropdownMenu-{NAV_LINK_ID}" class="dropdown-item dropdown-toggle" href="{NAV_LINK_URL}"{NAV_LINK_OPEN} role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{LINK_NAME}</a>
		{LINK_SUB}
      </li> 
';

// Sub Menu Link which has a sub menu - active state.
$NAVIGATION_TEMPLATE['main']['submenu_loweritem_active'] = '
      <li role="menuitem" class="dropdown-submenu active">
        <a id="dropdownMenu-{NAV_LINK_ID}" class="dropdown-item dropdown-toggle" href="{NAV_LINK_URL}"{NAV_LINK_OPEN} role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{LINK_NAME}</a>
		{LINK_SUB}
	  </li>
';
$NAVIGATION_TEMPLATE['main']['submenu_lowerend'] = '
    </ul>
';



// TEMPLATE FOR {NAVIGATION=side}

$NAVIGATION_TEMPLATE['side']['start'] = '
<ul class="listgroup nav-side">
';

$NAVIGATION_TEMPLATE['side']['item'] = '
  <li class="list-group-item"><a href="{NAV_LINK_URL}"{NAV_LINK_OPEN} title="{NAV_LINK_DESCRIPTION}">{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>
';

$NAVIGATION_TEMPLATE['side']['item_submenu'] = '
  <li class="nav-header">{NAV_LINK_ICON}{NAV_LINK_NAME}{NAV_LINK_SUB}</li>
';

$NAVIGATION_TEMPLATE['side']['item_active'] = '
<li class="list-group-item active"{NAV_LINK_OPEN}><a class="list-group-item active" href="{NAV_LINK_URL}" title="{NAV_LINK_DESCRIPTION}">{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>
';

$NAVIGATION_TEMPLATE['side']['end'] = '
</ul>
';

$NAVIGATION_TEMPLATE['side']['submenu_start'] = '';

$NAVIGATION_TEMPLATE['side']['submenu_item'] = '
  <li class="list-group-item" ><a href="{NAV_LINK_URL}"{NAV_LINK_OPEN}>{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>
';

$NAVIGATION_TEMPLATE['side']['submenu_loweritem'] = '
  <li role="menuitem" class="dropdown-submenu">
	<a href="{NAV_LINK_URL}"{NAV_LINK_OPEN}>{NAV_LINK_ICON}{NAV_LINK_NAME}</a>
	{NAV_LINK_SUB}
  </li>
';

$NAVIGATION_TEMPLATE['side']['submenu_item_active'] = '
  <li class="active"><a href="{NAV_LINK_URL}">{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>
';

$NAVIGATION_TEMPLATE['side']['submenu_end'] = '';



// Footer links.  - ie. 3 columns of links. 

$NAVIGATION_TEMPLATE["footer"]["start"] = "
<!-- footer-navigation start -->
<ul class='list-unstyled text-center mb-0'>";

$NAVIGATION_TEMPLATE["footer"]["item"] = "
  <li>
    <a class='d-block p-2 text-white-50' href='{NAV_LINK_URL}'{NAV_LINK_OPEN} title=\"{NAV_LINK_DESCRIPTION}\">{NAV_LINK_ICON}{NAV_LINK_NAME}</a>
  </li>";
  
$NAVIGATION_TEMPLATE["footer"]["item_submenu"] = "
";
  
$NAVIGATION_TEMPLATE["footer"]["item_active"] = "
  <li>
    <a class='d-block p-2 text-white active' href='{NAV_LINK_URL}' title=\"{NAV_LINK_DESCRIPTION}\">{NAV_LINK_ICON}{NAV_LINK_NAME}</a>
  </li>";
  
$NAVIGATION_TEMPLATE["footer"]["end"] = "
</ul>
<!-- footer-navigation end -->";

$NAVIGATION_TEMPLATE["footer"]["submenu_start"] = "
<ul class='list-unstyled'>";

$NAVIGATION_TEMPLATE["footer"]["submenu_item"] = "
  <li><a href='{NAV_LINK_URL}'{NAV_LINK_OPEN}>{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>\n";
  
$NAVIGATION_TEMPLATE["footer"]["submenu_loweritem"] = "
  <li><a href='{NAV_LINK_URL}'{NAV_LINK_OPEN}>{NAV_LINK_ICON}{NAV_LINK_NAME}</a>{NAV_LINK_SUB}</li>\n";
  
$NAVIGATION_TEMPLATE["footer"]["submenu_item_active"] = "
  <li class='active'><a href='{NAV_LINK_URL}'>{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>\n";
  
$NAVIGATION_TEMPLATE["footer"]["submenu_end"] = "
</ul>";



$NAVIGATION_TEMPLATE['alt']['start'] = '
<ul class="nav nav-list">';

$NAVIGATION_TEMPLATE['alt']['item'] = '
  <li><a href="{NAV_LINK_URL}"{NAV_LINK_OPEN} title="{NAV_LINK_DESCRIPTION}">{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['alt']['item_submenu'] = '
  <li class="nav-header">{NAV_LINK_ICON}{NAV_LINK_NAME}{NAV_LINK_SUB}</li>';

$NAVIGATION_TEMPLATE['alt']['item_active'] = '
  <li class="active"{NAV_LINK_OPEN}><a href="{NAV_LINK_URL}" title="{NAV_LINK_DESCRIPTION}">{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['alt']['end'] = '
</ul>';

$NAVIGATION_TEMPLATE['alt']['submenu_start'] = '';

$NAVIGATION_TEMPLATE['alt']['submenu_item'] = '
  <li><a href="{NAV_LINK_URL}"{NAV_LINK_OPEN}>{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['alt']['submenu_loweritem'] = '
  <li role="menuitem" class="dropdown-submenu">
	<a href="{NAV_LINK_URL}"{NAV_LINK_OPEN}>{NAV_LINK_ICON}{NAV_LINK_NAME}</a>
	{NAV_LINK_SUB}
  </li>';

$NAVIGATION_TEMPLATE['alt']['submenu_item_active'] = '
  <li class="active"><a href="{NAV_LINK_URL}">{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['alt']['submenu_end'] = '';


$NAVIGATION_TEMPLATE['alt5'] = $NAVIGATION_TEMPLATE['alt'];
$NAVIGATION_TEMPLATE['alt6'] = $NAVIGATION_TEMPLATE['alt'];

$NAVIGATION_TEMPLATE['alt5']['start'] = '<ul class="nav nav-list nav-alt5">';
$NAVIGATION_TEMPLATE['alt6']['start'] = '<ul class="nav nav-list nav-alt6">';




