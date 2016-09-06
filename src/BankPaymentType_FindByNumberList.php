<?php

namespace Economic;

class BankPaymentType_FindByNumberList
{

    /**
     * @var ArrayOfString $numbers
     */
    protected $numbers = null;

    /**
     * @param ArrayOfString $numbers
     */
    public function __construct($numbers)
    {
      $this->numbers = $numbers;
    }

    /**
     * @return ArrayOfString
     */
    public function getNumbers()
    {
      return $this->numbers;
    }

    /**
     * @param ArrayOfString $numbers
     * @return \Economic\BankPaymentType_FindByNumberList
     */
    public function setNumbers($numbers)
    {
      $this->numbers = $numbers;
      return $this;
    }

}
