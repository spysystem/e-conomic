<?php

namespace Economic;

class Creditor_GetPostalCodeResponse
{

    /**
     * @var string $Creditor_GetPostalCodeResult
     */
    protected $Creditor_GetPostalCodeResult = null;

    /**
     * @param string $Creditor_GetPostalCodeResult
     */
    public function __construct($Creditor_GetPostalCodeResult)
    {
      $this->Creditor_GetPostalCodeResult = $Creditor_GetPostalCodeResult;
    }

    /**
     * @return string
     */
    public function getCreditor_GetPostalCodeResult()
    {
      return $this->Creditor_GetPostalCodeResult;
    }

    /**
     * @param string $Creditor_GetPostalCodeResult
     * @return \Economic\Creditor_GetPostalCodeResponse
     */
    public function setCreditor_GetPostalCodeResult($Creditor_GetPostalCodeResult)
    {
      $this->Creditor_GetPostalCodeResult = $Creditor_GetPostalCodeResult;
      return $this;
    }

}
