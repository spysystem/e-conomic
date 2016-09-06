<?php

namespace Economic;

class Quotation_GetNumberResponse
{

    /**
     * @var int $Quotation_GetNumberResult
     */
    protected $Quotation_GetNumberResult = null;

    /**
     * @param int $Quotation_GetNumberResult
     */
    public function __construct($Quotation_GetNumberResult)
    {
      $this->Quotation_GetNumberResult = $Quotation_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getQuotation_GetNumberResult()
    {
      return $this->Quotation_GetNumberResult;
    }

    /**
     * @param int $Quotation_GetNumberResult
     * @return \Economic\Quotation_GetNumberResponse
     */
    public function setQuotation_GetNumberResult($Quotation_GetNumberResult)
    {
      $this->Quotation_GetNumberResult = $Quotation_GetNumberResult;
      return $this;
    }

}
