<?php

namespace Economic;

class Order_GetLinesResponse
{

    /**
     * @var ArrayOfOrderLineHandle $Order_GetLinesResult
     */
    protected $Order_GetLinesResult = null;

    /**
     * @param ArrayOfOrderLineHandle $Order_GetLinesResult
     */
    public function __construct($Order_GetLinesResult)
    {
      $this->Order_GetLinesResult = $Order_GetLinesResult;
    }

    /**
     * @return ArrayOfOrderLineHandle
     */
    public function getOrder_GetLinesResult()
    {
      return $this->Order_GetLinesResult;
    }

    /**
     * @param ArrayOfOrderLineHandle $Order_GetLinesResult
     * @return \Economic\Order_GetLinesResponse
     */
    public function setOrder_GetLinesResult($Order_GetLinesResult)
    {
      $this->Order_GetLinesResult = $Order_GetLinesResult;
      return $this;
    }

}
