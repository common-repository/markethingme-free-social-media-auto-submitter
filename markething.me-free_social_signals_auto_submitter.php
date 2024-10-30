<?php
/*
	Plugin Name: Markething.Me - Free Social Signals Auto Poster
	Plugin URI: http://wordpress.org/plugins/markethingme-free-social-media-auto-submitter/
	Description: This plugin automatically submits published posts from your blog to thousands of social accounts (Facebook, Tweeter, Google Plus) in Markething.Me network. <br> It will help you increase your blog social presence, help SEO, boost your rankings, traffic, sales and it is all done automatically and totally FREE :)
	Author: Markething.Me
	Version: 1.0.3
	Author URI: http://www.markething.me/
	Text Domain: health-check
	Domain Path: /lang
*/

function wp_mm_get_value($field) {

	switch ($field) {
	
		case 'fb_likes_enabled':
			$fb_likes_enabled = get_option('wp-mm-fb-likes-enabled');
			if ($fb_likes_enabled == '') {
				$fb_likes_enabled = 1;
			}
			return $fb_likes_enabled;
		
		case 'fb_likes_num_from':
			$fb_likes_num_from = get_option('wp-mm-fb-likes-num-from');
			if ($fb_likes_num_from == '') {
				$fb_likes_num_from = 50;
			}
			return $fb_likes_num_from;
		
		case 'fb_likes_num_to':
			$fb_likes_num_to = get_option('wp-mm-fb-likes-num-to');
			if ($fb_likes_num_to == '') {
				$fb_likes_num_to = 100;
			}
			return $fb_likes_num_to;
		
		case 'fb_likes_duration_from':
			$fb_likes_duration_from = get_option('wp-mm-fb-likes-duration-from');
			if ($fb_likes_duration_from == '') {
				$fb_likes_duration_from = 30;
			}
			return $fb_likes_duration_from;
		
		case 'fb_likes_duration_to':
			$fb_likes_duration_to = get_option('wp-mm-fb-likes-duration-to');
			if ($fb_likes_duration_to == '') {
				$fb_likes_duration_to = 50;
			}
			return $fb_likes_duration_to;
		
		case 'fb_likes_weekends':
			$fb_likes_weekends = get_option('wp-mm-fb-likes-weekends');
			if ($fb_likes_weekends == '') {
				$fb_likes_weekends = 'random';
			}
			return $fb_likes_weekends;
		
		case 'fb_shares_enabled':
			$fb_shares_enabled = get_option('wp-mm-fb-shares-enabled');
			if ($fb_shares_enabled == '') {
				$fb_shares_enabled = 1;
			}
			return $fb_shares_enabled;
		
		case 'fb_shares_num_from':
			$fb_shares_num_from = get_option('wp-mm-fb-shares-num-from');
			if ($fb_shares_num_from == '') {
				$fb_shares_num_from = 50;
			}
			return $fb_shares_num_from;
		
		case 'fb_shares_num_to':
			$fb_shares_num_to = get_option('wp-mm-fb-shares-num-to');
			if ($fb_shares_num_to == '') {
				$fb_shares_num_to = 100;
			}
			return $fb_shares_num_to;
		
		case 'fb_shares_duration_from':
			$fb_shares_duration_from = get_option('wp-mm-fb-shares-duration-from');
			if ($fb_shares_duration_from == '') {
				$fb_shares_duration_from = 30;
			}
			return $fb_shares_duration_from;
		
		case 'fb_shares_duration_to':
			$fb_shares_duration_to = get_option('wp-mm-fb-shares-duration-to');
			if ($fb_shares_duration_to == '') {
				$fb_shares_duration_to = 50;
			}
			return $fb_shares_duration_to;
		
		case 'fb_shares_weekends':
			$fb_shares_weekends = get_option('wp-mm-fb-shares-weekends');
			if ($fb_shares_weekends == '') {
				$fb_shares_weekends = 'random';
			}
			return $fb_shares_weekends;
		
		case 'google_plus_enabled':
			$google_plus_enabled = get_option('wp-mm-google-plus-enabled');
			if ($google_plus_enabled == '') {
				$google_plus_enabled = 1;
			}
			return $google_plus_enabled;
		
		case 'google_plus_num_from':
			$google_plus_num_from = get_option('wp-mm-google-plus-num-from');
			if ($google_plus_num_from == '') {
				$google_plus_num_from = 50;
			}
			return $google_plus_num_from;
		
		case 'google_plus_num_to':
			$google_plus_num_to = get_option('wp-mm-google-plus-num-to');
			if ($google_plus_num_to == '') {
				$google_plus_num_to = 100;
			}
			return $google_plus_num_to;
		
		case 'google_plus_duration_from':
			$google_plus_duration_from = get_option('wp-mm-google-plus-duration-from');
			if ($google_plus_duration_from == '') {
				$google_plus_duration_from = 30;
			}
			return $google_plus_duration_from;
		
		case 'google_plus_duration_to':
			$google_plus_duration_to = get_option('wp-mm-google-plus-duration-to');
			if ($google_plus_duration_to == '') {
				$google_plus_duration_to = 50;
			}
			return $google_plus_duration_to;
		
		case 'google_plus_weekends':
			$google_plus_weekends = get_option('wp-mm-google-plus-weekends');
			if ($google_plus_weekends == '') {
				$google_plus_weekends = 'random';
			}
			return $google_plus_weekends;
		
		case 'tweets_enabled':
			$tweets_enabled = get_option('wp-mm-tweets-enabled');
			if ($tweets_enabled == '') {
				$tweets_enabled = 1;
			}
			return $tweets_enabled;
		
		case 'tweets_num_from':
			$tweets_num_from = get_option('wp-mm-tweets-num-from');
			if ($tweets_num_from == '') {
				$tweets_num_from = 50;
			}
			return $tweets_num_from;
		
		case 'tweets_num_to':
			$tweets_num_to = get_option('wp-mm-tweets-num-to');
			if ($tweets_num_to == '') {
				$tweets_num_to = 100;
			}
			return $tweets_num_to;
		
		case 'tweets_duration_from':
			$tweets_duration_from = get_option('wp-mm-tweets-duration-from');
			if ($tweets_duration_from == '') {
				$tweets_duration_from = 30;
			}
			return $tweets_duration_from;
		
		case 'tweets_duration_to':
			$tweets_duration_to = get_option('wp-mm-tweets-duration-to');
			if ($tweets_duration_to == '') {
				$tweets_duration_to = 50;
			}
			return $tweets_duration_to;
		
		case 'tweets_weekends':
			$tweets_weekends = get_option('wp-mm-fb-shares-weekends');
			if ($tweets_weekends == '') {
				$tweets_weekends = 'random';
			}
			return $tweets_weekends;
	}
	return '';
}

add_action('admin_menu', 'wpmm_admin_actions');
function wpmm_admin_actions() {
	// Page Title, Submenu name, Who can see the page manage_options = administrators, 
	add_options_page('WP MM Markething.Me','Markething.Me', 'manage_options', __FILE__, 'wpmm_admin');
}

