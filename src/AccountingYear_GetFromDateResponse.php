<?php

namespace Economic;

class AccountingYear_GetFromDateResponse
{

    /**
     * @var \DateTime $AccountingYear_GetFromDateResult
     */
    protected $AccountingYear_GetFromDateResult = null;

    /**
     * @param \DateTime $AccountingYear_GetFromDateResult
     */
    public function __construct(\DateTime $AccountingYear_GetFromDateResult)
    {
      $this->AccountingYear_GetFromDateResult = $AccountingYear_GetFromDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getAccountingYear_GetFromDateResult()
    {
      if ($this->AccountingYear_GetFromDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->AccountingYear_GetFromDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $AccountingYear_GetFromDateResult
     * @return \Economic\AccountingYear_GetFromDateResponse
     */
    public function setAccountingYear_GetFromDateResult(\DateTime $AccountingYear_GetFromDateResult)
    {
      $this->AccountingYear_GetFromDateResult = $AccountingYear_GetFromDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
