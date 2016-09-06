<?php

namespace Economic;

class Quotation_GetDeliveryLocationResponse
{

    /**
     * @var DeliveryLocationHandle $Quotation_GetDeliveryLocationResult
     */
    protected $Quotation_GetDeliveryLocationResult = null;

    /**
     * @param DeliveryLocationHandle $Quotation_GetDeliveryLocationResult
     */
    public function __construct($Quotation_GetDeliveryLocationResult)
    {
      $this->Quotation_GetDeliveryLocationResult = $Quotation_GetDeliveryLocationResult;
    }

    /**
     * @return DeliveryLocationHandle
     */
    public function getQuotation_GetDeliveryLocationResult()
    {
      return $this->Quotation_GetDeliveryLocationResult;
    }

    /**
     * @param DeliveryLocationHandle $Quotation_GetDeliveryLocationResult
     * @return \Economic\Quotation_GetDeliveryLocationResponse
     */
    public function setQuotation_GetDeliveryLocationResult($Quotation_GetDeliveryLocationResult)
    {
      $this->Quotation_GetDeliveryLocationResult = $Quotation_GetDeliveryLocationResult;
      return $this;
    }

}