function wpmm_admin() {
	$error_text = '';
	$mm_username = '';
	$mm_password = '';
	if (isset($_POST['submit']) && $_POST['submit'] == 'Save API Key') {
		if (empty($_POST['mm_api_key'])) {
			$error_text = 'Please enter API Key';
		} else {
			$response = file_get_contents('http://www.markething.me/api/stats.php?api_key='.$_POST['mm_api_key'].'&task_id=0');
			$response = json_decode($response, true);
			$mm_api_key = $_POST['mm_api_key'];
			if ($response['error_code'] == 'API_KEY_INVALID') {
				$error_text = 'Invalid API Key';
			} else {
				update_option('wp-mm-api-key', $_POST['mm_api_key']);
				$error_text = 'API Key is valid and saved successfully';
			}
		}

	} else {
		$mm_api_key = get_option('wp-mm-api-key');
	}
	
	$fb_likes_enabled = '';
	$fb_likes_num_from = '';
	$fb_likes_num_to = '';
	$fb_likes_duration_from = '';
	$fb_likes_duration_to = '';
	$fb_likes_weekends = '';
	
	$fb_shares_enabled = '';
	$fb_shares_num_from = '';
	$fb_shares_num_to = '';
	$fb_shares_duration_from = '';
	$fb_shares_duration_to = '';
	$fb_shares_weekends = '';
	
	$google_plus_enabled = '';
	$google_plus_num_from = '';
	$google_plus_num_to = '';
	$google_plus_duration_from = '';
	$google_plus_duration_to = '';
	$google_plus_weekends = '';
	
	$tweets_enabled = '';
	$tweets_num_from = '';
	$tweets_num_to = '';
	$tweets_duration_from = '';
	$tweets_duration_to = '';
	$tweets_weekends = '';
	
	$max_signals = 100;
	$error_field = '';
	
	if (isset($_POST['submit']) && $_POST['submit'] == 'Save Changes') {
	
		$error_text = 'Changes successfully saved';

		if ($_POST['fb_likes_enabled'] == 1) {
			$fb_likes_enabled = 1;
			update_option('wp-mm-fb-likes-enabled', 1);
			
			if ($_POST['fb_likes_num_from'] > 0 && $_POST['fb_likes_num_from'] <= $max_signals) {
				update_option('wp-mm-fb-likes-num-from', $_POST['fb_likes_num_from']);
			} else if ($_POST['fb_likes_num_from'] > $max_signals) {
				$error_text = 'Please enter Facebook Likes number from between 0 and '.$max_signals;
				$error_field = 'fb_likes_num_from';
			} else {
				$error_text = 'Please enter Facebook Likes number from';
				$error_field = 'fb_likes_num_from';
			}
			$fb_likes_num_from = $_POST['fb_likes_num_from'];
			
			if ($_POST['fb_likes_num_to'] > 0 && $_POST['fb_likes_num_to'] <= $max_signals) {
				update_option('wp-mm-fb-likes-num-to', $_POST['fb_likes_num_to']);
			} else if ($_POST['fb_likes_num_to'] > $max_signals) {
				$error_text = 'Please enter Facebook Likes number to between 0 and '.$max_signals;
				$error_field = 'fb_likes_num_to';
			} else {
				$error_text = 'Please enter Facebook Likes number to';
				$error_field = 'fb_likes_num_to';
			}
			$fb_likes_num_to = $_POST['fb_likes_num_to'];
			
			if ($_POST['fb_likes_duration_from'] > 0) {
				update_option('wp-mm-fb-likes-duration-from', $_POST['fb_likes_duration_from']);
			} else {
				$error_text = 'Please enter Facebook Likes duration from';
				$error_field = 'fb_likes_duration_from';
			}
			$fb_likes_duration_from = $_POST['fb_likes_duration_from'];
			
			if ($_POST['fb_likes_duration_to'] > 0) {
				update_option('wp-mm-fb-likes-duration-to', $_POST['fb_likes_duration_to']);
			} else {
				$error_text = 'Please enter Facebook Likes duration to';
				$error_field = 'fb_likes_duration_to';
			}
			$fb_likes_duration_to = $_POST['fb_likes_duration_to'];
			
			update_option('wp-mm-fb-likes-weekends', $_POST['fb_likes_weekends']);
			$fb_likes_weekends = $_POST['fb_likes_weekends'];
			
		} else {
			$fb_likes_enabled = 0;
			update_option('wp-mm-fb-likes-enabled', 0);
			update_option('wp-mm-fb-likes-num-from', '');
			update_option('wp-mm-fb-likes-num-to', '');
			update_option('wp-mm-fb-likes-duration-from', '');
			update_option('wp-mm-fb-likes-duration-to', '');
			update_option('wp-mm-fb-likes-weekends', '');
		}
		
		
		if ($_POST['fb_shares_enabled'] == 1) {
			$fb_shares_enabled = 1;
			update_option('wp-mm-fb-shares-enabled', 1);
			
			if ($_POST['fb_shares_num_from'] > 0 && $_POST['fb_shares_num_from'] <= $max_signals) {
				update_option('wp-mm-fb-shares-num-from', $_POST['fb_shares_num_from']);
			} else if ($_POST['fb_shares_num_from'] > $max_signals) {
				$error_text = 'Please enter Facebook Shares number from between 0 and '.$max_signals;
				$error_field = 'fb_shares_num_from';
			} else {
				$error_text = 'Please enter Facebook Shares number from';
				$error_field = 'fb_shares_num_from';
			}
			$fb_shares_num_from = $_POST['fb_shares_num_from'];
			
			if ($_POST['fb_shares_num_to'] > 0 && $_POST['fb_shares_num_to'] <= $max_signals) {
				update_option('wp-mm-fb-shares-num-to', $_POST['fb_shares_num_to']);
			} else if ($_POST['fb_shares_num_to'] > $max_signals) {
				$error_text = 'Please enter Facebook Shares number to between 0 and '.$max_signals;
				$error_field = 'fb_shares_num_to';
			} else {
				$error_text = 'Please enter Facebook Shares number to';
				$error_field = 'fb_shares_num_to';
			}
			$fb_shares_num_to = $_POST['fb_shares_num_to'];
			
			if ($_POST['fb_shares_duration_from'] > 0) {
				update_option('wp-mm-fb-shares-duration-from', $_POST['fb_shares_duration_from']);
			} else {
				$error_text = 'Please enter Facebook Shares duration from';
				$error_field = 'fb_shares_duration_from';
			}
			$fb_shares_duration_from = $_POST['fb_shares_duration_from'];
			
			if ($_POST['fb_shares_duration_to'] > 0) {
				update_option('wp-mm-fb-shares-duration-to', $_POST['fb_shares_duration_to']);
			} else {
				$error_text = 'Please enter Facebook Shares duration to';
				$error_field = 'fb_shares_duration_to';
			}
			$fb_shares_duration_to = $_POST['fb_shares_duration_to'];
			
			update_option('wp-mm-fb-shares-weekends', $_POST['fb_shares_weekends']);
			$fb_shares_weekends = $_POST['fb_shares_weekends'];
			
		} else {
			$fb_shares_enabled = 0;
			update_option('wp-mm-fb-shares-enabled', 0);
			update_option('wp-mm-fb-shares-num-from', '');
			update_option('wp-mm-fb-shares-num-to', '');
			update_option('wp-mm-fb-shares-duration-from', '');
			update_option('wp-mm-fb-shares-duration-to', '');
			update_option('wp-mm-fb-shares-weekends', '');
		}
		
		if ($_POST['google_plus_enabled'] == 1) {
			$google_plus_enabled = 1;
			update_option('wp-mm-google-plus-enabled', 1);
			
			if ($_POST['google_plus_num_from'] > 0 && $_POST['google_plus_num_from'] <= $max_signals) {
				update_option('wp-mm-google-plus-num-from', $_POST['google_plus_num_from']);
			} else if ($_POST['google_plus_num_from'] > $max_signals) {
				$error_text = 'Please enter Google Pluses number from between 0 and '.$max_signals;
				$error_field = 'google_plus_num_from';
			} else {
				$error_text = 'Please enter Google Pluses number from';
				$error_field = 'google_plus_num_from';
			}
			$google_plus_num_from = $_POST['google_plus_num_from'];
			
			if ($_POST['google_plus_num_to'] > 0 && $_POST['google_plus_num_to'] <= $max_signals) {
				update_option('wp-mm-google-plus-num-to', $_POST['google_plus_num_to']);
			} else if ($_POST['google_plus_num_to'] > $max_signals) {
				$error_text = 'Please enter Google Pluses number to between 0 and '.$max_signals;
				$error_field = 'google_plus_num_to';
			} else {
				$error_text = 'Please enter Google Pluses number to';
				$error_field = 'google_plus_num_to';
			}
			$google_plus_num_to = $_POST['google_plus_num_to'];
			
			if ($_POST['google_plus_duration_from'] > 0) {
				update_option('wp-mm-google-plus-duration-from', $_POST['google_plus_duration_from']);
			} else {
				$error_text = 'Please enter Google Pluses duration from';
				$error_field = 'google_plus_duration_from';
			}
			$google_plus_duration_from = $_POST['google_plus_duration_from'];
			
			if ($_POST['google_plus_duration_to'] > 0) {
				update_option('wp-mm-google-plus-duration-to', $_POST['google_plus_duration_to']);
			} else {
				$error_text = 'Please enter Google Pluses duration to';
				$error_field = 'google_plus_duration_to';
			}
			$google_plus_duration_to = $_POST['google_plus_duration_to'];
			
			update_option('wp-mm-google-plus-weekends', $_POST['google_plus_weekends']);
			$google_plus_weekends = $_POST['google_plus_weekends'];
			
		} else {
			$google_plus_enabled = 0;
			update_option('wp-mm-google-plus-enabled', 0);
			update_option('wp-mm-google-plus-num-from', '');
			update_option('wp-mm-google-plus-num-to', '');
			update_option('wp-mm-google-plus-duration-from', '');
			update_option('wp-mm-google-plus-duration-to', '');
			update_option('wp-mm-google-plus-weekends', '');
		}
		
		if ($_POST['tweets_enabled'] == 1) {
			$tweets_enabled = 1;
			update_option('wp-mm-tweets-enabled', 1);
			
			if ($_POST['tweets_num_from'] > 0 && $_POST['tweets_num_from'] <= $max_signals) {
				update_option('wp-mm-tweets-num-from', $_POST['tweets_num_from']);
			} else if ($_POST['tweets_num_from'] > $max_signals) {
				$error_text = 'Please enter Twitter Tweets number from between 0 and '.$max_signals;
				$error_field = 'tweets_num_from';
			} else {
				$error_text = 'Please enter Twitter Tweets number from';
				$error_field = 'tweets_num_from';
			}
			$tweets_num_from = $_POST['tweets_num_from'];
			
			if ($_POST['tweets_num_to'] > 0 && $_POST['tweets_num_to'] <= $max_signals) {
				update_option('wp-mm-tweets-num-to', $_POST['tweets_num_to']);
			} else if ($_POST['tweets_num_to'] > $max_signals) {
				$error_text = 'Please enter Twitter Tweets number to between 0 and '.$max_signals;
				$error_field = 'tweets_num_to';
			} else {
				$error_text = 'Please enter Twitter Tweets number to';
				$error_field = 'tweets_num_to';
			}
			$tweets_num_to = $_POST['tweets_num_to'];
			
			if ($_POST['tweets_duration_from'] > 0) {
				update_option('wp-mm-tweets-duration-from', $_POST['tweets_duration_from']);
			} else {
				$error_text = 'Please enter Twitter Tweets duration from';
				$error_field = 'tweets_duration_from';
			}
			$tweets_duration_from = $_POST['tweets_duration_from'];
			
			if ($_POST['tweets_duration_to'] > 0) {
				update_option('wp-mm-tweets-duration-to', $_POST['tweets_duration_to']);
			} else {
				$error_text = 'Please enter Twitter Tweets duration to';
				$error_field = 'tweets_duration_to';
			}
			$tweets_duration_to = $_POST['tweets_duration_to'];
			
			update_option('wp-mm-tweets-weekends', $_POST['tweets_weekends']);
			$tweets_weekends = $_POST['tweets_weekends'];
			
		} else {
			$tweets_enabled = 0;
			update_option('wp-mm-tweets-enabled', 0);
			update_option('wp-mm-tweets-num-from', '');
			update_option('wp-mm-tweets-num-to', '');
			update_option('wp-mm-tweets-duration-from', '');
			update_option('wp-mm-tweets-duration-to', '');
			update_option('wp-mm-tweets-weekends', '');
		}

	} else {
	
		$fb_likes_enabled = wp_mm_get_value('fb_likes_enabled');
		$fb_likes_num_from = wp_mm_get_value('fb_likes_num_from');
		$fb_likes_num_to = wp_mm_get_value('fb_likes_num_to');
		$fb_likes_duration_from = wp_mm_get_value('fb_likes_duration_from');
		$fb_likes_duration_to = wp_mm_get_value('fb_likes_duration_to');
		$fb_likes_weekends = wp_mm_get_value('fb_likes_weekends');
		$fb_shares_enabled = wp_mm_get_value('fb_shares_enabled');
		$fb_shares_num_from = wp_mm_get_value('fb_shares_num_from');
		$fb_shares_num_to = wp_mm_get_value('fb_shares_num_to');
		$fb_shares_duration_from = wp_mm_get_value('fb_shares_duration_from');
		$fb_shares_duration_to = wp_mm_get_value('fb_shares_duration_to');
		$fb_shares_weekends = wp_mm_get_value('fb_shares_weekends');
		$google_plus_enabled = wp_mm_get_value('google_plus_enabled');
		$google_plus_num_from = wp_mm_get_value('google_plus_num_from');
		$google_plus_num_to = wp_mm_get_value('google_plus_num_to');
		$google_plus_duration_from = wp_mm_get_value('google_plus_duration_from');
		$google_plus_duration_to = wp_mm_get_value('google_plus_duration_to');
		$google_plus_weekends = wp_mm_get_value('google_plus_weekends');
		$tweets_enabled = wp_mm_get_value('tweets_enabled');
		$tweets_num_from = wp_mm_get_value('tweets_num_from');
		$tweets_num_to = wp_mm_get_value('tweets_num_to');
		$tweets_duration_from = wp_mm_get_value('tweets_duration_from');
		$tweets_duration_to = wp_mm_get_value('tweets_duration_to');
		$tweets_weekends = wp_mm_get_value('tweets_weekends');

	}

	
	if (!empty($error_text)) {
		$error_text  = '<div id="setting-error-settings_updated" class="updated settings-error">'.
					   '<p>'.
					   '<strong>'.$error_text.'</strong>'.
					   '</p>'.
					   '</div>';
	}
	
	if (!empty($mm_api_key)) {
		$api_key = get_option('wp-mm-api-key');
		$response = file_get_contents('http://www.markething.me/api/signals.php?api_key='.$api_key);
		$response = json_decode($response, true);
	}
	print '
	<div class="wrap">
	<h2>Markething.Me - Free Social Signals Auto Poster</h2>
	<br />
	<div style="text-align:right">For help please refer to <a href="http://www.markething.me/dashboard/?a=wp" target="_blank">plugin documentation</a></div>
	'.$error_text.'
	<form action="" method="post">
		<hr />
		<table class="form-table" >
			<tbody>
				<tr>
					<th scope="row" style="padding:5px;">
					Available signals
					</th>
					<td style="padding:5px;">
						<strong>'.number_format($response['available_signals'], 2, '.',',').'</strong> social signals, <a href="http://www.markething.me/dashboard/?a=buy_signals" target="_blank">get more</a>
					</td>
				</tr>
			</tbody>
		</table>
		<hr />
		<br />
		<table class="form-table" >
			<tbody>
				<tr>
					<th scope="row" style="padding:5px;">
						<label for="mm_api_key">API Key</label>
					</th>
					<td style="padding:5px;">
						<input id="mm_api_key" style="width:280px;" class="regular-text" type="text" value="'.$mm_api_key.'" name="mm_api_key">
					</td>
				</tr>
				<tr>
					<th scope="row" style="padding:5px;">
					
					</th>
					<td style="padding:5px;">
						<p style="margin-top:0px;">Don\'t have API Key? Register <a href="http://www.markething.me/r/" target="_blank">here</a> and get it <a href="http://www.markething.me/dashboard/?a=api" target="_blank">here</a></p>
					</td>
				</tr>
			</tbody>
		</table>
		<hr />
		<p class="submit">
			<input id="submit" class="button button-primary" type="submit" value="Save API Key" name="submit">
		</p>
			<!--
		<br />
		<h2>Facebook Likes <span style="font-size:9pt">(default values)</span></h2>
		<hr />
		
		<table class="form-table" >
			<tbody>
				<tr>
					<th scope="row" style="padding:5px;">
						<label for="fb_likes_enabled">Enabled</label>
					</th>
					<td style="padding:5px;">
						<input type="checkbox" name="fb_likes_enabled" value="1" '.($fb_likes_enabled == 1?'checked="checked"':'').' />
					</td>
				</tr>
				<tr>
					<th scope="row" style="padding:5px;">
						<label for="fb_likes_num_from">Likes number</label>
					</th>
					<td style="padding:5px;">
						Between <input id="fb_likes_num_from" style="width:50px" class="regular-text" type="text" value="'.$fb_likes_num_from.'" name="fb_likes_num_from"> 
						and 
						<input id="fb_likes_num_to" style="width:50px" class="regular-text" type="text" value="'.$fb_likes_num_to.'" name="fb_likes_num_to"> Likes (calculated randomly)
					</td>
				</tr>
				<tr>
					<th scope="row" style="padding:5px;">
						<label for="fb_likes_duration_from">Task duration</label>
					</th>
					<td style="padding:5px;">
						Between <input id="fb_likes_duration_from" style="width:50px" class="regular-text" type="text" value="'.$fb_likes_duration_from.'" name="fb_likes_duration_from"> 
						and 
						<input id="fb_likes_duration_to" style="width:50px" class="regular-text" type="text" value="'.$fb_likes_duration_to.'" name="fb_likes_duration_to"> days (calculated randomly)
					</td>
				</tr>
				<tr>
					<th scope="row" style="padding:5px;">
						<label for="fb_likes_weekends">Slower on weekends</label>
					</th>
					<td style="padding:5px;">
						Minimize signals on weekends by
						<select id="fb_likes_weekends" class="form-control" name="fb_likes_weekends">
							<option value="0"'.($fb_likes_weekends == 10 ? ' selected="selected"' : '' ).'>0% </option>
							<option value="10"'.($fb_likes_weekends == 10 ? ' selected="selected"' : '' ).'>10% </option>
							<option value="20"'.($fb_likes_weekends == 20 ? ' selected="selected"' : '' ).'>20% </option>
							<option value="30"'.($fb_likes_weekends == 30 ? ' selected="selected"' : '' ).'>30% </option>
							<option value="40"'.($fb_likes_weekends == 40 ? ' selected="selected"' : '' ).'>40% </option>
							<option value="50"'.($fb_likes_weekends == 50 ? ' selected="selected"' : '' ).'>50% </option>
							<option value="60"'.($fb_likes_weekends == 60 ? ' selected="selected"' : '' ).'>60% </option>
							<option value="70"'.($fb_likes_weekends == 70 ? ' selected="selected"' : '' ).'>70% </option>
							<option value="80"'.($fb_likes_weekends == 80 ? ' selected="selected"' : '' ).'>80% </option>
							<option value="90"'.($fb_likes_weekends == 90 ? ' selected="selected"' : '' ).'>90% </option>
							<option value="100"'.($fb_likes_weekends == 100 ? ' selected="selected"' : '' ).'">100%</option>
							<option value="random"'.($fb_likes_weekends == 'random' ? ' selected="selected"' : '' ).'">random</option>
						</select>
					</td>
				</tr>
			</tbody>
		</table>
		
		<br />
		<h2>Facebook Shares <span style="font-size:9pt">(default values)</span></h2>
		<hr />
		
		<table class="form-table" >
			<tbody>
				<tr>
					<th scope="row" style="padding:5px;">
						<label for="fb_shares_enabled">Enabled</label>
					</th>
					<td style="padding:5px;">
						<input type="checkbox" name="fb_shares_enabled" value="1" '.($fb_shares_enabled == 1?'checked="checked"':'').' />
					</td>
				</tr>
				<tr>
					<th scope="row" style="padding:5px;">
						<label for="fb_shares_num_from">Shares number</label>
					</th>
					<td style="padding:5px;">
						Between <input id="fb_shares_num_from" style="width:50px" class="regular-text" type="text" value="'.$fb_shares_num_from.'" name="fb_shares_num_from"> 
						and 
						<input id="fb_shares_num_to" style="width:50px" class="regular-text" type="text" value="'.$fb_shares_num_to.'" name="fb_shares_num_to"> Shares (calculated randomly)
					</td>
				</tr>
				<tr>
					<th scope="row" style="padding:5px;">
						<label for="fb_shares_duration_from">Task duration</label>
					</th>
					<td style="padding:5px;">
						Between <input id="fb_shares_duration_from" style="width:50px" class="regular-text" type="text" value="'.$fb_shares_duration_from.'" name="fb_shares_duration_from"> 
						and 
						<input id="fb_shares_duration_to" style="width:50px" class="regular-text" type="text" value="'.$fb_shares_duration_to.'" name="fb_shares_duration_to"> days (calculated randomly)
					</td>
				</tr>
				<tr>
					<th scope="row" style="padding:5px;">
						<label for="fb_shares_weekends">Slower on weekends</label>
					</th>
					<td style="padding:5px;">
						Minimize signals on weekends by
						<select id="fb_shares_weekends" class="form-control" name="fb_shares_weekends">
							<option value="0"'.($fb_shares_weekends == 10 ? ' selected="selected"' : '' ).'>0% </option>
							<option value="10"'.($fb_shares_weekends == 10 ? ' selected="selected"' : '' ).'>10% </option>
							<option value="20"'.($fb_shares_weekends == 20 ? ' selected="selected"' : '' ).'>20% </option>
							<option value="30"'.($fb_shares_weekends == 30 ? ' selected="selected"' : '' ).'>30% </option>
							<option value="40"'.($fb_shares_weekends == 40 ? ' selected="selected"' : '' ).'>40% </option>
							<option value="50"'.($fb_shares_weekends == 50 ? ' selected="selected"' : '' ).'>50% </option>
							<option value="60"'.($fb_shares_weekends == 60 ? ' selected="selected"' : '' ).'>60% </option>
							<option value="70"'.($fb_shares_weekends == 70 ? ' selected="selected"' : '' ).'>70% </option>
							<option value="80"'.($fb_shares_weekends == 80 ? ' selected="selected"' : '' ).'>80% </option>
							<option value="90"'.($fb_shares_weekends == 90 ? ' selected="selected"' : '' ).'>90% </option>
							<option value="100"'.($fb_shares_weekends == 100 ? ' selected="selected"' : '' ).'">100%</option>
							<option value="random"'.($fb_likes_weekends == 'random' ? ' selected="selected"' : '' ).'">random</option>
						</select>
					</td>
				</tr>
			</tbody>
		</table>		-->
		
		<br />
		<h2>Google Pluses <span style="font-size:9pt">(default values)</span></h2>
		<hr />
		
		<table class="form-table" >
			<tbody>
				<tr>
					<th scope="row" style="padding:5px;">
						<label for="google_plus_enabled">Enabled</label>
					</th>
					<td style="padding:5px;">
						<input type="checkbox" name="google_plus_enabled" value="1" '.($google_plus_enabled == 1?'checked="checked"':'').' />
					</td>
				</tr>
				<tr>
					<th scope="row" style="padding:5px;">
						<label for="google_plus_num_from">Google Pluses number</label>
					</th>
					<td style="padding:5px;">
						Between <input id="google_plus_num_from" style="width:50px" class="regular-text" type="text" value="'.$google_plus_num_from.'" name="google_plus_num_from"> 
						and 
						<input id="google_plus_num_to" style="width:50px" class="regular-text" type="text" value="'.$google_plus_num_to.'" name="google_plus_num_to"> Pluses (calculated randomly)
					</td>
				</tr>
				<tr>
					<th scope="row" style="padding:5px;">
						<label for="google_plus_duration_from">Task duration</label>
					</th>
					<td style="padding:5px;">
						Between <input id="google_plus_duration_from" style="width:50px" class="regular-text" type="text" value="'.$google_plus_duration_from.'" name="google_plus_duration_from"> 
						and 
						<input id="google_plus_duration_to" style="width:50px" class="regular-text" type="text" value="'.$google_plus_duration_to.'" name="google_plus_duration_to"> days (calculated randomly)
					</td>
				</tr>
				<tr>
					<th scope="row" style="padding:5px;">
						<label for="google_plus_weekends">Slower on weekends</label>
					</th>
					<td style="padding:5px;">
						Minimize signals on weekends by
						<select id="google_plus_weekends" class="form-control" name="google_plus_weekends">
							<option value="0"'.($google_plus_weekends == 10 ? ' selected="selected"' : '' ).'>0% </option>
							<option value="10"'.($google_plus_weekends == 10 ? ' selected="selected"' : '' ).'>10% </option>
							<option value="20"'.($google_plus_weekends == 20 ? ' selected="selected"' : '' ).'>20% </option>
							<option value="30"'.($google_plus_weekends == 30 ? ' selected="selected"' : '' ).'>30% </option>
							<option value="40"'.($google_plus_weekends == 40 ? ' selected="selected"' : '' ).'>40% </option>
							<option value="50"'.($google_plus_weekends == 50 ? ' selected="selected"' : '' ).'>50% </option>
							<option value="60"'.($google_plus_weekends == 60 ? ' selected="selected"' : '' ).'>60% </option>
							<option value="70"'.($google_plus_weekends == 70 ? ' selected="selected"' : '' ).'>70% </option>
							<option value="80"'.($google_plus_weekends == 80 ? ' selected="selected"' : '' ).'>80% </option>
							<option value="90"'.($google_plus_weekends == 90 ? ' selected="selected"' : '' ).'>90% </option>
							<option value="100"'.($google_plus_weekends == 100 ? ' selected="selected"' : '' ).'">100%</option>
							<option value="random"'.($fb_likes_weekends == 'random' ? ' selected="selected"' : '' ).'">random</option>
						</select>
					</td>
				</tr>
			</tbody>
		</table>
		
		<br />
		<h2>Twitter Tweets <span style="font-size:9pt">(default values)</span></h2>
		<hr />
		
		<table class="form-table" >
			<tbody>
				<tr>
					<th scope="row" style="padding:5px;">
						<label for="tweets_enabled">Enabled</label>
					</th>
					<td style="padding:5px;">
						<input type="checkbox" name="tweets_enabled" value="1"  value="1" '.($tweets_enabled == 1?'checked="checked"':'').' />
					</td>
				</tr>
				<tr>
					<th scope="row" style="padding:5px;">
						<label for="tweets_num_from">Tweets number</label>
					</th>
					<td style="padding:5px;">
						Between <input id="tweets_num_from" style="width:50px" class="regular-text" type="text" value="'.$tweets_num_from.'" name="tweets_num_from"> 
						and 
						<input id="tweets_num_to" style="width:50px" class="regular-text" type="text" value="'.$tweets_num_to.'" name="tweets_num_to"> Pluses (calculated randomly)
					</td>
				</tr>
				<tr>
					<th scope="row" style="padding:5px;">
						<label for="tweets_duration_from">Task duration</label>
					</th>
					<td style="padding:5px;">
						Between <input id="tweets_duration_from" style="width:50px" class="regular-text" type="text" value="'.$tweets_duration_from.'" name="tweets_duration_from"> 
						and 
						<input id="tweets_duration_to" style="width:50px" class="regular-text" type="text" value="'.$tweets_duration_to.'" name="tweets_duration_to"> days (calculated randomly)
					</td>
				</tr>
				<tr>
					<th scope="row" style="padding:5px;">
						<label for="tweets_weekends">Slower on weekends</label>
					</th>
					<td style="padding:5px;">
						Minimize signals on weekends by
						<select id="tweets_weekends" class="form-control" name="tweets_weekends">
							<option value="0"'.($tweets_weekends == 10 ? ' selected="selected"' : '' ).'>0% </option>
							<option value="10"'.($tweets_weekends == 10 ? ' selected="selected"' : '' ).'>10% </option>
							<option value="20"'.($tweets_weekends == 20 ? ' selected="selected"' : '' ).'>20% </option>
							<option value="30"'.($tweets_weekends == 30 ? ' selected="selected"' : '' ).'>30% </option>
							<option value="40"'.($tweets_weekends == 40 ? ' selected="selected"' : '' ).'>40% </option>
							<option value="50"'.($tweets_weekends == 50 ? ' selected="selected"' : '' ).'>50% </option>
							<option value="60"'.($tweets_weekends == 60 ? ' selected="selected"' : '' ).'>60% </option>
							<option value="70"'.($tweets_weekends == 70 ? ' selected="selected"' : '' ).'>70% </option>
							<option value="80"'.($tweets_weekends == 80 ? ' selected="selected"' : '' ).'>80% </option>
							<option value="90"'.($tweets_weekends == 90 ? ' selected="selected"' : '' ).'>90% </option>
							<option value="100"'.($tweets_weekends == 100 ? ' selected="selected"' : '' ).'">100%</option>
							<option value="random"'.($fb_likes_weekends == 'random' ? ' selected="selected"' : '' ).'">random</option>
						</select>
					</td>
				</tr>
			</tbody>
		</table>
		<hr />
		<p class="submit">
			<input id="submit" class="button button-primary" type="submit" value="Save Changes" name="submit">
		</p>
	</form>
	
	
	</div>';
	
	if (!empty($error_field)) {
		print "<script>window.document.getElementById('".$error_field."').select();</script>";
	}
	
}
// $id, $title, $callback, $post_type, $context, $priority, $callback_args 

