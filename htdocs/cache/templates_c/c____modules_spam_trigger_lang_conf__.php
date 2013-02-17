<?php $this->_confs = array (
  'PLIGG_Spam_Trigger' => 'Spam Trigger Module',
  'PLIGG_Spam_Trigger_Instructions' => 'This module works by checking submitted comments and stories for words or phrases that are located in three seperate spam dictionaries. These dictionaries are classified as Light, Medium and Hard Triggers. If a match is found in one of these dictionaries the story or comment will either be held for moderation or automatically deleted. You will be alerted to stories and comments that need to be moderated when logged in to the Pligg Admin Panel. Users will see an alert message box appear when one of their stories or comments has been held for moderation or deleted. Please read this entire page or the <a href=\'./admin/admin_modules.php?action=readme&module=spam_trigger\'>readme file</a> because it is very important that you understand how this module works before you configure it.</p><p>When adding new words to this module simply enter the word or words and then hit enter to go to the next line. The dictionary will check for upper and lower case variations of words so as an example the spam dictionary word \'profane\' will still catch the word \'PrOfAnE\'. Also partial words will be found so that the dictionary word \'profane\' will catch \'beforePROFANEafter\'.',
  'PLIGG_Spam_Trigger_Submit' => 'Submit',
  'PLIGG_Spam_Trigger_Light_List' => 'Light Trigger',
  'PLIGG_Spam_Trigger_Medium_List' => 'Medium Trigger',
  'PLIGG_Spam_Trigger_Hard_List' => 'Hard Trigger',
  'PLIGG_Spam_Trigger_Light_Description' => 'When you install this module it will automatically use a list of many spam targeted words and phrases as well as profantiy. The Light Trigger list is used to mark stories as moderated when someone uses a word or phrase that appears in this dictionary. This prevents potential spam and profantiy from appearing publicly on your site.<br />',
  'PLIGG_Spam_Trigger_Medium_Description' => 'The Medium Trigger will cause any stories or comments that match this list to be marked as discarded, resulting on matching submissions being automatically deleted.<br />',
  'PLIGG_Spam_Trigger_Hard_Description' => 'Anyone who uses a word of phrase that appears on the Hard Trigger list will not only have their comment or story removed, but <strong>ALL of their stories and comments will be removed</strong>. This would be the same as marking a user as \'Killspam\' from the admin panel. Not only will it remove their content, but it will randomly change their password, email and immediately log them out. We highly recommend that you carefully consider whether you want to use this method since it is very powerful and if a legitimate user accidentally uses a phrase from this dictionary it will result in their expulsion from your site.<br />',
  'PLIGG_Spam_Trigger_Comment_Moderated' => '<h3>Attention!</h3>Your comment has been discarded due to your choice of words which appear on our antispam list. Feel free to resubmit your content with alternate words and phrases if you think that your comment contains legitimate content.',
  'PLIGG_Spam_Trigger_Comment_Deleted' => '<h3>Attention!</h3>Your comment has been automatically deleted from this site due to the use of words that appear on our antispam list.',
  'PLIGG_Spam_Trigger_Story_Moderated' => '<h3>Attention!</h3>Your story has been held for moderation. Please check back later after it has been approved by a site moderator.',
  'PLIGG_Spam_Trigger_Story_Discarded' => '<h3>Attention!</h3>Your story has been discarded due to your choice of words which appear on our antispam list. Feel free to resubmit your content with alternate words and phrases if you think that your story contains legitimate content.',
  'PLIGG_Spam_Trigger_Story_Deleted' => '<h3>Attention!</h3>Your story has been automatically deleted from this site due to the use of words that appear on our antispam list.',
); ?>