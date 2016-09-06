<?php

namespace Economic;

class CurrentInvoice_GetDeliveryDateResponse
{

    /**
     * @var \DateTime $CurrentInvoice_GetDeliveryDateResult
     */
    protected $CurrentInvoice_GetDeliveryDateResult = null;

    /**
     * @param \DateTime $CurrentInvoice_GetDeliveryDateResult
     */
    public function __construct(\DateTime $CurrentInvoice_GetDeliveryDateResult)
    {
      $this->CurrentInvoice_GetDeliveryDateResult = $CurrentInvoice_GetDeliveryDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getCurrentInvoice_GetDeliveryDateResult()
    {
      if ($this->CurrentInvoice_GetDeliveryDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CurrentInvoice_GetDeliveryDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CurrentInvoice_GetDeliveryDateResult
     * @return \Economic\CurrentInvoice_GetDeliveryDateResponse
     */
    public function setCurrentInvoice_GetDeliveryDateResult(\DateTime $CurrentInvoice_GetDeliveryDateResult)
    {
      $this->CurrentInvoice_GetDeliveryDateResult = $CurrentInvoice_GetDeliveryDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
