<?php

namespace Economic;

class DebtorGroup_SetLayout
{

    /**
     * @var DebtorGroupHandle $debtorGroupHandle
     */
    protected $debtorGroupHandle = null;

    /**
     * @var TemplateCollectionHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param DebtorGroupHandle $debtorGroupHandle
     * @param TemplateCollectionHandle $valueHandle
     */
    public function __construct($debtorGroupHandle, $valueHandle)
    {
      $this->debtorGroupHandle = $debtorGroupHandle;
      $this->valueHandle = $valueHandle;
    }

    /**
     * @return DebtorGroupHandle
     */
    public function getDebtorGroupHandle()
    {
      return $this->debtorGroupHandle;
    }

    /**
     * @param DebtorGroupHandle $debtorGroupHandle
     * @return \Economic\DebtorGroup_SetLayout
     */
    public function setDebtorGroupHandle($debtorGroupHandle)
    {
      $this->debtorGroupHandle = $debtorGroupHandle;
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
     * @return \Economic\DebtorGroup_SetLayout
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
