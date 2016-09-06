<?php

namespace Economic;

class BudgetFigure_Create
{

    /**
     * @var AccountHandle $accountHandle
     */
    protected $accountHandle = null;

    /**
     * @var string $text
     */
    protected $text = null;

    /**
     * @var \DateTime $fromDate
     */
    protected $fromDate = null;

    /**
     * @var \DateTime $toDate
     */
    protected $toDate = null;

    /**
     * @var float $amountDefaultCurrency
     */
    protected $amountDefaultCurrency = null;

    /**
     * @param AccountHandle $accountHandle
     * @param string $text
     * @param \DateTime $fromDate
     * @param \DateTime $toDate
     * @param float $amountDefaultCurrency
     */
    public function __construct($accountHandle, $text, \DateTime $fromDate, \DateTime $toDate, $amountDefaultCurrency)
    {
      $this->accountHandle = $accountHandle;
      $this->text = $text;
      $this->fromDate = $fromDate->format(\DateTime::ATOM);
      $this->toDate = $toDate->format(\DateTime::ATOM);
      $this->amountDefaultCurrency = $amountDefaultCurrency;
    }

    /**
     * @return AccountHandle
     */
    public function getAccountHandle()
    {
      return $this->accountHandle;
    }

    /**
     * @param AccountHandle $accountHandle
     * @return \Economic\BudgetFigure_Create
     */
    public function setAccountHandle($accountHandle)
    {
      $this->accountHandle = $accountHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->text;
    }

    /**
     * @param string $text
     * @return \Economic\BudgetFigure_Create
     */
    public function setText($text)
    {
      $this->text = $text;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
      if ($this->fromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->fromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $fromDate
     * @return \Economic\BudgetFigure_Create
     */
    public function setFromDate(\DateTime $fromDate)
    {
      $this->fromDate = $fromDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDate()
    {
      if ($this->toDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->toDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $toDate
     * @return \Economic\BudgetFigure_Create
     */
    public function setToDate(\DateTime $toDate)
    {
      $this->toDate = $toDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getAmountDefaultCurrency()
    {
      return $this->amountDefaultCurrency;
    }

    /**
     * @param float $amountDefaultCurrency
     * @return \Economic\BudgetFigure_Create
     */
    public function setAmountDefaultCurrency($amountDefaultCurrency)
    {
      $this->amountDefaultCurrency = $amountDefaultCurrency;
      return $this;
    }

}
