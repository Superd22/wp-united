<?php
/** 
*
* WP-United WordPress template loader replacement
*
* @package WP-United
* @version $Id: wp-united.php,v0.9.5[phpBB2]/v0.6.0[phpBB3] 2007/12/01 John Wells (Jhong) Exp $
* @copyright (c) 2006, 2007 wp-united.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
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
//
// Loads up the WP template. loose copy of WP's template-loader function, modified to work with functions exported to phpBB.
//
//

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
	exit;
}

global $wpuNoHead, $wpSettings, $wp_version;
$wpuNoHead = false;
//
//	Need to branch to provide for WP 2.1 and maintain backwards compat.
//	------------------------------------------------------------------------------------------
//
//

if ( defined('WPU_REVERSE_INTEGRATION') ) {
	global $pfHead, $pfContent, $wpSettings, $phpEx;
	$padding = '';
	if ($wpSettings['phpbbPadding'] != 'NOT_SET') {
		$pad = explode('-', $wpSettings['phpbbPadding']);
		$padding = 'padding: ' . (int)$pad[0] . 'px ' .(int)$pad[1] . 'px ' .(int)$pad[2] . 'px ' .(int)$pad[3] . 'px;';
	}

	$copy = "\n\n<!--\n phpBB <-> WordPress integration by John Wells, (c) 2006-2007 www.wp-united.com \n-->\n\n";
	$pfContent = $copy . '<div style="'. $padding .' margin: 0px;">' . $pfContent . "\n</div>";
	
	if ( !empty($wpSettings['wpSimpleHdr']) ) {
		//
		//	Simple header and footer
		//
		if ( !defined('WPU_USE_CACHE') ) {
			//
			// Need to rebuld the cache
			//
			//Uncomment the below line to see if your cache is working or being rebuilt every time
			//echo "DEBUG: Cache Build";
			$doCache = FALSE;
			if ( (defined('WPU_CACHE_ENABLED')) && (WPU_CACHE_ENABLED) ) {
				$doCache = TRUE;
				$fnTemp = $phpbb_root_path . 'wp-united/cache/temp_' . floor(round(0, 9999)) . 'cache';
				$theme = array_pop(explode('/', TEMPLATEPATH)); 
				$fnDest = $phpbb_root_path . "wp-united/cache/$theme.wpucache";
				$hTempFile = @fopen($fnTemp, 'w+');
			}
			ob_start();
			get_header();
			$hdrContent = ob_get_contents();
			ob_end_clean();
			if ( $wpSettings['cssFirst'] == 'P' ) {
				$hdrContent = str_replace('</title>', '</title>' . "\n\n" . '[--PHPBB*HEAD--]', $hdrContent);
			}
			if ( $doCache ) {
				@fwrite($hTempFile, $hdrContent . '[--PHPBB*CONTENT--]');
			}
			
			echo str_replace('[--PHPBB*HEAD--]', $pfHead, $hdrContent);
			unset ($hdrContent, $pfHead);
			echo $pfContent; unset ($pfContent);
			ob_start();
			get_footer();
			if ( $doCache ) {
				@fwrite($hTempFile, ob_get_contents());
				@fclose($hTempFile);
				@copy($fnTemp, $fnDest);
				@unlink($fnTemp);
			} 
			ob_flush();
		} else {
			//
			// Just pull the header and footer from the cache
			//
			global $wpu_cacheLoc;
			$page_content = @file_get_contents($wpu_cacheLoc);
			$page_content = str_replace('[--PHPBB*HEAD--]',$pfHead, $page_content);
			$retWpInc = str_replace('[--PHPBB*CONTENT--]',$pfContent, $page_content);
			unset($page_content, $pfContent);
		}
	} else {
		//
		//	Full WP page
		//
		query_posts('showposts=1');
		define('PHPBB_CONTENT_ONLY', TRUE);
		// TODO: User can choose template here!! (typed)
		if ( $wpSettings['cssFirst'] == 'P' ) {
			ob_start();
		}
		$wpTemplateFile = TEMPLATEPATH . '/' . strip_tags($wpSettings['wpPageName']);
		if ( !file_exists($wpTemplateFile) ) {
			$wpTemplateFile = TEMPLATEPATH . "/page.php";
		}
		include($wpTemplateFile);

		if ( $wpSettings['cssFirst'] == 'P' ) {
			$wContent = ob_get_contents();
			$wContent = str_replace('</title>', '</title>' . "\n\n" . $pfHead, $wContent);
			ob_end_clean();
			echo $wContent; unset($wContent, $pfCpntent);
		}
	}
} else {

if ( ((float) $wp_version) >= 2.1 ) {

	//WP 2.1 && 2.2 BRANCH
	if ( defined('WP_USE_THEMES') && constant('WP_USE_THEMES') ) {
		do_action('template_redirect');
		if ( is_robots() ) {
			$wpuNoHead = true;
			do_action('do_robots');
		} else if ( is_feed() ) {
			$wpuNoHead = true;
			do_feed();
		} else if ( is_trackback() ) {
			$wpuNoHead = true;
			include(ABSPATH . '/wp-trackback.php');
		} else if ( is_404() && $wp_template = get_404_template() ) {
			include($wp_template);
		} else if ( is_search() && $wp_template = get_search_template() ) {
			include($wp_template);
		} else if ( is_home() && $wp_template = get_home_template() ) {
			include($wp_template); 
		} else if ( is_attachment() && $wp_template = get_attachment_template() ) {
			include($wp_template);
		} else if ( is_single() && $wp_template = get_single_template() ) {
			if ( is_attachment() )
				add_filter('the_content', 'prepend_attachment');
			include($wp_template);
		} else if ( is_page() && $wp_template = get_page_template() ) {
			if ( is_attachment() )
				add_filter('the_content', 'prepend_attachment');
			include($wp_template);
		} else if ( is_category() && $wp_template = get_category_template()) {
			include($wp_template);
		} else if ( is_author() && (!empty($wpSettings['usersOwnBlogs'])) && ($wp_template = get_home_template()) ) {
			include($wp_template);
		} else if ( is_author() && $wp_template = get_author_template() ) {	
			include($wp_template);		
		} else if ( is_date() && $wp_template = get_date_template() ) {
			include($wp_template);
		} else if ( is_archive() && $wp_template = get_archive_template() ) {
			include($wp_template);
		} else if ( is_comments_popup() && $wp_template = get_comments_popup_template() ) {
			include($wp_template);
		} else if ( is_paged() && $wp_template = get_paged_template() ) {
			include($wp_template);
		} else if ( file_exists(TEMPLATEPATH . "/index.php") ) {
			if ( is_attachment() )
				add_filter('the_content', 'prepend_attachment');
			include(TEMPLATEPATH . "/index.php");
		}
	} else {
		// Process feeds and trackbacks even if not using themes.
		if ( is_robots() ) {
			$wpuNoHead = true;
			do_action('do_robots');
		} else if ( is_feed() ) {
			$wpuNoHead = true;
			do_feed();
		} else if ( is_trackback() ) {
			$wpuNoHead = true;
			include(ABSPATH . '/wp-trackback.php');
		}
	}

	
} else {

	// WP 2.0x BRANCH!
	if ( defined('WP_USE_THEMES') && constant('WP_USE_THEMES') ) {
		do_action('template_redirect');
		if ( is_feed() ) {
			$wpuNoHead = true;
			include(ABSPATH . '/wp-feed.php');
		} else if ( is_trackback() ) {
			$wpuNoHead = true;
			include(ABSPATH . '/wp-trackback.php');
		} else if ( is_404() && $wp_template = get_404_template() ) {
			include($wp_template);
		} else if ( is_search() && $wp_template = get_search_template() ) {
			include($wp_template);
		} else if ( is_home() && $wp_template = get_home_template() ) {
			include($wp_template);
		} else if ( is_attachment() && $wp_template = get_attachment_template() ) {
			include($wp_template);
		} else if ( is_single() && $wp_template = get_single_template() ) {
			if ( is_attachment() )
				add_filter('the_content', 'prepend_attachment');
			include($wp_template);
		} else if ( is_page() && $wp_template = get_page_template() ) {
			if ( is_attachment() )
				add_filter('the_content', 'prepend_attachment');
			include($wp_template);
		} else if ( is_category() && $wp_template = get_category_template()) {
			include($wp_template);
		} else if ( is_author() && (!empty($wpSettings['usersOwnBlogs'])) && ($wp_template = get_home_template()) ) {
			include($wp_template);
		} else if ( is_author() && $wp_template = get_author_template() ) {	
			include($wp_template);
		} else if ( is_date() && $wp_template = get_date_template() ) {
			include($wp_template);
		} else if ( is_archive() && $wp_template = get_archive_template() ) {
			include($wp_template);
		} else if ( is_comments_popup() && $wp_template = get_comments_popup_template() ) {
			include($wp_template);
		} else if ( is_paged() && $wp_template = get_paged_template() ) {
			include($wp_template);
		} else if ( file_exists(TEMPLATEPATH . "/index.php") ) {
			if ( is_attachment() )
				add_filter('the_content', 'prepend_attachment');
			include(TEMPLATEPATH . "/index.php");
		}
	
	} else {
		// Process feeds and trackbacks even if not using themes.
		if ( is_feed() ) {
			$wpuNoHead = true;
			include(ABSPATH . '/wp-feed.php');
		} else if ( is_trackback() ) {
			$wpuNoHead = true;
			include(ABSPATH . '/wp-trackback.php');
		}
	}
}



}
 
?>
