<?php
/**
 * Created by PhpStorm.
 * User: Ming
 * Date: 2018/4/12
 * Time: 上午 08:38
 */

namespace TelegramBot\Model\Object;


/**
 * Class MessageEntity
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 * @package TelegramBot\Model\Object
 */
class MessageEntity
{
    /**
     * @var string Type of the entity. Can be mention (@username), hashtag, bot_command, url, email, bold (bold text),
     * italic (italic text), code (monowidth string), pre (monowidth block), text_link (for clickable text URLs),
     * text_mention (for users without usernames).
     */
    private $type;
    /**
     * @var integer Offset in UTF-16 code units to the start of the entity.
     */
    private $offset;
    /**
     * @var integer Length of the entity in UTF-16 code units.
     */
    private $length;
    /**
     * @var string Optional. For “text_link” only, url that will be opened after user taps on the text.
     */
    private $url;
    /**
     * @var User Optional. For “text_mention” only, the mentioned user.
     */
    private $user;
}
