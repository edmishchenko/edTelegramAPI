<?php
include("telegramAction.php");
class getUpdatesAction extends TelegramAction {
    protected function getUrl(): string
    {
        return "getUpdates";
    }

    protected function getRequiredParams(): array
    {
        return [];
    }

    protected function getData(array $params): array
    {
        return [];
    }
}

class getMeAction extends TelegramAction {
    protected function getUrl(): string
    {
        return "getMe";
    }

    protected function getRequiredParams(): array
    {
        return [];
    }

    protected function getData(array $params): array
    {
        return [];
    }
}

class logOutAction extends TelegramAction {
    protected function getUrl(): string
    {
        return "logOut";
    }

    protected function getRequiredParams(): array
    {
        return [];
    }

    protected function getData(array $params): array
    {
        return [];
    }
}

class closeAction extends TelegramAction {
    protected function getUrl(): string
    {
        return "close";
    }

    protected function getRequiredParams(): array
    {
        return [];
    }

    protected function getData(array $params): array
    {
        return [];
    }
}
class sendMessageAction extends TelegramAction {
    protected function getUrl(): string {
        return "sendMessage";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'text'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['message_thread_id', 'parse_mode', 'entities', 'link_preview_options', 'disable_notification', 'protect_content', 'reply_parameters', 'reply_markup']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class forwardMessageAction extends TelegramAction {
    protected function getUrl(): string {
        return "forwardMessage";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'from_chat_id', 'message_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['message_thread_id', 'disable_notification', 'protect_content']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class forwardMessagesAction extends TelegramAction {
    protected function getUrl(): string {
        return "forwardMessages";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'from_chat_id', 'message_ids'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['message_thread_id', 'disable_notification', 'protect_content']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class copyMessageAction extends TelegramAction {
    protected function getUrl(): string {
        return "copyMessage";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'from_chat_id', 'message_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['message_thread_id', 'caption', 'parse_mode', 'caption_entities', 'disable_notification', 'protect_content', 'reply_parameters', 'reply_markup']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class copyMessagesAction extends TelegramAction {
    protected function getUrl(): string {
        return "copyMessages";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'from_chat_id', 'message_ids'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['message_thread_id', 'disable_notification', 'protect_content', 'remove_caption']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class sendPhotoAction extends TelegramAction {
    protected function getUrl(): string {
        return "sendPhoto";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'photo'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['message_thread_id', 'caption', 'parse_mode', 'caption_entities', 'has_spoiler', 'disable_notification', 'protect_content', 'reply_parameters', 'reply_markup']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class sendAudioAction extends TelegramAction {
    protected function getUrl(): string {
        return "sendAudio";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'audio'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['message_thread_id', 'caption', 'parse_mode', 'caption_entities', 'duration', 'performer', 'title', 'thumbnail', 'disable_notification', 'protect_content', 'reply_parameters', 'reply_markup']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class sendDocumentAction extends TelegramAction {
    protected function getUrl(): string {
        return "sendDocument";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'document'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['message_thread_id', 'thumbnail', 'caption', 'parse_mode', 'caption_entities', 'disable_content_type_detection', 'disable_notification', 'protect_content', 'reply_parameters', 'reply_markup']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class sendVideoAction extends TelegramAction {
    protected function getUrl(): string {
        return "sendVideo";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'video'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['message_thread_id', 'duration', 'width', 'height', 'thumbnail', 'caption', 'parse_mode', 'caption_entities', 'has_spoiler', 'supports_streaming', 'disable_notification', 'protect_content', 'reply_parameters', 'reply_markup']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class sendAnimationAction extends TelegramAction {
    protected function getUrl(): string {
        return "sendAnimation";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'animation'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['message_thread_id', 'duration', 'width', 'height', 'thumbnail', 'caption', 'parse_mode', 'caption_entities', 'has_spoiler', 'disable_notification', 'protect_content', 'reply_parameters', 'reply_markup']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class sendVoiceAction extends TelegramAction {
    protected function getUrl(): string {
        return "sendVoice";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'voice'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['message_thread_id', 'caption', 'parse_mode', 'caption_entities', 'duration', 'disable_notification', 'protect_content', 'reply_parameters', 'reply_markup']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class sendVideoNoteAction extends TelegramAction {
    protected function getUrl(): string {
        return "sendVideoNote";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'video_note'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['message_thread_id', 'duration', 'length', 'thumbnail', 'disable_notification', 'protect_content', 'reply_parameters', 'reply_markup']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class sendMediaGroupAction extends TelegramAction {
    protected function getUrl(): string {
        return "sendMediaGroup";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'media'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['message_thread_id', 'disable_notification', 'protect_content', 'reply_parameters']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class sendLocationAction extends TelegramAction {
    protected function getUrl(): string {
        return "sendLocation";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'latitude', 'longitude'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['message_thread_id', 'horizontal_accuracy', 'live_period', 'heading', 'proximity_alert_radius', 'disable_notification', 'protect_content', 'reply_parameters', 'reply_markup']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class sendVenueAction extends TelegramAction {
    protected function getUrl(): string {
        return "sendVenue";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'latitude', 'longitude', 'title', 'address'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['message_thread_id', 'foursquare_id', 'foursquare_type', 'google_place_id', 'google_place_type', 'disable_notification', 'protect_content', 'reply_parameters', 'reply_markup']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class sendContactAction extends TelegramAction {
    protected function getUrl(): string {
        return "sendContact";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'phone_number', 'first_name'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['message_thread_id', 'last_name', 'vcard', 'disable_notification', 'protect_content', 'reply_parameters', 'reply_markup']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class sendPollAction extends TelegramAction {
    protected function getUrl(): string {
        return "sendPoll";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'question', 'options'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['message_thread_id', 'is_anonymous', 'type', 'allows_multiple_answers', 'correct_option_id', 'explanation', 'explanation_parse_mode', 'explanation_entities', 'open_period', 'close_date', 'is_closed', 'disable_notification', 'protect_content', 'reply_parameters', 'reply_markup']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class sendDiceAction extends TelegramAction {
    protected function getUrl(): string {
        return "sendDice";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['message_thread_id', 'emoji', 'disable_notification', 'protect_content', 'reply_parameters', 'reply_markup']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class sendChatActionAction extends TelegramAction {
    protected function getUrl(): string {
        return "sendChatAction";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'action'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['message_thread_id']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class setMessageReactionAction extends TelegramAction {
    protected function getUrl(): string {
        return "setMessageReaction";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'message_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['reaction', 'is_big']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class getUserProfilePhotosAction extends TelegramAction {
    protected function getUrl(): string {
        return "getUserProfilePhotos";
    }
    
    protected function getRequiredParams(): array {
        return ['user_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['offset', 'limit']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class getFileAction extends TelegramAction {
    protected function getUrl(): string {
        return "getFile";
    }
    
    protected function getRequiredParams(): array {
        return ['file_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class banChatMemberAction extends TelegramAction {
    protected function getUrl(): string {
        return "banChatMember";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'user_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['until_date', 'revoke_messages']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class unbanChatMemberAction extends TelegramAction {
    protected function getUrl(): string {
        return "unbanChatMember";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'user_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['only_if_banned']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class restrictChatMemberAction extends TelegramAction {
    protected function getUrl(): string {
        return "restrictChatMember";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'user_id', 'permissions'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['use_independent_chat_permissions', 'until_date']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class promoteChatMemberAction extends TelegramAction {
    protected function getUrl(): string {
        return "promoteChatMember";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'user_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['is_anonymous', 'can_manage_chat', 'can_delete_messages', 'can_manage_video_chats', 'can_restrict_members', 'can_promote_members', 'can_change_info', 'can_invite_users', 'can_post_stories', 'can_edit_stories', 'can_delete_stories', 'can_post_messages', 'can_edit_messages', 'can_pin_messages', 'can_manage_topics']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class setChatAdministratorCustomTitleAction extends TelegramAction {
    protected function getUrl(): string {
        return "setChatAdministratorCustomTitle";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'user_id', 'custom_title'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class banChatSenderChatAction extends TelegramAction {
    protected function getUrl(): string {
        return "banChatSenderChat";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'sender_chat_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class unbanChatSenderChatAction extends TelegramAction {
    protected function getUrl(): string {
        return "unbanChatSenderChat";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'sender_chat_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class setChatPermissionsAction extends TelegramAction {
    protected function getUrl(): string {
        return "setChatPermissions";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'permissions'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['use_independent_chat_permissions']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class exportChatInviteLinkAction extends TelegramAction {
    protected function getUrl(): string {
        return "exportChatInviteLink";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class createChatInviteLinkAction extends TelegramAction {
    protected function getUrl(): string {
        return "createChatInviteLink";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['name', 'expire_date', 'member_limit', 'creates_join_request']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class editChatInviteLinkAction extends TelegramAction {
    protected function getUrl(): string {
        return "editChatInviteLink";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'invite_link'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['name', 'expire_date', 'member_limit', 'creates_join_request']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class revokeChatInviteLinkAction extends TelegramAction {
    protected function getUrl(): string {
        return "revokeChatInviteLink";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'invite_link'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class approveChatJoinRequestAction extends TelegramAction {
    protected function getUrl(): string {
        return "approveChatJoinRequest";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'user_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class declineChatJoinRequestAction extends TelegramAction {
    protected function getUrl(): string {
        return "declineChatJoinRequest";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'user_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class setChatPhotoAction extends TelegramAction {
    protected function getUrl(): string {
        return "setChatPhoto";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'photo'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class deleteChatPhotoAction extends TelegramAction {
    protected function getUrl(): string {
        return "deleteChatPhoto";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class setChatTitleAction extends TelegramAction {
    protected function getUrl(): string {
        return "setChatTitle";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'title'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class setChatDescriptionAction extends TelegramAction {
    protected function getUrl(): string {
        return "setChatDescription";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['description']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class pinChatMessageAction extends TelegramAction {
    protected function getUrl(): string {
        return "pinChatMessage";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'message_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['disable_notification']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class unpinChatMessageAction extends TelegramAction {
    protected function getUrl(): string {
        return "unpinChatMessage";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['message_id']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class unpinAllChatMessagesAction extends TelegramAction {
    protected function getUrl(): string {
        return "unpinAllChatMessages";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class leaveChatAction extends TelegramAction {
    protected function getUrl(): string {
        return "leaveChat";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class getChatAction extends TelegramAction {
    protected function getUrl(): string {
        return "getChat";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class getChatAdministratorsAction extends TelegramAction {
    protected function getUrl(): string {
        return "getChatAdministrators";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class getChatMemberCountAction extends TelegramAction {
    protected function getUrl(): string {
        return "getChatMemberCount";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class getChatMemberAction extends TelegramAction {
    protected function getUrl(): string {
        return "getChatMember";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'user_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class setChatStickerSetAction extends TelegramAction {
    protected function getUrl(): string {
        return "setChatStickerSet";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'sticker_set_name'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class deleteChatStickerSetAction extends TelegramAction {
    protected function getUrl(): string {
        return "deleteChatStickerSet";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class createForumTopicAction extends TelegramAction {
    protected function getUrl(): string {
        return "createForumTopic";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'name'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['icon_color', 'icon_custom_emoji_id']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class editForumTopicAction extends TelegramAction {
    protected function getUrl(): string {
        return "editForumTopic";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'message_thread_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['name', 'icon_custom_emoji_id']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class closeForumTopicAction extends TelegramAction {
    protected function getUrl(): string {
        return "closeForumTopic";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'message_thread_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class reopenForumTopicAction extends TelegramAction {
    protected function getUrl(): string {
        return "reopenForumTopic";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'message_thread_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class deleteForumTopicAction extends TelegramAction {
    protected function getUrl(): string {
        return "deleteForumTopic";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'message_thread_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class unpinAllForumTopicMessagesAction extends TelegramAction {
    protected function getUrl(): string {
        return "unpinAllForumTopicMessages";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'message_thread_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class editGeneralForumTopicAction extends TelegramAction {
    protected function getUrl(): string {
        return "editGeneralForumTopic";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'name'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class closeGeneralForumTopicAction extends TelegramAction {
    protected function getUrl(): string {
        return "closeGeneralForumTopic";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class reopenGeneralForumTopicAction extends TelegramAction {
    protected function getUrl(): string {
        return "reopenGeneralForumTopic";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class hideGeneralForumTopicAction extends TelegramAction {
    protected function getUrl(): string {
        return "hideGeneralForumTopic";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class unhideGeneralForumTopicAction extends TelegramAction {
    protected function getUrl(): string {
        return "unhideGeneralForumTopic";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class unpinAllGeneralForumTopicMessagesAction extends TelegramAction {
    protected function getUrl(): string {
        return "unpinAllGeneralForumTopicMessages";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class answerCallbackQueryAction extends TelegramAction {
    protected function getUrl(): string {
        return "answerCallbackQuery";
    }
    
    protected function getRequiredParams(): array {
        return ['callback_query_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['text', 'show_alert', 'url', 'cache_time']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class getUserChatBoostsAction extends TelegramAction {
    protected function getUrl(): string {
        return "getUserChatBoosts";
    }
    
    protected function getRequiredParams(): array {
        return ['chat_id', 'user_id'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = []; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class setMyCommandsAction extends TelegramAction {
    protected function getUrl(): string {
        return "setMyCommands";
    }
    
    protected function getRequiredParams(): array {
        return ['commands'];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['scope', 'language_code']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class deleteMyCommandsAction extends TelegramAction {
    protected function getUrl(): string {
        return "deleteMyCommands";
    }
    
    protected function getRequiredParams(): array {
        return [];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['scope', 'language_code']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class getMyCommandsAction extends TelegramAction {
    protected function getUrl(): string {
        return "getMyCommands";
    }
    
    protected function getRequiredParams(): array {
        return [];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['scope', 'language_code']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class setMyNameAction extends TelegramAction {
    protected function getUrl(): string {
        return "setMyName";
    }
    
    protected function getRequiredParams(): array {
        return [];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['name', 'language_code']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class getMyNameAction extends TelegramAction {
    protected function getUrl(): string {
        return "getMyName";
    }
    
    protected function getRequiredParams(): array {
        return [];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['language_code']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class setMyDescriptionAction extends TelegramAction {
    protected function getUrl(): string {
        return "setMyDescription";
    }
    
    protected function getRequiredParams(): array {
        return [];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['description', 'language_code']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class getMyDescriptionAction extends TelegramAction {
    protected function getUrl(): string {
        return "getMyDescription";
    }
    
    protected function getRequiredParams(): array {
        return [];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['language_code']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class setMyShortDescriptionAction extends TelegramAction {
    protected function getUrl(): string {
        return "setMyShortDescription";
    }
    
    protected function getRequiredParams(): array {
        return [];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['language_code']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class getMyShortDescriptionAction extends TelegramAction {
    protected function getUrl(): string {
        return "getMyShortDescription";
    }
    
    protected function getRequiredParams(): array {
        return [];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['language_code']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class setChatMenuButtonAction extends TelegramAction {
    protected function getUrl(): string {
        return "setChatMenuButton";
    }
    
    protected function getRequiredParams(): array {
        return [];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['chat_id', 'menu_button']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class getChatMenuButtonAction extends TelegramAction {
    protected function getUrl(): string {
        return "getChatMenuButton";
    }
    
    protected function getRequiredParams(): array {
        return [];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['chat_id']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class setMyDefaultAdministratorRightsAction extends TelegramAction {
    protected function getUrl(): string {
        return "setMyDefaultAdministratorRights";
    }
    
    protected function getRequiredParams(): array {
        return [];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['rights', 'for_channels']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

class getMyDefaultAdministratorRightsAction extends TelegramAction {
    protected function getUrl(): string {
        return "getMyDefaultAdministratorRights";
    }
    
    protected function getRequiredParams(): array {
        return [];
    }

    protected function getData(...$params): array {
        // Check for required parameters
        $requiredParams = $this->getRequiredParams();
        $data = [];
        foreach ($requiredParams as $index => $param) {
            if (!isset($params[$index])) {
                throw new InvalidArgumentException("$param is required.");
            }
            $data[$param] = $params[$index];
        }

        // Define optional parameters and merge with data if provided
        $optionalParams = ['for_channels']; // Add other optional parameters as needed
        $optionalParamsIndex = count($requiredParams); // Index to start reading optional params
        foreach ($optionalParams as $index => $param) {
            if (isset($params[$optionalParamsIndex + $index])) {
                $data[$param] = $params[$optionalParamsIndex + $index];
            }
        }

        return $data;
    }
}

