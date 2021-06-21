<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

if (!defined('e107_INIT')) { exit; }
if(!defined("USER_WIDTH")){ define("USER_WIDTH","width:95%;margin-left:auto;margin-right:auto"); }

$sc_style['LASTEDIT']['pre'] = LAN_FORUM_2016.' ';

$sc_style['LASTEDITBY']['pre'] = ' '.LAN_FORUM_2017.' ';
$sc_style['LASTEDITBY']['post'] = '';

$sc_style['LEVEL']['pre'] = "";
$sc_style['LEVEL']['post'] = "";

$sc_style['ATTACHMENTS']['pre'] = "<div>";
$sc_style['ATTACHMENTS']['post'] = "</div>";

$sc_style['ANON_IP']['pre'] = "";
$sc_style['ANON_IP']['post'] = "";


$sc_style['CUSTOMTITLE']['pre'] = "<small>";
$sc_style['CUSTOMTITLE']['post'] = "</small>";


$sc_style['USER_EXTENDED']['location.text_value']['mid'] = ": ";
$sc_style['USER_EXTENDED']['location.text_value']['post'] = "<br />";

 
$FORUM_VIEWTOPIC_TEMPLATE['start'] = '
<a id="top"></a>
<div class="topics">
<div class="topics__heading">
    <h2 class="topics__heading-title">{THREADNAME}</h2>
</div>
<div class="topics__control">{TRACK} {BUTTONS} {NEXTPREV}</div>
<div class="topics__heading-info ">
	{MESSAGE}
</div>
<div class="d-flex justify-content-between"> 
	<div class="moderators">{MODERATORS}</div>
	<div class="tags">{GOTOPAGES}</div>
	<div class="threadstatus">{THREADSTATUS}</div>
</div>';

$FORUM_VIEWTOPIC_TEMPLATE['end'] = 
'
<div class="d-flex justify-content-between"> 
<div class="moderators">{BUTTONS}</div>
<div class="tags">{GOTOPAGES}</div>
<div class="threadstatus">{FORUMJUMP}</div>
</div>
</div> <!-- end of topics --!> 
';
 
	 /*
	 <div style='text-align:center' class='spacer'>
	 <a href='".e_PLUGIN."rss_menu/rss.php?8.1.".e_QUERY."'><img src='".e_PLUGIN."rss_menu/images/rss1.png' alt='{LAN=FORUM_0012}' style='vertical-align: middle; border: 0;' /></a> <a href='".e_PLUGIN."rss_menu/rss.php?8.2.".e_QUERY."'><img src='".e_PLUGIN."rss_menu/images/rss2.png' alt='{LAN=FORUM_0013}' style='vertical-align: middle; border: 0;' /></a> <a href='".e_PLUGIN."rss_menu/rss.php?8.3.".e_QUERY."'><img src='".e_PLUGIN."rss_menu/images/rss3.png' alt='{LAN=433}' style='vertical-align: middle; border: 0;' /></a>
	 </div>
	 */
 


$FORUM_VIEWTOPIC_TEMPLATE['thread'] = 
'<div class="topic mt-2">
	<div class="topic__head ">
		<div class="topic__caption d-flex justify-content-between">
			<div class="topic__name">
			{NEWFLAG} {POSTER}  {ANON_IP} 
			</div>
			<div class="topic__date"><i class="fas fa-clock"></i>{THREADDATESTAMP}</div>
			<div class="topic__control">
			  {EMAILITEM} {PRINTITEM} {REPORTIMG}{EDITIMG}{QUOTEIMG}</div>
		</div>

	</div>
	<div class="topic_body d-flex align-items-start">
		<div class="topic__user">
			{CUSTOMTITLE}

			<div class="topic__avatar">
				
				{AVATAR}
				
			</div>
			{LEVEL=special}
				{LEVEL=pic}
				{LEVEL=userid}
				{JOINED}
				{USER_EXTENDED=location.text_value}
				{POSTS}
				{PROFILEIMG}
				{EMAILIMG}
				{WEBSITEIMG}
				{PRIVMESSAGE}
		</div>
		<div class="topic__content">
			<div class="topic__text">
				{POST}
				{ATTACHMENTS}
				{LASTEDIT}{LASTEDITBY=link}
				{SIGNATURE}
			</div>
		</div>
	</div>
	<div class="topic__footer d-flex justify-content-between">
	<div class="topic__footer-likes">
		{TOP}
	</div>
	<div class="topic__footer-shares">
		{MODOPTIONS}
		</div>
	</div>
</div>';
 


$FORUM_VIEWTOPIC_TEMPLATE['replies'] = $FORUM_VIEWTOPIC_TEMPLATE['thread'];

 

