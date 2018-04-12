<?php
/**
 * Created by PhpStorm.
 * User: Ming
 * Date: 2018/4/12
 * Time: 上午 08:01
 */

namespace TelegramBot\Model\Object;


/**
 * Class Message
 * This object represents a message.
 * @package TelegramBot\Model\Object
 */
class Message
{
    /**
     * @var integer Unique message identifier inside this chat.
     */
    private $message_id;
    /**
     * @var User Optional. Sender, empty for messages sent to channels.
     */
    private $from;
    /**
     * @var integer Date the message was sent in Unix time.
     */
    private $date;
    /**
     * @var Chat Conversation the message belongs to.
     */
    private $chat;
    /**
     * @var User Optional. For forwarded messages, sender of the original message.
     */
    private $forward_from;
    /**
     * @var Chat Optional. For messages forwarded from channels, information about the original channel.
     */
    private $forward_from_chat;
    /**
     * @var integer Optional. For messages forwarded from channels, identifier of the original message in the channel.
     */
    private $forward_from_message_id;
    /**
     * @var string Optional. For messages forwarded from channels, signature of the post author if present.
     */
    private $forward_signature;
    /**
     * @var integer Optional. For forwarded messages, date the original message was sent in Unix time.
     */
    private $forward_date;
    /**
     * @var Message Optional. For replies, the original message. Note that the Message object in this field will not
     * contain further reply_to_message fields even if it itself is a reply.
     */
    private $reply_to_message;
    /**
     * @var integer Optional. Date the message was last edited in Unix time.
     */
    private $edit_date;
    /**
     * @var string Optional. The unique identifier of a media message group this message belongs to.
     */
    private $media_group_id;
    /**
     * @var string Optional. Signature of the post author for messages in channels.
     */
    private $author_signature;
    /**
     * @var string Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters.
     */
    private $text;
    /**
     * @var MessageEntity[] Optional. For text messages, special entities like
     * usernames, URLs, bot commands, etc. that appear in the text.
     */
    private $entities;
    /**
     * @var MessageEntity[] Optional. For messages with a caption, special entities like
     * usernames, URLs, bot commands, etc. that appear in the caption.
     */
    private $caption_entities;
    /**
     * @var Audio Optional. Message is an audio file, information about the file.
     */
    private $audio;
    /**
     * @var Document Optional. Message is a general file, information about the file.
     */
    private $document;
    /**
     * @var Game Optional. Message is a game, information about the game.
     */
    private $game;
    /**
     * @var PhotoSize[] Optional. Message is a photo, available sizes of the photo.
     */
    private $photo;
    /**
     * @var Sticker Optional. Message is a sticker, information about the sticker.
     */
    private $sticker;
    /**
     * @var Video Optional. Message is a video, information about the video.
     */
    private $video;
    /**
     * @var Voice Optional. Message is a voice message, information about the file.
     */
    private $voice;
    /**
     * @var VideoNote Optional. Message is a video note, information about the video message.
     */
    private $video_note;
    /**
     * @var string Optional. Caption for the audio, document, photo, video or voice, 0-200 characters.
     */
    private $caption;
    /**
     * @var Contact Optional. Message is a shared contact, information about the contact.
     */
    private $contact;
    /**
     * @var Location Optional. Message is a shared location, information about the location.
     */
    private $location;
    /**
     * @var Venue Optional. Message is a venue, information about the venue.
     */
    private $venue;
    /**
     * @var User[] Optional. New members that were added to the group or supergroup and information about them
     * (the bot itself may be one of these members).
     */
    private $new_chat_members;
    /**
     * @var User Optional. A member was removed from the group, information about them
     * (this member may be the bot itself).
     */
    private $left_chat_member;
    /**
     * @var string Optional. A chat title was changed to this value.
     */
    private $new_chat_title;
    /**
     * @var PhotoSize[] Optional. A chat photo was change to this value.
     */
    private $new_chat_photo;
    /**
     * @var true Optional. Service message: the chat photo was deleted.
     */
    private $delete_chat_photo;
    /**
     * @var true Optional. Service message: the group has been created.
     */
    private $group_chat_created;
    /**
     * @var true Optional. Service message: the supergroup has been created. This field can‘t be received in a message
     * coming through updates, because bot can’t be a member of a supergroup when it is created. It can only be found
     * in reply_to_message if someone replies to a very first message in a directly created supergroup.
     */
    private $supergroup_chat_created;
    /**
     * @var true Optional. Service message: the channel has been created. This field can‘t be received in a message
     * coming through updates, because bot can’t be a member of a channel when it is created. It can only be found
     * in reply_to_message if someone replies to a very first message in a channel.
     */
    private $channel_chat_created;
    /**
     * @var integer Optional. The group has been migrated to a supergroup with the specified identifier.
     * This number may be greater than 32 bits and some programming languages may have difficulty/silent defects
     * in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type
     * are safe for storing this identifier.
     */
    private $migrate_to_chat_id;
    /**
     * @var integer Optional. The supergroup has been migrated from a group with the specified identifier.
     * This number may be greater than 32 bits and some programming languages may have difficulty/silent defects
     * in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type
     * are safe for storing this identifier.
     */
    private $migrate_from_chat_id;
    /**
     * @var Message Optional. Specified message was pinned. Note that the Message object in this field will not contain
     * further reply_to_message fields even if it is itself a reply.
     */
    private $pinned_message;
    /**
     * @var Invoice Optional. Message is an invoice for a payment, information about the invoice.
     */
    private $invoice;
    /**
     * @var SuccessfulPayment Optional. Message is a service message about a successful payment,
     * information about the payment.
     */
    private $successful_payment;
    /**
     * @var string Optional. The domain name of the website on which the user has logged in.
     */
    private $connected_website;
}
