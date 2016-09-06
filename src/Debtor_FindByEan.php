<?php

namespace Economic;

class Debtor_FindByEan
{

    /**
     * @var string $ean
     */
    protected $ean = null;

    /**
     * @param string $ean
     */
    public function __construct($ean)
    {
      $this->ean = $ean;
    }

    /**
     * @return string
     */
    public function getEan()
    {
      return $this->ean;
    }

    /**
     * @param string $ean
     * @return \Economic\Debtor_FindByEan
     */
    public function setEan($ean)
    {
      $this->ean = $ean;
      return $this;
    }

}
