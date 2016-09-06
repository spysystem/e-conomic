<?php

namespace Economic;

class Debtor_GetAddressResponse
{

    /**
     * @var string $Debtor_GetAddressResult
     */
    protected $Debtor_GetAddressResult = null;

    /**
     * @param string $Debtor_GetAddressResult
     */
    public function __construct($Debtor_GetAddressResult)
    {
      $this->Debtor_GetAddressResult = $Debtor_GetAddressResult;
    }

    /**
     * @return string
     */
    public function getDebtor_GetAddressResult()
    {
      return $this->Debtor_GetAddressResult;
    }

    /**
     * @param string $Debtor_GetAddressResult
     * @return \Economic\Debtor_GetAddressResponse
     */
    public function setDebtor_GetAddressResult($Debtor_GetAddressResult)
    {
      $this->Debtor_GetAddressResult = $Debtor_GetAddressResult;
      return $this;
    }

}
