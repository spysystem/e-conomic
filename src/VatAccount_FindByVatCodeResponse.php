<?php

namespace Economic;

class VatAccount_FindByVatCodeResponse
{

    /**
     * @var VatAccountHandle $VatAccount_FindByVatCodeResult
     */
    protected $VatAccount_FindByVatCodeResult = null;

    /**
     * @param VatAccountHandle $VatAccount_FindByVatCodeResult
     */
    public function __construct($VatAccount_FindByVatCodeResult)
    {
      $this->VatAccount_FindByVatCodeResult = $VatAccount_FindByVatCodeResult;
    }

    /**
     * @return VatAccountHandle
     */
    public function getVatAccount_FindByVatCodeResult()
    {
      return $this->VatAccount_FindByVatCodeResult;
    }

    /**
     * @param VatAccountHandle $VatAccount_FindByVatCodeResult
     * @return \Economic\VatAccount_FindByVatCodeResponse
     */
    public function setVatAccount_FindByVatCodeResult($VatAccount_FindByVatCodeResult)
    {
      $this->VatAccount_FindByVatCodeResult = $VatAccount_FindByVatCodeResult;
      return $this;
    }

}
