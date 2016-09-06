<?php

namespace Economic;

class Invoice_GetTextLine1Response
{

    /**
     * @var string $Invoice_GetTextLine1Result
     */
    protected $Invoice_GetTextLine1Result = null;

    /**
     * @param string $Invoice_GetTextLine1Result
     */
    public function __construct($Invoice_GetTextLine1Result)
    {
      $this->Invoice_GetTextLine1Result = $Invoice_GetTextLine1Result;
    }

    /**
     * @return string
     */
    public function getInvoice_GetTextLine1Result()
    {
      return $this->Invoice_GetTextLine1Result;
    }

    /**
     * @param string $Invoice_GetTextLine1Result
     * @return \Economic\Invoice_GetTextLine1Response
     */
    public function setInvoice_GetTextLine1Result($Invoice_GetTextLine1Result)
    {
      $this->Invoice_GetTextLine1Result = $Invoice_GetTextLine1Result;
      return $this;
    }

}
