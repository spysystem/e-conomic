<?php

namespace Economic;

class OrderLine_GetNumberResponse
{

    /**
     * @var int $OrderLine_GetNumberResult
     */
    protected $OrderLine_GetNumberResult = null;

    /**
     * @param int $OrderLine_GetNumberResult
     */
    public function __construct($OrderLine_GetNumberResult)
    {
      $this->OrderLine_GetNumberResult = $OrderLine_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getOrderLine_GetNumberResult()
    {
      return $this->OrderLine_GetNumberResult;
    }

    /**
     * @param int $OrderLine_GetNumberResult
     * @return \Economic\OrderLine_GetNumberResponse
     */
    public function setOrderLine_GetNumberResult($OrderLine_GetNumberResult)
    {
      $this->OrderLine_GetNumberResult = $OrderLine_GetNumberResult;
      return $this;
    }

}
