<?php
/**
 * Created by PhpStorm.
 * User: Ming
 * Date: 2018/4/12
 * Time: 上午 08:20
 */

namespace TelegramBot\Model\Object;


/**
 * Class User
 * This object represents a Telegram user or bot.
 * @package TelegramBot\Model
 */
class User
{
    /**
     * @var integer Unique identifier for this user or bot.
     */
    private $id;
    /**
     * @var boolean True, if this user is a bot.
     */
    private $is_bot;
    /**
     * @var string User‘s or bot’s first name.
     */
    private $first_name;
    /**
     * @var string Optional. User‘s or bot’s last name.
     */
    private $last_name;
    /**
     * @var string Optional. User‘s or bot’s username.
     */
    private $username;
    /**
     * @var string Optional. IETF language tag of the user's language.
     */
    private $language_code;
}
