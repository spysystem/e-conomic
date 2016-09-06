<?php

namespace Economic;

class CurrentInvoice_GetDeliveryLocationResponse
{

    /**
     * @var DeliveryLocationHandle $CurrentInvoice_GetDeliveryLocationResult
     */
    protected $CurrentInvoice_GetDeliveryLocationResult = null;

    /**
     * @param DeliveryLocationHandle $CurrentInvoice_GetDeliveryLocationResult
     */
    public function __construct($CurrentInvoice_GetDeliveryLocationResult)
    {
      $this->CurrentInvoice_GetDeliveryLocationResult = $CurrentInvoice_GetDeliveryLocationResult;
    }

    /**
     * @return DeliveryLocationHandle
     */
    public function getCurrentInvoice_GetDeliveryLocationResult()
    {
      return $this->CurrentInvoice_GetDeliveryLocationResult;
    }

    /**
     * @param DeliveryLocationHandle $CurrentInvoice_GetDeliveryLocationResult
     * @return \Economic\CurrentInvoice_GetDeliveryLocationResponse
     */
    public function setCurrentInvoice_GetDeliveryLocationResult($CurrentInvoice_GetDeliveryLocationResult)
    {
      $this->CurrentInvoice_GetDeliveryLocationResult = $CurrentInvoice_GetDeliveryLocationResult;
      return $this;
    }

}
