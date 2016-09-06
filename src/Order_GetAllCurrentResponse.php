<?php

namespace Economic;

class Order_GetAllCurrentResponse
{

    /**
     * @var ArrayOfOrderHandle $Order_GetAllCurrentResult
     */
    protected $Order_GetAllCurrentResult = null;

    /**
     * @param ArrayOfOrderHandle $Order_GetAllCurrentResult
     */
    public function __construct($Order_GetAllCurrentResult)
    {
      $this->Order_GetAllCurrentResult = $Order_GetAllCurrentResult;
    }

    /**
     * @return ArrayOfOrderHandle
     */
    public function getOrder_GetAllCurrentResult()
    {
      return $this->Order_GetAllCurrentResult;
    }

    /**
     * @param ArrayOfOrderHandle $Order_GetAllCurrentResult
     * @return \Economic\Order_GetAllCurrentResponse
     */
    public function setOrder_GetAllCurrentResult($Order_GetAllCurrentResult)
    {
      $this->Order_GetAllCurrentResult = $Order_GetAllCurrentResult;
      return $this;
    }

}
