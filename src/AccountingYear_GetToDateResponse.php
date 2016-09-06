<?php

namespace Economic;

class AccountingYear_GetToDateResponse
{

    /**
     * @var \DateTime $AccountingYear_GetToDateResult
     */
    protected $AccountingYear_GetToDateResult = null;

    /**
     * @param \DateTime $AccountingYear_GetToDateResult
     */
    public function __construct(\DateTime $AccountingYear_GetToDateResult)
    {
      $this->AccountingYear_GetToDateResult = $AccountingYear_GetToDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getAccountingYear_GetToDateResult()
    {
      if ($this->AccountingYear_GetToDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->AccountingYear_GetToDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $AccountingYear_GetToDateResult
     * @return \Economic\AccountingYear_GetToDateResponse
     */
    public function setAccountingYear_GetToDateResult(\DateTime $AccountingYear_GetToDateResult)
    {
      $this->AccountingYear_GetToDateResult = $AccountingYear_GetToDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
