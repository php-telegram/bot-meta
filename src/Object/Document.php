<?php
/**
 * Created by PhpStorm.
 * User: Ming
 * Date: 2018/4/12
 * Time: 上午 08:41
 */

namespace TelegramBot\Model\Object;


/**
 * Class Document
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 * @package TelegramBot\Model\Object
 */
class Document
{
    /**
     * @var string Unique file identifier.
     */
    private $file_id;
    /**
     * @var PhotoSize Optional. Document thumbnail as defined by sender.
     */
    private $thumb;
    /**
     * @var string Optional. Original filename as defined by sender.
     */
    private $file_name;
    /**
     * @var string Optional. MIME type of the file as defined by sender.
     */
    private $mime_type;
    /**
     * @var integer Optional. File size.
     */
    private $file_size;
}
