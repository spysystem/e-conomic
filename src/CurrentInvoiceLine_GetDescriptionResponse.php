<?php

namespace Economic;

class CurrentInvoiceLine_GetDescriptionResponse
{

    /**
     * @var string $CurrentInvoiceLine_GetDescriptionResult
     */
    protected $CurrentInvoiceLine_GetDescriptionResult = null;

    /**
     * @param string $CurrentInvoiceLine_GetDescriptionResult
     */
    public function __construct($CurrentInvoiceLine_GetDescriptionResult)
    {
      $this->CurrentInvoiceLine_GetDescriptionResult = $CurrentInvoiceLine_GetDescriptionResult;
    }

    /**
     * @return string
     */
    public function getCurrentInvoiceLine_GetDescriptionResult()
    {
      return $this->CurrentInvoiceLine_GetDescriptionResult;
    }

    /**
     * @param string $CurrentInvoiceLine_GetDescriptionResult
     * @return \Economic\CurrentInvoiceLine_GetDescriptionResponse
     */
    public function setCurrentInvoiceLine_GetDescriptionResult($CurrentInvoiceLine_GetDescriptionResult)
    {
      $this->CurrentInvoiceLine_GetDescriptionResult = $CurrentInvoiceLine_GetDescriptionResult;
      return $this;
    }

}
