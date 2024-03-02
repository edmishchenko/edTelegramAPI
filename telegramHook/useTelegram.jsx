// <script src="https://telegram.org/js/telegram-web-app.js"></script>
export default function useTelegram() {
    const tg = window.Telegram.WebApp;

    // query_id, user, receiver, chat, chat_type, chat_instance, start_param, can_send_after, auth_date, hash
    const initDataUnsafe = tg.initDataUnsafe;

    // id, first_name, is_bot?, last_name?, username?, language_code?, is_premium?, added_to_attachment_menu?, allows_write_to_pm?, photo_url?
    const user = initDataUnsafe?.user;

    // id, first_name, is_bot?, last_name?, username?, language_code?, is_premium?, added_to_attachment_menu?, allows_write_to_pm?, photo_url?
    const receiver = initDataUnsafe?.receiver;

    // id, type, title, username?, photo_url?
    const chat = initDataUnsafe?.chat;

    const isTelegram = tg.version > '6.1';

    const platform = tg.platform;

    // CSS access with var(--tg-color-scheme)
    const colorScheme = tg.colorScheme;

    // bg_color?, text_color?, hint_color?, link_color?, button_color?, button_text_color?,
    // secondary_bg_color?, header_bg_color?, accent_text_color? , section_bg_color?, section_header_text_color?,
    // subtitle_text_color?, destructive_text_color?
    // Example: https://core.telegram.org/file/464001695/11185/DAwyUjA7LNA.215601/26f4c8ebf862ae860d
    const themeParams = tg.themeParams;

    const isExpanded = tg.isExpanded;

    // CSS as the variable var(--tg-viewport-height)
    const viewportHeight = tg.viewportHeight;

    // CSS as a variable var(--tg-viewport-stable-height)
    const viewportStableHeight = tg.viewportStableHeight;

    // Current header color in the #RRGGBB format.
    const headerColor = tg.headerColor;

    // Current background color in the #RRGGBB format.
    const backgroundColor = tg.backgroundColor;

    const isClosingConfirmationEnabled = tg.isClosingConfirmationEnabled;

    // isVisible, onClick(callback), offClick(callback), show(), hide()
    const BackButton = tg.BackButton;

    // text, color, textColor, isVisible, isActive, isProgressVisible, setText(text), onClick(callback),
    // offClick(callback), show(), hide(), enable(), disable(), showProgress(leaveActive), hideProgress(), setParams(params)
    // params - text, color, text_color, is_active, is_visible
    const MainButton = tg.MainButton;

    // isVisible, onClick(callback), offClick(callback), show(), hide()
    const SettingsButton = tg.SettingsButton;

    // impactOccurred(style), notificationOccurred(type), selectionChanged()
    const HapticFeedback = tg.HapticFeedback;

    // setItem(key, value[, callback]), getItem(key, callback), getItems(keys, callback),
    // removeItem(key[, callback]), removeItems(keys[, callback]), getKeys(callback)
    // Bot API 6.9+
    const CloudStorage = tg.CloudStorage;

    // Returns true if the user's app supports a version of the Bot API that is equal to or higher than the version passed as the parameter.
    const isVersionAtLeast = (version) => {
        return tg.isVersionAtLeast(version);
    }

    // Bot API 6.1+ A method that sets the app header color in the #RRGGBB format.
    // Up to Bot API 6.9 You can only pass Telegram.WebApp.themeParams.bg_color or
    // Telegram.WebApp.themeParams.secondary_bg_color as a color or bg_color, secondary_bg_color keywords.
    const setHeaderColor = (color) => {
        tg.setHeaderColor(color);
    }

    // Bot API 6.1+ A method that sets the app background color in the #RRGGBB format.
    const setBackgroundColor = (color) => {
        tg.setBackgroundColor(color);
    }

    // Bot API 6.2+ A method that enables a confirmation dialog while the user is trying to close the Mini App.
    const enableClosingConfirmation = () => {
        tg.enableClosingConfirmation();
    }

    // Bot API 6.2+ A method that disables the confirmation dialog while the user is trying to close the Mini App.
    const disableClosingConfirmation = () => {
        tg.disableClosingConfirmation();
    }

    // List of events https://core.telegram.org/bots/webapps#events-available-for-mini-apps
    const onEvent = (eventType, eventHandler) => {
        tg.onEvent(eventType, eventHandler);
    }

    // List of events https://core.telegram.org/bots/webapps#events-available-for-mini-apps
    const offEvent = (eventType, eventHandler) => {
        tg.offEvent(eventType, eventHandler);
    }

    // This method is only available for Mini Apps launched via a Keyboard button.
    const sendData = (data) => {
        tg.sendData(data);
    }

    // Bot API 6.7+
    const switchInlineQuery = (query, ...choose_chat_types) => {
        tg.switchInlineQuery(query, ...choose_chat_types);
    }

    // A method that opens a link in an external browser. The Mini App will not be closed.
    const openLink = (url, ...options) => {
        tg.openLink(url, ...options);
    }

    // Up to Bot API 7.0 The Mini App will be closed after this method is called.
    const openTelegramLink = (url) => {
        tg.openTelegramLink(url);
    }

    // A method that opens an invoice using the link url.
    const openInvoice = (url, ...callback) => {
        tg.openInvoice(url, ...callback);
    }

    // Bot API 6.2+ A method that shows a native popup described by the params argument of the type PopupParams.
    const showPopup = (params, ...callback) => {
        tg.showPopup(params, ...callback);
    }

    // Bot API 6.2+ A method that shows message in a simple alert with a 'Close' button.
    const showAlert = (message, ...callback) => {
        tg.showAlert(message, ...callback);
    }

    // Bot API 6.2+ A method that shows message in a simple confirmation window with 'OK' and 'Cancel' buttons.
    const showConfirm = (message, ...callback) => {
        tg.showConfirm(message, ...callback);
    }

    // Bot API 6.4+ A method that shows a native popup for scanning a QR code described by the params argument of the type ScanQrPopupParams.
    const showScanQrPopup = (params, ...callback) => {
        tg.showScanQrPopup(params, ...callback);
    }

    // Bot API 6.4+ A method that closes the native popup for scanning a QR code opened with the showScanQrPopup method.
    const closeScanQrPopup = () => {
        tg.closeScanQrPopup();
    }

    // Bot API 6.4+ A method that requests text from the clipboard.
    const readTextFromClipboard = (callback) => {
        tg.readTextFromClipboard(callback);
    }

    // Bot API 6.9+ A method that shows a native popup requesting permission for the bot to send messages to the user.
    const requestWriteAccess = (callback) => {
        tg.requestWriteAccess(callback);
    }

    // Bot API 6.9+ A method that shows a native popup prompting the user for their phone number.
    const requestContact = (callback) => {
        tg.requestContact(callback);
    }

    // A method that informs the Telegram app that the Mini App is ready to be displayed.
    const ready = () => {
        tg.ready();
    }

    // A method that expands the Mini App to the maximum available height
    const expand = () => {
        tg.expand();
    }

    // A method that closes the Mini App.
    const close = () => {
        tg.close();
    }
}