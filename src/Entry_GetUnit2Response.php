<?php

namespace Economic;

class Entry_GetUnit2Response
{

    /**
     * @var UnitHandle $Entry_GetUnit2Result
     */
    protected $Entry_GetUnit2Result = null;

    /**
     * @param UnitHandle $Entry_GetUnit2Result
     */
    public function __construct($Entry_GetUnit2Result)
    {
      $this->Entry_GetUnit2Result = $Entry_GetUnit2Result;
    }

    /**
     * @return UnitHandle
     */
    public function getEntry_GetUnit2Result()
    {
      return $this->Entry_GetUnit2Result;
    }

    /**
     * @param UnitHandle $Entry_GetUnit2Result
     * @return \Economic\Entry_GetUnit2Response
     */
    public function setEntry_GetUnit2Result($Entry_GetUnit2Result)
    {
      $this->Entry_GetUnit2Result = $Entry_GetUnit2Result;
      return $this;
    }

}
