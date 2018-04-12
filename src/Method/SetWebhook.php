<?php
/**
 * Created by PhpStorm.
 * User: Ming
 * Date: 2018/4/12
 * Time: 上午 08:11
 */

namespace TelegramBot\Model\Method;

use TelegramBot\Model\Object\InputFile;

/**
 * Class SetWebhook
 * Use this method to specify a url and receive incoming updates via an outgoing webhook.
 * Whenever there is an update for the bot, we will send an HTTPS POST request to the specified url,
 * containing a JSON-serialized Update. In case of an unsuccessful request, we will give up after a reasonable
 * amount of attempts. Returns true.
 *
 * If you'd like to make sure that the Webhook request comes from Telegram, we recommend using a secret path
 * in the URL, e.g. https://www.example.com/<token>. Since nobody else knows your bot‘s token,
 * you can be pretty sure it’s us.
 * @package TelegramBot\Model\Method
 */
class SetWebhook
{
    /**
     * @var string HTTPS url to send updates to. Use an empty string to remove webhook integration.
     */
    private $url;
    /**
     * @var InputFile Optional. Upload your public key certificate so that the root certificate in use can be checked.
     */
    private $certificate;
    /**
     * @var integer Optional. Maximum allowed number of simultaneous HTTPS connections to the webhook
     * for update delivery, 1-100. Defaults to 40. Use lower values to limit the load on your bot‘s server,
     * and higher values to increase your bot’s throughput.
     */
    private $max_connections;
    /**
     * @var string[] Optional. List the types of updates you want your bot to receive.
     * For example, specify [“message”, “edited_channel_post”, “callback_query”] to only receive updates of these types.
     * See Update for a complete list of available update types. Specify an empty list to receive all updates
     * regardless of type (default). If not specified, the previous setting will be used.
     */
    private $allowed_updates;
}
