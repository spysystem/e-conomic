<?php

namespace Economic;

class Quotation_GetTermsOfDeliveryResponse
{

    /**
     * @var string $Quotation_GetTermsOfDeliveryResult
     */
    protected $Quotation_GetTermsOfDeliveryResult = null;

    /**
     * @param string $Quotation_GetTermsOfDeliveryResult
     */
    public function __construct($Quotation_GetTermsOfDeliveryResult)
    {
      $this->Quotation_GetTermsOfDeliveryResult = $Quotation_GetTermsOfDeliveryResult;
    }

    /**
     * @return string
     */
    public function getQuotation_GetTermsOfDeliveryResult()
    {
      return $this->Quotation_GetTermsOfDeliveryResult;
    }

    /**
     * @param string $Quotation_GetTermsOfDeliveryResult
     * @return \Economic\Quotation_GetTermsOfDeliveryResponse
     */
    public function setQuotation_GetTermsOfDeliveryResult($Quotation_GetTermsOfDeliveryResult)
    {
      $this->Quotation_GetTermsOfDeliveryResult = $Quotation_GetTermsOfDeliveryResult;
      return $this;
    }

}
