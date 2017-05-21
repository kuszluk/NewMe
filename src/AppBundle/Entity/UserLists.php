<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * List
 *
 * @ORM\Table(name="list")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserListsRepository")
 */
class UserLists
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="Task", mappedBy="listId")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=255)
     */
    private $icon;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="percent", type="integer")
     */
    private $percent;

    /**
     * @var bool
     *
     * @ORM\Column(name="finished", type="boolean")
     */
    private $finished;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_start", type="datetime")
     */
    private $dataStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_end", type="datetime")
     */
    private $dataEnd;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="User_id", referencedColumnName="id")
     */


    private $userId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return List
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set icon
     *
     * @param string $icon
     *
     * @return List
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return List
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set percent
     *
     * @param integer $percent
     *
     * @return List
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * Get percent
     *
     * @return int
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Set finished
     *
     * @param boolean $finished
     *
     * @return List
     */
    public function setFinished($finished)
    {
        $this->finished = $finished;

        return $this;
    }

    /**
     * Get finished
     *
     * @return bool
     */
    public function getFinished()
    {
        return $this->finished;
    }

    /**
     * Set dataStart
     *
     * @param \DateTime $dataStart
     *
     * @return List
     */
    public function setDataStart($dataStart)
    {
        $this->dataStart = $dataStart;

        return $this;
    }

    /**
     * Get dataStart
     *
     * @return \DateTime
     */
    public function getDataStart()
    {
        return $this->dataStart;
    }

    /**
     * Set dataEnd
     *
     * @param \DateTime $dataEnd
     *
     * @return List
     */
    public function setDataEnd($dataEnd)
    {
        $this->dataEnd = $dataEnd;

        return $this;
    }

    /**
     * Get dataEnd
     *
     * @return \DateTime
     */
    public function getDataEnd()
    {
        return $this->dataEnd;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return List
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }
}

