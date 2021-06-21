<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Forum icons template - default
 *
 */

if (!defined('e107_INIT')) { exit(); }

$tp = e107::getParser();


if(deftrue("FONTAWExSOME", false)) {

define('IMAGE_e', 					'e');
define('IMAGE_new', 				$tp->toGlyph('fa-star', 'size=2x'));
define('IMAGE_nonew', 				$tp->toGlyph('fa-comment', 'size=2x'));
define('IMAGE_new_small',  			$tp->toGlyph('fa-star'));
define('IMAGE_nonew_small',  		$tp->toGlyph('fa-comment'));
define('IMAGE_new_popular',  		$tp->toGlyph('fa-comments', 'size=2x'));
define('IMAGE_nonew_popular', 		$tp->toGlyph('fa-comments-o', 'size=2x'));
define('IMAGE_new_popular_small',  	$tp->toGlyph('fa-comments'));
define('IMAGE_nonew_popular_small', $tp->toGlyph('fa-comments-o'));
define('IMAGE_sticky',  			$tp->toGlyph('fa-thumb-tack', 'size=2x'));
define('IMAGE_stickyclosed',  		$tp->toGlyph('fa-lock', 'size=2x'));
define('IMAGE_sticky_small', 		$tp->toGlyph('fa-thumb-tack'));
define('IMAGE_stickyclosed_small',  $tp->toGlyph('fa-lock'));
define('IMAGE_announce',  			$tp->toGlyph('fa-bullhorn', 'size=2x'));
define('IMAGE_announce_small',  	$tp->toGlyph('fa-bullhorn'));
define('IMAGE_closed_small',  		$tp->toGlyph('fa-lock'));
define('IMAGE_closed', 				$tp->toGlyph('fa-lock', 'size=2x'));
define('IMAGE_noreplies', 			$tp->toGlyph('fa-comment-o', 'size=2x'));
define('IMAGE_noreplies_small', 	$tp->toGlyph('fa-comment-o'));

    
} else {

// Thread info
define('IMAGE_e', 					'<img src="'.img_path('e.png').'" alt="" title="" />');
define('IMAGE_new', 				'<img src="'.img_path('new.png').'" alt="'.LAN_FORUM_4001.'" title="'.LAN_FORUM_4001.'" />');
define('IMAGE_nonew', 				'<img src="'.img_path('nonew.png').'" alt="'.LAN_FORUM_4002.'" title="'.LAN_FORUM_4002.'" />');
define('IMAGE_new_small', 			'<img src="'.img_path('new_small.png').'" alt="'.LAN_FORUM_4001.'" title="'.LAN_FORUM_4001.'" />');
define('IMAGE_nonew_small', 		'<img src="'.img_path('nonew_small.png').'" alt="'.LAN_FORUM_4002.'" title="'.LAN_FORUM_4002.'" />');
define('IMAGE_new_popular', 		'<img src="'.img_path('new_popular.png').'" alt="'.LAN_FORUM_4003.'" title="'.LAN_FORUM_4003.'" />');
define('IMAGE_nonew_popular', 		'<img src="'.img_path('nonew_popular.png').'" alt="'.LAN_FORUM_4004.'" title="'.LAN_FORUM_4004.'" />');
define('IMAGE_new_popular_small', 	'<img src="'.img_path('new_popular_small.png').'" alt="'.LAN_FORUM_4003.'" title="'.LAN_FORUM_4003.'" />');
define('IMAGE_nonew_popular_small',	'<img src="'.img_path('nonew_popular_small.png').'" alt="'.LAN_FORUM_4004.'" title="'.LAN_FORUM_4004.'" />');
define('IMAGE_sticky', 				'<img src="'.img_path('sticky.png').'" alt="'.LAN_FORUM_1011.'" title="'.LAN_FORUM_1011.'" />');
define('IMAGE_sticky_small', 		'<img src="'.img_path('sticky_small.png').'" alt="'.LAN_FORUM_1011.'" title="'.LAN_FORUM_1011.'" />');
define('IMAGE_stickyclosed', 		'<img src="'.img_path('sticky_closed.png').'" alt="'.LAN_FORUM_1012.'" title="'.LAN_FORUM_1012.'" />');
define('IMAGE_stickyclosed_small', 	'<img src="'.img_path('sticky_closed_small.png').'" alt="'.LAN_FORUM_1012.'" title="'.LAN_FORUM_1012.'" />');
define('IMAGE_announce', 			'<img src="'.img_path('announce.png').'" alt="'.LAN_FORUM_1013.'" title="'.LAN_FORUM_1013.'" />');
define('IMAGE_announce_small', 		'<img src="'.img_path('announce_small.png').'" alt="'.LAN_FORUM_1013.'" title="'.LAN_FORUM_1013.'" />');
define('IMAGE_closed_small', 		'<img src="'.img_path('closed_small.png').'" alt="'.LAN_FORUM_1014.'" title="'.LAN_FORUM_1014.'" />');
define('IMAGE_closed', 				'<img src="'.img_path('closed.png').'" alt="'.LAN_FORUM_1014.'" title="'.LAN_FORUM_1014.'" />');

 

}

