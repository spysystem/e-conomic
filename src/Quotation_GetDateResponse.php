<?php

namespace Economic;

class Quotation_GetDateResponse
{

    /**
     * @var \DateTime $Quotation_GetDateResult
     */
    protected $Quotation_GetDateResult = null;

    /**
     * @param \DateTime $Quotation_GetDateResult
     */
    public function __construct(\DateTime $Quotation_GetDateResult)
    {
      $this->Quotation_GetDateResult = $Quotation_GetDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getQuotation_GetDateResult()
    {
      if ($this->Quotation_GetDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Quotation_GetDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Quotation_GetDateResult
     * @return \Economic\Quotation_GetDateResponse
     */
    public function setQuotation_GetDateResult(\DateTime $Quotation_GetDateResult)
    {
      $this->Quotation_GetDateResult = $Quotation_GetDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
