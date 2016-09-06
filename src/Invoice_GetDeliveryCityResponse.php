<?php

namespace Economic;

class Invoice_GetDeliveryCityResponse
{

    /**
     * @var string $Invoice_GetDeliveryCityResult
     */
    protected $Invoice_GetDeliveryCityResult = null;

    /**
     * @param string $Invoice_GetDeliveryCityResult
     */
    public function __construct($Invoice_GetDeliveryCityResult)
    {
      $this->Invoice_GetDeliveryCityResult = $Invoice_GetDeliveryCityResult;
    }

    /**
     * @return string
     */
    public function getInvoice_GetDeliveryCityResult()
    {
      return $this->Invoice_GetDeliveryCityResult;
    }

    /**
     * @param string $Invoice_GetDeliveryCityResult
     * @return \Economic\Invoice_GetDeliveryCityResponse
     */
    public function setInvoice_GetDeliveryCityResult($Invoice_GetDeliveryCityResult)
    {
      $this->Invoice_GetDeliveryCityResult = $Invoice_GetDeliveryCityResult;
      return $this;
    }

}
