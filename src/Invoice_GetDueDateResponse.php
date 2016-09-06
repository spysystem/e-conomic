<?php

namespace Economic;

class Invoice_GetDueDateResponse
{

    /**
     * @var \DateTime $Invoice_GetDueDateResult
     */
    protected $Invoice_GetDueDateResult = null;

    /**
     * @param \DateTime $Invoice_GetDueDateResult
     */
    public function __construct(\DateTime $Invoice_GetDueDateResult)
    {
      $this->Invoice_GetDueDateResult = $Invoice_GetDueDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getInvoice_GetDueDateResult()
    {
      if ($this->Invoice_GetDueDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Invoice_GetDueDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Invoice_GetDueDateResult
     * @return \Economic\Invoice_GetDueDateResponse
     */
    public function setInvoice_GetDueDateResult(\DateTime $Invoice_GetDueDateResult)
    {
      $this->Invoice_GetDueDateResult = $Invoice_GetDueDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