function myplugin_add_meta_box() {

	$screens = array( 'post', 'page' );

	foreach ( $screens as $screen ) {
		add_meta_box(			'wp-mm-post-box',			__( 'Markething.Me - Free Social Signals Auto Poster', 'myplugin_textdomain' ),			'myplugin_meta_box_callback',			$screen
		);
	}		$post_types = get_post_types( array( 'public' => true ) );		foreach ( $post_types as $post_type ) {		if ( 'page' == $post_type || 'post' == $post_type ) {			continue;		}		add_meta_box(			'wp-mm-post-box',			__( 'Markething.Me - Free Social Signals Auto Poster', 'myplugin_textdomain' ),			'myplugin_meta_box_callback',			$post_type		);	}
}
add_action( 'add_meta_boxes', 'myplugin_add_meta_box');
 
function myplugin_meta_box_callback( $post ) {

	$post_id = $post->ID;
	$api_key = get_option('wp-mm-api-key');
	// Add an nonce field so we can check for it later.
	wp_nonce_field( 'myplugin_meta_box', 'myplugin_meta_box_nonce' );

	// FB Likes
	
	// Get previously saved fields
	$fb_likes_enabled = get_post_meta($post_id, 'wp-mm-fb-likes-enabled', true);
	$fb_likes_num = get_post_meta($post_id, 'wp-mm-fb-likes-num', true);
	$fb_likes_duration = get_post_meta($post_id, 'wp-mm-fb-likes-duration', true);
	$fb_likes_weekends = get_post_meta($post_id, 'wp-mm-fb-likes-weekends', true);
		
	// Get fields default values
	if (empty($fb_likes_enabled)) {
		$fb_likes_enabled = wp_mm_get_value('fb_likes_enabled');
	}
	$fb_likes_num_from = wp_mm_get_value('fb_likes_num_from');
	$fb_likes_num_to = wp_mm_get_value('fb_likes_num_to');
	$fb_likes_duration_from = wp_mm_get_value('fb_likes_duration_from');
	$fb_likes_duration_to = wp_mm_get_value('fb_likes_duration_to');
	if (empty($fb_likes_weekends)) {
		$fb_likes_weekends = wp_mm_get_value('fb_likes_weekends');
		if ($fb_likes_weekends == 'random') {
			$fb_likes_weekends = (rand(0, 10) * 10);
		}
	}
	
	if (empty($fb_likes_num)) {
		if ($fb_likes_num_from < $fb_likes_num_to) {
			$fb_likes_num = rand($fb_likes_num_from, $fb_likes_num_to);
		} else {
			$fb_likes_num = $fb_likes_num_from;
		}
	}
	
	if (empty($fb_likes_duration)) {
		if ($fb_likes_duration_from < $fb_likes_duration_to) {
			$fb_likes_duration = rand($fb_likes_duration_from, $fb_likes_duration_to);
		} else {
			$fb_likes_duration = $fb_likes_duration_from;
		}
	}
	
	// FB Shares
	
	// Get previously saved fields
	$fb_shares_enabled = get_post_meta($post_id, 'wp-mm-fb-shares-enabled', true);
	$fb_shares_num = get_post_meta($post_id, 'wp-mm-fb-shares-num', true);
	$fb_shares_duration = get_post_meta($post_id, 'wp-mm-fb-shares-duration', true);
	$fb_shares_weekends = get_post_meta($post_id, 'wp-mm-fb-shares-weekends', true);
		
	// Get fields default values
	if (empty($fb_shares_enabled)) {
		$fb_shares_enabled = wp_mm_get_value('fb_shares_enabled');
	}
	$fb_shares_num_from = wp_mm_get_value('fb_shares_num_from');
	$fb_shares_num_to = wp_mm_get_value('fb_shares_num_to');
	$fb_shares_duration_from = wp_mm_get_value('fb_shares_duration_from');
	$fb_shares_duration_to = wp_mm_get_value('fb_shares_duration_to');
	if (empty($fb_shares_weekends)) {
		$fb_shares_weekends = wp_mm_get_value('fb_shares_weekends');
		if ($fb_shares_weekends == 'random') {
			$fb_shares_weekends = (rand(0, 10) * 10);
		}
	}
	if (empty($fb_shares_num)) {
		if ($fb_shares_num_from < $fb_shares_num_to) {
			$fb_shares_num = rand($fb_shares_num_from, $fb_shares_num_to);
		} else {
			$fb_shares_num = $fb_shares_num_from;
		}
	}
	if (empty($fb_shares_duration)) {
		if ($fb_shares_duration_from < $fb_shares_duration_to) {
			$fb_shares_duration = rand($fb_shares_duration_from, $fb_shares_duration_to);
		} else {
			$fb_shares_duration = $fb_shares_duration_from;
		}
	}
	
	// Google Plus
	
	// Get previously saved fields
	$google_plus_enabled = get_post_meta($post_id, 'wp-mm-google-plus-enabled', true);
	$google_plus_num = get_post_meta($post_id, 'wp-mm-google-plus-num', true);
	$google_plus_duration = get_post_meta($post_id, 'wp-mm-google-plus-duration', true);
	$google_plus_weekends = get_post_meta($post_id, 'wp-mm-google-plus-weekends', true);
	
	// Get fields default values	
	if (empty($google_plus_enabled)) {
		$google_plus_enabled = wp_mm_get_value('google_plus_enabled');
	}
	$google_plus_num_from = wp_mm_get_value('google_plus_num_from');
	$google_plus_num_to = wp_mm_get_value('google_plus_num_to');
	$google_plus_duration_from = wp_mm_get_value('google_plus_duration_from');
	$google_plus_duration_to = wp_mm_get_value('google_plus_duration_to');
	if (empty($google_plus_weekends)) {
		$google_plus_weekends = wp_mm_get_value('google_plus_weekends');
		if ($google_plus_weekends == 'random') {
			$google_plus_weekends = (rand(0, 10) * 10);
		}
	}
	if (empty($google_plus_num)) {
		if ($google_plus_num_from < $google_plus_num_to) {
			$google_plus_num = rand($google_plus_num_from, $google_plus_num_to);
		} else {
			$google_plus_num = $google_plus_num_from;
		}
	}
	if (empty($google_plus_duration)) {
		if ($google_plus_duration_from < $google_plus_duration_to) {
			$google_plus_duration = rand($google_plus_duration_from, $google_plus_duration_to);
		} else {
			$google_plus_duration = $google_plus_duration_from;
		}
	}
	
	// Twitter tweets
	
	// Get previously saved fields
	$tweets_enabled = get_post_meta($post_id, 'wp-mm-twitter-tweets-enabled', true);
	$tweets_num = get_post_meta($post_id, 'wp-mm-twitter-tweets-num', true);
	$tweets_duration = get_post_meta($post_id, 'wp-mm-twitter-tweets-duration', true);
	$tweets_weekends = get_post_meta($post_id, 'wp-mm-twitter-tweets-weekends', true);
	
	// Get fields default values
	if (empty($tweets_enabled)) {
		$tweets_enabled = wp_mm_get_value('tweets_enabled');
	}
	$tweets_num_from = wp_mm_get_value('tweets_num_from');
	$tweets_num_to = wp_mm_get_value('tweets_num_to');
	$tweets_duration_from = wp_mm_get_value('tweets_duration_from');
	$tweets_duration_to = wp_mm_get_value('tweets_duration_to');
	if (empty($tweets_weekends)) {
		$tweets_weekends = wp_mm_get_value('tweets_weekends');
		if ($tweets_weekends == 'random') {
			$tweets_weekends = (rand(0, 10) * 10);
		}
	}
	if (empty($tweets_num)) {
		if ($tweets_num_from < $tweets_num_to) {
			$tweets_num = rand($tweets_num_from, $tweets_num_to);
		} else {
			$tweets_num = $tweets_num_from;
		}
	}
	if (empty($tweets_duration)) {
		if ($tweets_duration_from < $tweets_duration_to) {
			$tweets_duration = rand($tweets_duration_from, $tweets_duration_to);
		} else {
			$tweets_duration = $tweets_duration_from;
		}
	}
	
	
	print '<div style="text-align:left;">';
	if (empty($api_key)) {
		print '<span style="color:#ff0000;">Please enter Markething.Me API Key on Settings \ Markething.Me page to enable this feature</span><br />';
	}
	print 'Promote current post with following social signals<br />';
	print '<hr />';
	print '<div style="margin-top:5px;">';
	print '<div style="display:inline-block;width:120px;font-weight:bold;color:#3B5998;">Facebook Likes</div>';
	
	$fb_likes_task_id = get_post_meta($post_id, 'wp-mm-fb-likes-task-id', true);
	if(empty($fb_likes_task_id)) {		print '<!--';		
		print '<input type="checkbox" name="fb_likes_enabled" value="1" '.($fb_likes_enabled == 1?'checked="checked"':'').' />';
		print ' add ';
		print '<input id="fb_likes_num" style="width:40px;text-align:center;" class="regular-text" type="text" value="'.$fb_likes_num.'" name="fb_likes_num">';
		print ' <div style="display:inline-block;width:130px;">Likes in duration of</div> ';
		print '<input id="fb_likes_duration" style="width:40px;text-align:center;" class="regular-text" type="text" value="'.$fb_likes_duration.'" name="fb_likes_duration"> ';
		print ' days and keep them slower at the weekends by ';
		print '<select id="fb_likes_weekends" class="form-control" name="fb_likes_weekends">
					<option value="0"'.($fb_likes_weekends == 10 ? ' selected="selected"' : '' ).'>0% </option>
					<option value="10"'.($fb_likes_weekends == 10 ? ' selected="selected"' : '' ).'>10% </option>
					<option value="20"'.($fb_likes_weekends == 20 ? ' selected="selected"' : '' ).'>20% </option>
					<option value="30"'.($fb_likes_weekends == 30 ? ' selected="selected"' : '' ).'>30% </option>
					<option value="40"'.($fb_likes_weekends == 40 ? ' selected="selected"' : '' ).'>40% </option>
					<option value="50"'.($fb_likes_weekends == 50 ? ' selected="selected"' : '' ).'>50% </option>
					<option value="60"'.($fb_likes_weekends == 60 ? ' selected="selected"' : '' ).'>60% </option>
					<option value="70"'.($fb_likes_weekends == 70 ? ' selected="selected"' : '' ).'>70% </option>
					<option value="80"'.($fb_likes_weekends == 80 ? ' selected="selected"' : '' ).'>80% </option>
					<option value="90"'.($fb_likes_weekends == 90 ? ' selected="selected"' : '' ).'>90% </option>
					<option value="100'.($fb_likes_weekends == 100 ? ' selected="selected"' : '' ).'">100%</option>
				</select>';						print '-->';
	} else {
		$response = file_get_contents('http://www.markething.me/api/stats_sum.php?api_key='.$api_key.'&task_id='.$fb_likes_task_id);
		$response = json_decode($response, true);
		$planned = 'N/A';
		if ($response['planned'] != '') {
			$planned = $response['planned'];
		}
		$processed = 'N/A';
		if ($response['processed'] != '') {
			$processed = $response['processed'];
		}
		//print 'Task created, planned: '.$planned.', processed: '.$processed.' - <a href="http://www.markething.me/dashboard/?a=report&task='.$fb_likes_task_id.'" target="_blank">View report</a>';
	}	
	print '</div>';
	print '<hr />';

	print '<div style="margin-top:5px;">';
	print '<div style="display:inline-block;width:120px;font-weight:bold;color:#3B5998;">Facebook Shares</div>';
	
	$fb_shares_task_id = get_post_meta($post_id, 'wp-mm-fb-shares-task-id', true);
	if(empty($fb_shares_task_id)) {	print '<!--';	
	print '<input type="checkbox" name="fb_shares_enabled" value="1" '.($fb_shares_enabled == 1?'checked="checked"':'').' />';
	print ' add ';
	print '<input id="fb_shares_num" style="width:40px;text-align:center;" class="regular-text" type="text" value="'.$fb_shares_num.'" name="fb_shares_num">';
	print ' <div style="display:inline-block;width:130px;">Shares in duration of</div> ';
	print '<input id="fb_shares_duration" style="width:40px;text-align:center;" class="regular-text" type="text" value="'.$fb_shares_duration.'" name="fb_shares_duration"> ';
	print ' days and keep them slower at the weekends by ';
	print '<select id="fb_shares_weekends" class="form-control" name="fb_shares_weekends">
				<option value="0"'.($fb_shares_weekends == 10 ? ' selected="selected"' : '' ).'>0% </option>
				<option value="10"'.($fb_shares_weekends == 10 ? ' selected="selected"' : '' ).'>10% </option>
				<option value="20"'.($fb_shares_weekends == 20 ? ' selected="selected"' : '' ).'>20% </option>
				<option value="30"'.($fb_shares_weekends == 30 ? ' selected="selected"' : '' ).'>30% </option>
				<option value="40"'.($fb_shares_weekends == 40 ? ' selected="selected"' : '' ).'>40% </option>
				<option value="50"'.($fb_shares_weekends == 50 ? ' selected="selected"' : '' ).'>50% </option>
				<option value="60"'.($fb_shares_weekends == 60 ? ' selected="selected"' : '' ).'>60% </option>
				<option value="70"'.($fb_shares_weekends == 70 ? ' selected="selected"' : '' ).'>70% </option>
				<option value="80"'.($fb_shares_weekends == 80 ? ' selected="selected"' : '' ).'>80% </option>
				<option value="90"'.($fb_shares_weekends == 90 ? ' selected="selected"' : '' ).'>90% </option>
				<option value="100'.($fb_shares_weekends == 100 ? ' selected="selected"' : '' ).'">100%</option>
			</select>';						print '-->';
	} else {
		$response = file_get_contents('http://www.markething.me/api/stats_sum.php?api_key='.$api_key.'&task_id='.$fb_shares_task_id);
		$response = json_decode($response, true);
		$planned = 'N/A';
		if ($response['planned'] != '') {
			$planned = $response['planned'];
		}
		$processed = 'N/A';
		if ($response['processed'] != '') {
			$processed = $response['processed'];
		}
		//print 'Task created, planned: '.$planned.', processed: '.$processed.' - <a href="http://www.markething.me/dashboard/?a=report&task='.$fb_shares_task_id.'" target="_blank">View report</a>';
	}	
	print '</div>';
	print '<hr />';
	
	print '<div style="margin-top:5px;">';
	print '<div style="display:inline-block;width:120px;font-weight:bold;color:#CC3433;">Google Pluses</div>';
	
	$google_plus_task_id = get_post_meta($post_id, 'wp-mm-google-plus-task-id', true);
	if(empty($google_plus_task_id)) {
	print '<input type="checkbox" name="google_plus_enabled" value="1" '.($google_plus_enabled == 1?'checked="checked"':'').' />';
	print ' add ';
	print '<input id="google_plus_num" style="width:40px;text-align:center;" class="regular-text" type="text" value="'.$google_plus_num.'" name="google_plus_num">';
	print ' <div style="display:inline-block;width:130px;">Pluses in duration of</div> ';
	print '<input id="google_plus_duration" style="width:40px;text-align:center;" class="regular-text" type="text" value="'.$google_plus_duration.'" name="google_plus_duration"> ';
	print ' days and keep them slower at the weekends by ';
	print '<select id="google_plus_weekends" class="form-control" name="google_plus_weekends">
				<option value="0"'.($google_plus_weekends == 10 ? ' selected="selected"' : '' ).'>0% </option>
				<option value="10"'.($google_plus_weekends == 10 ? ' selected="selected"' : '' ).'>10% </option>
				<option value="20"'.($google_plus_weekends == 20 ? ' selected="selected"' : '' ).'>20% </option>
				<option value="30"'.($google_plus_weekends == 30 ? ' selected="selected"' : '' ).'>30% </option>
				<option value="40"'.($google_plus_weekends == 40 ? ' selected="selected"' : '' ).'>40% </option>
				<option value="50"'.($google_plus_weekends == 50 ? ' selected="selected"' : '' ).'>50% </option>
				<option value="60"'.($google_plus_weekends == 60 ? ' selected="selected"' : '' ).'>60% </option>
				<option value="70"'.($google_plus_weekends == 70 ? ' selected="selected"' : '' ).'>70% </option>
				<option value="80"'.($google_plus_weekends == 80 ? ' selected="selected"' : '' ).'>80% </option>
				<option value="90"'.($google_plus_weekends == 90 ? ' selected="selected"' : '' ).'>90% </option>
				<option value="100'.($google_plus_weekends == 100 ? ' selected="selected"' : '' ).'">100%</option>
			</select>';
	} else {
		$response = file_get_contents('http://www.markething.me/api/stats_sum.php?api_key='.$api_key.'&task_id='.$google_plus_task_id);
		$response = json_decode($response, true);
		$planned = 'N/A';
		if ($response['planned'] != '') {
			$planned = $response['planned'];
		}
		$processed = 'N/A';
		if ($response['processed'] != '') {
			$processed = $response['processed'];
		}
		print 'Task created, planned: '.$planned.', processed: '.$processed.' - <a href="http://www.markething.me/dashboard/?a=report&task='.$google_plus_task_id.'" target="_blank">View report</a>';
	}	
	print '</div>';
	print '<hr />';

	print '<div style="margin-top:5px;">';
	print '<div style="display:inline-block;width:120px;font-weight:bold;color:#1BB2E9;">Twitter Tweets</div>';
	
	$twitter_tweets_task_id = get_post_meta($post_id, 'wp-mm-twitter-tweets-task-id', true);
	if(empty($twitter_tweets_task_id)) {
	print '<input type="checkbox" name="tweets_enabled" value="1" '.($tweets_enabled == 1?'checked="checked"':'').' />';
	print ' add ';
	print '<input id="tweets_num" style="width:40px;text-align:center;" class="regular-text" type="text" value="'.$tweets_num.'" name="tweets_num">';
	print ' <div style="display:inline-block;width:130px;">Tweets in duration of</div> ';
	print '<input id="tweets_duration" style="width:40px;text-align:center;" class="regular-text" type="text" value="'.$tweets_duration.'" name="tweets_duration"> ';
	print ' days and keep them slower at the weekends by ';
	print '<select id="tweets_weekends" class="form-control" name="tweets_weekends">
				<option value="0"'.($tweets_weekends == 10 ? ' selected="selected"' : '' ).'>0% </option>
				<option value="10"'.($tweets_weekends == 10 ? ' selected="selected"' : '' ).'>10% </option>
				<option value="20"'.($tweets_weekends == 20 ? ' selected="selected"' : '' ).'>20% </option>
				<option value="30"'.($tweets_weekends == 30 ? ' selected="selected"' : '' ).'>30% </option>
				<option value="40"'.($tweets_weekends == 40 ? ' selected="selected"' : '' ).'>40% </option>
				<option value="50"'.($tweets_weekends == 50 ? ' selected="selected"' : '' ).'>50% </option>
				<option value="60"'.($tweets_weekends == 60 ? ' selected="selected"' : '' ).'>60% </option>
				<option value="70"'.($tweets_weekends == 70 ? ' selected="selected"' : '' ).'>70% </option>
				<option value="80"'.($tweets_weekends == 80 ? ' selected="selected"' : '' ).'>80% </option>
				<option value="90"'.($tweets_weekends == 90 ? ' selected="selected"' : '' ).'>90% </option>
				<option value="100'.($tweets_weekends == 100 ? ' selected="selected"' : '' ).'">100%</option>
			</select>';
	} else {
		$response = file_get_contents('http://www.markething.me/api/stats_sum.php?api_key='.$api_key.'&task_id='.$twitter_tweets_task_id);
		$response = json_decode($response, true);
		$planned = 'N/A';
		if ($response['planned'] != '') {
			$planned = $response['planned'];
		}
		$processed = 'N/A';
		if ($response['processed'] != '') {
			$processed = $response['processed'];
		}
		print 'Task created, planned: '.$planned.', processed: '.$processed.' - <a href="http://www.markething.me/dashboard/?a=report&task='.$twitter_tweets_task_id.'" target="_blank">View report</a>';
	}	
	print '</div>';	
	print '<hr />';
	
	$api_key = get_option('wp-mm-api-key');
	$response = file_get_contents('http://www.markething.me/api/signals.php?api_key='.$api_key);
	$response = json_decode($response, true);

	print '<div style="margin-top:20px;text-align:left;">You have <strong>'.number_format($response['available_signals'], 2, '.',',').'</strong> signals available on Markething.Me</div>';
	print '</div>';
}

