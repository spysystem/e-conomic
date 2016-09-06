<?php

namespace Economic;

class Quotation_GetPublicEntryNumberResponse
{

    /**
     * @var string $Quotation_GetPublicEntryNumberResult
     */
    protected $Quotation_GetPublicEntryNumberResult = null;

    /**
     * @param string $Quotation_GetPublicEntryNumberResult
     */
    public function __construct($Quotation_GetPublicEntryNumberResult)
    {
      $this->Quotation_GetPublicEntryNumberResult = $Quotation_GetPublicEntryNumberResult;
    }

    /**
     * @return string
     */
    public function getQuotation_GetPublicEntryNumberResult()
    {
      return $this->Quotation_GetPublicEntryNumberResult;
    }

    /**
     * @param string $Quotation_GetPublicEntryNumberResult
     * @return \Economic\Quotation_GetPublicEntryNumberResponse
     */
    public function setQuotation_GetPublicEntryNumberResult($Quotation_GetPublicEntryNumberResult)
    {
      $this->Quotation_GetPublicEntryNumberResult = $Quotation_GetPublicEntryNumberResult;
      return $this;
    }

}
