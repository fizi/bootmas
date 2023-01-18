<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * e107 Bootstrap Theme Shortcodes. 
 *
*/

class theme_shortcodes extends e_shortcode
{

/* ------------------------------------------------------------------------------------------------------------------------------------------- */

/*-----------------------------
  LATEST NEWS SHORTCODE - Bootstrap 5 - fizi
-----------------------------*/
    function sc_grid_news_latest(){

      $template = "
        <!-- News Grid Menu for Latest News -->
        {MENU: path=news/news_grid&limit=7&category=0&source=latest&featured=0&layout=homepage-latestnews}

    ";

    $text = e107::getParser()->parseTemplate($template,true);

    return $text;

    }


/*------------------------------------------
    Shortcode for news on extend news pages
--------------------------------------------*/
    /**
     * Will only function on the news page.
     * @example {THEME_NEWS_BANNER: type=date}
     * @example, {THEME_NEWS_BANNER: type=image}
     * @example {THEME_NEWS_BANNER: type=author}
     * * @example {THEME_NEWS_BANNER: type=related}
     * @param null $parm
     * @return string|null
     */
    function sc_theme_news_banner($parm=null)
    {
        /** @var news_shortcodes $news */
        $sc = e107::getScBatch('news');
        $news = $sc->getScVar('news_item');

        $ret = '';
        $type = varset($parm['type']);

        switch($type)
        {
            case "title":
                $ret = $sc->sc_news_title();
                break;

            case "date":
                $ret = $sc->sc_news_date();
                break;

            case "comment":
                $ret = $sc->sc_news_comment_count();
                break;

            case "category":
                $ret = $sc->sc_newscategory();
                break;

            case "author":
                $ret = $sc->sc_news_author();
                break;

            case "related":
                $ret = $sc->sc_news_related();
                break;

            case "image":
            default:
            if(!empty($news['news_thumbnail']))
            {
                $tmp = explode(',', $news['news_thumbnail']);

                $opts = array(
                    'w' => 1800,
                    'h' => null,
                    'crop' => false,
                );

                $ret = e107::getParser()->toImage($tmp[0], $opts);
            }
                // code to be executed if n is different from all labels;
        }

        return $ret;


    }


/*------------------------------------------
    Shortcode for custom contact
--------------------------------------------*/

    function sc_contact_address()
	{
		$contact_shortcodes = e107::getScBatch('contact');
		return "<div class='contact-info-address'>".$contact_shortcodes->sc_contact_info(['type'=>'address'])."</div>";
    }
    function sc_contact_phone1()
	{
		$contact_shortcodes = e107::getScBatch('contact');
		return "<div class='contact-info-phone'>".$contact_shortcodes->sc_contact_info(['type'=>'phone1'])."</div>";
    }
    function sc_contact_email1()
	{
		$contact_shortcodes = e107::getScBatch('contact');
		return "<div class='contact-info-email'>".$contact_shortcodes->sc_contact_info(['type'=>'email1'])."</div>";

    }
    function sc_contact_hours()
	{
        $contact_shortcodes = e107::getScBatch('contact');
		return "<div class='contact-info-hours'>".$contact_shortcodes->sc_contact_info(['type'=>'hours'])."</div>";
    }


/*------------------------------------------
    Shortcode for subscribe - Bootstrap 5 - fizi
--------------------------------------------*/
    function sc_bootstrap_5_subscribe()
	{
		$pref = e107::pref('core');
		$ns = e107::getRender();

		if(empty($pref['signup_option_class']))
		{
			return false;
		}

        $frm = e107::getForm();
	    $text = $frm->open('bootstrap-5-subscribe','post', e_SIGNUP);
	    $text .= "<div class='input-group mb-2'>";
	    $text .= $frm->text('email','', null, array('placeholder'=> LAN_THEME_21));
	    $text .= $frm->button('subscribe', 1, 'submit', LAN_THEME_22, array('class'=>'btn btn-outline-light'));
	    $text .= "</div>";
	    $text .= $frm->close();

		return $text;
	}

    	/**
	 * Special Footer Shortcode for dynamic menuarea templates.
	 * @shortcode {---FOOTER---}
	 * @return string
	 */
	function sc_footer()
	{
		// return "<!-- Dynamic Footer template -->\n";

		return '
            <div class="container px-5">
              <div class="row">
                <div class="col-lg-4 d-flex justify-content-center align-items-center mb-4">
		          <div class="w-75">{LOGO}</div>
                </div>
		        <div class="col-lg-4 mb-4">
		          <div class="contact-info-bottom">
		            <h2 class="mb-4 text-center">{LAN=THEME_23}</h2>
		            <div class="footer-address mt-3 pb-3"><span class="icon float-start mb-3 d-flex justify-content-center align-items-center">{GLYPH=fas fa-map-marker-alt}</span><span>{LAN=THEME_24}</span>{CONTACT_ADDRESS}</div>
                    <div class="footer-phone mt-3 pb-3"><span class="icon float-start mb-3 d-flex justify-content-center align-items-center">{GLYPH=fas fa-mobile-alt}</span><span>{LAN=THEME_25}</span>{CONTACT_PHONE1}</div>
                    <div class="footer-email mt-3 pb-3"><span class="icon float-start mb-3 d-flex justify-content-center align-items-center">{GLYPH=fas fa-at}</span><span>{LAN=THEME_26}</span>{CONTACT_EMAIL1}</div> 
                  </div>			
                </div>
                <div class="col-lg-4 mb-4">
		          <div class="footer-links">
		            <h2 class="mb-4 text-center">{LAN=THEME_27}</h2>
                    {NAVIGATION=footer}
		          </div>
                </div>
              </div>
	          <div class="small text-center text-white-50">{SITEDISCLAIMER}</div>
            </div>';
	}

}

?>