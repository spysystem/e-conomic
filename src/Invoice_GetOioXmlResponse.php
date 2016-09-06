<?php

namespace Economic;

class Invoice_GetOioXmlResponse
{

    /**
     * @var string $Invoice_GetOioXmlResult
     */
    protected $Invoice_GetOioXmlResult = null;

    /**
     * @param string $Invoice_GetOioXmlResult
     */
    public function __construct($Invoice_GetOioXmlResult)
    {
      $this->Invoice_GetOioXmlResult = $Invoice_GetOioXmlResult;
    }

    /**
     * @return string
     */
    public function getInvoice_GetOioXmlResult()
    {
      return $this->Invoice_GetOioXmlResult;
    }

    /**
     * @param string $Invoice_GetOioXmlResult
     * @return \Economic\Invoice_GetOioXmlResponse
     */
    public function setInvoice_GetOioXmlResult($Invoice_GetOioXmlResult)
    {
      $this->Invoice_GetOioXmlResult = $Invoice_GetOioXmlResult;
      return $this;
    }

}
