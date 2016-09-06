<?php

namespace Economic;

class ProjectGroupHandle
{

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @param int $Number
     */
    public function __construct($Number)
    {
      $this->Number = $Number;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \Economic\ProjectGroupHandle
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}