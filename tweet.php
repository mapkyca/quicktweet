#!/bin/php
<?php

	require_once(dirname(__FILE__) . '/twitteroauth/twitteroauth.php');
	
	$home = getenv("HOME");
	if (!include("$home/.mptweet_rc")) { // Include keys
		echo "Please create a $home/.mptweet_rc containing...\n\n
			<?php
				\t\$consumer_key = \"...........\";
				\t\$consumer_secret = \".............\";
				\t\$access_token = \"...............\";
				\t\$access_token_secret = \".............\";
				
		";
		die();
	}
	
	
	$tweet = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
	
	$update = $argv[1];
	
	
	
	
	$result = $tweet->post('statuses/update', array ('status' => $update));
	if (isset($result->error)) echo $result->error."\n";
