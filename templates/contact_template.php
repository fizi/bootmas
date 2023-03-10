<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2016 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Contact Template
 */
 // $Id$

if (!defined('e107_INIT')) { exit; }

$CONTACT_WRAPPER['info']['CONTACT_INFO'] = "<div>{---}</div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=organization'] = "<h4 class='my-company text-center'>{---}</h4>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=message'] = "<div class='custom-message py-2'>{---}</div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=address'] = "<div class='contact-address py-2'><address><span class='icon float-start mb-3 d-flex justify-content-center align-items-center'>{GLYPH=fas fa-map-marker-alt}</span><p class='d-inline-block align-baseline'><span>{LAN=LAN_THEME_24}</span><br />{---}</p></address></div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=email1'] = "<div class='contact-email1 py-2'><span class='icon float-start mb-3 d-flex justify-content-center align-items-center'>{GLYPH=fas fa-at}</span><p class='d-inline-block align-baseline'><span>{LAN=LAN_THEME_26}</span><br />{---}</p></div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=email2'] = "<div class='contact-email2 py-2'><span class='icon float-start mb-3 d-flex justify-content-center align-items-center'>{GLYPH=fas fa-at}</span><p class='d-inline-block align-baseline'><span>{LAN=LAN_THEME_26}</span><br />{---}</p></div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=phone1'] = "<div class='contact-phone1 py-2'><span class='icon float-start mb-3 d-flex justify-content-center align-items-center'>{GLYPH=fas fa-mobile-alt}</span><p class='d-inline-block align-baseline'><span>{LAN=LAN_THEME_25}</span><br />{---}</p></div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=phone2'] = "<div class='contact-phone2 py-2'><span class='icon float-start mb-3 d-flex justify-content-center align-items-center'>{GLYPH=fas fa-mobile-alt}</span><p class='d-inline-block align-baseline'><span>{LAN=LAN_THEME_25}</span><br />{---}</p></div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=phone3'] = "<div class='contact-phone3 py-2'><span class='icon float-start mb-3 d-flex justify-content-center align-items-center'>{GLYPH=fas fa-mobile-alt}</span><p class='d-inline-block align-baseline'><span>{LAN=LAN_THEME_25}</span><br />{---}</p></div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=fax'] = "<div class='contact-fax py-2'><span class='icon float-start mb-3 d-flex justify-content-center align-items-center'>{GLYPH=fa-fax}</span><p>{---}</p></div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=hours'] = "<div class='contact-clock py-2'><span class='icon float-start mb-3 d-flex justify-content-center align-items-center'>{GLYPH=fas fa-clock}</span><p class='d-inline-block align-baseline'><span>{LAN=LAN_THEME_28}</span><br />{---}</p></div>";

$CONTACT_TEMPLATE['info'] = "

<!-- New Contact Info -->
<div class='contactinfo-info'>
  {CONTACT_INFO: type=organization}
  {CONTACT_INFO: type=address}		
  {CONTACT_INFO: type=phone1}
  {CONTACT_INFO: type=phone2}
  {CONTACT_INFO: type=phone3}
  {CONTACT_INFO: type=fax}
  {CONTACT_INFO: type=email1}
  {CONTACT_INFO: type=email2}
  {CONTACT_INFO: type=hours}
  {CONTACT_INFO: type=message}
</div>
";


$CONTACT_TEMPLATE['menu'] =  '
<div class="contactMenuForm">
  <div class="control-group form-group">
	<label for="contactName">{LAN=CONTACT_03}</label>
	{CONTACT_NAME}
 </div>	 
  <div class="control-group form-group">
	<label class="control-label" for="contactEmail">{LAN=CONTACT_04}</label>
	{CONTACT_EMAIL}
  </div>
  <div class="control-group form-group">
	<label for="contactBody" >{LAN=CONTACT_06}v</label>
    {CONTACT_BODY=rows=5&cols=30}
  </div>
  <div class="form-group"><label for="gdpr">{LAN=CONTACT_24}</label>
	<div class="checkbox form-check">
	  <label>{CONTACT_GDPR_CHECK} {LAN=CONTACT_21}</label>
	  <div class="help-block">{CONTACT_GDPR_LINK}</div> 
	</div>
  </div>
  {CONTACT_SUBMIT_BUTTON: class=btn btn-sm btn-small btn-primary button}
</div>       
 ';
 


// Shortcode wrappers.
$CONTACT_WRAPPER['form']['CONTACT_IMAGECODE'] 			= "<div class='control-group form-group'><label for='code-verify'>{CONTACT_IMAGECODE_LABEL}</label> {---}";
$CONTACT_WRAPPER['form']['CONTACT_IMAGECODE_INPUT'] 	= "{---}</div>";
$CONTACT_WRAPPER['form']['CONTACT_EMAIL_COPY'] 			= "<div class='control-group form-group'>{---}{LAN=CONTACT_07}</div>";
$CONTACT_WRAPPER['form']['CONTACT_PERSON']				= "<div class='control-group form-group'><label for='contactPerson'>{LAN=CONTACT_14}</label>{---}</div>";




$CONTACT_TEMPLATE['form'] = "
<form action='".e_SELF."' method='post' id='contactForm'>
  {CONTACT_PERSON}
  <div class='control-group form-group'>
    <label for='contactName'>{LAN=CONTACT_03}</label>
    {CONTACT_NAME}
  </div>
  <div class='control-group form-group'>
    <label for='contactEmail'>{LAN=CONTACT_04}</label>
	{CONTACT_EMAIL}
  </div>
  <div class='control-group form-group'>
    <label for='contactSubject'>{LAN=CONTACT_05}</label>
	{CONTACT_SUBJECT}
  </div>
  {CONTACT_EMAIL_COPY}
  <div class='control-group form-group'>
    <label for='contactBody'>{LAN=CONTACT_06}</label>
	{CONTACT_BODY}
  </div>
  {CONTACT_IMAGECODE}
  {CONTACT_IMAGECODE_INPUT}
  <div class='form-group'><label for='gdpr'>{LAN=CONTACT_24}</label>
    <div class='checkbox'>
	  <label>{CONTACT_GDPR_CHECK} {LAN=CONTACT_21}</label>
	  <div class='help-block'>{CONTACT_GDPR_LINK}</div> 
	</div>
  </div>
  <div class='form-group'>
	{CONTACT_SUBMIT_BUTTON}
  </div>
</form>"; 


// Set the layout and  order of the info and form.
$CONTACT_TEMPLATE['layout'] = '
<div id="page-contactinfo" class="mb-4">
  <div class="contact-map-wrap mb-4">
    {CONTACT_MAP: zoom=city}
  </div> 
  <div class="row">
    <div class="col-md d-flex align-items-stretch">
      {---CONTACT-FORM---}
    </div>
    <div class="col-md d-flex align-items-stretch">
      {---CONTACT-INFO---}
    </div>
  </div> 
</div>
';
                               

	// Customize the email subject
	// Variables:  CONTACT_SUBJECT and CONTACT_PERSON as well as any custom fields set in the form. )
$CONTACT_TEMPLATE['email']['subject'] = "{CONTACT_SUBJECT}"; 

	


