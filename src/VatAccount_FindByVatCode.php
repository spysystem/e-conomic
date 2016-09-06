<?php

namespace Economic;

class VatAccount_FindByVatCode
{

    /**
     * @var string $vatCode
     */
    protected $vatCode = null;

    /**
     * @param string $vatCode
     */
    public function __construct($vatCode)
    {
      $this->vatCode = $vatCode;
    }

    /**
     * @return string
     */
    public function getVatCode()
    {
      return $this->vatCode;
    }

    /**
     * @param string $vatCode
     * @return \Economic\VatAccount_FindByVatCode
     */
    public function setVatCode($vatCode)
    {
      $this->vatCode = $vatCode;
      return $this;
    }

}
