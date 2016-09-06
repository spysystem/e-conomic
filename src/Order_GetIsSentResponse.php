<?php

namespace Economic;

class Order_GetIsSentResponse
{

    /**
     * @var boolean $Order_GetIsSentResult
     */
    protected $Order_GetIsSentResult = null;

    /**
     * @param boolean $Order_GetIsSentResult
     */
    public function __construct($Order_GetIsSentResult)
    {
      $this->Order_GetIsSentResult = $Order_GetIsSentResult;
    }

    /**
     * @return boolean
     */
    public function getOrder_GetIsSentResult()
    {
      return $this->Order_GetIsSentResult;
    }

    /**
     * @param boolean $Order_GetIsSentResult
     * @return \Economic\Order_GetIsSentResponse
     */
    public function setOrder_GetIsSentResult($Order_GetIsSentResult)
    {
      $this->Order_GetIsSentResult = $Order_GetIsSentResult;
      return $this;
    }

}
