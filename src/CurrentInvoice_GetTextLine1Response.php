<?php

namespace Economic;

class CurrentInvoice_GetTextLine1Response
{

    /**
     * @var string $CurrentInvoice_GetTextLine1Result
     */
    protected $CurrentInvoice_GetTextLine1Result = null;

    /**
     * @param string $CurrentInvoice_GetTextLine1Result
     */
    public function __construct($CurrentInvoice_GetTextLine1Result)
    {
      $this->CurrentInvoice_GetTextLine1Result = $CurrentInvoice_GetTextLine1Result;
    }

    /**
     * @return string
     */
    public function getCurrentInvoice_GetTextLine1Result()
    {
      return $this->CurrentInvoice_GetTextLine1Result;
    }

    /**
     * @param string $CurrentInvoice_GetTextLine1Result
     * @return \Economic\CurrentInvoice_GetTextLine1Response
     */
    public function setCurrentInvoice_GetTextLine1Result($CurrentInvoice_GetTextLine1Result)
    {
      $this->CurrentInvoice_GetTextLine1Result = $CurrentInvoice_GetTextLine1Result;
      return $this;
    }

}
