<?php

namespace Economic;

class Debtor_GetPostalCodeResponse
{

    /**
     * @var string $Debtor_GetPostalCodeResult
     */
    protected $Debtor_GetPostalCodeResult = null;

    /**
     * @param string $Debtor_GetPostalCodeResult
     */
    public function __construct($Debtor_GetPostalCodeResult)
    {
      $this->Debtor_GetPostalCodeResult = $Debtor_GetPostalCodeResult;
    }

    /**
     * @return string
     */
    public function getDebtor_GetPostalCodeResult()
    {
      return $this->Debtor_GetPostalCodeResult;
    }

    /**
     * @param string $Debtor_GetPostalCodeResult
     * @return \Economic\Debtor_GetPostalCodeResponse
     */
    public function setDebtor_GetPostalCodeResult($Debtor_GetPostalCodeResult)
    {
      $this->Debtor_GetPostalCodeResult = $Debtor_GetPostalCodeResult;
      return $this;
    }

}
