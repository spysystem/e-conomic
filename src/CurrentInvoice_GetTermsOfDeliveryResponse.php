<?php

namespace Economic;

class CurrentInvoice_GetTermsOfDeliveryResponse
{

    /**
     * @var string $CurrentInvoice_GetTermsOfDeliveryResult
     */
    protected $CurrentInvoice_GetTermsOfDeliveryResult = null;

    /**
     * @param string $CurrentInvoice_GetTermsOfDeliveryResult
     */
    public function __construct($CurrentInvoice_GetTermsOfDeliveryResult)
    {
      $this->CurrentInvoice_GetTermsOfDeliveryResult = $CurrentInvoice_GetTermsOfDeliveryResult;
    }

    /**
     * @return string
     */
    public function getCurrentInvoice_GetTermsOfDeliveryResult()
    {
      return $this->CurrentInvoice_GetTermsOfDeliveryResult;
    }

    /**
     * @param string $CurrentInvoice_GetTermsOfDeliveryResult
     * @return \Economic\CurrentInvoice_GetTermsOfDeliveryResponse
     */
    public function setCurrentInvoice_GetTermsOfDeliveryResult($CurrentInvoice_GetTermsOfDeliveryResult)
    {
      $this->CurrentInvoice_GetTermsOfDeliveryResult = $CurrentInvoice_GetTermsOfDeliveryResult;
      return $this;
    }

}
