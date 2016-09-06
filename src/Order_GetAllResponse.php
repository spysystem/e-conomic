<?php

namespace Economic;

class Order_GetAllResponse
{

    /**
     * @var ArrayOfOrderHandle $Order_GetAllResult
     */
    protected $Order_GetAllResult = null;

    /**
     * @param ArrayOfOrderHandle $Order_GetAllResult
     */
    public function __construct($Order_GetAllResult)
    {
      $this->Order_GetAllResult = $Order_GetAllResult;
    }

    /**
     * @return ArrayOfOrderHandle
     */
    public function getOrder_GetAllResult()
    {
      return $this->Order_GetAllResult;
    }

    /**
     * @param ArrayOfOrderHandle $Order_GetAllResult
     * @return \Economic\Order_GetAllResponse
     */
    public function setOrder_GetAllResult($Order_GetAllResult)
    {
      $this->Order_GetAllResult = $Order_GetAllResult;
      return $this;
    }

}
