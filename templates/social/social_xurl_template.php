<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
y */


	/**
	 * {XURL_ICONS} template
	 */
	 $SOCIAL_XURL_TEMPLATE['default']['start'] = '
     <div class="xurl-social-icons">
     ';
     
	 $SOCIAL_XURL_TEMPLATE['default']['item'] = '
       <a target="_blank" class="e-tip social-icon social-{XURL_ICONS_ID} d-inline-block float-start m-2 text-white" rel="noopener noreferrer" href="{XURL_ICONS_HREF}" data-tooltip-position="top" title="{XURL_ICONS_TITLE}" aria-label="{XURL_ICONS_TITLE}">
         <span class="e-social-{XURL_ICONS_ID} {XURL_ICONS_CLASS} d-flex justify-content-center"></span>
       </a>';
	 $SOCIAL_XURL_TEMPLATE['default']['end'] = '
     </div>';
