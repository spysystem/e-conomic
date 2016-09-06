<?php

namespace Economic;

class VatAccount_GetAllResponse
{

    /**
     * @var ArrayOfVatAccountHandle $VatAccount_GetAllResult
     */
    protected $VatAccount_GetAllResult = null;

    /**
     * @param ArrayOfVatAccountHandle $VatAccount_GetAllResult
     */
    public function __construct($VatAccount_GetAllResult)
    {
      $this->VatAccount_GetAllResult = $VatAccount_GetAllResult;
    }

    /**
     * @return ArrayOfVatAccountHandle
     */
    public function getVatAccount_GetAllResult()
    {
      return $this->VatAccount_GetAllResult;
    }

    /**
     * @param ArrayOfVatAccountHandle $VatAccount_GetAllResult
     * @return \Economic\VatAccount_GetAllResponse
     */
    public function setVatAccount_GetAllResult($VatAccount_GetAllResult)
    {
      $this->VatAccount_GetAllResult = $VatAccount_GetAllResult;
      return $this;
    }

}
