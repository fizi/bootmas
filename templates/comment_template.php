<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_themes/templates/comment_template.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }


// Shortcode wrappers.
$COMMENT_WRAPPER['item']['COMMENT_TIMEDATE']     = '<small>{---}</small>';
$COMMENT_WRAPPER['item']['COMMENT_EDIT']        = '<span class="comment-edit">{---}</span>';
$COMMENT_WRAPPER['item']['COMMENT_REPLY']		= '<span class="comment-reply">{---}</span>';
$COMMENT_WRAPPER['item']['COMMENT_AVATAR']  	= '<div class="comment-avatar text-center">{---}</div>';
$COMMENT_WRAPPER['item']['COMMENT_MODERATE']	= '<span class="comment-moderate">{---}</span>';

$COMMENT_WRAPPER['form'] = $COMMENT_WRAPPER['item']; // use the above wrappers for the 'form' as well.

// Templates

$COMMENT_TEMPLATE['form'] = "
<div class='row row-cols-1 row-cols-md-2'>
  <div class='col-lg-3 overflow-hidden mb-4 d-flex align-items-stretch'>
    <div class='comments-caption d-flex justify-content-center p-3'>
      <div class='align-self-center'>
        <div class='comments-caption-icon text-center'>
          {GLYPH=fas fa-comments}
          <h3 class='my-3'>{LAN=LAN_COMMENTS}</h3>
        </div>
      </div>
    </div>
  </div>
  <div class='col-lg-9 mb-4 d-flex align-items-stretch'>
    <div class='single-comment d-table p-4 w-100'>
      <div class='d-table-row d-flex'>
        <div class='d-table-cell pe-4'>
          {SETIMAGE: w=80&h=80&crop=1}
          {COMMENT_AVATAR: class=rounded-circle img-fluid}
        </div>
        <div class='d-table-cell w-100'>
          {AUTHOR_INPUT}
	      {COMMENT_INPUT}
	      <div id='commentformbutton' class='mt-3'>
	        {COMMENT_BUTTON}
	        {COMMENT_SHARE}
	      </div>
        </div>
      </div>
    </div>
  </div>
</div>
"; 




$COMMENT_TEMPLATE['item'] = '
<div class="single-comment d-table mb-4 p-4 w-100">
  <div class="d-table-row d-flex">
    <div class="d-table-cell align-self-center px-4">
      {SETIMAGE: w=80&h=80&crop=1}
      {COMMENT_AVATAR: class=rounded-circle img-fluid}
    </div>
    <div class="d-table-cell w-100">
      <div class="comment-top d-flex justify-content-between w-100">
        <div class="comment-username">{USERNAME}<span class="mx-3 fw-normal text-muted"><small>{COMMENT_TIMEDATE=relative}</small></span></div>
        <div class="comment-reply">{COMMENT_REPLY}</div>
      </div>
      <div class="comment-center mt-2 mb-3 w-100">{COMMENT}</div>
	  <div class="comment-bottom d-flex justify-content-between w-100">
        <div class="comment-status">{COMMENT_STATUS}</div>
        <div class="comment-edit">{COMMENT_EDIT} {COMMENT_MODERATE}</div>
      </div>
    </div>
  </div>
</div> 
';
	



$COMMENT_TEMPLATE['layout'] = '
<div class="comments-box-outer">
  <div class="comment-form-inner">
    <!-- Comment form-->
    {COMMENTFORM}
  </div>
  <div class="comments-inner">
    <!-- Single comment-->
    {COMMENTS}
  </div> 
  <div class="comments-moderate mt-1 mb-3">
    {MODERATE}
  </div>
</div>										
';
