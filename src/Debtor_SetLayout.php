<?php

namespace Economic;

class Debtor_SetLayout
{

    /**
     * @var DebtorHandle $debtorHandle
     */
    protected $debtorHandle = null;

    /**
     * @var TemplateCollectionHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param DebtorHandle $debtorHandle
     * @param TemplateCollectionHandle $valueHandle
     */
    public function __construct($debtorHandle, $valueHandle)
    {
      $this->debtorHandle = $debtorHandle;
      $this->valueHandle = $valueHandle;
    }

    /**
     * @return DebtorHandle
     */
    public function getDebtorHandle()
    {
      return $this->debtorHandle;
    }

    /**
     * @param DebtorHandle $debtorHandle
     * @return \Economic\Debtor_SetLayout
     */
    public function setDebtorHandle($debtorHandle)
    {
      $this->debtorHandle = $debtorHandle;
      return $this;
    }

    /**
     * @return TemplateCollectionHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param TemplateCollectionHandle $valueHandle
     * @return \Economic\Debtor_SetLayout
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
