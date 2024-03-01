<?php
/*
$botToken = "your_bot_token_here";
$sendMessage = new SendMessageAction($botToken);
$result = $sendMessage->execute($chat_id, $text);
*/
abstract class TelegramAction {
    protected string $botToken;

    public function __construct(string $botToken) {
        $this->botToken = $botToken;
    }

    abstract protected function getUrl(): string;

    abstract protected function getRequiredParams(): array;

    abstract protected function getData(array $params): array;

    public function execute(...$params): bool|string {
        // Check if params is an associative array
        if (count($params) === 1 && is_array($params[0])) {
            $data = $params[0];
        } else {
            // Combine keys from getRequiredParams with provided values
            $data = array_combine($this->getRequiredParams(), $params);
        }

        $url = $this->getUrl();
        return $this->sendRequest($url, $data);
    }

    private function sendRequest(string $url, array $data): bool|string {
        $telegramUrl = "https://api.telegram.org/bot{$this->botToken}/$url";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $telegramUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }
}
