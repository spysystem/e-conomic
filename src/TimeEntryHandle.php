<?php

namespace Economic;

class TimeEntryHandle
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @param int $Id
     */
    public function __construct($Id)
    {
      $this->Id = $Id;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Economic\TimeEntryHandle
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
