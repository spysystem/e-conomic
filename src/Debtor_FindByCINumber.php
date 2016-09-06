<?php

namespace Economic;

class Debtor_FindByCINumber
{

    /**
     * @var string $ciNumber
     */
    protected $ciNumber = null;

    /**
     * @param string $ciNumber
     */
    public function __construct($ciNumber)
    {
      $this->ciNumber = $ciNumber;
    }

    /**
     * @return string
     */
    public function getCiNumber()
    {
      return $this->ciNumber;
    }

    /**
     * @param string $ciNumber
     * @return \Economic\Debtor_FindByCINumber
     */
    public function setCiNumber($ciNumber)
    {
      $this->ciNumber = $ciNumber;
      return $this;
    }

}
