<?php

namespace Economic;

class Invoice_GetTermsOfDeliveryResponse
{

    /**
     * @var string $Invoice_GetTermsOfDeliveryResult
     */
    protected $Invoice_GetTermsOfDeliveryResult = null;

    /**
     * @param string $Invoice_GetTermsOfDeliveryResult
     */
    public function __construct($Invoice_GetTermsOfDeliveryResult)
    {
      $this->Invoice_GetTermsOfDeliveryResult = $Invoice_GetTermsOfDeliveryResult;
    }

    /**
     * @return string
     */
    public function getInvoice_GetTermsOfDeliveryResult()
    {
      return $this->Invoice_GetTermsOfDeliveryResult;
    }

    /**
     * @param string $Invoice_GetTermsOfDeliveryResult
     * @return \Economic\Invoice_GetTermsOfDeliveryResponse
     */
    public function setInvoice_GetTermsOfDeliveryResult($Invoice_GetTermsOfDeliveryResult)
    {
      $this->Invoice_GetTermsOfDeliveryResult = $Invoice_GetTermsOfDeliveryResult;
      return $this;
    }

}
