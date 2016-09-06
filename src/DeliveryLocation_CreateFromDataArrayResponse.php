<?php

namespace Economic;

class DeliveryLocation_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfDeliveryLocationHandle $DeliveryLocation_CreateFromDataArrayResult
     */
    protected $DeliveryLocation_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfDeliveryLocationHandle $DeliveryLocation_CreateFromDataArrayResult
     */
    public function __construct($DeliveryLocation_CreateFromDataArrayResult)
    {
      $this->DeliveryLocation_CreateFromDataArrayResult = $DeliveryLocation_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfDeliveryLocationHandle
     */
    public function getDeliveryLocation_CreateFromDataArrayResult()
    {
      return $this->DeliveryLocation_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfDeliveryLocationHandle $DeliveryLocation_CreateFromDataArrayResult
     * @return \Economic\DeliveryLocation_CreateFromDataArrayResponse
     */
    public function setDeliveryLocation_CreateFromDataArrayResult($DeliveryLocation_CreateFromDataArrayResult)
    {
      $this->DeliveryLocation_CreateFromDataArrayResult = $DeliveryLocation_CreateFromDataArrayResult;
      return $this;
    }

}
