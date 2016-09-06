<?php

namespace Economic;

class Order_GetPublicEntryNumberResponse
{

    /**
     * @var string $Order_GetPublicEntryNumberResult
     */
    protected $Order_GetPublicEntryNumberResult = null;

    /**
     * @param string $Order_GetPublicEntryNumberResult
     */
    public function __construct($Order_GetPublicEntryNumberResult)
    {
      $this->Order_GetPublicEntryNumberResult = $Order_GetPublicEntryNumberResult;
    }

    /**
     * @return string
     */
    public function getOrder_GetPublicEntryNumberResult()
    {
      return $this->Order_GetPublicEntryNumberResult;
    }

    /**
     * @param string $Order_GetPublicEntryNumberResult
     * @return \Economic\Order_GetPublicEntryNumberResponse
     */
    public function setOrder_GetPublicEntryNumberResult($Order_GetPublicEntryNumberResult)
    {
      $this->Order_GetPublicEntryNumberResult = $Order_GetPublicEntryNumberResult;
      return $this;
    }

}
