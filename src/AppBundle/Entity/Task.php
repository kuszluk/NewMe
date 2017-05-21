<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 *
 * @ORM\Table(name="task")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TaskRepository")
 */
class Task
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
     * @var int
     *
     * @ORM\Column(name="List_id", type="integer")
     * @ORM\ManyToOne(targetEntity="UserLists")
     * @ORM\JoinColumn(name="listId", referencedColumnName="id")
     */
    private $listId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="numberOfTasks", type="integer")
     */
    private $numberOfTasks;

    /**
     * @var int
     *
     * @ORM\Column(name="tasksCompleted", type="integer")
     */
    private $tasksCompleted;

    /**
     * @var bool
     *
     * @ORM\Column(name="Finished", type="boolean")
     */
    private $finished;


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
     * Set listId
     *
     * @param integer $listId
     *
     * @return Task
     */
    public function setListId($listId)
    {
        $this->listId = $listId;

        return $this;
    }

    /**
     * Get listId
     *
     * @return int
     */
    public function getListId()
    {
        return $this->listId;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Task
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
     * Set numberOfTasks
     *
     * @param integer $numberOfTasks
     *
     * @return Task
     */
    public function setNumberOfTasks($numberOfTasks)
    {
        $this->numberOfTasks = $numberOfTasks;

        return $this;
    }

    /**
     * Get numberOfTasks
     *
     * @return int
     */
    public function getNumberOfTasks()
    {
        return $this->numberOfTasks;
    }

    /**
     * Set tasksCompleted
     *
     * @param integer $tasksCompleted
     *
     * @return Task
     */
    public function setTasksCompleted($tasksCompleted)
    {
        $this->tasksCompleted = $tasksCompleted;

        return $this;
    }

    /**
     * Get tasksCompleted
     *
     * @return int
     */
    public function getTasksCompleted()
    {
        return $this->tasksCompleted;
    }

    /**
     * Set finished
     *
     * @param boolean $finished
     *
     * @return Task
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
}