$FORUMDELETEDSTYLE = "<tr>
	<td class='forumheader' style='vertical-align:middle'>
	{POSTER}
	{ANON_IP}
	</td>
	<td class='forumheader' style='vertical-align:middle'>
	<table cellspacing='0' cellpadding='0' style='width:100%'>
	<tr>
	<td class='smallblacktext'>
	{THREADDATESTAMP}
	</td>
	<td style='text-align:right'>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	<tr>
	<td class='forumheader3' style='vertical-align:top' colspan='2'>
	{POSTDELETED}
	</td>
	</tr>
	<tr>
	<td class='finfobar'>
	<span class='smallblacktext'>
	</span>
	</td>
	<td class='finfobar' style='vertical-align:top' colspan='2'>
	<table cellspacing='0' cellpadding='0' style='width:100%'>
	<tr>
	<td>
	</td>
	<td style='text-align:right'>
	{MODOPTIONS}
	</td>
	</tr>
	</table>
	</td>
	</tr>
	<tr>
	<td colspan='2'>
	</td>
	</tr>";


$FORUM_CRUMB['sitename']['value'] = "<a class='forumlink' href='{SITENAME_HREF}'>{SITENAME}</a>";
$FORUM_CRUMB['sitename']['sep'] = " :: ";

$FORUM_CRUMB['forums']['value'] = "<a class='forumlink' href='{FORUMS_HREF}'>{FORUMS_TITLE}</a>";
$FORUM_CRUMB['forums']['sep'] = " :: ";

$FORUM_CRUMB['parent']['value'] = "<a class='forumlink' href='{PARENT_HREF}'>{PARENT_TITLE}</a>"; 
$FORUM_CRUMB['parent']['sep'] = " :: ";

$FORUM_CRUMB['subparent']['value'] = "<a class='forumlink' href='{SUBPARENT_HREF}'>{SUBPARENT_TITLE}</a>";
$FORUM_CRUMB['subparent']['sep'] = " :: ";

$FORUM_CRUMB['forum']['value'] = "<a class='forumlink' href='{FORUM_HREF}'>{FORUM_TITLE}</a>";


// {MODERATORS} {THREADSTATUS}

// New in v2.x - requires a bootstrap theme be loaded.  

$FORUM_VIEWTOPIC_TEMPLATE['caption'] 	= "{THREADNAME}";
$FORUM_VIEWTOPIC_TEMPLATEx['start'] 	= "

	<div class='row-fluid'>
		<div>{BACKLINK}</div>
	</div>

	<div class='row row-fluid'>
		<div class='col-md-9 span9 pull-left float-left'><h3>{THREADNAME}</h3></div><div class='col-md-3 span3 pull-right float-right float-end right text-right'>{TRACK} {BUTTONSX}</div>
	</div>
	
	{MESSAGE}
	
											
<ul id='forum-viewtopic' class='unstyled list-unstyled'>

";

$FORUM_VIEWTOPIC_TEMPLATEx['thread'] = "
									<li id='post-{POSTID}' class='forum-viewtopic-post'>
										<div class='hidden-xs row row-fluid btn-navbar navbar-btn'>

												{SETIMAGE: w=100&h=100&crop=1}
												<div class='col-xs-2 span2 left text-left'>
													<div class='row'>
														<div class='col-xs-12 col-md-12 forum-user-combo'>{USERCOMBO}<br />{CUSTOMTITLE}</div>
													</div>

												{NEWFLAG} {ANON_IP}</div>
												<div class='col-xs-4 col-sm-3 text-muted span4 text-muted muted'><small>{THREADDATESTAMP=relative}</small></div>
												<div class='col-xs-5 text-muted span5 text-muted muted right text-right'><small>{LASTEDIT}{LASTEDITBY=link}</small></div>
												<div class='col-xs-3 col-sm-2 span1 right text-right'>{POSTOPTIONS}</div>
										
										</div>

										<div class='row row-fluid'  >

											<div class='col-xs-12 col-md-2 span2 left'>
													<div class='row'>

													<div class='col-xs-3 col-md-12 text-center'>{AVATAR: shape=rounded}</div>
													<div class='col-xs-6 visible-xs'>{USERCOMBO}<br />{CUSTOMTITLE}</div>
														<div class='col-xs-6 col-md-12 hidden-xs'>
															<small>
																{LEVEL=badge} {LEVEL=glyph}
															</small>
														</div>
														<div class='visible-xs col-xs-3'><div class='clearfix'>{POSTOPTIONS}</div><div class='pull-right float-right float-end'><br /><small class='text-muted'>{THREADDATESTAMP=relative}</small></div></div>
													</div>
											</div>
											<div class='visible-xs col-xs-12'><hr /></div>
											<div class='col-xs-12 col-md-9 span9 forum-thread-text '>
												{POLL}
												{THREAD_TEXT}
												{ATTACHMENTS: modal=1}
											</div>
										</div>
										
										
										<div class='row row-fluid'>
											<div class='col-xs-2 span2 finfobar'>
												&nbsp;
											</div>
											<div class='col-xs-9 span9  finfobar' >
												<small> {SIGNATURE=clean}</small>
											</div>
											
											<div class='col-xs-3 span3'>
											</div>
										</div>
										
										
									</li>

									";

