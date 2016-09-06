<?php

namespace Economic;

class Invoice_GetDeliveryCountyResponse
{

    /**
     * @var string $Invoice_GetDeliveryCountyResult
     */
    protected $Invoice_GetDeliveryCountyResult = null;

    /**
     * @param string $Invoice_GetDeliveryCountyResult
     */
    public function __construct($Invoice_GetDeliveryCountyResult)
    {
      $this->Invoice_GetDeliveryCountyResult = $Invoice_GetDeliveryCountyResult;
    }

    /**
     * @return string
     */
    public function getInvoice_GetDeliveryCountyResult()
    {
      return $this->Invoice_GetDeliveryCountyResult;
    }

    /**
     * @param string $Invoice_GetDeliveryCountyResult
     * @return \Economic\Invoice_GetDeliveryCountyResponse
     */
    public function setInvoice_GetDeliveryCountyResult($Invoice_GetDeliveryCountyResult)
    {
      $this->Invoice_GetDeliveryCountyResult = $Invoice_GetDeliveryCountyResult;
      return $this;
    }

}
