<?php

namespace Economic;

class OrderLine_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfOrderLineHandle $OrderLine_UpdateFromDataArrayResult
     */
    protected $OrderLine_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfOrderLineHandle $OrderLine_UpdateFromDataArrayResult
     */
    public function __construct($OrderLine_UpdateFromDataArrayResult)
    {
      $this->OrderLine_UpdateFromDataArrayResult = $OrderLine_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfOrderLineHandle
     */
    public function getOrderLine_UpdateFromDataArrayResult()
    {
      return $this->OrderLine_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfOrderLineHandle $OrderLine_UpdateFromDataArrayResult
     * @return \Economic\OrderLine_UpdateFromDataArrayResponse
     */
    public function setOrderLine_UpdateFromDataArrayResult($OrderLine_UpdateFromDataArrayResult)
    {
      $this->OrderLine_UpdateFromDataArrayResult = $OrderLine_UpdateFromDataArrayResult;
      return $this;
    }

}
