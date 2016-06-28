<?php
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

define("CONSUMER_KEY",    "Pm0OoEbrP00cjJsgGhFtnv8ES");
define("CONSUMER_SECRET", "sD0ffwvWmEeFU6KHvXVlxOazIgICgWwxzWb4hKxPA1WTqL3I7e");
$access_token = "738509656247668736-abFyHNW7zCgrGquLhdavrlBdMYaWGtY";
$access_token_secret = "HUsR4g0m6hqQwSVhv5QNsnV2Y0DufZQhinLqXdUn9OUlR";

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token, $access_token_secret);
$statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);
//$statuses = $connection->get("search/tweets", ["q" => "clinton"]);


/*$response = [];

foreach ($statuses as $key => $tweet) {
	 array_push($response, $tweet->text);
	 array_push($response, $tweet->created_at);
	 array_push($response, $tweet->user->screen_name);
}

print_r($response[0]);

print_r($response[1]);
print_r('<br>');
print_r($response[2]);

print_r('<br><br><br>');

print_r('<br><br><br>');
print_r($response);

*/


print_r($statuses->text);
print_r('<br><br><br>');
/*print_r($statuses[0]->created_at);
print_r('<br><br><br>');
print_r($statuses[0]->user->screen_name);
print_r('<br><br><br>');
*/


//echo json_encode($statuses);
print_r($statuses);