<?php

namespace Economic;

class Order_GetNumberResponse
{

    /**
     * @var int $Order_GetNumberResult
     */
    protected $Order_GetNumberResult = null;

    /**
     * @param int $Order_GetNumberResult
     */
    public function __construct($Order_GetNumberResult)
    {
      $this->Order_GetNumberResult = $Order_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getOrder_GetNumberResult()
    {
      return $this->Order_GetNumberResult;
    }

    /**
     * @param int $Order_GetNumberResult
     * @return \Economic\Order_GetNumberResponse
     */
    public function setOrder_GetNumberResult($Order_GetNumberResult)
    {
      $this->Order_GetNumberResult = $Order_GetNumberResult;
      return $this;
    }

}
