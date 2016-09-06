<?php

namespace Economic;

class Creditor_GetEntriesByVoucherNo
{

    /**
     * @var CreditorHandle $creditorHandle
     */
    protected $creditorHandle = null;

    /**
     * @var int $voucherNo
     */
    protected $voucherNo = null;

    /**
     * @param CreditorHandle $creditorHandle
     * @param int $voucherNo
     */
    public function __construct($creditorHandle, $voucherNo)
    {
      $this->creditorHandle = $creditorHandle;
      $this->voucherNo = $voucherNo;
    }

    /**
     * @return CreditorHandle
     */
    public function getCreditorHandle()
    {
      return $this->creditorHandle;
    }

    /**
     * @param CreditorHandle $creditorHandle
     * @return \Economic\Creditor_GetEntriesByVoucherNo
     */
    public function setCreditorHandle($creditorHandle)
    {
      $this->creditorHandle = $creditorHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getVoucherNo()
    {
      return $this->voucherNo;
    }

    /**
     * @param int $voucherNo
     * @return \Economic\Creditor_GetEntriesByVoucherNo
     */
    public function setVoucherNo($voucherNo)
    {
      $this->voucherNo = $voucherNo;
      return $this;
    }

}
