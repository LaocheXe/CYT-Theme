<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 CMS
|
|     Released under the terms and conditions of the
|     GNU General Public License (http://gnu.org).
| 
}     Created by: LaocheXe - 3-5-2013
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }


define("BOOTSTRAP", 	3);
define("FONTAWESOME", 	4);
define('VIEWPORT', 		"width=device-width, initial-scale=1.0");

e107::js("url", 			"https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js", 'jquery', 2);
e107::css('url', 			'https://cdn.jsdelivr.net/bootstrap/3.3.5/css/bootstrap.min.css');
e107::css('url',            'https://cdn.jsdelivr.net/fontawesome/4.4.0/css/font-awesome.min.css');

e107::js("footer-inline", 	"$('.e-tip').tooltip({container: 'body'})"); // activate bootstrap tooltips. 


define('COMMENTLINK', 	e107::getParser()->toGlyph('fa-comment'));
define('COMMENTOFFSTRING', '');

// Add for the bullets - eXe
//global $eMenuActive, $e107, $tp, $use_imagecode, $bullet;

// The login function - eXe
require_once(THEME."gc_custom_login.php");

// Select multilanguage - eXe
@include_once(e_THEME."cytn/languages/".e_LANGUAGE.".php");

define("STANDARDS_MODE", TRUE);
$xhtmlcompliant = TRUE;
$csscompliant = TRUE;

define("IMODE", "dark");
define("THEME_DISCLAIMER", "<br /><i>".LAN_THEME_1."</i>");
define("USER_WIDTH","width:100%");


// The layouts - eXe
$layout = "_default";


// Edit Menu Buttons Styles
//if($theme_pref['editbutton'] == 'disable')
//{
	$editbutton = '<style>
	.fa-edit::before, .fa-pencil-square-o::before {
    	content: "";
	}
	</style>
	';
//}
//elseif($theme_pref['editbutton'] == 'enable')
//{
//	$editbutton = '<style>
//	.fa-edit::before, .fa-pencil-square-o::before {
//    	content: "";
//	}
//	</style>';
//}
// Add the pages to custompages, means to the left and right menus will not show - eXe
/*if(
        eregi(e_PAGE, "forum.php")
    ||eregi(e_PAGE, "forum_viewforum.php")
    ||eregi(e_PAGE, "forum_viewtopic.php")
	||eregi(e_PAGE, "forum_post.php?nt")
	||eregi(e_PAGE, "top.php?0.active")
	||eregi(e_PAGE, "stats.php?1")
	
  )
{


// {SITELINKS_ALT=no_icons}
$HEADER = "

<table style='height:205px;width:1000px' cellspacing='0' cellpadding='0' align='center'>
<tr>
<td class='r2m' style='height:100%;width:100%;white-space:nowrap'>
</tr>
</table>

<table style='width:1000px' cellspacing='0' cellpadding='0' align='center'>
<tr>
<td class='r3_c1'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='30' height='30' alt='' class='ffimgfix' /> </td>
<td class='r3m' style='width:100%;white-space:nowrap'>
{NAVIGATION=main}{CYTN_USERNAV: placement=top}
<td class='r3_c3'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='30' height='30' alt='' class='ffimgfix' /> </td>
</tr>
</table>

<table style='width:1000px' cellspacing='0' cellpadding='0' align='center'>
<tr>
<td class='r4_c1'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='10' height='30' alt='' class='ffimgfix' /> </td>
<td class='r4m' style='width:100%;white-space:nowrap'>
<td class='r4_c3'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='10' height='30' alt='' class='ffimgfix' /> </td>
</tr>
</table>

<table style='width:1000px' cellspacing='0' cellpadding='0' align='center' bgcolor='#000000'>
<tr>
<td class='r5_cleft'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='10' alt='' /> </td>
<td class='' style='width:0%; vertical-align:top;' class='ffimgfix' />
{SETSTYLE=leftmenu}
</td>
{SETSTYLE=default}
<td style='width:100%; vertical-align:top;'>
{MENU=2}
";

$FOOTER = "
</td>
<td class='r5_cright'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='10' alt='' class='ffimgfix' /> </td>
</tr>
</table>



<table style='height:147px;width:1000px' cellspacing='0' cellpadding='0' align='center'>
<tr>
<td class='r7m' style='height:100%;width:100%;white-space:wrap'>
{SITEDISCLAIMER}
</tr>
</table>
";

// otherwise, use the following default header and footer
}else{*/
// Default Header and Footer -----------------------------------------------------------

$HEADER['default'] = "

".$editbutton."

