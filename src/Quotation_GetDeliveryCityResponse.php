<?php

namespace Economic;

class Quotation_GetDeliveryCityResponse
{

    /**
     * @var string $Quotation_GetDeliveryCityResult
     */
    protected $Quotation_GetDeliveryCityResult = null;

    /**
     * @param string $Quotation_GetDeliveryCityResult
     */
    public function __construct($Quotation_GetDeliveryCityResult)
    {
      $this->Quotation_GetDeliveryCityResult = $Quotation_GetDeliveryCityResult;
    }

    /**
     * @return string
     */
    public function getQuotation_GetDeliveryCityResult()
    {
      return $this->Quotation_GetDeliveryCityResult;
    }

    /**
     * @param string $Quotation_GetDeliveryCityResult
     * @return \Economic\Quotation_GetDeliveryCityResponse
     */
    public function setQuotation_GetDeliveryCityResult($Quotation_GetDeliveryCityResult)
    {
      $this->Quotation_GetDeliveryCityResult = $Quotation_GetDeliveryCityResult;
      return $this;
    }

}
