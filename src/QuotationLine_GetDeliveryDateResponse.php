<?php

namespace Economic;

class QuotationLine_GetDeliveryDateResponse
{

    /**
     * @var \DateTime $QuotationLine_GetDeliveryDateResult
     */
    protected $QuotationLine_GetDeliveryDateResult = null;

    /**
     * @param \DateTime $QuotationLine_GetDeliveryDateResult
     */
    public function __construct(\DateTime $QuotationLine_GetDeliveryDateResult)
    {
      $this->QuotationLine_GetDeliveryDateResult = $QuotationLine_GetDeliveryDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getQuotationLine_GetDeliveryDateResult()
    {
      if ($this->QuotationLine_GetDeliveryDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->QuotationLine_GetDeliveryDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $QuotationLine_GetDeliveryDateResult
     * @return \Economic\QuotationLine_GetDeliveryDateResponse
     */
    public function setQuotationLine_GetDeliveryDateResult(\DateTime $QuotationLine_GetDeliveryDateResult)
    {
      $this->QuotationLine_GetDeliveryDateResult = $QuotationLine_GetDeliveryDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