function wp_mm_save_post_fields($post_id) {
		
	// FB Likes
	update_post_meta( $post_id, 'wp-mm-fb-likes-enabled', sanitize_text_field($_POST['fb_likes_enabled']));
	update_post_meta( $post_id, 'wp-mm-fb-likes-num', sanitize_text_field($_POST['fb_likes_num']));
	update_post_meta( $post_id, 'wp-mm-fb-likes-duration', sanitize_text_field($_POST['fb_likes_duration']));
	update_post_meta( $post_id, 'wp-mm-fb-likes-weekends', sanitize_text_field($_POST['fb_likes_weekends']));

	// FB Shares
	update_post_meta( $post_id, 'wp-mm-fb-shares-enabled', sanitize_text_field($_POST['fb_shares_enabled']));
	update_post_meta( $post_id, 'wp-mm-fb-shares-num', sanitize_text_field($_POST['fb_shares_num']));
	update_post_meta( $post_id, 'wp-mm-fb-shares-duration', sanitize_text_field($_POST['fb_shares_duration']));
	update_post_meta( $post_id, 'wp-mm-fb-shares-weekends', sanitize_text_field($_POST['fb_shares_weekends']));

	// Google Plus
	update_post_meta($post_id, 'wp-mm-google-plus-enabled', sanitize_text_field($_POST['google_plus_enabled']));
	update_post_meta($post_id, 'wp-mm-google-plus-num', sanitize_text_field($_POST['google_plus_num']));
	update_post_meta($post_id, 'wp-mm-google-plus-duration', sanitize_text_field($_POST['google_plus_duration']));
	update_post_meta($post_id, 'wp-mm-google-plus-weekends', sanitize_text_field($_POST['google_plus_weekends']));

	// Twitter Tweets
	update_post_meta($post_id, 'wp-mm-twitter-tweets-enabled', sanitize_text_field($_POST['tweets_enabled']));
	update_post_meta($post_id, 'wp-mm-twitter-tweets-num', sanitize_text_field($_POST['tweets_num']));
	update_post_meta($post_id, 'wp-mm-twitter-tweets-duration', sanitize_text_field($_POST['tweets_duration']));
	update_post_meta($post_id, 'wp-mm-twitter-tweets-weekends', sanitize_text_field($_POST['tweets_weekends']));
	
}
add_action( 'save_post', 'wp_mm_save_post_fields' );
add_action( 'edit_post', 'wp_mm_save_post_fields' );

