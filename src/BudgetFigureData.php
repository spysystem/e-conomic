<?php

namespace Economic;

class BudgetFigureData
{

    /**
     * @var BudgetFigureHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var AccountHandle $AccountHandle
     */
    protected $AccountHandle = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var \DateTime $FromDate
     */
    protected $FromDate = null;

    /**
     * @var \DateTime $ToDate
     */
    protected $ToDate = null;

    /**
     * @var float $AmountDefaultCurrency
     */
    protected $AmountDefaultCurrency = null;

    /**
     * @var float $Quantity1
     */
    protected $Quantity1 = null;

    /**
     * @var float $Quantity2
     */
    protected $Quantity2 = null;

    /**
     * @var UnitHandle $UnitHandle1
     */
    protected $UnitHandle1 = null;

    /**
     * @var UnitHandle $UnitHandle2
     */
    protected $UnitHandle2 = null;

    /**
     * @var DepartmentHandle $DepartmentHandle
     */
    protected $DepartmentHandle = null;

    /**
     * @var DistributionKeyHandle $DistributionKeyHandle
     */
    protected $DistributionKeyHandle = null;

    /**
     * @param int $Id
     * @param \DateTime $FromDate
     * @param \DateTime $ToDate
     * @param float $AmountDefaultCurrency
     */
    public function __construct($Id, \DateTime $FromDate, \DateTime $ToDate, $AmountDefaultCurrency)
    {
      $this->Id = $Id;
      $this->FromDate = $FromDate->format(\DateTime::ATOM);
      $this->ToDate = $ToDate->format(\DateTime::ATOM);
      $this->AmountDefaultCurrency = $AmountDefaultCurrency;
    }

    /**
     * @return BudgetFigureHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param BudgetFigureHandle $Handle
     * @return \Economic\BudgetFigureData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Economic\BudgetFigureData
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getAccountHandle()
    {
      return $this->AccountHandle;
    }

    /**
     * @param AccountHandle $AccountHandle
     * @return \Economic\BudgetFigureData
     */
    public function setAccountHandle($AccountHandle)
    {
      $this->AccountHandle = $AccountHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \Economic\BudgetFigureData
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
      if ($this->FromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FromDate
     * @return \Economic\BudgetFigureData
     */
    public function setFromDate(\DateTime $FromDate)
    {
      $this->FromDate = $FromDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDate()
    {
      if ($this->ToDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ToDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ToDate
     * @return \Economic\BudgetFigureData
     */
    public function setToDate(\DateTime $ToDate)
    {
      $this->ToDate = $ToDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getAmountDefaultCurrency()
    {
      return $this->AmountDefaultCurrency;
    }

    /**
     * @param float $AmountDefaultCurrency
     * @return \Economic\BudgetFigureData
     */
    public function setAmountDefaultCurrency($AmountDefaultCurrency)
    {
      $this->AmountDefaultCurrency = $AmountDefaultCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity1()
    {
      return $this->Quantity1;
    }

    /**
     * @param float $Quantity1
     * @return \Economic\BudgetFigureData
     */
    public function setQuantity1($Quantity1)
    {
      $this->Quantity1 = $Quantity1;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity2()
    {
      return $this->Quantity2;
    }

    /**
     * @param float $Quantity2
     * @return \Economic\BudgetFigureData
     */
    public function setQuantity2($Quantity2)
    {
      $this->Quantity2 = $Quantity2;
      return $this;
    }

    /**
     * @return UnitHandle
     */
    public function getUnitHandle1()
    {
      return $this->UnitHandle1;
    }

    /**
     * @param UnitHandle $UnitHandle1
     * @return \Economic\BudgetFigureData
     */
    public function setUnitHandle1($UnitHandle1)
    {
      $this->UnitHandle1 = $UnitHandle1;
      return $this;
    }

    /**
     * @return UnitHandle
     */
    public function getUnitHandle2()
    {
      return $this->UnitHandle2;
    }

    /**
     * @param UnitHandle $UnitHandle2
     * @return \Economic\BudgetFigureData
     */
    public function setUnitHandle2($UnitHandle2)
    {
      $this->UnitHandle2 = $UnitHandle2;
      return $this;
    }

    /**
     * @return DepartmentHandle
     */
    public function getDepartmentHandle()
    {
      return $this->DepartmentHandle;
    }

    /**
     * @param DepartmentHandle $DepartmentHandle
     * @return \Economic\BudgetFigureData
     */
    public function setDepartmentHandle($DepartmentHandle)
    {
      $this->DepartmentHandle = $DepartmentHandle;
      return $this;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getDistributionKeyHandle()
    {
      return $this->DistributionKeyHandle;
    }

    /**
     * @param DistributionKeyHandle $DistributionKeyHandle
     * @return \Economic\BudgetFigureData
     */
    public function setDistributionKeyHandle($DistributionKeyHandle)
    {
      $this->DistributionKeyHandle = $DistributionKeyHandle;
      return $this;
    }

}
