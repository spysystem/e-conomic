<?php

namespace Economic;

class Order_GetAllUpdatedResponse
{

    /**
     * @var ArrayOfOrderHandle $Order_GetAllUpdatedResult
     */
    protected $Order_GetAllUpdatedResult = null;

    /**
     * @param ArrayOfOrderHandle $Order_GetAllUpdatedResult
     */
    public function __construct($Order_GetAllUpdatedResult)
    {
      $this->Order_GetAllUpdatedResult = $Order_GetAllUpdatedResult;
    }

    /**
     * @return ArrayOfOrderHandle
     */
    public function getOrder_GetAllUpdatedResult()
    {
      return $this->Order_GetAllUpdatedResult;
    }

    /**
     * @param ArrayOfOrderHandle $Order_GetAllUpdatedResult
     * @return \Economic\Order_GetAllUpdatedResponse
     */
    public function setOrder_GetAllUpdatedResult($Order_GetAllUpdatedResult)
    {
      $this->Order_GetAllUpdatedResult = $Order_GetAllUpdatedResult;
      return $this;
    }

}
