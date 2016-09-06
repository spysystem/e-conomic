<?php

namespace Economic;

class AccountingYearHandle
{

    /**
     * @var string $Year
     */
    protected $Year = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getYear()
    {
      return $this->Year;
    }

    /**
     * @param string $Year
     * @return \Economic\AccountingYearHandle
     */
    public function setYear($Year)
    {
      $this->Year = $Year;
      return $this;
    }

}
