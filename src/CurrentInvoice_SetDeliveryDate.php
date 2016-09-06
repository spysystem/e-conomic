<?php

namespace Economic;

class CurrentInvoice_SetDeliveryDate
{

    /**
     * @var CurrentInvoiceHandle $currentInvoiceHandle
     */
    protected $currentInvoiceHandle = null;

    /**
     * @var \DateTime $value
     */
    protected $value = null;

    /**
     * @param CurrentInvoiceHandle $currentInvoiceHandle
     * @param \DateTime $value
     */
    public function __construct($currentInvoiceHandle, \DateTime $value)
    {
      $this->currentInvoiceHandle = $currentInvoiceHandle;
      $this->value = $value->format(\DateTime::ATOM);
    }

    /**
     * @return CurrentInvoiceHandle
     */
    public function getCurrentInvoiceHandle()
    {
      return $this->currentInvoiceHandle;
    }

    /**
     * @param CurrentInvoiceHandle $currentInvoiceHandle
     * @return \Economic\CurrentInvoice_SetDeliveryDate
     */
    public function setCurrentInvoiceHandle($currentInvoiceHandle)
    {
      $this->currentInvoiceHandle = $currentInvoiceHandle;
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
     * @return \Economic\CurrentInvoice_SetDeliveryDate
     */
    public function setValue(\DateTime $value)
    {
      $this->value = $value->format(\DateTime::ATOM);
      return $this;
    }

}