<table style='height:205px;width:1000px' cellspacing='0' cellpadding='0' align='center'>
<tr>
<td class='r2m' style='height:100%;width:100%;white-space:nowrap'>
</tr>
</table>

<table style='width:1000px' cellspacing='0' cellpadding='0' align='center'>
<tr>
<td class='r3_c1'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='30' height='30' alt='' class='ffimgfix' /> </td>
<td class='r3m' style='width:100%;white-space:nowrap'>
{NAVIGATION=main}{CYTN_USERNAV: placement=top}
<td class='r3_c3'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='30' height='30' alt='' class='ffimgfix' /> </td>
</tr>
</table>

<table style='width:1000px' cellspacing='0' cellpadding='0' align='center'>
<tr>
<td class='r4_c1'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='10' height='30' alt='' class='ffimgfix' /> </td>
<td class='r4m' style='width:100%;white-space:nowrap'>
<td class='r4_c3'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='10' height='30' alt='' class='ffimgfix' /> </td>
</tr>
</table>

<table style='width:1000px' cellspacing='0' cellpadding='0' align='center' bgcolor='#000000'>
<tr>
<td class='r5_cleft'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='10' alt='' /> </td>
<td class='' style='width:0%; vertical-align:top;' class='ffimgfix' />
{MENU=1}
</td>
{SETSTYLE=default}
<td style='width:100%; vertical-align:top;'>
{MENU=2}
";

$FOOTER['default'] = "
{MENU=3}
</td>
<td style='width:0%; vertical-align:top'>
{MENU=4}
</td>
<td class='r5_cright'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='10' alt='' class='ffimgfix' /> </td>
</tr>
</table>



<table style='height:147px;width:1000px' cellspacing='0' cellpadding='0' align='center'>
<tr>
<td class='r7m' style='height:100%;width:100%;white-space:wrap'>
{SITEDISCLAIMER}
</tr>
</table>
";
/*}*/


//[newsstyle]

$NEWSSTYLE = "

	<div style='cursor:pointer' onclick=\"expandit('exp_news_{NEWSID}')\">
    <table cellpadding='0' cellspacing='0' border='0'>
	    <tr>
	        <td class='mt12'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='12' height='26' alt='' class='ffimgfix' /> </td>
			<td class='mtbg2' style='width:100%;white-space:nowrap'>
			    {NEWSTITLE}
				</td>	
			<td class='mt22'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='42' height='26' alt='' class='ffimgfix' /> </td>
	    </tr>
	</table>
	</div>

	<div id='exp_news_{NEWSID}'>
	<table cellpadding='0' cellspacing='0' border='0'>
		<tr>
			<td class='mleft2'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='12' alt='' />
			<td class='middlemiddle2' style='width:100%'>
				{NEWSBODY}
				{EXTENDED}
				<br />
				<div class='divide_news' style='width:100%;white-space:nowrap'>
					<img src='".e_THEME_ABS."cytn/images/blank.gif' width='10' height='12' alt='' />
				</div>
				<div class='newscomments' style='text-align:center'>
					<span style='white-space:nowrap'>Posted by {NEWSAUTHOR} on </span>
					<span style='white-space:nowrap'>{NEWSDATE}</span>
					<span style='white-space:nowrap'> | {NEWSCOMMENTS} | {TEXTSIZER}</span>
				</div>
			</td>
			<td class='mright2'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='12' alt='' />
			</td>
		</tr>
	</table>
	</div>
	
	<table style='width:100%' cellspacing='0' cellpadding='0' align='center'>
		<tr>
			<td class='md12'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='12' height='17' alt='' class='ffimgfix' /> </td>
			<td class='mdbg2' style='width:100%'>
			<div style='width: 100%; text-align: center;'>
			<td class='md22'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='12' height='17' alt='' class='ffimgfix' /> </td>
		</tr>
	</table>
";


//[newsbits]

define("ICONSTYLE", "float: left; border:0");
define("COMMENTLINK", "Add/Read Comments: ");
define("COMMENTOFFSTRING", "Comments are Off");
define("PRE_EXTENDEDSTRING", "<br /><br />[ ");
define("EXTENDEDSTRING", "Read the rest ...");
define("POST_EXTENDEDSTRING", " ]<br />");
define("ICONMAIL", "iconmail.png");
define("ICONPRINT", "iconprint.png");


//[mainlinkstyle]

//define(PRELINK, "<font color='#FFFFFF'>&raquo; ");
//define(POSTLINK, "</div>");
//define(LINKSTART, "");
//define(LINKEND, "<br /><img style='margin-top: 2px; margin-bottom: 2px;' width='190' height='1' src='".e_THEME_ABS."cytn/images/hr.png'><br />");
//define(LINKEND, "");
//define(LINKALIGN, "left");



