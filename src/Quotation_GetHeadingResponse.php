<?php

namespace Economic;

class Quotation_GetHeadingResponse
{

    /**
     * @var string $Quotation_GetHeadingResult
     */
    protected $Quotation_GetHeadingResult = null;

    /**
     * @param string $Quotation_GetHeadingResult
     */
    public function __construct($Quotation_GetHeadingResult)
    {
      $this->Quotation_GetHeadingResult = $Quotation_GetHeadingResult;
    }

    /**
     * @return string
     */
    public function getQuotation_GetHeadingResult()
    {
      return $this->Quotation_GetHeadingResult;
    }

    /**
     * @param string $Quotation_GetHeadingResult
     * @return \Economic\Quotation_GetHeadingResponse
     */
    public function setQuotation_GetHeadingResult($Quotation_GetHeadingResult)
    {
      $this->Quotation_GetHeadingResult = $Quotation_GetHeadingResult;
      return $this;
    }

}
