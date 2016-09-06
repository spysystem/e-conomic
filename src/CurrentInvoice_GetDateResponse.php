<?php

namespace Economic;

class CurrentInvoice_GetDateResponse
{

    /**
     * @var \DateTime $CurrentInvoice_GetDateResult
     */
    protected $CurrentInvoice_GetDateResult = null;

    /**
     * @param \DateTime $CurrentInvoice_GetDateResult
     */
    public function __construct(\DateTime $CurrentInvoice_GetDateResult)
    {
      $this->CurrentInvoice_GetDateResult = $CurrentInvoice_GetDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getCurrentInvoice_GetDateResult()
    {
      if ($this->CurrentInvoice_GetDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CurrentInvoice_GetDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CurrentInvoice_GetDateResult
     * @return \Economic\CurrentInvoice_GetDateResponse
     */
    public function setCurrentInvoice_GetDateResult(\DateTime $CurrentInvoice_GetDateResult)
    {
      $this->CurrentInvoice_GetDateResult = $CurrentInvoice_GetDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
