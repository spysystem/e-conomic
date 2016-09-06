<?php

namespace Economic;

class Debtor_FindByPartialName
{

    /**
     * @var string $partialName
     */
    protected $partialName = null;

    /**
     * @param string $partialName
     */
    public function __construct($partialName)
    {
      $this->partialName = $partialName;
    }

    /**
     * @return string
     */
    public function getPartialName()
    {
      return $this->partialName;
    }

    /**
     * @param string $partialName
     * @return \Economic\Debtor_FindByPartialName
     */
    public function setPartialName($partialName)
    {
      $this->partialName = $partialName;
      return $this;
    }

}
