<?php

namespace Economic;

class Entry_GetUnit1Response
{

    /**
     * @var UnitHandle $Entry_GetUnit1Result
     */
    protected $Entry_GetUnit1Result = null;

    /**
     * @param UnitHandle $Entry_GetUnit1Result
     */
    public function __construct($Entry_GetUnit1Result)
    {
      $this->Entry_GetUnit1Result = $Entry_GetUnit1Result;
    }

    /**
     * @return UnitHandle
     */
    public function getEntry_GetUnit1Result()
    {
      return $this->Entry_GetUnit1Result;
    }

    /**
     * @param UnitHandle $Entry_GetUnit1Result
     * @return \Economic\Entry_GetUnit1Response
     */
    public function setEntry_GetUnit1Result($Entry_GetUnit1Result)
    {
      $this->Entry_GetUnit1Result = $Entry_GetUnit1Result;
      return $this;
    }

}
