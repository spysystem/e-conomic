<?php

namespace Economic;

class Quotation_GetDeliveryDateResponse
{

    /**
     * @var \DateTime $Quotation_GetDeliveryDateResult
     */
    protected $Quotation_GetDeliveryDateResult = null;

    /**
     * @param \DateTime $Quotation_GetDeliveryDateResult
     */
    public function __construct(\DateTime $Quotation_GetDeliveryDateResult)
    {
      $this->Quotation_GetDeliveryDateResult = $Quotation_GetDeliveryDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getQuotation_GetDeliveryDateResult()
    {
      if ($this->Quotation_GetDeliveryDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Quotation_GetDeliveryDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Quotation_GetDeliveryDateResult
     * @return \Economic\Quotation_GetDeliveryDateResponse
     */
    public function setQuotation_GetDeliveryDateResult(\DateTime $Quotation_GetDeliveryDateResult)
    {
      $this->Quotation_GetDeliveryDateResult = $Quotation_GetDeliveryDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
