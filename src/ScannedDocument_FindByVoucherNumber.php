<?php

namespace Economic;

class ScannedDocument_FindByVoucherNumber
{

    /**
     * @var int $voucherNumber
     */
    protected $voucherNumber = null;

    /**
     * @param int $voucherNumber
     */
    public function __construct($voucherNumber)
    {
      $this->voucherNumber = $voucherNumber;
    }

    /**
     * @return int
     */
    public function getVoucherNumber()
    {
      return $this->voucherNumber;
    }

    /**
     * @param int $voucherNumber
     * @return \Economic\ScannedDocument_FindByVoucherNumber
     */
    public function setVoucherNumber($voucherNumber)
    {
      $this->voucherNumber = $voucherNumber;
      return $this;
    }

}
