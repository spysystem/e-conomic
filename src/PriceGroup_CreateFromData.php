<?php

namespace Economic;

class PriceGroup_CreateFromData
{

    /**
     * @var PriceGroupData $data
     */
    protected $data = null;

    /**
     * @param PriceGroupData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return PriceGroupData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param PriceGroupData $data
     * @return \Economic\PriceGroup_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