$FORUM_VIEWTOPIC_TEMPLATEx['end'] = "</ul>
<div class='col-xs-12'>
	<hr />
</div>
<div class='row'>
	<div class='col-xs-12 col-md-4'></div>
	<div class='col-xs-12 col-md-4 text-center'>
		{GOTOPAGES}
	</div>
	<div class='col-xs-12 col-md-4'>
		<div class='pull-right float-right float-end'>
			{BUTTONSX}
		</div>
	</div>
</div>
<div class='row'>
	<div class='col-xs-12 col-md-8 col-md-offset-2'>
		{QUICKREPLY}
	</div>
</div>
<small class='text-muted'>{MODERATORS}</small>
{THREADSTATUS}
";




$FORUM_VIEWTOPIC_TEMPLATEx['replies'] = $FORUM_VIEWTOPIC_TEMPLATE['thread'];


$FORUM_VIEWTOPIC_TEMPLATE['deleted'] = "
									<li id='post-{POSTID}' class='forum-viewtopic-deleted forum-viewtopic-post'>
										<div class='hidden-xs row row-fluid btn-navbar navbar-btn'>

												{SETIMAGE: w=100&h=0&crop=0}
												<div class='col-xs-2 span2 left text-left'>
													<div class='row'>
														<div class='col-xs-12 col-md-12 forum-user-combo'>{USERCOMBO}<br />{CUSTOMTITLE}</div>
													</div>

												{NEWFLAG} {ANON_IP}</div>
												<div class='col-xs-4 col-sm-3 text-muted span4 text-muted muted'><small>{THREADDATESTAMP=relative}</small></div>
												<div class='col-xs-5 text-muted span5 text-muted muted right text-right'><small>{LASTEDIT}{LASTEDITBY=link}</small></div>
												<div class='col-xs-3 col-sm-2 span1 right text-right'>{POSTOPTIONS}</div>

										</div>

										<div class='row row-fluid'  >

											<div class='col-xs-12 col-md-2 span2 left'>
													<div class='row'>

													<div class='col-xs-3 col-md-12 text-center'>{AVATAR: shape=rounded}</div>
													<div class='col-xs-6 visible-xs'>{USERCOMBO}<br />{CUSTOMTITLE}</div>
														<div class='col-xs-6 col-md-12 hidden-xs'>
															<small>
																{LEVEL=badge} {LEVEL=glyph}
															</small>
														</div>
														<div class='visible-xs col-xs-3'><div class='clearfix'>{POSTOPTIONS}</div><div class='pull-right float-right float-end'><br /><small class='text-muted'>{THREADDATESTAMP=relative}</small></div></div>
													</div>
											</div>
											<div class='visible-xs col-xs-12'><hr /></div>
											<div class='col-xs-12 col-md-9 span9 forum-thread-text '>
												{POSTDELETED}
											</div>
										</div>


										<div class='row row-fluid'>
											<div class='col-xs-2 span2 finfobar'>
												&nbsp;
											</div>
											<div class='col-xs-9 span9  finfobar' >
												<small> {SIGNATURE=clean}</small>
											</div>

											<div class='col-xs-3 span3'>
											</div>
										</div>


									</li>

									";



	
$FORUM_VIEWTOPIC_WRAPPER['thread']['ATTACHMENTS'] = "<div class='forum-viewtopic-attachments'>{---}</div>";
$FORUM_VIEWTOPIC_WRAPPER['thread']['CUSTOMTITLE'] = "<span class='forum-viewtopic-customtitle'><small>{---}</small></span>";

$FORUM_VIEWTOPIC_WRAPPER['replies']['ATTACHMENTS'] = $FORUM_VIEWTOPIC_WRAPPER['thread']['ATTACHMENTS'];
$FORUM_VIEWTOPIC_WRAPPER['replies']['CUSTOMTITLE'] = $FORUM_VIEWTOPIC_WRAPPER['thread']['CUSTOMTITLE'];

