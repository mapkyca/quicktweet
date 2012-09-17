Quick PHP Tweet tool
====================

Very quickly, I needed a very quick tool to update a tweet stream automatically
from the command line (for some funky things to do with inotify).

Here it is.

Usage
-----

     php tweet.php "The status update"
	
Configuration
-------------

Create a file called ~/.mptweet_rc and populate it with your key details 
as follows...

    <?php
	$consumer_key = "........";
	$consumer_secret = "........";
	$access_token = "........";
	$access_token_secret = "........";
	

Created by
----------

Marcus Povey: <http://www.marcus-povey.co.uk>
