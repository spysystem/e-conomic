<?php

namespace Economic;

class Creditor_GetAddressResponse
{

    /**
     * @var string $Creditor_GetAddressResult
     */
    protected $Creditor_GetAddressResult = null;

    /**
     * @param string $Creditor_GetAddressResult
     */
    public function __construct($Creditor_GetAddressResult)
    {
      $this->Creditor_GetAddressResult = $Creditor_GetAddressResult;
    }

    /**
     * @return string
     */
    public function getCreditor_GetAddressResult()
    {
      return $this->Creditor_GetAddressResult;
    }

    /**
     * @param string $Creditor_GetAddressResult
     * @return \Economic\Creditor_GetAddressResponse
     */
    public function setCreditor_GetAddressResult($Creditor_GetAddressResult)
    {
      $this->Creditor_GetAddressResult = $Creditor_GetAddressResult;
      return $this;
    }

}
