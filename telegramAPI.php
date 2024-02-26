<?php
function getMyDefaultAdministratorRights(
    $botToken,
    $for_channels = false
): bool|string
{
    $url = "getMyDefaultAdministratorRights";
    $data = [
        'for_channels' => $for_channels
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function setMyDefaultAdministratorRights(
    $botToken,
    $rights,
    $for_channels = false
): bool|string
{
    $url = "setMyDefaultAdministratorRights";
    $data = [
        'rights' => $rights,
        'for_channels' => $for_channels
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function getChatMenuButton(
    $botToken,
    $chat_id
): bool|string
{
    $url = "getChatMenuButton";
    $data = [
        'chat_id' => $chat_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function setChatMenuButton(
    $botToken,
    $chat_id,
    $menu_button): bool|string
{
    $url = "setChatMenuButton";
    $data = [
        'chat_id' => $chat_id,
        'menu_button' => $menu_button
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function getMyShortDescription($botToken): bool|string
{
    $url = "getMyShortDescription";
    $data = [];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function setMyShortDescription(
    $botToken,
    $short_description
): bool|string
{
    $url = "setMyShortDescription";
    $data = [
        'short_description' => $short_description
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function getMyDescription(
    $botToken
): bool|string
{
    $url = "getMyDescription";
    $data = [];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function setMyDescription(
    $botToken,
    $description
): bool|string
{
    $url = "setMyDescription";
    $data = [
        'description' => $description
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function setMyName(
    $botToken,
    $name
): bool|string
{
    $url = "setMyName";
    $data = [
        'name' => $name
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function getMyCommands(
    $botToken,
    $scope = null,
    $language_code = null
): bool|string
{
    $url = "getMyCommands";
    $data = [
        'scope' => $scope,
        'language_code' => $language_code
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function deleteMyCommands(
    $botToken,
    $scope = null,
    $language_code = null
): bool|string
{
    $url = "deleteMyCommands";
    $data = [
        'scope' => $scope,
        'language_code' => $language_code
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function setMyCommands(
    $botToken,
    $commands,
    $scope = null,
    $language_code = null
): bool|string {
    $url = "setMyCommands";
    $data = [
        'commands' => $commands,
        'scope' => $scope,
        'language_code' => $language_code
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function getUserChatBoosts(
    $botToken,
    $chat_id,
    $user_id
): bool|string
{
    $url = "getUserChatBoosts";
    $data = [
        'chat_id' => $chat_id,
        'user_id' => $user_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function answerCallbackQuery(
    $botToken,
    $callback_query_id,
    $text = null,
    $show_alert = false,
    $url = null,
    $cache_time = null
): bool|string
{
    $tg_url = "answerCallbackQuery";
    $data = [
        'callback_query_id' => $callback_query_id,
        'text' => $text,
        'show_alert' => $show_alert,
        'url' => $url,
        'cache_time' => $cache_time
    ];

    return sendGETRequestToTelegramServer($botToken, $tg_url, $data);
}

function unpinAllGeneralForumTopicMessages(
    $botToken,
    $chat_id
): bool|string
{
    $url = "unpinAllGeneralForumTopicMessages";
    $data = [
        'chat_id' => $chat_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function unhideGeneralForumTopic(
    $botToken,
    $chat_id
): bool|string
{
    $url = "unhideGeneralForumTopic";
    $data = [
        'chat_id' => $chat_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function hideGeneralForumTopic(
    $botToken,
    $chat_id
): bool|string
{
    $url = "hideGeneralForumTopic";
    $data = [
        'chat_id' => $chat_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function reopenGeneralForumTopic(
    $botToken,
    $chat_id
): bool|string
{
    $url = "reopenGeneralForumTopic";
    $data = [
        'chat_id' => $chat_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function closeGeneralForumTopic(
    $botToken,
    $chat_id
): bool|string
{
    $url = "closeGeneralForumTopic";
    $data = [
        'chat_id' => $chat_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function editGeneralForumTopic(
    $botToken,
    $chat_id,
    $name
): bool|string
{
    $url = "editGeneralForumTopic";
    $data = [
        'chat_id' => $chat_id,
        'name' => $name
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function unpinAllForumTopicMessages(
    $botToken,
    $chat_id,
    $message_thread_id
): bool|string
{
    $url = "unpinAllForumTopicMessages";
    $data = [
        'chat_id' => $chat_id,
        'message_thread_id' => $message_thread_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function deleteForumTopic(
    $botToken,
    $chat_id,
    $message_thread_id
): bool|string
{
    $url = "deleteForumTopic";
    $data = [
        'chat_id' => $chat_id,
        'message_thread_id' => $message_thread_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function reopenForumTopic(
    $botToken,
    $chat_id,
    $message_thread_id
): bool|string
{
    $url = "reopenForumTopic";
    $data = [
        'chat_id' => $chat_id,
        'message_thread_id' => $message_thread_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function closeForumTopic(
    $botToken,
    $chat_id,
    $message_thread_id
): bool|string
{
    $url = "closeForumTopic";
    $data = [
        'chat_id' => $chat_id,
        'message_thread_id' => $message_thread_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function editForumTopic(
    $botToken,
    $chat_id,
    $message_thread_id,
    $name = null,
    $icon_custom_emoji_id = null
): bool|string
{
    $url = "editForumTopic";
    $data = [
        'chat_id' => $chat_id,
        'message_thread_id' => $message_thread_id,
        'name' => $name,
        'icon_custom_emoji_id' => $icon_custom_emoji_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function createForumTopic(
    $botToken,
    $chat_id,
    $name,
    $icon_color = null,
    $icon_custom_emoji_id = null
): bool|string
{
    $url = "createForumTopic";
    $data = [
        'chat_id' => $chat_id,
        'name' => $name,
        'icon_color' => $icon_color,
        'icon_custom_emoji_id' => $icon_custom_emoji_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function getForumTopicIconStickers(
    $botToken
): bool|string
{
    $url = "getForumTopicIconStickers";

    return sendGETRequestToTelegramServer($botToken, $url);
}
function deleteChatStickerSet(
    $botToken,
    $chat_id
): bool|string
{
    $url = "deleteChatStickerSet";
    $data = [
        'chat_id' => $chat_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function setChatStickerSet(
    $botToken,
    $chat_id,
    $sticker_set_name
): bool|string
{
    $url = "setChatStickerSet";
    $data = [
        'chat_id' => $chat_id,
        'sticker_set_name' => $sticker_set_name
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function getChatMember(
    $botToken,
    $chat_id,
    $user_id
): bool|string
{
    $url = "getChatMember";
    $data = [
        'chat_id' => $chat_id,
        'user_id' => $user_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function getChatMemberCount(
    $botToken,
    $chat_id
): bool|string
{
    $url = "getChatMemberCount";
    $data = [
        'chat_id' => $chat_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function getChatAdministrators(
    $botToken,
    $chat_id
): bool|string
{
    $url = "getChatAdministrators";
    $data = [
        'chat_id' => $chat_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function leaveChat(
    $botToken,
    $chat_id
): bool|string
{
    $url = "leaveChat";
    $data = [
        'chat_id' => $chat_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function unpinAllChatMessages(
    $botToken,
    $chat_id
): bool|string
{
    $url = "unpinAllChatMessages";
    $data = [
        'chat_id' => $chat_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function unpinChatMessage(
    $botToken,
    $chat_id,
    $message_id
): bool|string
{
    $url = "unpinChatMessage";
    $data = [
        'chat_id' => $chat_id,
        'message_id' => $message_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function pinChatMessage(
    $botToken,
    $chat_id,
    $message_id,
    $disable_notification = false
): bool|string
{
    $url = "pinChatMessage";
    $data = [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'disable_notification' => $disable_notification
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function setChatDescription(
    $botToken,
    $chat_id,
    $description
): bool|string
{
    $url = "setChatDescription";
    $data = [
        'chat_id' => $chat_id,
        'description' => $description
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function setChatTitle(
    $botToken,
    $chat_id,
    $title
): bool|string
{
    $url = "setChatTitle";
    $data = [
        'chat_id' => $chat_id,
        'title' => $title
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function deleteChatPhoto(
    $botToken,
    $chat_id
): bool|string
{
    $url = "deleteChatPhoto";
    $data = [
        'chat_id' => $chat_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function setChatPhoto(
    $botToken,
    $chat_id,
    $photo
): bool|string
{
    $url = "setChatPhoto";
    $data = [
        'chat_id' => $chat_id,
        'photo' => $photo
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function declineChatJoinRequest(
    $botToken,
    $chat_id,
    $user_id
): bool|string
{
    $url = "declineChatJoinRequest";
    $data = [
        'chat_id' => $chat_id,
        'user_id' => $user_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function approveChatJoinRequest(
    $botToken,
    $chat_id,
    $user_id
): bool|string
{
    $url = "approveChatJoinRequest";
    $data = [
        'chat_id' => $chat_id,
        'user_id' => $user_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function revokeChatInviteLink(
    $botToken,
    $chat_id,
    $invite_link
): bool|string
{
    $url = "revokeChatInviteLink";
    $data = [
        'chat_id' => $chat_id,
        'invite_link' => $invite_link
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function editChatInviteLink(
    $botToken,
    $chat_id,
    $invite_link,
    $name = null,
    $expire_date = null,
    $member_limit = null,
    $creates_join_request = null
): bool|string
{
    $url = "editChatInviteLink";
    $data = [
        'chat_id' => $chat_id,
        'invite_link' => $invite_link,
        'name' => $name,
        'expire_date' => $expire_date,
        'member_limit' => $member_limit,
        'creates_join_request' => $creates_join_request
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function createChatInviteLink(
    $botToken,
    $chat_id,
    $name = null,
    $expire_date = null,
    $member_limit = null,
    $creates_join_request = null
): bool|string
{
    $url = "createChatInviteLink";
    $data = [
        'chat_id' => $chat_id,
        'name' => $name,
        'expire_date' => $expire_date,
        'member_limit' => $member_limit,
        'creates_join_request' => $creates_join_request
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function exportChatInviteLink(
    $botToken,
    $chat_id
): bool|string
{
    $url = "exportChatInviteLink";
    $data = [
        'chat_id' => $chat_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function setChatPermissions(
    $botToken,
    $chat_id,
    $permissions,
    $use_independent_chat_permissions = null
): bool|string
{
    $url = "setChatPermissions";
    $data = [
        'chat_id' => $chat_id,
        'permissions' => $permissions,
        'use_independent_chat_permissions' => $use_independent_chat_permissions
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function unbanChatSenderChat(
    $botToken,
    $chat_id,
    $sender_chat_id
): bool|string
{
    $url = "unbanChatSenderChat";
    $data = [
        'chat_id' => $chat_id,
        'sender_chat_id' => $sender_chat_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function banChatSenderChat(
    $botToken,
    $chat_id,
    $sender_chat_id
): bool|string
{
    $url = "banChatSenderChat";
    $data = [
        'chat_id' => $chat_id,
        'sender_chat_id' => $sender_chat_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function setChatAdministratorCustomTitle(
    $botToken,
    $chat_id,
    $user_id,
    $custom_title
): bool|string
{
    $url = "setChatAdministratorCustomTitle";
    $data = [
        'chat_id' => $chat_id,
        'user_id' => $user_id,
        'custom_title' => $custom_title
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function promoteChatMember(
    $botToken,
    $chat_id,
    $user_id,
    $is_anonymous = null,
    $can_manage_chat = null,
    $can_delete_messages = null,
    $can_manage_video_chats = null,
    $can_restrict_members = null,
    $can_promote_members = null,
    $can_change_info = null,
    $can_invite_users = null,
    $can_post_stories = null,
    $can_edit_stories = null,
    $can_delete_stories = null,
    $can_post_messages = null,
    $can_edit_messages = null,
    $can_pin_messages = null,
    $can_manage_topics = null
): bool|string
{
    $url = "promoteChatMember";
    $data = [
        'chat_id' => $chat_id,
        'user_id' => $user_id,
        'is_anonymous' => $is_anonymous,
        'can_manage_chat' => $can_manage_chat,
        'can_delete_messages' => $can_delete_messages,
        'can_manage_video_chats' => $can_manage_video_chats,
        'can_restrict_members' => $can_restrict_members,
        'can_promote_members' => $can_promote_members,
        'can_change_info' => $can_change_info,
        'can_invite_users' => $can_invite_users,
        'can_post_stories' => $can_post_stories,
        'can_edit_stories' => $can_edit_stories,
        'can_delete_stories' => $can_delete_stories,
        'can_post_messages' => $can_post_messages,
        'can_edit_messages' => $can_edit_messages,
        'can_pin_messages' => $can_pin_messages,
        'can_manage_topics' => $can_manage_topics
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function restrictChatMember(
    $botToken,
    $chat_id,
    $user_id,
    $permissions,
    $use_independent_chat_permissions = null,
    $until_date = null
): bool|string
{
    $url = "restrictChatMember";
    $data = [
        'chat_id' => $chat_id,
        'user_id' => $user_id,
        'permissions' => $permissions,
        'use_independent_chat_permissions' => $use_independent_chat_permissions,
        'until_date' => $until_date
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function unbanChatMember(
    $botToken,
    $chat_id,
    $user_id,
    $only_if_banned = null
): bool|string
{
    $url = "unbanChatMember";
    $data = [
        'chat_id' => $chat_id,
        'user_id' => $user_id,
        'only_if_banned' => $only_if_banned
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function banChatMember(
    $botToken,
    $chat_id,
    $user_id,
    $until_date = null,
    $revoke_messages = null
): bool|string
{
    $url = "banChatMember";
    $data = [
        'chat_id' => $chat_id,
        'user_id' => $user_id,
        'until_date' => $until_date,
        'revoke_messages' => $revoke_messages
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function getFile(
    $botToken,
    $file_id
): bool|string
{
    $url = "getFile";
    $data = [
        'file_id' => $file_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function getUserProfilePhotos(
    $botToken,
    $user_id,
    $offset = null,
    $limit = null
): bool|string
{
    $url = "getUserProfilePhotos";
    $data = [
        'user_id' => $user_id,
        'offset' => $offset,
        'limit' => $limit
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function setMessageReaction(
    $botToken,
    $chat_id,
    $message_id,
    $reaction = null,
    $is_big = null
): bool|string
{
    $url = "setMessageReaction";
    $data = [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'reaction' => $reaction,
        'is_big' => $is_big
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function sendChatAction(
    $botToken,
    $chat_id,
    $action,
    $message_thread_id = null
): bool|string
{
    $url = "sendChatAction";
    $data = [
        'chat_id' => $chat_id,
        'action' => $action,
        'message_thread_id' => $message_thread_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function sendDice(
    $botToken,
    $chat_id,
    $message_thread_id = null,
    $emoji = null,
    $disable_notification = null,
    $protect_content = null,
    $reply_parameters = null,
    $reply_markup = null
): bool|string
{
    $url = "sendDice";
    $data = [
        'chat_id' => $chat_id,
        'message_thread_id' => $message_thread_id,
        'emoji' => $emoji,
        'disable_notification' => $disable_notification,
        'protect_content' => $protect_content,
        'reply_parameters' => $reply_parameters,
        'reply_markup' => $reply_markup
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function sendPoll(
    $botToken,
    $chat_id,
    $question,
    $options,
    $message_thread_id = null,
    $is_anonymous = null,
    $type = null,
    $allows_multiple_answers = null,
    $correct_option_id = null,
    $explanation = null,
    $explanation_parse_mode = null,
    $explanation_entities = null,
    $open_period = null,
    $close_date = null,
    $is_closed = null,
    $disable_notification = null,
    $protect_content = null,
    $reply_parameters = null,
    $reply_markup = null
): bool|string
{
    $url = "sendPoll";
    $data = [
        'chat_id' => $chat_id,
        'message_thread_id' => $message_thread_id,
        'question' => $question,
        'options' => $options,
        'is_anonymous' => $is_anonymous,
        'type' => $type,
        'allows_multiple_answers' => $allows_multiple_answers,
        'correct_option_id' => $correct_option_id,
        'explanation' => $explanation,
        'explanation_parse_mode' => $explanation_parse_mode,
        'explanation_entities' => $explanation_entities,
        'open_period' => $open_period,
        'close_date' => $close_date,
        'is_closed' => $is_closed,
        'disable_notification' => $disable_notification,
        'protect_content' => $protect_content,
        'reply_parameters' => $reply_parameters,
        'reply_markup' => $reply_markup
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function sendContact(
    $botToken,
    $chat_id,
    $phone_number,
    $first_name,
    $last_name = null,
    $vcard = null,
    $disable_notification = null,
    $protect_content = null,
    $reply_parameters = null,
    $reply_markup = null
): bool|string
{
    $url = "sendContact";
    $data = [
        'chat_id' => $chat_id,
        'phone_number' => $phone_number,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'vcard' => $vcard,
        'disable_notification' => $disable_notification,
        'protect_content' => $protect_content,
        'reply_parameters' => $reply_parameters,
        'reply_markup' => $reply_markup
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function sendVenue(
    $botToken,
    $chat_id,
    $latitude,
    $longitude,
    $title,
    $address,
    $foursquare_id = null,
    $foursquare_type = null,
    $google_place_id = null,
    $google_place_type = null,
    $disable_notification = null,
    $message_thread_id = null,
    $protect_content = null,
    $reply_parameters = null
): bool|string
{
    $url = "sendVenue";
    $data = [
        'chat_id' => $chat_id,
        'latitude' => $latitude,
        'longitude' => $longitude,
        'title' => $title,
        'address' => $address,
        'foursquare_id' => $foursquare_id,
        'foursquare_type' => $foursquare_type,
        'google_place_id' => $google_place_id,
        'google_place_type' => $google_place_type,
        'message_thread_id' => $message_thread_id,
        'disable_notification' => $disable_notification,
        'protect_content' => $protect_content,
        'reply_parameters' => $reply_parameters
    ];
    return sendGETRequestToTelegramServer($botToken, $url, $data);
}
function sendLocation(
    $botToken,
    $chat_id,
    $latitude,
    $longitude,
    $horizontal_accuracy = null,
    $live_period = null,
    $heading = null,
    $proximity_alert_radius = null,
    $disable_notification = null,
    $message_thread_id = null,
    $protect_content = null,
    $reply_parameters = null
): bool|string
{
    $url = "sendLocation";
    $data = [
        'chat_id' => $chat_id,
        'latitude' => $latitude,
        'longitude' => $longitude,
        'horizontal_accuracy' => $horizontal_accuracy,
        'message_thread_id' => $message_thread_id,
        'live_period' => $live_period,
        'heading' => $heading,
        'proximity_alert_radius' => $proximity_alert_radius,
        'disable_notification' => $disable_notification,
        'protect_content' => $protect_content,
        'reply_parameters' => $reply_parameters
    ];
    return sendGETRequestToTelegramServer($botToken, $url, $data);
}
function sendMediaGroup(
    $botToken,
    $chat_id,
    $media,
    $disable_notification = null,
    $message_thread_id = null,
    $protect_content = null,
    $reply_parameters = null
): bool|string
{
    $url = "sendMediaGroup";
    $data = [
        'chat_id' => $chat_id,
        'media' => $media,
        'message_thread_id' => $message_thread_id,
        'disable_notification' => $disable_notification,
        'protect_content' => $protect_content,
        'reply_parameters' => $reply_parameters
    ];
    return sendGETRequestToTelegramServer($botToken, $url, $data);
}
function sendVideoNote(
    $botToken,
    $chat_id,
    $video_note,
    $duration = null,
    $length = null,
    $thumbnail = null,
    $disable_notification = null,
    $protect_content = null,
    $reply_parameters = null,
    $reply_markup = null
): bool|string
{
    $url = "sendVideoNote";
    $data = [
        'chat_id' => $chat_id,
        'video_note' => $video_note,
        'duration' => $duration,
        'length' => $length,
        'thumbnail' => $thumbnail,
        'disable_notification' => $disable_notification,
        'protect_content' => $protect_content,
        'reply_parameters' => $reply_parameters,
        'reply_markup' => $reply_markup
    ];
    return sendGETRequestToTelegramServer($botToken, $url, $data);
}
function sendVoice(
    $botToken,
    $chat_id,
    $voice,
    $duration = null,
    $width = null,
    $height = null,
    $caption = null,
    $parse_mode = null,
    $caption_entities = null,
    $disable_notification = null,
    $protect_content = null,
    $reply_parameters = null,
    $reply_markup = null
): bool|string
{
    $url = "sendVoice";
    $data = [
        'chat_id' => $chat_id,
        'voice' => $voice,
        'duration' => $duration,
        'width' => $width,
        'height' => $height,
        'caption' => $caption,
        'parse_mode' => $parse_mode,
        'caption_entities' => $caption_entities,
        'disable_notification' => $disable_notification,
        'protect_content' => $protect_content,
        'reply_parameters' => $reply_parameters,
        'reply_markup' => $reply_markup
    ];
    return sendGETRequestToTelegramServer($botToken, $url, $data);
}
function sendAnimation(
    $botToken,
    $chat_id,
    $animation,
    $thumbnail = null,
    $duration = null,
    $width = null,
    $height = null,
    $caption = null,
    $parse_mode = null,
    $caption_entities = null,
    $has_spoiler = null,
    $disable_notification = null,
    $protect_content = null,
    $reply_parameters = null,
    $reply_markup = null
): bool|string
{
    $url = "sendDocument";
    $data = [
        'chat_id' => $chat_id,
        'animation' => $animation,
        'thumbnail' => $thumbnail,
        'duration' => $duration,
        'width' => $width,
        'height' => $height,
        'caption' => $caption,
        'parse_mode' => $parse_mode,
        'has_spoiler' => $has_spoiler,
        'caption_entities' => $caption_entities,
        'disable_notification' => $disable_notification,
        'protect_content' => $protect_content,
        'reply_parameters' => $reply_parameters,
        'reply_markup' => $reply_markup
    ];
    return sendGETRequestToTelegramServer($botToken, $url, $data);
}
function sendVideo(
    $botToken,
    $chat_id,
    $video,
    $duration = null,
    $height = null,
    $width = null,
    $thumbnail = null,
    $caption = null,
    $parse_mode = null,
    $caption_entities = null,
    $has_spoiler = null,
    $supports_streaming = null,
    $message_thread_id = null,
    $disable_notification = null,
    $protect_content = null,
    $reply_parameters = null,
    $reply_markup = null
): bool|string
{
    $url = "sendVideo";
    $data = [
        'chat_id' => $chat_id,
        'video' => $video,
        'duration' => $duration,
        'width' => $width,
        'height' => $height,
        'thumbnail' => $thumbnail,
        'caption' => $caption,
        'parse_mode' => $parse_mode,
        'message_thread_id' => $message_thread_id,
        'supports_streaming' => $supports_streaming,
        'has_spoiler' => $has_spoiler,
        'caption_entities' => $caption_entities,
        'disable_notification' => $disable_notification,
        'protect_content' => $protect_content,
        'reply_parameters' => $reply_parameters,
        'reply_markup' => $reply_markup
    ];
    return sendGETRequestToTelegramServer($botToken, $url, $data);
}
function sendDocument(
    $botToken,
    $chat_id,
    $document,
    $thumbnail = null,
    $caption = null,
    $parse_mode = null,
    $caption_entities = null,
    $disable_content_type_detection = null,
    $message_thread_id = null,
    $disable_notification = null,
    $protect_content = null,
    $reply_parameters = null,
    $reply_markup = null
): bool|string
{
    $url = "sendDocument";
    $data = [
        'chat_id' => $chat_id,
        'document' => $document,
        'thumbnail' => $thumbnail,
        'caption' => $caption,
        'parse_mode' => $parse_mode,
        'message_thread_id' => $message_thread_id,
        'caption_entities' => $caption_entities,
        'disable_content_type_detection' => $disable_content_type_detection,
        'disable_notification' => $disable_notification,
        'protect_content' => $protect_content,
        'reply_parameters' => $reply_parameters,
        'reply_markup' => $reply_markup
    ];
    return sendGETRequestToTelegramServer($botToken, $url, $data);
}
function sendAudio(
    $botToken,
    $chat_id,
    $audio,
    $caption = null,
    $parse_mode = null,
    $caption_entities = null,
    $duration = null,
    $performer = null,
    $title = null,
    $thumbnail = null,
    $message_thread_id = null,
    $disable_notification = null,
    $protect_content = null,
    $reply_parameters = null,
    $reply_markup = null
): bool|string
{
    $url = "sendAudio";
    $data = [
        'chat_id' => $chat_id,
        'audio' => $audio,
        'caption' => $caption,
        'parse_mode' => $parse_mode,
        'message_thread_id' => $message_thread_id,
        'caption_entities' => $caption_entities,
        'duration' => $duration,
        'performer' => $performer,
        'title' => $title,
        'thumbnail' => $thumbnail,
        'disable_notification' => $disable_notification,
        'protect_content' => $protect_content,
        'reply_parameters' => $reply_parameters,
        'reply_markup' => $reply_markup
    ];
    return sendGETRequestToTelegramServer($botToken, $url, $data);
}
function sendPhoto(
    $botToken,
    $chat_id,
    $photo,
    $message_thread_id = null,
    $caption = null,
    $parse_mode = null,
    $caption_entities = null,
    $has_spoiler = null,
    $disable_notification = null,
    $protect_content = null,
    $reply_parameters = null,
    $reply_markup = null
): bool|string
{
    $url = "sendPhoto";
    $data = [
        'chat_id' => $chat_id,
        'photo' => $photo,
        'message_thread_id' => $message_thread_id,
        'caption' => $caption,
        'parse_mode' => $parse_mode,
        'has_spoiler' => $has_spoiler,
        'caption_entities' => $caption_entities,
        'disable_notification' => $disable_notification,
        'protect_content' => $protect_content,
        'reply_parameters' => $reply_parameters,
        'reply_markup' => $reply_markup
    ];
    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function copyMessages(
    $botToken,
    $chat_id,
    $from_chat_id,
    $message_ids,
    $message_thread_id = null,
    $remove_caption = null,
    $protect_content = null,
    $disable_notification = null
): bool|string
{
    $url = "copyMessages";
    $data = [
        'chat_id' => $chat_id,
        'from_chat_id' => $from_chat_id,
        'message_ids' => $message_ids,
        'message_thread_id' => $message_thread_id,
        'remove_caption' => $remove_caption,
        'disable_notification' => $disable_notification,
        'protect_content' => $protect_content
    ];
    return sendGETRequestToTelegramServer($botToken, $url, $data);
}
function copyMessage(
    $botToken,
    $chat_id,
    $from_chat_id,
    $message_id,
    $message_thread_id = null,
    $caption = null,
    $parse_mode = null,
    $caption_entities = null,
    $disable_notification = null,
    $protect_content = null,
    $reply_parameters = null,
    $reply_markup = null
): bool|string
{
    $url = "copyMessage";
    $data = [
        'chat_id' => $chat_id,
        'from_chat_id' => $from_chat_id,
        'message_id' => $message_id,
        'message_thread_id' => $message_thread_id,
        'caption' => $caption,
        'parse_mode' => $parse_mode,
        'caption_entities' => $caption_entities,
        'disable_notification' => $disable_notification,
        'protect_content' => $protect_content,
        'reply_parameters' => $reply_parameters,
        'reply_markup' => $reply_markup,
    ];
    return sendGETRequestToTelegramServer($botToken, $url, $data);
}
function forwardMessages(
    $botToken,
    $chat_id,
    $from_chat_id,
    $message_ids,
    $message_thread_id = null,
    $disable_notification = null,
    $protect_content = null
): bool|string
{
    $url = "forwardMessages";
    $data = [
        'chat_id' => $chat_id,
        'message_thread_id' => $message_thread_id,
        'disable_notification' => $disable_notification,
        'protect_content' => $protect_content,
        'from_chat_id' => $from_chat_id,
        'message_ids' => $message_ids
    ];
    return sendGETRequestToTelegramServer($botToken, $url, $data);
}
function forwardMessage(
    $botToken,
    $chat_id,
    $from_chat_id,
    $message_id,
    $message_thread_id = null,
    $disable_notification = null,
    $protect_content = null,
): bool|string
{
    $url = "forwardMessage";
    $data = [
        'chat_id' => $chat_id,
        'message_thread_id' => $message_thread_id,
        'disable_notification' => $disable_notification,
        'protect_content' => $protect_content,
        'from_chat_id' => $from_chat_id,
        'message_id' => $message_id
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}
function sendMessage(
    $botToken,
    $chat_id,
    $text,
    $message_thread_id = null,
    $parse_mode = null,
    $entities = null,
    $link_preview_options = null,
    $disable_notification = null,
    $protect_content = null,
    $reply_parameters = null,
    $reply_markup = null
): bool|string
{
    $url = "sendMessage";
    $data = [
        'chat_id' => $chat_id,
        'text' => $text,
        'message_thread_id' => $message_thread_id,
        'parse_mode' => $parse_mode,
        'entities' => $entities,
        'link_preview_options' => $link_preview_options,
        'disable_notification' => $disable_notification,
        'protect_content' => $protect_content,
        'reply_parameters' => $reply_parameters,
        'reply_markup' => $reply_markup
    ];

    return sendGETRequestToTelegramServer($botToken, $url, $data);
}

function logOut($botToken): bool|string
{
    $url = "logOut";
    return sendGETRequestToTelegramServer($botToken, $url);
}
function getMe($botToken): bool|string
{
    $url = "getMe";
    return sendGETRequestToTelegramServer($botToken, $url);
}
function sendGETRequestToTelegramServer($botToken, $url, $data = []): bool|string
{
    $TELEGRAM_URL = "https://api.telegram.org/bot$botToken/$url";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $TELEGRAM_URL);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}