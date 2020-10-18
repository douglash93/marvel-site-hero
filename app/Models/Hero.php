<?php 

namespace Marvel\Models;

class Hero {

    private $id;
    private $name;
    private $description;
    private $thumbnail;

    public function __construct($id, $name, $description, $thumbnail)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->thumbnail = $thumbnail;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }
}