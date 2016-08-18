<?php
namespace funcraft\masterpiece\models;

use funcraft\creator\interfaces\ICreator;
use funcraft\kind\interfaces\IKind;
use funcraft\access\interfaces\ILevel;

/**
 * Class MasterpieceTrait
 * @package funcraft\masterpiece
 * @author Funcraft <what4me@yandex.ru>
 */
trait MasterpieceTrait
{
    /**
     * Identifier
     * @var int
     */
    protected $id = 0;

    /**
     * Creator identifier
     *
     * @var int
     */
    protected $creatorId = 0;

    /**
     * @var ICreator
     */
    protected $creator = null;

    /**
     * Creation date timestamp
     *
     * @var int
     */
    protected $created = 0;

    /**
     * Update date timestamp
     *
     * @var int
     */
    protected $updated = 0;

    /**
     * Access level
     *
     * @var int
     */
    protected $accessLevel = 0;

    /**
     * Kind identifier
     *
     * @var int
     */
    protected $kindId = 0;

    /**
     * @var IKind
     */
    protected $kind = null;

    /**
     * Masterpiece content
     *
     * @var string
     */
    protected $content = '';

    /**
     * Masterpiece title
     *
     * @var string
     */
    protected $title = '';

    /**
     * @return int
     */
    public function getId():int
    {
        return $this->id;
    }

    /**
     * @return ICreator
     */
    public function getCreator()
    {
        return $this->creator;
    }
    
    /**
     * @return int
     */
    public function getCreatorId():int
    {
        return $this->creatorId;
    }

    /**
     * @return IKind
     */
    public function getKind()
    {
        return $this->kind;
    }
    
    /**
     * @return int
     */
    public function getKindId():int
    {
        return $this->kindId;
    }

    /**
     * @return string
     */
    public function getContent():string
    {
        return $this->content;
    }

    /**
     * @return int
     */
    public function getAccessLevel():int
    {
        return $this->accessLevel;
    }

    /**
     * @return bool
     */
    public function isPublic():bool
    {
        return $this->getAccessLevel() == ILevel::PUBLIC ? true : false;
    }

    /**
     * @return string
     */
    public function getTitle():string
    {
        return $this->title;
    }

    /**
     * @param string $format
     * @return int|string
     */
    public function getCreationDate(string $format = '')
    {
        return $format ? date($format, $this->created) : $this->created;
    }

    /**
     * @param string $format
     * @return int|string
     */
    public function getUpdateDate(string $format = '')
    {
        return $format ? date($format, $this->updated) : $this->updated;
    }
}
