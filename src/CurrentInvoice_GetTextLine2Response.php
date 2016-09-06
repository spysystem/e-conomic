<?php

namespace Economic;

class CurrentInvoice_GetTextLine2Response
{

    /**
     * @var string $CurrentInvoice_GetTextLine2Result
     */
    protected $CurrentInvoice_GetTextLine2Result = null;

    /**
     * @param string $CurrentInvoice_GetTextLine2Result
     */
    public function __construct($CurrentInvoice_GetTextLine2Result)
    {
      $this->CurrentInvoice_GetTextLine2Result = $CurrentInvoice_GetTextLine2Result;
    }

    /**
     * @return string
     */
    public function getCurrentInvoice_GetTextLine2Result()
    {
      return $this->CurrentInvoice_GetTextLine2Result;
    }

    /**
     * @param string $CurrentInvoice_GetTextLine2Result
     * @return \Economic\CurrentInvoice_GetTextLine2Response
     */
    public function setCurrentInvoice_GetTextLine2Result($CurrentInvoice_GetTextLine2Result)
    {
      $this->CurrentInvoice_GetTextLine2Result = $CurrentInvoice_GetTextLine2Result;
      return $this;
    }

}
