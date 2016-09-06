<?php

namespace Economic;

class OrderLine_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfOrderLineHandle $OrderLine_CreateFromDataArrayResult
     */
    protected $OrderLine_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfOrderLineHandle $OrderLine_CreateFromDataArrayResult
     */
    public function __construct($OrderLine_CreateFromDataArrayResult)
    {
      $this->OrderLine_CreateFromDataArrayResult = $OrderLine_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfOrderLineHandle
     */
    public function getOrderLine_CreateFromDataArrayResult()
    {
      return $this->OrderLine_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfOrderLineHandle $OrderLine_CreateFromDataArrayResult
     * @return \Economic\OrderLine_CreateFromDataArrayResponse
     */
    public function setOrderLine_CreateFromDataArrayResult($OrderLine_CreateFromDataArrayResult)
    {
      $this->OrderLine_CreateFromDataArrayResult = $OrderLine_CreateFromDataArrayResult;
      return $this;
    }

}
