<?php

namespace Economic;

class VatAccount_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfVatAccountHandle $VatAccount_UpdateFromDataArrayResult
     */
    protected $VatAccount_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfVatAccountHandle $VatAccount_UpdateFromDataArrayResult
     */
    public function __construct($VatAccount_UpdateFromDataArrayResult)
    {
      $this->VatAccount_UpdateFromDataArrayResult = $VatAccount_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfVatAccountHandle
     */
    public function getVatAccount_UpdateFromDataArrayResult()
    {
      return $this->VatAccount_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfVatAccountHandle $VatAccount_UpdateFromDataArrayResult
     * @return \Economic\VatAccount_UpdateFromDataArrayResponse
     */
    public function setVatAccount_UpdateFromDataArrayResult($VatAccount_UpdateFromDataArrayResult)
    {
      $this->VatAccount_UpdateFromDataArrayResult = $VatAccount_UpdateFromDataArrayResult;
      return $this;
    }

}
