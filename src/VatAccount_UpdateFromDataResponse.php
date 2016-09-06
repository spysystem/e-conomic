<?php

namespace Economic;

class VatAccount_UpdateFromDataResponse
{

    /**
     * @var VatAccountHandle $VatAccount_UpdateFromDataResult
     */
    protected $VatAccount_UpdateFromDataResult = null;

    /**
     * @param VatAccountHandle $VatAccount_UpdateFromDataResult
     */
    public function __construct($VatAccount_UpdateFromDataResult)
    {
      $this->VatAccount_UpdateFromDataResult = $VatAccount_UpdateFromDataResult;
    }

    /**
     * @return VatAccountHandle
     */
    public function getVatAccount_UpdateFromDataResult()
    {
      return $this->VatAccount_UpdateFromDataResult;
    }

    /**
     * @param VatAccountHandle $VatAccount_UpdateFromDataResult
     * @return \Economic\VatAccount_UpdateFromDataResponse
     */
    public function setVatAccount_UpdateFromDataResult($VatAccount_UpdateFromDataResult)
    {
      $this->VatAccount_UpdateFromDataResult = $VatAccount_UpdateFromDataResult;
      return $this;
    }

}
