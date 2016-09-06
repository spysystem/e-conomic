<?php

namespace Economic;

class DeliveryLocation_CreateFromData
{

    /**
     * @var DeliveryLocationData $data
     */
    protected $data = null;

    /**
     * @param DeliveryLocationData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return DeliveryLocationData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param DeliveryLocationData $data
     * @return \Economic\DeliveryLocation_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
