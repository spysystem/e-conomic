<?php

namespace Economic;

class Quotation_GetTextLine2Response
{

    /**
     * @var string $Quotation_GetTextLine2Result
     */
    protected $Quotation_GetTextLine2Result = null;

    /**
     * @param string $Quotation_GetTextLine2Result
     */
    public function __construct($Quotation_GetTextLine2Result)
    {
      $this->Quotation_GetTextLine2Result = $Quotation_GetTextLine2Result;
    }

    /**
     * @return string
     */
    public function getQuotation_GetTextLine2Result()
    {
      return $this->Quotation_GetTextLine2Result;
    }

    /**
     * @param string $Quotation_GetTextLine2Result
     * @return \Economic\Quotation_GetTextLine2Response
     */
    public function setQuotation_GetTextLine2Result($Quotation_GetTextLine2Result)
    {
      $this->Quotation_GetTextLine2Result = $Quotation_GetTextLine2Result;
      return $this;
    }

}
