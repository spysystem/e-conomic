<?php

namespace Economic;

class Invoice_GetDeliveryLocationResponse
{

    /**
     * @var DeliveryLocationHandle $Invoice_GetDeliveryLocationResult
     */
    protected $Invoice_GetDeliveryLocationResult = null;

    /**
     * @param DeliveryLocationHandle $Invoice_GetDeliveryLocationResult
     */
    public function __construct($Invoice_GetDeliveryLocationResult)
    {
      $this->Invoice_GetDeliveryLocationResult = $Invoice_GetDeliveryLocationResult;
    }

    /**
     * @return DeliveryLocationHandle
     */
    public function getInvoice_GetDeliveryLocationResult()
    {
      return $this->Invoice_GetDeliveryLocationResult;
    }

    /**
     * @param DeliveryLocationHandle $Invoice_GetDeliveryLocationResult
     * @return \Economic\Invoice_GetDeliveryLocationResponse
     */
    public function setInvoice_GetDeliveryLocationResult($Invoice_GetDeliveryLocationResult)
    {
      $this->Invoice_GetDeliveryLocationResult = $Invoice_GetDeliveryLocationResult;
      return $this;
    }

}
