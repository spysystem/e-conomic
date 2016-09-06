<?php

namespace Economic;

class Unit_UpdateFromData
{

    /**
     * @var UnitData $data
     */
    protected $data = null;

    /**
     * @param UnitData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return UnitData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param UnitData $data
     * @return \Economic\Unit_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
