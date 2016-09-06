<?php

namespace Economic;

class DeliveryLocation_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfDeliveryLocationHandle $DeliveryLocation_UpdateFromDataArrayResult
     */
    protected $DeliveryLocation_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfDeliveryLocationHandle $DeliveryLocation_UpdateFromDataArrayResult
     */
    public function __construct($DeliveryLocation_UpdateFromDataArrayResult)
    {
      $this->DeliveryLocation_UpdateFromDataArrayResult = $DeliveryLocation_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfDeliveryLocationHandle
     */
    public function getDeliveryLocation_UpdateFromDataArrayResult()
    {
      return $this->DeliveryLocation_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfDeliveryLocationHandle $DeliveryLocation_UpdateFromDataArrayResult
     * @return \Economic\DeliveryLocation_UpdateFromDataArrayResponse
     */
    public function setDeliveryLocation_UpdateFromDataArrayResult($DeliveryLocation_UpdateFromDataArrayResult)
    {
      $this->DeliveryLocation_UpdateFromDataArrayResult = $DeliveryLocation_UpdateFromDataArrayResult;
      return $this;
    }

}
