<?php

namespace Economic;

class ProductGroup_Create
{

    /**
     * @var int $number
     */
    protected $number = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var AccountHandle $accountForVatLiableDebtorInvoicesCurrentHandle
     */
    protected $accountForVatLiableDebtorInvoicesCurrentHandle = null;

    /**
     * @param int $number
     * @param string $name
     * @param AccountHandle $accountForVatLiableDebtorInvoicesCurrentHandle
     */
    public function __construct($number, $name, $accountForVatLiableDebtorInvoicesCurrentHandle)
    {
      $this->number = $number;
      $this->name = $name;
      $this->accountForVatLiableDebtorInvoicesCurrentHandle = $accountForVatLiableDebtorInvoicesCurrentHandle;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param int $number
     * @return \Economic\ProductGroup_Create
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Economic\ProductGroup_Create
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getAccountForVatLiableDebtorInvoicesCurrentHandle()
    {
      return $this->accountForVatLiableDebtorInvoicesCurrentHandle;
    }

    /**
     * @param AccountHandle $accountForVatLiableDebtorInvoicesCurrentHandle
     * @return \Economic\ProductGroup_Create
     */
    public function setAccountForVatLiableDebtorInvoicesCurrentHandle($accountForVatLiableDebtorInvoicesCurrentHandle)
    {
      $this->accountForVatLiableDebtorInvoicesCurrentHandle = $accountForVatLiableDebtorInvoicesCurrentHandle;
      return $this;
    }

}
