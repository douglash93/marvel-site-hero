<?php 

namespace Marvel\Models;

class Storie {

    private $id;
    private $name;
    private $thumbnail;

    public function __construct($id, $name, $thumbnail)
    {
        $this->id = $id;
        $this->name = $name;
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