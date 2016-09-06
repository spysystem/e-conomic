<?php

namespace Economic;

class Quotation_GetIsSentResponse
{

    /**
     * @var boolean $Quotation_GetIsSentResult
     */
    protected $Quotation_GetIsSentResult = null;

    /**
     * @param boolean $Quotation_GetIsSentResult
     */
    public function __construct($Quotation_GetIsSentResult)
    {
      $this->Quotation_GetIsSentResult = $Quotation_GetIsSentResult;
    }

    /**
     * @return boolean
     */
    public function getQuotation_GetIsSentResult()
    {
      return $this->Quotation_GetIsSentResult;
    }

    /**
     * @param boolean $Quotation_GetIsSentResult
     * @return \Economic\Quotation_GetIsSentResponse
     */
    public function setQuotation_GetIsSentResult($Quotation_GetIsSentResult)
    {
      $this->Quotation_GetIsSentResult = $Quotation_GetIsSentResult;
      return $this;
    }

}
