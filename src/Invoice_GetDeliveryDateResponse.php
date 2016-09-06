<?php

namespace Economic;

class Invoice_GetDeliveryDateResponse
{

    /**
     * @var \DateTime $Invoice_GetDeliveryDateResult
     */
    protected $Invoice_GetDeliveryDateResult = null;

    /**
     * @param \DateTime $Invoice_GetDeliveryDateResult
     */
    public function __construct(\DateTime $Invoice_GetDeliveryDateResult)
    {
      $this->Invoice_GetDeliveryDateResult = $Invoice_GetDeliveryDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getInvoice_GetDeliveryDateResult()
    {
      if ($this->Invoice_GetDeliveryDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Invoice_GetDeliveryDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Invoice_GetDeliveryDateResult
     * @return \Economic\Invoice_GetDeliveryDateResponse
     */
    public function setInvoice_GetDeliveryDateResult(\DateTime $Invoice_GetDeliveryDateResult)
    {
      $this->Invoice_GetDeliveryDateResult = $Invoice_GetDeliveryDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
