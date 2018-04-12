<?php
/**
 * Created by PhpStorm.
 * User: Ming
 * Date: 2018/4/12
 * Time: 上午 08:39
 */

namespace TelegramBot\Model\Object;


/**
 * Class Audio
 * This object represents an audio file to be treated as music by the Telegram clients.
 * @package TelegramBot\Model\Object
 */
class Audio
{
    /**
     * @var string Unique identifier for this file.
     */
    private $file_id;
    /**
     * @var integer Duration of the audio in seconds as defined by sender.
     */
    private $duration;
    /**
     * @var string Optional. Performer of the audio as defined by sender or by audio tags.
     */
    private $performer;
    /**
     * @var string Optional. Title of the audio as defined by sender or by audio tags.
     */
    private $title;
    /**
     * @var string Optional. MIME type of the file as defined by sender.
     */
    private $mime_type;
    /**
     * @var integer Optional. File size.
     */
    private $file_size;
}
