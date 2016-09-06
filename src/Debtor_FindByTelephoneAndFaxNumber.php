<?php

namespace Economic;

class Debtor_FindByTelephoneAndFaxNumber
{

    /**
     * @var string $telephoneAndFaxNumber
     */
    protected $telephoneAndFaxNumber = null;

    /**
     * @param string $telephoneAndFaxNumber
     */
    public function __construct($telephoneAndFaxNumber)
    {
      $this->telephoneAndFaxNumber = $telephoneAndFaxNumber;
    }

    /**
     * @return string
     */
    public function getTelephoneAndFaxNumber()
    {
      return $this->telephoneAndFaxNumber;
    }

    /**
     * @param string $telephoneAndFaxNumber
     * @return \Economic\Debtor_FindByTelephoneAndFaxNumber
     */
    public function setTelephoneAndFaxNumber($telephoneAndFaxNumber)
    {
      $this->telephoneAndFaxNumber = $telephoneAndFaxNumber;
      return $this;
    }

}
