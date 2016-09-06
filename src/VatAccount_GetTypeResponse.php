<?php

namespace Economic;

class VatAccount_GetTypeResponse
{

    /**
     * @var VatAccountType $VatAccount_GetTypeResult
     */
    protected $VatAccount_GetTypeResult = null;

    /**
     * @param VatAccountType $VatAccount_GetTypeResult
     */
    public function __construct($VatAccount_GetTypeResult)
    {
      $this->VatAccount_GetTypeResult = $VatAccount_GetTypeResult;
    }

    /**
     * @return VatAccountType
     */
    public function getVatAccount_GetTypeResult()
    {
      return $this->VatAccount_GetTypeResult;
    }

    /**
     * @param VatAccountType $VatAccount_GetTypeResult
     * @return \Economic\VatAccount_GetTypeResponse
     */
    public function setVatAccount_GetTypeResult($VatAccount_GetTypeResult)
    {
      $this->VatAccount_GetTypeResult = $VatAccount_GetTypeResult;
      return $this;
    }

}
