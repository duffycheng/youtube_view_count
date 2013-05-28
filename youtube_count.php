<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Get Youtube Counts</title>
</head>
<body>
<?php
function get_Youtube_count($video_id){
	$JSON = file_get_contents("https://gdata.youtube.com/feeds/api/videos/{$video_id}?v=2&alt=json");
	$JSON_Data = json_decode($JSON);
	$views = $JSON_Data->{'entry'}->{'yt$statistics'}->{'viewCount'};
	return $views;
}
echo "Youtube id - BkTOBUTLXJ8 - view count: ".get_Youtube_count('BkTOBUTLXJ8');
?>
</body>
</html>