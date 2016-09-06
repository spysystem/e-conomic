<?php

namespace Economic;

class Unit_CreateFromData
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
     * @return \Economic\Unit_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
