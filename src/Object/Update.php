<?php
/**
 * Created by PhpStorm.
 * User: Ming
 * Date: 2018/4/12
 * Time: 上午 07:22
 */

namespace TelegramBot\Model\Object;


/**
 * Class Update
 * This object represents an incoming update.
 * At most one of the optional parameters can be present in any given update.
 * @package TelegramBot\Model
 */
class Update
{
    /**
     * @var integer The update‘s unique identifier.
     * Update identifiers start from a certain positive number and increase sequentially.
     * This ID becomes especially handy if you’re using Webhooks, since it allows you to ignore repeated updates
     * or to restore the correct update sequence, should they get out of order. If there are no new updates
     * for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
     */
    private $update_id;
    /**
     * @var Message Optional. New incoming message of any kind — text, photo, sticker, etc.
     */
    private $message;
    /**
     * @var Message Optional. New version of a message that is known to the bot and was edited.
     */
    private $edited_message;
    /**
     * @var Message Optional. New incoming channel post of any kind — text, photo, sticker, etc.
     */
    private $channel_post;
    /**
     * @var Message Optional. New version of a channel post that is known to the bot and was edited.
     */
    private $edited_channel_post;
    /**
     * @var InlineQuery Optional. New incoming inline query
     */
    private $inline_query;
    /**
     * @var ChosenInlineResult Optional. The result of an inline query that was chosen by a user
     * and sent to their chat partner. Please see our documentation on the feedback collecting
     * for details on how to enable these updates for your bot.
     */
    private $chosen_inline_result;
    /**
     * @var CallbackQuery Optional. New incoming callback query.
     */
    private $callback_query;
    /**
     * @var ShippingQuery Optional. New incoming shipping query. Only for invoices with flexible price.
     */
    private $shipping_query;
    /**
     * @var PreCheckoutQuery Optional. New incoming pre-checkout query. Contains full information about checkout.
     */
    private $pre_checkout_query;
}
