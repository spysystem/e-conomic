<?php

namespace Economic;

class Invoice_GetPublicEntryNumberResponse
{

    /**
     * @var string $Invoice_GetPublicEntryNumberResult
     */
    protected $Invoice_GetPublicEntryNumberResult = null;

    /**
     * @param string $Invoice_GetPublicEntryNumberResult
     */
    public function __construct($Invoice_GetPublicEntryNumberResult)
    {
      $this->Invoice_GetPublicEntryNumberResult = $Invoice_GetPublicEntryNumberResult;
    }

    /**
     * @return string
     */
    public function getInvoice_GetPublicEntryNumberResult()
    {
      return $this->Invoice_GetPublicEntryNumberResult;
    }

    /**
     * @param string $Invoice_GetPublicEntryNumberResult
     * @return \Economic\Invoice_GetPublicEntryNumberResponse
     */
    public function setInvoice_GetPublicEntryNumberResult($Invoice_GetPublicEntryNumberResult)
    {
      $this->Invoice_GetPublicEntryNumberResult = $Invoice_GetPublicEntryNumberResult;
      return $this;
    }

}