// User info
define('IMAGE_website', '<img src="'.img_path('website.png').'" alt="'.LAN_FORUM_2034.'" title="'.LAN_FORUM_2034.'" />');
define('IMAGE_email', 	'<img src="'.img_path('email.png').'" alt="'.LAN_FORUM_2044.'" title="'.LAN_FORUM_2044.'" class="icon S16 action" />');
define('IMAGE_profile', '<img src="'.img_path('profile.png').'" alt="'.LAN_FORUM_4007.'" title="'.LAN_FORUM_4007.'" />');

// action
define('IMAGE_pm', 			'<img src="'.img_path('pm.png').'" alt="'.LAN_FORUM_4008.'" title="'.LAN_FORUM_4008.'" class="icon S16 action" />');




define('IMAGE_admin_move', 	'<img src="'.img_path('admin_move.png').'" alt="'.LAN_FORUM_2042.'" title="'.LAN_FORUM_2042.'" class="icon S16 action" />');
define('IMAGE_admin_split', '<img src="'.img_path('admin_split.png').'" alt="'.LAN_FORUM_2043.'" title="'.LAN_FORUM_2043.'" class="icon S16 action" />');
define('IMAGE_admin_move2',	'<img src="'.img_path('admin_move.png').'" alt="'.LAN_FORUM_2042.'" title="'.LAN_FORUM_2042.'" class="icon S16 action" />');

define('IMAGE_attachment', 	'<img src="'.img_path('attach.png').'" alt="'.LAN_FORUM_3013.'" title="'.LAN_FORUM_3013.'" class="icon S16 action" />');
define('IMAGE_post',		'<img src="'.img_path('post.png').'" alt="" title="" />');
define('IMAGE_post2', 		'<img src="'.img_path('post2.png').'" alt="" title="" class="icon S16 action" />');

// Admin <input> Icons
define('IMAGE_admin_delete',	'src="'.img_path('admin_delete.png').'" alt="'.LAN_DELETE.'" title="'.LAN_DELETE.'" ');
define('IMAGE_admin_stick',		'src="'.img_path('admin_stick.png').'" alt="'.LAN_FORUM_4011.'" title="'.LAN_FORUM_4011.'" ');
define('IMAGE_admin_unstick',	'src="'.img_path('admin_unstick.png').'" alt="'.LAN_FORUM_4012.'" title="'.LAN_FORUM_4012.'" ');
define('IMAGE_admin_lock',		'src="'.img_path('admin_lock.png').'" alt="'.LAN_FORUM_4013.'" title="'.LAN_FORUM_4013.'" ');
define('IMAGE_admin_unlock',	'src="'.img_path('admin_unlock.png').'" alt="'.LAN_FORUM_4014.'" title="'.LAN_FORUM_4014.'" ');

// Multi Language Images
define('IMAGE_newthread',				'<img src="'.img_path('newthread.png').'" alt="'.LAN_FORUM_2005.'" title="'.LAN_FORUM_2005.'" />');
 
if(!defined('IMAGE_rank_moderator_image'))
{
	define('IMAGE_rank_moderator_image',	'<img src="'.img_path('moderator.png', '', 'rank_moderator_image').'" alt="" />');
}
if(!defined('IMAGE_rank_main_admin_image'))
{
	define('IMAGE_rank_main_admin_image',	'<img src="'.img_path('main_admin.png', '', 'rank_main_admin_image').'" alt="" />');
}
if(!defined('IMAGE_rank_admin_image'))
{
	define('IMAGE_rank_admin_image', 		'<img src="'.img_path('admin.png', '', 'rank_admin_image').'" alt="" />');
}


define('IMAGE_quote', 		'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right-quote" viewBox="0 0 16 16">
  <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"/>
  <path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"/>
</svg> '.LAN_FORUM_2041);


define('IMAGE_report', 		'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone" viewBox="0 0 16 16">
  <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z"/>
</svg> ' .LAN_FORUM_2046) ;

define('IMAGE_track','<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
</svg> ' .LAN_FORUM_4009) ;
define('IMAGE_untrack',  '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
</svg> '.LAN_FORUM_4010 );



define('IMAGE_reply',  '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg> '.LAN_FORUM_2006 );



define('IMAGE_edit', 		'<i class="fas fa-edit"></i> '.LAN_EDIT);
define('IMAGE_admin_edit', 	'<i class="fas fa-edit"></i> '.LAN_EDIT);

