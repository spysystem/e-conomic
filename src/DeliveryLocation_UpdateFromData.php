<?php

namespace Economic;

class DeliveryLocation_UpdateFromData
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
     * @return \Economic\DeliveryLocation_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
