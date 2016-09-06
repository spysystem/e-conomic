<?php

namespace Economic;

class Order_FindByNumberIntervalResponse
{

    /**
     * @var ArrayOfOrderHandle $Order_FindByNumberIntervalResult
     */
    protected $Order_FindByNumberIntervalResult = null;

    /**
     * @param ArrayOfOrderHandle $Order_FindByNumberIntervalResult
     */
    public function __construct($Order_FindByNumberIntervalResult)
    {
      $this->Order_FindByNumberIntervalResult = $Order_FindByNumberIntervalResult;
    }

    /**
     * @return ArrayOfOrderHandle
     */
    public function getOrder_FindByNumberIntervalResult()
    {
      return $this->Order_FindByNumberIntervalResult;
    }

    /**
     * @param ArrayOfOrderHandle $Order_FindByNumberIntervalResult
     * @return \Economic\Order_FindByNumberIntervalResponse
     */
    public function setOrder_FindByNumberIntervalResult($Order_FindByNumberIntervalResult)
    {
      $this->Order_FindByNumberIntervalResult = $Order_FindByNumberIntervalResult;
      return $this;
    }

}
