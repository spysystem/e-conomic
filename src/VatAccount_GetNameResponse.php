<?php

namespace Economic;

class VatAccount_GetNameResponse
{

    /**
     * @var string $VatAccount_GetNameResult
     */
    protected $VatAccount_GetNameResult = null;

    /**
     * @param string $VatAccount_GetNameResult
     */
    public function __construct($VatAccount_GetNameResult)
    {
      $this->VatAccount_GetNameResult = $VatAccount_GetNameResult;
    }

    /**
     * @return string
     */
    public function getVatAccount_GetNameResult()
    {
      return $this->VatAccount_GetNameResult;
    }

    /**
     * @param string $VatAccount_GetNameResult
     * @return \Economic\VatAccount_GetNameResponse
     */
    public function setVatAccount_GetNameResult($VatAccount_GetNameResult)
    {
      $this->VatAccount_GetNameResult = $VatAccount_GetNameResult;
      return $this;
    }

}
