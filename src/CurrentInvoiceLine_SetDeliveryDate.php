<?php

namespace Economic;

class CurrentInvoiceLine_SetDeliveryDate
{

    /**
     * @var CurrentInvoiceLineHandle $currentInvoiceLineHandle
     */
    protected $currentInvoiceLineHandle = null;

    /**
     * @var \DateTime $value
     */
    protected $value = null;

    /**
     * @param CurrentInvoiceLineHandle $currentInvoiceLineHandle
     * @param \DateTime $value
     */
    public function __construct($currentInvoiceLineHandle, \DateTime $value)
    {
      $this->currentInvoiceLineHandle = $currentInvoiceLineHandle;
      $this->value = $value->format(\DateTime::ATOM);
    }

    /**
     * @return CurrentInvoiceLineHandle
     */
    public function getCurrentInvoiceLineHandle()
    {
      return $this->currentInvoiceLineHandle;
    }

    /**
     * @param CurrentInvoiceLineHandle $currentInvoiceLineHandle
     * @return \Economic\CurrentInvoiceLine_SetDeliveryDate
     */
    public function setCurrentInvoiceLineHandle($currentInvoiceLineHandle)
    {
      $this->currentInvoiceLineHandle = $currentInvoiceLineHandle;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValue()
    {
      if ($this->value == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->value);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $value
     * @return \Economic\CurrentInvoiceLine_SetDeliveryDate
     */
    public function setValue(\DateTime $value)
    {
      $this->value = $value->format(\DateTime::ATOM);
      return $this;
    }

}
