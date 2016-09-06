<?php

namespace Economic;

class QuotationLine_SetDeliveryDate
{

    /**
     * @var QuotationLineHandle $quotationLineHandle
     */
    protected $quotationLineHandle = null;

    /**
     * @var \DateTime $value
     */
    protected $value = null;

    /**
     * @param QuotationLineHandle $quotationLineHandle
     * @param \DateTime $value
     */
    public function __construct($quotationLineHandle, \DateTime $value)
    {
      $this->quotationLineHandle = $quotationLineHandle;
      $this->value = $value->format(\DateTime::ATOM);
    }

    /**
     * @return QuotationLineHandle
     */
    public function getQuotationLineHandle()
    {
      return $this->quotationLineHandle;
    }

    /**
     * @param QuotationLineHandle $quotationLineHandle
     * @return \Economic\QuotationLine_SetDeliveryDate
     */
    public function setQuotationLineHandle($quotationLineHandle)
    {
      $this->quotationLineHandle = $quotationLineHandle;
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
     * @return \Economic\QuotationLine_SetDeliveryDate
     */
    public function setValue(\DateTime $value)
    {
      $this->value = $value->format(\DateTime::ATOM);
      return $this;
    }

}
