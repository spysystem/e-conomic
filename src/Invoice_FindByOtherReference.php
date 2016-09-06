<?php

namespace Economic;

class Invoice_FindByOtherReference
{

    /**
     * @var string $otherReference
     */
    protected $otherReference = null;

    /**
     * @param string $otherReference
     */
    public function __construct($otherReference)
    {
      $this->otherReference = $otherReference;
    }

    /**
     * @return string
     */
    public function getOtherReference()
    {
      return $this->otherReference;
    }

    /**
     * @param string $otherReference
     * @return \Economic\Invoice_FindByOtherReference
     */
    public function setOtherReference($otherReference)
    {
      $this->otherReference = $otherReference;
      return $this;
    }

}
