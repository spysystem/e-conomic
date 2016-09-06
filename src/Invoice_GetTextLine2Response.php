<?php

namespace Economic;

class Invoice_GetTextLine2Response
{

    /**
     * @var string $Invoice_GetTextLine2Result
     */
    protected $Invoice_GetTextLine2Result = null;

    /**
     * @param string $Invoice_GetTextLine2Result
     */
    public function __construct($Invoice_GetTextLine2Result)
    {
      $this->Invoice_GetTextLine2Result = $Invoice_GetTextLine2Result;
    }

    /**
     * @return string
     */
    public function getInvoice_GetTextLine2Result()
    {
      return $this->Invoice_GetTextLine2Result;
    }

    /**
     * @param string $Invoice_GetTextLine2Result
     * @return \Economic\Invoice_GetTextLine2Response
     */
    public function setInvoice_GetTextLine2Result($Invoice_GetTextLine2Result)
    {
      $this->Invoice_GetTextLine2Result = $Invoice_GetTextLine2Result;
      return $this;
    }

}
