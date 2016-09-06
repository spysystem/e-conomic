<?php

namespace Economic;

class Order_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfOrderHandle $Order_UpdateFromDataArrayResult
     */
    protected $Order_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfOrderHandle $Order_UpdateFromDataArrayResult
     */
    public function __construct($Order_UpdateFromDataArrayResult)
    {
      $this->Order_UpdateFromDataArrayResult = $Order_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfOrderHandle
     */
    public function getOrder_UpdateFromDataArrayResult()
    {
      return $this->Order_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfOrderHandle $Order_UpdateFromDataArrayResult
     * @return \Economic\Order_UpdateFromDataArrayResponse
     */
    public function setOrder_UpdateFromDataArrayResult($Order_UpdateFromDataArrayResult)
    {
      $this->Order_UpdateFromDataArrayResult = $Order_UpdateFromDataArrayResult;
      return $this;
    }

}
