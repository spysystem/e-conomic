<?php

namespace Economic;

class Order_GetPdfResponse
{

    /**
     * @var base64Binary $Order_GetPdfResult
     */
    protected $Order_GetPdfResult = null;

    /**
     * @param base64Binary $Order_GetPdfResult
     */
    public function __construct($Order_GetPdfResult)
    {
      $this->Order_GetPdfResult = $Order_GetPdfResult;
    }

    /**
     * @return base64Binary
     */
    public function getOrder_GetPdfResult()
    {
      return $this->Order_GetPdfResult;
    }

    /**
     * @param base64Binary $Order_GetPdfResult
     * @return \Economic\Order_GetPdfResponse
     */
    public function setOrder_GetPdfResult($Order_GetPdfResult)
    {
      $this->Order_GetPdfResult = $Order_GetPdfResult;
      return $this;
    }

}
