<?php

namespace Economic;

class Quotation_GetDueDateResponse
{

    /**
     * @var \DateTime $Quotation_GetDueDateResult
     */
    protected $Quotation_GetDueDateResult = null;

    /**
     * @param \DateTime $Quotation_GetDueDateResult
     */
    public function __construct(\DateTime $Quotation_GetDueDateResult)
    {
      $this->Quotation_GetDueDateResult = $Quotation_GetDueDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getQuotation_GetDueDateResult()
    {
      if ($this->Quotation_GetDueDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Quotation_GetDueDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Quotation_GetDueDateResult
     * @return \Economic\Quotation_GetDueDateResponse
     */
    public function setQuotation_GetDueDateResult(\DateTime $Quotation_GetDueDateResult)
    {
      $this->Quotation_GetDueDateResult = $Quotation_GetDueDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
