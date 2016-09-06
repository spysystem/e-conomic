<?php

namespace Economic;

class CurrentInvoiceLine_GetDeliveryDateResponse
{

    /**
     * @var \DateTime $CurrentInvoiceLine_GetDeliveryDateResult
     */
    protected $CurrentInvoiceLine_GetDeliveryDateResult = null;

    /**
     * @param \DateTime $CurrentInvoiceLine_GetDeliveryDateResult
     */
    public function __construct(\DateTime $CurrentInvoiceLine_GetDeliveryDateResult)
    {
      $this->CurrentInvoiceLine_GetDeliveryDateResult = $CurrentInvoiceLine_GetDeliveryDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getCurrentInvoiceLine_GetDeliveryDateResult()
    {
      if ($this->CurrentInvoiceLine_GetDeliveryDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CurrentInvoiceLine_GetDeliveryDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CurrentInvoiceLine_GetDeliveryDateResult
     * @return \Economic\CurrentInvoiceLine_GetDeliveryDateResponse
     */
    public function setCurrentInvoiceLine_GetDeliveryDateResult(\DateTime $CurrentInvoiceLine_GetDeliveryDateResult)
    {
      $this->CurrentInvoiceLine_GetDeliveryDateResult = $CurrentInvoiceLine_GetDeliveryDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
