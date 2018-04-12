<?php
/**
 * Created by PhpStorm.
 * User: Ming
 * Date: 2018/4/12
 * Time: 上午 08:17
 */

namespace TelegramBot\Model\Object;


/**
 * Class WebhookInfo
 * Contains information about the current status of a webhook.
 * @package TelegramBot\Model
 */
class WebhookInfo
{
    /**
     * @var string Webhook URL, may be empty if webhook is not set up.
     */
    private $url;
    /**
     * @var boolean True, if a custom certificate was provided for webhook certificate checks.
     */
    private $has_custom_certificate;
    /**
     * @var integer Number of updates awaiting delivery.
     */
    private $pending_update_count;
    /**
     * @var integer Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
     */
    private $last_error_date;
    /**
     * @var string Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
     */
    private $last_error_message;
    /**
     * @var integer Optional. Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
     */
    private $max_connections;
    /**
     * @var string[] Optional. A list of update types the bot is subscribed to. Defaults to all update types
     */
    private $allowed_updates;
}
