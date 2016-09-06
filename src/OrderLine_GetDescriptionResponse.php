<?php

namespace Economic;

class OrderLine_GetDescriptionResponse
{

    /**
     * @var string $OrderLine_GetDescriptionResult
     */
    protected $OrderLine_GetDescriptionResult = null;

    /**
     * @param string $OrderLine_GetDescriptionResult
     */
    public function __construct($OrderLine_GetDescriptionResult)
    {
      $this->OrderLine_GetDescriptionResult = $OrderLine_GetDescriptionResult;
    }

    /**
     * @return string
     */
    public function getOrderLine_GetDescriptionResult()
    {
      return $this->OrderLine_GetDescriptionResult;
    }

    /**
     * @param string $OrderLine_GetDescriptionResult
     * @return \Economic\OrderLine_GetDescriptionResponse
     */
    public function setOrderLine_GetDescriptionResult($OrderLine_GetDescriptionResult)
    {
      $this->OrderLine_GetDescriptionResult = $OrderLine_GetDescriptionResult;
      return $this;
    }

}