function wp_mm_create_tasks_on_publish($post_id) {
	wp_mm_save_post_fields($post_id);
	
	//if(($_POST['post_status'] == 'publish') && ($_POST['original_post_status'] != 'publish')) {
	if(($_POST['post_status'] == 'publish')) {
        
		$api_key = get_option('wp-mm-api-key');
		$permalink = get_permalink( $post_id );
		
		// FB Likes
		update_post_meta( $post_id, 'wp-mm-fb-likes-enabled', sanitize_text_field($_POST['fb_likes_enabled']));
		update_post_meta( $post_id, 'wp-mm-fb-likes-num', sanitize_text_field($_POST['fb_likes_num']));
		update_post_meta( $post_id, 'wp-mm-fb-likes-duration', sanitize_text_field($_POST['fb_likes_duration']));
		update_post_meta( $post_id, 'wp-mm-fb-likes-weekends', sanitize_text_field($_POST['fb_likes_weekends']));

		// FB Shares
		update_post_meta( $post_id, 'wp-mm-fb-shares-enabled', sanitize_text_field($_POST['fb_shares_enabled']));
		update_post_meta( $post_id, 'wp-mm-fb-shares-num', sanitize_text_field($_POST['fb_shares_num']));
		update_post_meta( $post_id, 'wp-mm-fb-shares-duration', sanitize_text_field($_POST['fb_shares_duration']));
		update_post_meta( $post_id, 'wp-mm-fb-shares-weekends', sanitize_text_field($_POST['fb_shares_weekends']));

		// Google Plus
		update_post_meta($post_id, 'wp-mm-google-plus-enabled', sanitize_text_field($_POST['google_plus_enabled']));
		update_post_meta($post_id, 'wp-mm-google-plus-num', sanitize_text_field($_POST['google_plus_num']));
		update_post_meta($post_id, 'wp-mm-google-plus-duration', sanitize_text_field($_POST['google_plus_duration']));
		update_post_meta($post_id, 'wp-mm-google-plus-weekends', sanitize_text_field($_POST['google_plus_weekends']));

		// Twitter Tweets
		update_post_meta($post_id, 'wp-mm-twitter-tweets-enabled', sanitize_text_field($_POST['tweets_enabled']));
		update_post_meta($post_id, 'wp-mm-twitter-tweets-num', sanitize_text_field($_POST['tweets_num']));
		update_post_meta($post_id, 'wp-mm-twitter-tweets-duration', sanitize_text_field($_POST['tweets_duration']));
		update_post_meta($post_id, 'wp-mm-twitter-tweets-weekends', sanitize_text_field($_POST['tweets_weekends']));

		$fb_likes_enabled = get_post_meta($post_id, 'wp-mm-fb-likes-enabled', true);
		$fb_likes_num = get_post_meta($post_id, 'wp-mm-fb-likes-num', true);
		$fb_likes_duration = get_post_meta($post_id, 'wp-mm-fb-likes-duration', true);
		$fb_likes_weekends = get_post_meta($post_id, 'wp-mm-fb-likes-weekends', true);
		$fb_likes_task_id = get_post_meta($post_id, 'wp-mm-fb-likes-task-id', true);
		
		if ($fb_likes_enabled == 1 && !is_numeric($fb_likes_task_id)) {
		
			// Task submission data
			$data = array(
				'url' => $permalink, // Task url (http://www.yoursite.com)
				'comment' => '', // Comment text, spintax supported, optional
				'facebook_likes' => 'yes', // Facebook likes (yes|no)
				'facebook_shares' => 'no', // Facebook shares (yes|no)
				'twitter_tweets' => 'no', // Twetter tweets(yes|no)
				'google_pluses' => 'no', // Google pluses (yes|no) 
				'start_date' => date("Y-m-d"), // Task start date (YYYY-MM-DD)
				'days' => $fb_likes_duration, // Task duration (days)
				'signals' => $fb_likes_num, // Signals amount
				'distribution' => 'random', // Signal distribution (random|linear|sinus)
				'slower_on_weekends' => $fb_likes_weekends // Slower signals on weekends (10|20|20|30|40|60|70|80|90|100)%
			);

			// Build the POST query string
			$query_string='api_key='.$api_key.'&'.http_build_query($data);

			// Do the API Request using CURL functions
			$ch = curl_init();
			curl_setopt($ch,CURLOPT_POST, 1);
			curl_setopt($ch,CURLOPT_URL, 'http://www.markething.me/api/task.php');
			curl_setopt($ch,CURLOPT_HEADER, 0);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch,CURLOPT_TIMEOUT, 40);
			curl_setopt($ch,CURLOPT_POSTFIELDS, $query_string);
			$response = json_decode(curl_exec($ch), true);
			curl_close($ch);

			if ($response['error_code'] == 'SUCCESS' && is_numeric($response['task_id'])) {
				update_post_meta($post_id, 'wp-mm-fb-likes-task-id', $response['task_id']);
			} 
		}
		
		$fb_shares_enabled = get_post_meta($post_id, 'wp-mm-fb-shares-enabled', true);
		$fb_shares_num = get_post_meta($post_id, 'wp-mm-fb-shares-num', true);
		$fb_shares_duration = get_post_meta($post_id, 'wp-mm-fb-shares-duration', true);
		$fb_shares_weekends = get_post_meta($post_id, 'wp-mm-fb-shares-weekends', true);
		$fb_shares_task_id = get_post_meta($post_id, 'wp-mm-fb-shares-task-id', true);
		
		if ($fb_shares_enabled == 1 && !is_numeric($fb_shares_task_id)) {
		
			// Task submission data
			$data = array(
				'url' => $permalink, // Task url (http://www.yoursite.com)
				'comment' => '', // Comment text, spintax supported, optional
				'facebook_likes' => 'no', // Facebook likes (yes|no)
				'facebook_shares' => 'yes', // Facebook shares (yes|no)
				'twitter_tweets' => 'no', // Twetter tweets(yes|no)
				'google_pluses' => 'no', // Google pluses (yes|no) 
				'start_date' => date("Y-m-d"), // Task start date (YYYY-MM-DD)
				'days' => $fb_shares_duration, // Task duration (days)
				'signals' => $fb_shares_num, // Signals amount
				'distribution' => 'random', // Signal distribution (random|linear|sinus)
				'slower_on_weekends' => $fb_shares_weekends // Slower signals on weekends (10|20|20|30|40|60|70|80|90|100)%
			);

			// Build the POST query string
			$query_string='api_key='.$api_key.'&'.http_build_query($data);

			// Do the API Request using CURL functions
			$ch = curl_init();
			curl_setopt($ch,CURLOPT_POST, 1);
			curl_setopt($ch,CURLOPT_URL, 'http://www.markething.me/api/task.php');
			curl_setopt($ch,CURLOPT_HEADER, 0);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch,CURLOPT_TIMEOUT, 40);
			curl_setopt($ch,CURLOPT_POSTFIELDS, $query_string);
			$response = json_decode(curl_exec($ch), true);
			curl_close($ch);

			if ($response['error_code'] == 'SUCCESS' && is_numeric($response['task_id'])) {
				update_post_meta($post_id, 'wp-mm-fb-shares-task-id', $response['task_id']);
			} 
		}
		
		$google_plus_enabled = get_post_meta($post_id, 'wp-mm-google-plus-enabled', true);
		$google_plus_num = get_post_meta($post_id, 'wp-mm-google-plus-num', true);
		$google_plus_duration = get_post_meta($post_id, 'wp-mm-google-plus-duration', true);
		$google_plus_weekends = get_post_meta($post_id, 'wp-mm-google-plus-weekends', true);
		
		$google_plus_task_id = get_post_meta($post_id, 'wp-mm-google-plus-task-id', true);
		if ($google_plus_enabled == 1  && !is_numeric($google_plus_task_id)) {
		
			// Task submission data
			$data = array(
				'url' => $permalink, // Task url (http://www.yoursite.com)
				'comment' => '', // Comment text, spintax supported, optional
				'facebook_likes' => 'no', // Facebook likes (yes|no)
				'facebook_shares' => 'no', // Facebook shares (yes|no)
				'twitter_tweets' => 'no', // Twetter tweets(yes|no)
				'google_pluses' => 'yes', // Google pluses (yes|no) 
				'start_date' => date("Y-m-d"), // Task start date (YYYY-MM-DD)
				'days' => $google_plus_duration, // Task duration (days)
				'signals' => $google_plus_num, // Signals amount
				'distribution' => 'random', // Signal distribution (random|linear|sinus)
				'slower_on_weekends' => $google_plus_weekends // Slower signals on weekends (10|20|20|30|40|60|70|80|90|100)%
			);

			// Build the POST query string
			$query_string='api_key='.$api_key.'&'.http_build_query($data);

			// Do the API Request using CURL functions
			$ch = curl_init();
			curl_setopt($ch,CURLOPT_POST, 1);
			curl_setopt($ch,CURLOPT_URL, 'http://www.markething.me/api/task.php');
			curl_setopt($ch,CURLOPT_HEADER, 0);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch,CURLOPT_TIMEOUT, 40);
			curl_setopt($ch,CURLOPT_POSTFIELDS, $query_string);
			$response = json_decode(curl_exec($ch), true);
			curl_close($ch);

			if ($response['error_code'] == 'SUCCESS' && is_numeric($response['task_id'])) {
				update_post_meta($post_id, 'wp-mm-google-plus-task-id', $response['task_id']);
			} 
		}
		
		$tweets_enabled = get_post_meta($post_id, 'wp-mm-twitter-tweets-enabled', true);
		$tweets_num = get_post_meta($post_id, 'wp-mm-twitter-tweets-num', true);
		$tweets_duration = get_post_meta($post_id, 'wp-mm-twitter-tweets-duration', true);
		$tweets_weekends = get_post_meta($post_id, 'wp-mm-twitter-tweets-weekends', true);
		
		$tweets_task_id = get_post_meta($post_id, 'wp-mm-twitter-tweets-task-id', true);
		if ($tweets_enabled == 1  && !is_numeric($tweets_task_id)) {
		
			// Task submission data
			$data = array(
				'url' => $permalink, // Task url (http://www.yoursite.com)
				'comment' => '', // Comment text, spintax supported, optional
				'facebook_likes' => 'no', // Facebook likes (yes|no)
				'facebook_shares' => 'no', // Facebook shares (yes|no)
				'twitter_tweets' => 'yes', // Twetter tweets(yes|no)
				'google_pluses' => 'no', // Google pluses (yes|no) 
				'start_date' => date("Y-m-d"), // Task start date (YYYY-MM-DD)
				'days' => $tweets_duration, // Task duration (days)
				'signals' => $tweets_num, // Signals amount
				'distribution' => 'random', // Signal distribution (random|linear|sinus)
				'slower_on_weekends' => $tweets_weekends // Slower signals on weekends (10|20|20|30|40|60|70|80|90|100)%
			);

			// Build the POST query string
			$query_string='api_key='.$api_key.'&'.http_build_query($data);

			// Do the API Request using CURL functions
			$ch = curl_init();
			curl_setopt($ch,CURLOPT_POST, 1);
			curl_setopt($ch,CURLOPT_URL, 'http://www.markething.me/api/task.php');
			curl_setopt($ch,CURLOPT_HEADER, 0);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch,CURLOPT_TIMEOUT, 40);
			curl_setopt($ch,CURLOPT_POSTFIELDS, $query_string);
			$response = json_decode(curl_exec($ch), true);
			curl_close($ch);

			if ($response['error_code'] == 'SUCCESS' && is_numeric($response['task_id'])) {
				update_post_meta($post_id, 'wp-mm-twitter-tweets-task-id', $response['task_id']);
			} 
		}
    }
}

