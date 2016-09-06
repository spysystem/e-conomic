<?php

namespace Economic;

class Order_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfOrderHandle $Order_CreateFromDataArrayResult
     */
    protected $Order_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfOrderHandle $Order_CreateFromDataArrayResult
     */
    public function __construct($Order_CreateFromDataArrayResult)
    {
      $this->Order_CreateFromDataArrayResult = $Order_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfOrderHandle
     */
    public function getOrder_CreateFromDataArrayResult()
    {
      return $this->Order_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfOrderHandle $Order_CreateFromDataArrayResult
     * @return \Economic\Order_CreateFromDataArrayResponse
     */
    public function setOrder_CreateFromDataArrayResult($Order_CreateFromDataArrayResult)
    {
      $this->Order_CreateFromDataArrayResult = $Order_CreateFromDataArrayResult;
      return $this;
    }

}
