<?php

namespace Economic;

class OrderLine_GetDataArrayResponse
{

    /**
     * @var ArrayOfOrderLineData $OrderLine_GetDataArrayResult
     */
    protected $OrderLine_GetDataArrayResult = null;

    /**
     * @param ArrayOfOrderLineData $OrderLine_GetDataArrayResult
     */
    public function __construct($OrderLine_GetDataArrayResult)
    {
      $this->OrderLine_GetDataArrayResult = $OrderLine_GetDataArrayResult;
    }

    /**
     * @return ArrayOfOrderLineData
     */
    public function getOrderLine_GetDataArrayResult()
    {
      return $this->OrderLine_GetDataArrayResult;
    }

    /**
     * @param ArrayOfOrderLineData $OrderLine_GetDataArrayResult
     * @return \Economic\OrderLine_GetDataArrayResponse
     */
    public function setOrderLine_GetDataArrayResult($OrderLine_GetDataArrayResult)
    {
      $this->OrderLine_GetDataArrayResult = $OrderLine_GetDataArrayResult;
      return $this;
    }

}
