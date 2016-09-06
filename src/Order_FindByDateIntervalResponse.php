<?php

namespace Economic;

class Order_FindByDateIntervalResponse
{

    /**
     * @var ArrayOfOrderHandle $Order_FindByDateIntervalResult
     */
    protected $Order_FindByDateIntervalResult = null;

    /**
     * @param ArrayOfOrderHandle $Order_FindByDateIntervalResult
     */
    public function __construct($Order_FindByDateIntervalResult)
    {
      $this->Order_FindByDateIntervalResult = $Order_FindByDateIntervalResult;
    }

    /**
     * @return ArrayOfOrderHandle
     */
    public function getOrder_FindByDateIntervalResult()
    {
      return $this->Order_FindByDateIntervalResult;
    }

    /**
     * @param ArrayOfOrderHandle $Order_FindByDateIntervalResult
     * @return \Economic\Order_FindByDateIntervalResponse
     */
    public function setOrder_FindByDateIntervalResult($Order_FindByDateIntervalResult)
    {
      $this->Order_FindByDateIntervalResult = $Order_FindByDateIntervalResult;
      return $this;
    }

}
