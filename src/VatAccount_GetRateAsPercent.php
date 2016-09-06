<?php

namespace Economic;

class VatAccount_GetRateAsPercent
{

    /**
     * @var VatAccountHandle $vatAccountHandle
     */
    protected $vatAccountHandle = null;

    /**
     * @param VatAccountHandle $vatAccountHandle
     */
    public function __construct($vatAccountHandle)
    {
      $this->vatAccountHandle = $vatAccountHandle;
    }

    /**
     * @return VatAccountHandle
     */
    public function getVatAccountHandle()
    {
      return $this->vatAccountHandle;
    }

    /**
     * @param VatAccountHandle $vatAccountHandle
     * @return \Economic\VatAccount_GetRateAsPercent
     */
    public function setVatAccountHandle($vatAccountHandle)
    {
      $this->vatAccountHandle = $vatAccountHandle;
      return $this;
    }

}
