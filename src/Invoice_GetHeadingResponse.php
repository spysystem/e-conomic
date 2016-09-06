<?php

namespace Economic;

class Invoice_GetHeadingResponse
{

    /**
     * @var string $Invoice_GetHeadingResult
     */
    protected $Invoice_GetHeadingResult = null;

    /**
     * @param string $Invoice_GetHeadingResult
     */
    public function __construct($Invoice_GetHeadingResult)
    {
      $this->Invoice_GetHeadingResult = $Invoice_GetHeadingResult;
    }

    /**
     * @return string
     */
    public function getInvoice_GetHeadingResult()
    {
      return $this->Invoice_GetHeadingResult;
    }

    /**
     * @param string $Invoice_GetHeadingResult
     * @return \Economic\Invoice_GetHeadingResponse
     */
    public function setInvoice_GetHeadingResult($Invoice_GetHeadingResult)
    {
      $this->Invoice_GetHeadingResult = $Invoice_GetHeadingResult;
      return $this;
    }

}