define('LINKALIGN', "left");
define('PRELINK', "");
define('POSTLINK', "");
define('LINKSTART', "<dl><img style='vertical-align: middle;' src=".e_THEME_ABS."cytn/images/bullet2.gif />");
define('LINKSTART_HILITE', "");
define('LINKEND', "</dl>");
define('LINKDISPLAY', 1);


// SITELINKS 2 linkstyle - eXe
//define(LINKSTYLES, "{SITELINKS=flat:2}");
//define(PRELINK, "<font color='#FFFFFF'>&raquo; ");
//define(POSTLINK, "</div>");
//define(LINKSTART, "");
//define(LINKEND, "");
//define(LINKALIGN, "left");


//function linkstyle($linkstyle){
//    if($linkstyle == "top"){ // top menu (rendertype-2 ie. {SITELINKS=flat:2} )
//        $style['prelink'] = "<ul id='mainlevel-nav'>";
//        $style['postlink'] = "</ul>";
//        $style['linkstart'] = "<li>";
//        $style['linkstart_hilite'] = "<li >";
//        $style['linkend'] = "</li>";
//        $style['linkdisplay'] = 1;
//       $style['linkalign'] = "";
//       $style['linkclass'] = "mainlevel-nav";
//    }else{       // default main menu style.
//        $style['prelink'] = "<div style='text-align:left'>";
//        $style['postlink'] = "</div>";
//        $style['linkstart'] = "";
//        $style['linkstart_hilite'] = "";
//        $style['linkend'] = "<br />";
//       $style['linkdisplay'] = 1;
//        $style['linkalign'] = "left";
//        $style['linkclass'] = "mainlevel";
//        $style['linkclass_hilite'] = "mainlevel-hilite";
//        $style['subindent'] = "  >>";
//    }
//return $style;
//}  


//[menustyle]

function tablestyle($caption, $text)
{
  global $expand_menu_counter;
  $expand_menu_counter += 1;

  $expand_autohide_list = array("Select Theme");
  if (in_array($caption, $expand_autohide_list)) { $expand_autohide = "display:none"; } else { unset($expand_autohide); }

  echo "
	<div style='cursor:pointer' onclick=\"expandit('exp_menu_$expand_menu_counter')\">	
	<table cellpadding='0' cellspacing='0'>
	    <tr>
	        <td class='mt1'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='12' height='26' alt='' class='ffimgfix' /> </td>
			<td class='mtbg' style='width:100%;white-space:nowrap'>".$caption."</td>
			<td class='mt2'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='42' height='26' alt='' class='ffimgfix' /> </td>
	    </tr>
	</table>
	</div>
	
	<div id='exp_menu_$expand_menu_counter' style='$expand_autohide'>
	<table cellpadding='0' cellspacing='0'>
		<tr>
			<td class='mleft'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='12' alt='' /> </td>
			<td class='middlemiddle' style='width:100%'>".$text."</td>
			<td class='mright'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='12' alt='' /> </td>
		</tr>
	</table>
	</div>

	<table style='width:100%' cellspacing='0' cellpadding='0' align='center'>
		<tr>
			<td class='md1'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='12' height='17' alt='' class='ffimgfix' /> </td>
			<td class='mdbg' style='width:100%'>
			<img style='margin-top: auto; margin-bottom: auto; margin-left: auto; margin-right: auto;' src='".e_THEME_ABS."cytn/images/blank.gif' width='90' height='0' class='ffimgfix' />
			<td class='md2'><img src='".e_THEME_ABS."cytn/images/blank.gif' width='12' height='17' alt='' class='ffimgfix' /> </td>
		</tr>
	</table>
	
	";
}


// [commentstyle]

$COMMENTSTYLE = "
<table class='fborder' style='".USER_WIDTH."'>
<tr>
<td class='forumheader' style='width:20%; text-align:center'>{USERNAME}</td>
<td class='forumheader' style='width:80%; text-align:right'>{TIMEDATE}</td>
</tr>
<tr>
<td class='forumheader2' style='width:20%; text-align:center'>{AVATAR}<span class='smalltext'>{IPADDRESS}<br />{REPLY}</span></td>
<td class='forumheader3' style='width:80%; text-align:left'>{COMMENT}</td>
</tr>
</table>
"; 

// [chatboxstyle]

$CHATBOXSTYLE = "
<div class='spacer'>
<div class='forumheader3'>
<img src='".e_THEME_ABS."cytn/images/bullet2.gif' alt='bullet' />
<b>{USERNAME}</b><br />
<span class='smalltext'>{TIMEDATE}</span><br />
{MESSAGE}
</div>
</div>";

?>
