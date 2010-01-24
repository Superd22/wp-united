<?php
/** 
*
* WP-United [Svenska]
*
* @package WP-United
* @version $Id: v0.8.0RC2 2010/01/14 John Wells (Jhong) Exp $
* @copyright (c) 2006-2010 wp-united.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @translation by Oz
*/

// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
// General Public License for more details.
// 
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 51 Franklin Street - Fifth Floor, Boston, MA  02110-1301, USA.
//

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(

	//Moved out from install.xml
	'BLOG' 					=>	'WordPress Blogg',
	'VISIT_BLOG'			=>	'Bes�k Anv�ndarens Blogg',
	'ACP_WP_UNITED' 		=> 	'WP-United',
	'ACP_WPU_MAINPAGE'		=>	'WP-United Administration',
	'ACP_WPU_CATMAIN'		=> 	'WP-United Admin',
	'ACP_WPU_CATSETUP'		=>	'St�ll in WP-United',
	'ACP_WPU_CATMANAGE'		=>	'Hantera Anv�ndar-Integration',
	'ACP_WPU_CATSUPPORT'	=>	'Support WP-United',
	'ACP_WPU_CATOTHER'		=>	'�vrigt',
	'ACP_WPU_MAINTITLE'		=>	'Huvudsida',
	'ACP_WPU_DETAILED'		=>	'Alla Inst�llningar p� en sida',
	'ACP_WPU_WIZARD'		=> 	'Installationsguide',
	'ACP_WPU_USERMAP'		=> 	'Anv�ndar Integration Kartl�ggningsverktyg',
	'ACP_WPU_PERMISSIONS'	=> 	'Administrera beh�righeter',		
	'ACP_WPU_DONATE'		=> 	'Donera till WP-United',
	'ACP_WPU_UNINSTALL'		=> 	'Avinstallera WP-United',
	'ACP_WPU_RESET'			=> 	'�terst�ll WP-United',
	'ACP_WPU_DEBUG'			=>	'Debug Info till Inl�gg',	
	'WP_UNINSTALLED' 		=> 	'Avinstallerad WP-United',
	'WP_INSTALLED' 			=> 	'Installerad WP-United',

	'WP_DBErr_Gen' 			=>	'Kunde f� tillg�ng WordPress integration konfiguration i databasen. Se till att du har installerat WP-United ordentligt.',
	'WP_No_Login_Details' 	=>	'Fel: Ett WordPress konto kan inte skapas �t dig. V�nligen kontakta en administrat�r.',
	'WP_DTD' 				=>	'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">',
	'Function_Duplicate' 	=>	'En dubblett funktionsnamnet har uppt�ckts. Detta beror f�rmodligen p� ett kraftigt moddad forum. Bes�k www.wp-united.com f�r att rapportera felet.',
	'WP_Not_Installed_Yet' 	=>	'WP-United har �nnu inte korrekt inst�lld p� din webbplats. K�r installationsguiden som finns i phpBB Admin Control Panel.',
	'WPU_Credit' 			=>	'Integration av %sWP-United%s',
	'get_blog' 				=>	'Skapa Din Blogg',
	'add_to_blog' 			=>	'L�gg till Din Blogg',
	'go_wp_admin'			=>	'G� till Admin Panelen',
	'blog_intro_get' 		=>	"%sKlicka H�r%s f�r att s�tta ig�ng med din blogg idag!",
	'blog_intro_add' 		=>	"%sKlicka H�r%s f�r att skriva i blogg.",
	'blog_intro_loginreg_ownblogs' 	=>	"%sRegistrera%s eller %sLogga in%s f�r att komma ig�ng med din blogg.",
	'blog_intro_loginreg' 	=>	"%sRegistrera%s eller %sLogga in%s f�r att delta",
	'Latest_Blog_Posts' 	=>	'Senaste blogg-inl�gg',
	'Article_By' 			=>	'av',
	'WP_Category' 			=>	'Kategori',
	'WP_Posted_On' 			=>	'Postad den',
	'default_blogname' 		=>	'Min Blogg',
	'default_blogdesc' 		=>	'Jag beh�ver en blogg tagline...',
	'Log_me_in' 			=>	'Kom ih�g mig',
	'submit'				=>	'Skicka',
	'Search_new'			=> 'Inl�gg sedan senaste bes�k',
	'blog_title_prefix'	=>	'[BLOGG]: ',
	'blog_post_intro'		=>	'Detta �r ett [b]blogg-inl�gg[/b]. F�r att l�sa orginella inl�gget, %1sklicka h�r &raquo;%2s',
	'read_more'				=> '%1sL�s detta inl�gg &raquo;%2s',
	'blog_post_cats'		=>	'Postad under: ',
	'blog_post_tags'		=>	'Etiketter: ',
	'write_post'			=>	'Skriv Inl�gg',
	'admin_site'			=>	'Admin Sidan',
	'admin_forum'			=>	'Admin Forum',
	'newest_user'			=>	'Senaste Anv�ndare: ',
	'registered_users'		=>	'Registrerade Anv�ndare: ',
	'forum_posts'			=>	'Forum Inl�gg: ',
	'forum_topics'			=>	'Forum �mne: ',
	'wpu_dash_copy'	=> 'phpbb integration &copy; 2006-2010 %1sWP-United%2s',
	'wpu_welcome'		=>	'V�lkommen till WP-United.',
	'wpu_write_blog_pre250'	=>	'Klicka %1sSkriv%2s f�r att skriva i din blogg',
	'wpu_write_blog'	=>	'Klicka %1sInl�gg%2sNy%3s f�r att skriva nytt inl�gg',
	'wpu_blog_intro_appearance' => 'Du kan st�lla in utseendet under %1sDin Blogg%2s tabben.',
	'wpu_blog_panel_heading' => 'Din Blogg',
	'wpu_blog_settings' => 'Din Blogg Deta',
	'wpu_blog_theme'	=> 'St�ll in Blogg Tema',
	'wpu_blog_your_theme' => 'St�ll in Din Blogg Tema',
	'wpu_blog_details'	=> 'Din Blogg Detailjer',
	'wpu_blog_about' => 'Om Din Blogg',
	'wpu_blog_about_title' => 'Din Bloggs Titel:',
	'wpu_blog_about_tagline' => 'Blogg Tagline:',
	'wpu_update_blog_details' => 'Updatera blogg detailjer',
	'wpu_theme_broken' => 'Temat du valt f�r din blogg funkar inte. �terg� till den f�rvalda temat.',
	'wpu_theme_activated' => 'Ny tema aktiverad. %1sSe din blogg &raquo;%2s',
	'wpu_more_themes_head' => 'Vill ha flera teman??',
	'wpu_more_themes_get' => 'Om du har hittat en annan WordPress tema som du vill anv�nda, v�nligen meddela en administrat�r.',
	'wpu_user_media_dir_error' => 'G�r inte att skapa katalogen %s. Detta beror f�rmodligen p� dess ovanliggande  katalog �r inte skrivbar. Tala om det f�r en administrat�r.',
	'wpu_access_error' => 'Du borde inte vara h�r.',
	'wpu_no_access' => 'Ingen �tkomst',
	'wpu_xpost_box_title' => 'Cross-post till Forums?',
	'wpu_already_xposted' => 'Redan cross-postad (�mnes ID = %s)',
	'wpu_forcexpost_box_title' => 'Forum Inl�gg',
	'wpu_forcexpost_details' => 'Detta inl�gg kommer att cross-postas till forum: \'%s\'',
	'wpu_user_edit_use_phpbb' => '<strong>OBS:</strong> Merparten av denna anv�ndares information kan sk�tas med hj�lp av forumet. %1sKlicka h�r f�r att se/redigera%2s.',
	'wpu_profile_edit_use_phpbb' => '<strong>OBS:</strong> De flesta av dina uppgifter kan redigeras i din forum-profil. %1sKlicka h�r f�r att se/redigera%2s.',
	'wpu_userpanel_use_phpbb' => '<strong>OBS:</strong> Integrerade anv�ndares information kan och b�r redigeras med hj�lp av forumet via l�nkarna nedan.',
	'wpu_more_smilies' => 'Flera smilies',
	'wpu_less_smilies' => 'Mindre smilies',
	'wpu_blog_intro' => '%1s, av %2s',
	'wpu_total_entries' => 'Total Inl�gg: ',
	'wpu_last_entry' => 'Senaste Inl�gg: %1s, postad den %2s',
	'wpu_rss_feed' => 'RSS Feed: ',
	'wpu_rss_subscribe' => 'Prenumerera',
	'wpu_no_user_blogs' => 'Det finns inga bloggar f�r att visa',
	'wpu_latest_blogposts_format' => '%1s, i %2s',
	'wpu_forum_stats_posts' => 'Foruminl�gg: %s',
	'wpu_forum_stats_threads' => 'Forum Tr�dar: %s',
	'wpu_forum_stats_users' => 'Registrerade anv�ndare: %s',
	'wpu_forum_stats_newest_user' => 'Senaste anv�ndare: %s',
	'wpu_nothing' => 'Ingenting hittades.',
	'wpu_phpbb_post_summary' => '%1s, postad av %2s kl %3s',
	'wpu_phpbb_topic_summary' => '%1s, postad av %2s i %3s',
	'wpu_write_post' => 'Skriv ett inl�gg',
	'wpu_loginbox_desc' => 'WP-United Login/Anv�ndar-Info',
	'wpu_forumtopics_desc' => 'WP-United Senaste phpBB �mnen',
	'wpu_stats_desc' => 'WP-United Forum Statistik',
	'wpu_forumposts_desc' => 'WP-United Senaste phpBB Inl�gg',
	'wpu_online_desc' => 'WP-United Anv�ndare Online',
	'wpu_bloglist_desc' => 'WP-United Nyligen Updaterade Blogg Lista',
	'wpu_blogposts_desc' => 'WP-United Senaste inl�gg i Bloggar',
	'wpu_loginbox_loggedin' => 'Du �r inloggad som:',
	'wpu_loginbox_loggedout' => 'Du �r inte inloggad.',
	'wpu_loginbox_panel_loggedin' => 'Rubrik att visa n�r l�saren �r inloggad:',
	'wpu_loginbox_panel_loggedout' =>'Rubrik att visa n�r l�sare �r inte inloggad:',
	'wpu_loginbox_panel_rank' => 'Visa rank titel och bild?',
	'wpu_loginbox_panel_newposts' => 'Visa nya inl�gg?',
	'wpu_loginbox_panel_write' => 'Visa Skriv ett inl�g l�nk?',
	'wpu_loginbox_panel_admin' => 'Visa Admin l�nk?',
	'wpu_loginbox_panel_loginform' => 'Visa phpBB logga-in formul�r om utloggad?',
	'wpu_bloglist_panel_title' => 'Nyligen uppdaterade bloggar',
	'wpu_panel_heading' => 'Rubrik:',
	'wpu_panel_max_entries' => 'H�gsta Inl�gg:',
	'wpu_blogposts_panel_title' => 'Senaste inl�gg i Bloggar',
	'wpu_forumtopics_panel_title' => 'Senaste forum�mnen',
	'wpu_forumposts_panel_title' => 'Senaste foruminl�gg',
	'wpu_forumposts_panel_date' => 'Datum format:',
	'wpu_stats_panel_title' => 'Forum Stats',
	'wpu_online_panel_title' => 'Anv�ndare Online',
	'wpu_online_panel_breakdown' => 'Visa en uppdelning av anv�ndar-typer?',
	'wpu_online_panel_record' => 'Visa rekord antal anv�ndare?',
	'wpu_online_panel_legend' => 'Show legend?',
	'edit_phpbb_details' => 'Redigera forum detaljer',
	'WP_DBErr_Retrieve' => 'Inte kunde komma �t databasen. Se till att du k�rde wpu-install.php vid installation av WP-United.'

));

?>
