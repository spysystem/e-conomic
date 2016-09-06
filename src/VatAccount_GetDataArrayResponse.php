<?php

namespace Economic;

class VatAccount_GetDataArrayResponse
{

    /**
     * @var ArrayOfVatAccountData $VatAccount_GetDataArrayResult
     */
    protected $VatAccount_GetDataArrayResult = null;

    /**
     * @param ArrayOfVatAccountData $VatAccount_GetDataArrayResult
     */
    public function __construct($VatAccount_GetDataArrayResult)
    {
      $this->VatAccount_GetDataArrayResult = $VatAccount_GetDataArrayResult;
    }

    /**
     * @return ArrayOfVatAccountData
     */
    public function getVatAccount_GetDataArrayResult()
    {
      return $this->VatAccount_GetDataArrayResult;
    }

    /**
     * @param ArrayOfVatAccountData $VatAccount_GetDataArrayResult
     * @return \Economic\VatAccount_GetDataArrayResponse
     */
    public function setVatAccount_GetDataArrayResult($VatAccount_GetDataArrayResult)
    {
      $this->VatAccount_GetDataArrayResult = $VatAccount_GetDataArrayResult;
      return $this;
    }

}
