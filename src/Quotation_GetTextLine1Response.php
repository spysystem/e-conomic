<?php

namespace Economic;

class Quotation_GetTextLine1Response
{

    /**
     * @var string $Quotation_GetTextLine1Result
     */
    protected $Quotation_GetTextLine1Result = null;

    /**
     * @param string $Quotation_GetTextLine1Result
     */
    public function __construct($Quotation_GetTextLine1Result)
    {
      $this->Quotation_GetTextLine1Result = $Quotation_GetTextLine1Result;
    }

    /**
     * @return string
     */
    public function getQuotation_GetTextLine1Result()
    {
      return $this->Quotation_GetTextLine1Result;
    }

    /**
     * @param string $Quotation_GetTextLine1Result
     * @return \Economic\Quotation_GetTextLine1Response
     */
    public function setQuotation_GetTextLine1Result($Quotation_GetTextLine1Result)
    {
      $this->Quotation_GetTextLine1Result = $Quotation_GetTextLine1Result;
      return $this;
    }

}
