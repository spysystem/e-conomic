<?php

namespace Economic;

class VatAccountHandle
{

    /**
     * @var string $VatCode
     */
    protected $VatCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getVatCode()
    {
      return $this->VatCode;
    }

    /**
     * @param string $VatCode
     * @return \Economic\VatAccountHandle
     */
    public function setVatCode($VatCode)
    {
      $this->VatCode = $VatCode;
      return $this;
    }

}
