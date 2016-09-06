<?php

namespace Economic;

class CurrentInvoice_GetHeadingResponse
{

    /**
     * @var string $CurrentInvoice_GetHeadingResult
     */
    protected $CurrentInvoice_GetHeadingResult = null;

    /**
     * @param string $CurrentInvoice_GetHeadingResult
     */
    public function __construct($CurrentInvoice_GetHeadingResult)
    {
      $this->CurrentInvoice_GetHeadingResult = $CurrentInvoice_GetHeadingResult;
    }

    /**
     * @return string
     */
    public function getCurrentInvoice_GetHeadingResult()
    {
      return $this->CurrentInvoice_GetHeadingResult;
    }

    /**
     * @param string $CurrentInvoice_GetHeadingResult
     * @return \Economic\CurrentInvoice_GetHeadingResponse
     */
    public function setCurrentInvoice_GetHeadingResult($CurrentInvoice_GetHeadingResult)
    {
      $this->CurrentInvoice_GetHeadingResult = $CurrentInvoice_GetHeadingResult;
      return $this;
    }

}
