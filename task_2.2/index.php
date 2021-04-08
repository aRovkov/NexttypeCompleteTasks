<?php
function getLinks($url) {
	$body = file_get_contents($url);
	
	preg_match_all('/<a\s.*?href="(.+?)".*?>.*?<\/a>/', $body, $arr, PREG_PATTERN_ORDER);
	
	return ($arr[1]);
}

echo '<pre>';
print_r(
	getLinks('https://www.google.com/search?q=google&oq=goo&aqs=chrome.3.69i57j69i59j35i19i39j0i131i433j0j69i60l3.4784j0j4&sourceid=chrome&ie=UTF-8')
);
echo '</pre>';