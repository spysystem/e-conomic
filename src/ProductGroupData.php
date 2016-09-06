<?php

namespace Economic;

class ProductGroupData
{

    /**
     * @var ProductGroupHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var AccountHandle $AccountForVatLiableDebtorInvoicesCurrentHandle
     */
    protected $AccountForVatLiableDebtorInvoicesCurrentHandle = null;

    /**
     * @var AccountHandle $AccountForVatExemptDebtorInvoicesCurrentHandle
     */
    protected $AccountForVatExemptDebtorInvoicesCurrentHandle = null;

    /**
     * @var AccountHandle $AccrualHandle
     */
    protected $AccrualHandle = null;

    /**
     * @var boolean $InventoryWithdrawal
     */
    protected $InventoryWithdrawal = null;

    /**
     * @param int $Number
     */
    public function __construct($Number)
    {
      $this->Number = $Number;
    }

    /**
     * @return ProductGroupHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param ProductGroupHandle $Handle
     * @return \Economic\ProductGroupData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \Economic\ProductGroupData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Economic\ProductGroupData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getAccountForVatLiableDebtorInvoicesCurrentHandle()
    {
      return $this->AccountForVatLiableDebtorInvoicesCurrentHandle;
    }

    /**
     * @param AccountHandle $AccountForVatLiableDebtorInvoicesCurrentHandle
     * @return \Economic\ProductGroupData
     */
    public function setAccountForVatLiableDebtorInvoicesCurrentHandle($AccountForVatLiableDebtorInvoicesCurrentHandle)
    {
      $this->AccountForVatLiableDebtorInvoicesCurrentHandle = $AccountForVatLiableDebtorInvoicesCurrentHandle;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getAccountForVatExemptDebtorInvoicesCurrentHandle()
    {
      return $this->AccountForVatExemptDebtorInvoicesCurrentHandle;
    }

    /**
     * @param AccountHandle $AccountForVatExemptDebtorInvoicesCurrentHandle
     * @return \Economic\ProductGroupData
     */
    public function setAccountForVatExemptDebtorInvoicesCurrentHandle($AccountForVatExemptDebtorInvoicesCurrentHandle)
    {
      $this->AccountForVatExemptDebtorInvoicesCurrentHandle = $AccountForVatExemptDebtorInvoicesCurrentHandle;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getAccrualHandle()
    {
      return $this->AccrualHandle;
    }

    /**
     * @param AccountHandle $AccrualHandle
     * @return \Economic\ProductGroupData
     */
    public function setAccrualHandle($AccrualHandle)
    {
      $this->AccrualHandle = $AccrualHandle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInventoryWithdrawal()
    {
      return $this->InventoryWithdrawal;
    }

    /**
     * @param boolean $InventoryWithdrawal
     * @return \Economic\ProductGroupData
     */
    public function setInventoryWithdrawal($InventoryWithdrawal)
    {
      $this->InventoryWithdrawal = $InventoryWithdrawal;
      return $this;
    }

}
