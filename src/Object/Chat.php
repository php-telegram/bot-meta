<?php
/**
 * Created by PhpStorm.
 * User: Ming
 * Date: 2018/4/12
 * Time: 上午 08:24
 */

namespace TelegramBot\Model\Object;


/**
 * Class Chat
 * This object represents a chat.
 * @package TelegramBot\Model\Object
 */
class Chat
{
    /**
     * @var integer Unique identifier for this chat. This number may be greater than 32 bits and some
     * programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits,
     * so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     */
    private $id;
    /**
     * @var string Type of chat, can be either “private”, “group”, “supergroup” or “channel”.
     */
    private $type;
    /**
     * @var string Optional. Title, for supergroups, channels and group chats.
     */
    private $title;
    /**
     * @var string Optional. Username, for private chats, supergroups and channels if available.
     */
    private $username;
    /**
     * @var string Optional. First name of the other party in a private chat.
     */
    private $first_name;
    /**
     * @var string Optional. Last name of the other party in a private chat.
     */
    private $last_name;
    /**
     * @var boolean Optional. True if a group has ‘All Members Are Admins’ enabled.
     */
    private $all_members_are_administrators;
    /**
     * @var ChatPhoto Optional. Chat photo. Returned only in getChat.
     */
    private $photo;
    /**
     * @var string Optional. Description, for supergroups and channel chats. Returned only in getChat.
     */
    private $description;
    /**
     * @var string Optional. Chat invite link, for supergroups and channel chats. Returned only in getChat.
     */
    private $invite_link;
    /**
     * @var Message Optional. Pinned message, for supergroups and channel chats. Returned only in getChat.
     */
    private $pinned_message;
    /**
     * @var string Optional. For supergroups, name of group sticker set. Returned only in getChat.
     */
    private $sticker_set_name;
    /**
     * @var boolean Optional. True, if the bot can change the group sticker set. Returned only in getChat.
     */
    private $can_set_sticker_set;
}
