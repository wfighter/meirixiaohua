<?php	
function welcome_email_send(&$registration_details)
{
	global $main_smarty, $current_user;
	
	include_once(mnminclude.'user.php');

	// Check User ID != 0
	if ($registration_details['id'] > 0)
	{		

		$username = $registration_details['username']; 
		$password = $registration_details['password']; 
		$email = $registration_details['email']; 
		$id = $registration_details['id'];

		$user = new User();
		$user->id = $id;
				
		// Check User Data
		if ($user->read())
		{
			//include_once(mnmmodules . 'welcome_email/includes/htmlMimeMail.php');

			// Current Date/Time of Server
			$thisDate = date("M d, Y");
			$thisTime = date("H:i:s");
			
			// User Information
			$thisUserName = $username;
			$thisUserEmail = $email;
			
			// Pligg Information
			$siteName = $main_smarty->get_config_vars('PLIGG_Visual_Name'); 
			$siteEmail = $main_smarty->get_config_vars('PLIGG_PassEmail_From');
			
			$installedURL = my_base_url;
			$installedBase = my_pligg_base;
			
			// Email Subject
			$messageSubject = "欢迎加入".$siteName."!";
      $messageSubject = "=?UTF-8?B?".base64_encode($messageSubject)."?=";
			
			// Email Message
			$messageText  = "您好, ".$thisUserName.".\n\n";
			$messageText .= "您成功在 ".$siteName." 网注册成为正式用户.\n\n";
			$messageText .= "请保存好以下信息以便将来查询:\n";
			$messageText .= "-----------------------------------------\n\n";		
			$messageText .= "  登陆地址: ".$installedURL.$installedBase."/login.php\n\n";
			$messageText .= "  用户名.: ".$thisUserName."\n";
			$messageText .= "  密码.: (是您注册时填写的密码)\n\n";
			$messageText .= "-----------------------------------------\n";		
      $messageText .= "每日笑话，这里是一个分享快乐的网站。\n";
$messageText .= "在这里你可以浏览文章：\n";
$messageText .= "遇到喜欢的文章可以点击收藏，随时查看。再也不用担心在朋友面前想讲笑话却只想起来一半的尴尬哦。\n";
$messageText .= "如果你加入了群组，那么可以把喜欢的笑话分享给群组内。每个人的口味千差万别，相信你可以创建或找到属于自己的志同道合的团体哦。\n";
$messageText .= "如果有哪位网友发布的笑话特别对你的胃口，你还可以通过添加好友来关注他。他的每一个更新你可以轻松掌握。\n";

$messageText .= "看了别人分享的那么多笑破肚皮的笑话你一定也有了创作的冲动吧？\n";
$messageText .= "每日笑话网站对所有的内容保留其原始署名。如果您有精彩的原创，你可以直接和meirixiaohua@126.com联系。我们会尽可能的满足你的个性化需求，将这里打造成一个温馨舒适的的发布平台。\n";
$messageText .= "如果您第一时间发现了精彩的内容，不要忘了及时分享回馈朋友们哦。为了尊重原创者的辛苦劳动，请在转发时给作者留言哦。我们推荐的留言如下：\n";
$messageText .= "“这段子太精彩了，我已经把它分享到www.meirixiaohua.com给我的朋友们。您作品中的署名和转载信息会被尽量保留。如果您需要额外声明该作品的所有权或对该次转发有意见请与每日笑话网站联系。”\n";

$messageText .= "好友关注，同好群组，每日更新。每日笑话网站尽心给您提供一个开心喜悦的每一天。希望您玩的开心。\n";
      /*
      $file_handle = fopen($my_pligg_base."\modules\welcome_email\WelcomeMessage.txt", "r");
      while (!feof($file_handle)) {
          $messageText .= fgets($file_handle);
      }
      fclose($file_handle);
      */
			$messageText .= "Email has been automatically generated on ".$thisDate." at ".$thisTime.".\n";
			
			// Setup Mail Class
			//$mail = new htmlMimeMail();
			
			// Set Mail Body Text
      //$mail->setText($messageText);
			
			// Set Mail From
			//$mail->setFrom($siteName." <".$siteEmail.">");
			
			// Set Mail Subject
			//$mail->setSubject($messageSubject);	
			
			// Send Mail
			//$mail->send(array($thisUserEmail));
      
      $headers = 'From: ' . $main_smarty->get_config_vars("PLIGG_PassEmail_From") . "\r\n";
			$headers .= "Content-type: text/plain; charset=utf-8\r\n";

			mail($thisUserEmail, $messageSubject, $messageText, $headers);
			
		} else {
			
			// Unable to find user data
			echo "Module Error #2";
			die;
			
			// To disable this error message and continue with registration,
			// remove the above ELSE statement this comment is within.
		}
	} else {
	
		// Unable to find User ID
		echo "Module Error #1";
		die;
	}
}
	
?>