<?php

namespace Economic;

class Quotation_SetDueDate
{

    /**
     * @var QuotationHandle $quotationHandle
     */
    protected $quotationHandle = null;

    /**
     * @var \DateTime $value
     */
    protected $value = null;

    /**
     * @param QuotationHandle $quotationHandle
     * @param \DateTime $value
     */
    public function __construct($quotationHandle, \DateTime $value)
    {
      $this->quotationHandle = $quotationHandle;
      $this->value = $value->format(\DateTime::ATOM);
    }

    /**
     * @return QuotationHandle
     */
    public function getQuotationHandle()
    {
      return $this->quotationHandle;
    }

    /**
     * @param QuotationHandle $quotationHandle
     * @return \Economic\Quotation_SetDueDate
     */
    public function setQuotationHandle($quotationHandle)
    {
      $this->quotationHandle = $quotationHandle;
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
     * @return \Economic\Quotation_SetDueDate
     */
    public function setValue(\DateTime $value)
    {
      $this->value = $value->format(\DateTime::ATOM);
      return $this;
    }

}
