<?php
trait Type {
    private $type;


    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType():string
    {
        return $this->type;
    }
}