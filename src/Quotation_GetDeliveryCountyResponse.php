<?php

namespace Economic;

class Quotation_GetDeliveryCountyResponse
{

    /**
     * @var string $Quotation_GetDeliveryCountyResult
     */
    protected $Quotation_GetDeliveryCountyResult = null;

    /**
     * @param string $Quotation_GetDeliveryCountyResult
     */
    public function __construct($Quotation_GetDeliveryCountyResult)
    {
      $this->Quotation_GetDeliveryCountyResult = $Quotation_GetDeliveryCountyResult;
    }

    /**
     * @return string
     */
    public function getQuotation_GetDeliveryCountyResult()
    {
      return $this->Quotation_GetDeliveryCountyResult;
    }

    /**
     * @param string $Quotation_GetDeliveryCountyResult
     * @return \Economic\Quotation_GetDeliveryCountyResponse
     */
    public function setQuotation_GetDeliveryCountyResult($Quotation_GetDeliveryCountyResult)
    {
      $this->Quotation_GetDeliveryCountyResult = $Quotation_GetDeliveryCountyResult;
      return $this;
    }

}