add_action('publish_post', 'wp_mm_create_tasks_on_publish');add_action('publish_page', 'wp_mm_create_tasks_on_publish');
function wp_mm_trash_post($post_id) {
	$api_key = get_option('wp-mm-api-key');
	
	$fb_likes_task_id = get_post_meta($post_id, 'wp-mm-fb-likes-task-id', true);
	
	if ($fb_likes_task_id) {
		$response = file_get_contents('http://www.markething.me/api/delete.php?api_key='.$api_key.'&task_id='.$fb_likes_task_id);
	}
		
	$fb_shares_task_id = get_post_meta($post_id, 'wp-mm-fb-shares-task-id', true);
	if ($fb_likes_task_id) {
		$response = file_get_contents('http://www.markething.me/api/delete.php?api_key='.$api_key.'&task_id='.$fb_shares_task_id);
	}
	
	$google_plus_task_id = get_post_meta($post_id, 'wp-mm-google-plus-task-id', true);
	if ($fb_likes_task_id) {
		$response = file_get_contents('http://www.markething.me/api/delete.php?api_key='.$api_key.'&task_id='.$google_plus_task_id);
	}
	
	$tweets_task_id = get_post_meta($post_id, 'wp-mm-twitter-tweets-task-id', true);
	if ($fb_likes_task_id) {
		$response = file_get_contents('http://www.markething.me/api/delete.php?api_key='.$api_key.'&task_id='.$tweets_task_id);
	}
	
	// FB Likes
	
	delete_post_meta($post_id, 'wp-mm-fb-likes-enabled', '');
	delete_post_meta($post_id, 'wp-mm-fb-likes-num', '');
	delete_post_meta($post_id, 'wp-mm-fb-likes-duration', '');
	delete_post_meta($post_id, 'wp-mm-fb-likes-weekends', '');
	delete_post_meta($post_id, 'wp-mm-fb-likes-task-id', '');

	// FB Shares
	delete_post_meta($post_id, 'wp-mm-fb-shares-enabled', '');
	delete_post_meta($post_id, 'wp-mm-fb-shares-num', '');
	delete_post_meta($post_id, 'wp-mm-fb-shares-duration', '');
	delete_post_meta($post_id, 'wp-mm-fb-shares-weekends', '');
	delete_post_meta($post_id, 'wp-mm-fb-shares-task-id', '');

	// Google Plus
	delete_post_meta($post_id, 'wp-mm-google-plus-enabled', '');
	delete_post_meta($post_id, 'wp-mm-google-plus-num', '');
	delete_post_meta($post_id, 'wp-mm-google-plus-duration', '');
	delete_post_meta($post_id, 'wp-mm-google-plus-weekends', '');
	delete_post_meta($post_id, 'wp-mm-google-plus-task-id', '');

	// Twitter Tweets
	delete_post_meta($post_id, 'wp-mm-twitter-tweets-enabled', '');
	delete_post_meta($post_id, 'wp-mm-twitter-tweets-num', '');
	delete_post_meta($post_id, 'wp-mm-twitter-tweets-duration', '');
	delete_post_meta($post_id, 'wp-mm-twitter-tweets-weekends', '');
	delete_post_meta($post_id, 'wp-mm-twitter-tweets-task-id', '');
} 
add_action('trash_post', 'wp_mm_trash_post');add_action('trash_page', 'wp_mm_trash_post');
?>