<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stats
 *
 * @ORM\Table(name="stats")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StatsRepository")
 */
class Stats
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Stat_icon", type="string", length=255)
     */
    private $statIcon;

    /**
     * @var string
     *
     * @ORM\Column(name="Stat_color", type="string", length=255)
     */
    private $statColor;

    /**
     * @var string
     *
     * @ORM\Column(name="Stat_title", type="string", length=255)
     */
    private $statTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="Stat_value", type="decimal", precision=5, scale=0)
     */
    private $statValue;

    /**
     * @var int
     *
     * @ORM\Column(name="User_id", type="integer")
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
     * Set statIcon
     *
     * @param string $statIcon
     *
     * @return Stats
     */
    public function setStatIcon($statIcon)
    {
        $this->statIcon = $statIcon;

        return $this;
    }

    /**
     * Get statIcon
     *
     * @return string
     */
    public function getStatIcon()
    {
        return $this->statIcon;
    }

    /**
     * Set statColor
     *
     * @param string $statColor
     *
     * @return Stats
     */
    public function setStatColor($statColor)
    {
        $this->statColor = $statColor;

        return $this;
    }

    /**
     * Get statColor
     *
     * @return string
     */
    public function getStatColor()
    {
        return $this->statColor;
    }

    /**
     * Set statTitle
     *
     * @param string $statTitle
     *
     * @return Stats
     */
    public function setStatTitle($statTitle)
    {
        $this->statTitle = $statTitle;

        return $this;
    }

    /**
     * Get statTitle
     *
     * @return string
     */
    public function getStatTitle()
    {
        return $this->statTitle;
    }

    /**
     * Set statValue
     *
     * @param string $statValue
     *
     * @return Stats
     */
    public function setStatValue($statValue)
    {
        $this->statValue = $statValue;

        return $this;
    }

    /**
     * Get statValue
     *
     * @return string
     */
    public function getStatValue()
    {
        return $this->statValue;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Stats
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

