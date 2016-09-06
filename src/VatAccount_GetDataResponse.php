<?php

namespace Economic;

class VatAccount_GetDataResponse
{

    /**
     * @var VatAccountData $VatAccount_GetDataResult
     */
    protected $VatAccount_GetDataResult = null;

    /**
     * @param VatAccountData $VatAccount_GetDataResult
     */
    public function __construct($VatAccount_GetDataResult)
    {
      $this->VatAccount_GetDataResult = $VatAccount_GetDataResult;
    }

    /**
     * @return VatAccountData
     */
    public function getVatAccount_GetDataResult()
    {
      return $this->VatAccount_GetDataResult;
    }

    /**
     * @param VatAccountData $VatAccount_GetDataResult
     * @return \Economic\VatAccount_GetDataResponse
     */
    public function setVatAccount_GetDataResult($VatAccount_GetDataResult)
    {
      $this->VatAccount_GetDataResult = $VatAccount_GetDataResult;
      return $this;
    }

}
