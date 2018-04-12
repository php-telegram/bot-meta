<?php
/**
 * Created by PhpStorm.
 * User: Ming
 * Date: 2018/4/12
 * Time: 上午 08:39
 */

namespace TelegramBot\Model\Object;


/**
 * Class PhotoSize
 * This object represents one size of a photo or a file / sticker thumbnail.
 * @package TelegramBot\Model\Object
 */
class PhotoSize
{
    /**
     * @var string Unique identifier for this file.
     */
    private $file_id;
    /**
     * @var integer Photo width.
     */
    private $width;
    /**
     * @var integer Photo height.
     */
    private $height;
    /**
     * @var integer Optional. File size.
     */
    private $file_size;
}
