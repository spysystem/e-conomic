<?php

namespace Economic;

class VatAccount_GetVatCodeResponse
{

    /**
     * @var string $VatAccount_GetVatCodeResult
     */
    protected $VatAccount_GetVatCodeResult = null;

    /**
     * @param string $VatAccount_GetVatCodeResult
     */
    public function __construct($VatAccount_GetVatCodeResult)
    {
      $this->VatAccount_GetVatCodeResult = $VatAccount_GetVatCodeResult;
    }

    /**
     * @return string
     */
    public function getVatAccount_GetVatCodeResult()
    {
      return $this->VatAccount_GetVatCodeResult;
    }

    /**
     * @param string $VatAccount_GetVatCodeResult
     * @return \Economic\VatAccount_GetVatCodeResponse
     */
    public function setVatAccount_GetVatCodeResult($VatAccount_GetVatCodeResult)
    {
      $this->VatAccount_GetVatCodeResult = $VatAccount_GetVatCodeResult;
      return $this;
    }

}
