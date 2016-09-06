<?php

namespace Economic;

class CurrentInvoice_GetPublicEntryNumberResponse
{

    /**
     * @var string $CurrentInvoice_GetPublicEntryNumberResult
     */
    protected $CurrentInvoice_GetPublicEntryNumberResult = null;

    /**
     * @param string $CurrentInvoice_GetPublicEntryNumberResult
     */
    public function __construct($CurrentInvoice_GetPublicEntryNumberResult)
    {
      $this->CurrentInvoice_GetPublicEntryNumberResult = $CurrentInvoice_GetPublicEntryNumberResult;
    }

    /**
     * @return string
     */
    public function getCurrentInvoice_GetPublicEntryNumberResult()
    {
      return $this->CurrentInvoice_GetPublicEntryNumberResult;
    }

    /**
     * @param string $CurrentInvoice_GetPublicEntryNumberResult
     * @return \Economic\CurrentInvoice_GetPublicEntryNumberResponse
     */
    public function setCurrentInvoice_GetPublicEntryNumberResult($CurrentInvoice_GetPublicEntryNumberResult)
    {
      $this->CurrentInvoice_GetPublicEntryNumberResult = $CurrentInvoice_GetPublicEntryNumberResult;
      return $this;
    }

}
