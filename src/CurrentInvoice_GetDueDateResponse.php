<?php

namespace Economic;

class CurrentInvoice_GetDueDateResponse
{

    /**
     * @var \DateTime $CurrentInvoice_GetDueDateResult
     */
    protected $CurrentInvoice_GetDueDateResult = null;

    /**
     * @param \DateTime $CurrentInvoice_GetDueDateResult
     */
    public function __construct(\DateTime $CurrentInvoice_GetDueDateResult)
    {
      $this->CurrentInvoice_GetDueDateResult = $CurrentInvoice_GetDueDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getCurrentInvoice_GetDueDateResult()
    {
      if ($this->CurrentInvoice_GetDueDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CurrentInvoice_GetDueDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CurrentInvoice_GetDueDateResult
     * @return \Economic\CurrentInvoice_GetDueDateResponse
     */
    public function setCurrentInvoice_GetDueDateResult(\DateTime $CurrentInvoice_GetDueDateResult)
    {
      $this->CurrentInvoice_GetDueDateResult = $CurrentInvoice_GetDueDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
