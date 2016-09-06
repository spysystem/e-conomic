<?php

namespace Economic;

class InvoiceLine_GetDescriptionResponse
{

    /**
     * @var string $InvoiceLine_GetDescriptionResult
     */
    protected $InvoiceLine_GetDescriptionResult = null;

    /**
     * @param string $InvoiceLine_GetDescriptionResult
     */
    public function __construct($InvoiceLine_GetDescriptionResult)
    {
      $this->InvoiceLine_GetDescriptionResult = $InvoiceLine_GetDescriptionResult;
    }

    /**
     * @return string
     */
    public function getInvoiceLine_GetDescriptionResult()
    {
      return $this->InvoiceLine_GetDescriptionResult;
    }

    /**
     * @param string $InvoiceLine_GetDescriptionResult
     * @return \Economic\InvoiceLine_GetDescriptionResponse
     */
    public function setInvoiceLine_GetDescriptionResult($InvoiceLine_GetDescriptionResult)
    {
      $this->InvoiceLine_GetDescriptionResult = $InvoiceLine_GetDescriptionResult;
      return $this;
    }

}
