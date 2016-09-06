<?php

namespace Economic;

class InvoiceLine_GetDeliveryDateResponse
{

    /**
     * @var \DateTime $InvoiceLine_GetDeliveryDateResult
     */
    protected $InvoiceLine_GetDeliveryDateResult = null;

    /**
     * @param \DateTime $InvoiceLine_GetDeliveryDateResult
     */
    public function __construct(\DateTime $InvoiceLine_GetDeliveryDateResult)
    {
      $this->InvoiceLine_GetDeliveryDateResult = $InvoiceLine_GetDeliveryDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceLine_GetDeliveryDateResult()
    {
      if ($this->InvoiceLine_GetDeliveryDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InvoiceLine_GetDeliveryDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InvoiceLine_GetDeliveryDateResult
     * @return \Economic\InvoiceLine_GetDeliveryDateResponse
     */
    public function setInvoiceLine_GetDeliveryDateResult(\DateTime $InvoiceLine_GetDeliveryDateResult)
    {
      $this->InvoiceLine_GetDeliveryDateResult = $InvoiceLine_GetDeliveryDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
