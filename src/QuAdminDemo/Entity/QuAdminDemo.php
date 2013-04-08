<?php
/**
 * @Author: Cel Ticó Petit
 * @Contact: cel@cenics.net
 * @Company: Cencis s.c.p.
 */

namespace QuAdminDemo\Entity;



class QuAdminDemo
{

    /**
     * @var int
     */
    protected $id_web;

    /**
     * @var int
     */
    protected $id_parent;

    /**
     * @var int
     */
    protected $id_author;

    /**
     * @var int
     */
    protected $id_lang;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $date;

    /**
     * @var string
     */
    protected $modified;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $lang;

    /**
     * @var string
     */
    protected $parameters;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $summary;

    /**
     * @var string
     */
    protected $documents;

    /**
     * @var string
     */
    protected $content;

    /**
     * @var string
     */
    protected $notes;

    /**
     * @var
     */
    protected $start_date;

    /**
     * @var
     */
    protected $end_date;

    /**
     * @var
     */
    protected $tags;

    /**
     * @var
     */
    protected $color;

    /**
     * @var
     */
    protected $order;

    /**
     * Get id.
     *
     * @return int
     */
    public function getIdWeb()
    {
        return $this->id_web;
    }


    /**
     * @param $id_web
     * @return $this
     */
    public function setIdWeb($id_web)
    {
        $this->id_web = (int) $id_web;
        return $this;
    }

    /**
     * Get id_parent.
     *
     * @return int
     */
    public function getIdParent()
    {
        return $this->id_parent;
    }

    /**
     * Set id_parent.
     *
     * @param int $id_parent
     * @return int
     */
    public function setIdParent($id_parent)
    {
        $this->id_parent = (int) $id_parent;
        return $this;
    }

    /**
     * Get id_author.
     *
     * @return int
     */
    public function getIdAuthor()
    {
        return $this->id_author;
    }

    /**
     * Set id_author.
     *
     * @param int $id_author
     * @return int
     */
    public function setIdAuthor($id_author)
    {
        $this->id_author = (int) $id_author;
        return $this;
    }

    /**
     * Get id_lang.
     *
     * @return int
     */
    public function getIdLang()
    {
        return $this->id_lang;
    }

    /**
     * Set id_lang.
     *
     * @param int $id_lang
     * @return int
     */
    public function setIdLang($id_lang)
    {
        $this->id_lang = (int) $id_lang;
        return $this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type.
     *
     * @param string $type
     * @return string
     */
    public function setType($type)
    {
        $this->type =  $type;
        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name.
     *
     * @param string $name
     * @return string
     */
    public function setName($name)
    {
        $this->name =  $name;
        return $this;
    }

    /**
     * Get date.
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set date.
     *
     * @param string $date
     * @return string
     */
    public function setDate($date)
    {
        $this->date =  $date;
        return $this;
    }

    /**
     * Get modified.
     *
     * @return string
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set modified.
     *
     * @param string $modified
     * @return string
     */
    public function setModified($modified)
    {
        $this->modified =  $modified;
        return $this;
    }

    /**
     * Get status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set status.
     *
     * @param string $status
     * @return string
     */
    public function setStatus($status)
    {
        $this->status =  $status;
        return $this;
    }

    /**
     * Get lang.
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set lang.
     *
     * @param string $lang
     * @return string
     */
    public function setLang($lang)
    {
        $this->lang =  $lang;
        return $this;
    }

    /**
     * Get parameters.
     *
     * @return string
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Set parameters.
     *
     * @param string $parameters
     * @return string
     */
    public function setParameters($parameters)
    {
        $this->parameters =  $parameters;
        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set title.
     *
     * @param string $title
     * @return string
     */
    public function setTitle($title)
    {
        $this->title =  $title;
        return $this;
    }

    /**
     * Get summary.
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set summary.
     *
     * @param string $summary
     * @return string
     */
    public function setSummary($summary)
    {
        $this->summary =  $summary;
        return $this;
    }

    /**
     * Get documents.
     *
     * @return string
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Set documents.
     *
     * @param string $documents
     * @return string
     */
    public function setDocuments($documents)
    {
        $this->documents =  $documents;
        return $this;
    }

    /**
     * Get content.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set content.
     *
     * @param string $content
     * @return string
     */
    public function setContent($content)
    {
        $this->content =  $content;
        return $this;
    }

    /**
     * Get content.
     *
     * @return string
     */
    public function getValues()
    {
        return $this->content;
    }

    /**
     * Set content.
     *
     * @param string $content
     * @return string
     */
    public function setValues($content)
    {
        $this->content =  $content;
        return $this;
    }

    /**
     * Get notes.
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set notes.
     *
     * @param string $notes
     * @return string
     */
    public function setNotes($notes)
    {
        $this->notes =  $notes;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * @param $start_date
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->start_date =  $start_date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * @param $end_date
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->end_date =  $end_date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->tags =  $tags;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param $color
     * @return $this
     */
    public function setColor($color)
    {
        $this->color =  $color;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order =  $order;
        return $this;
    }

}
