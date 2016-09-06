<?php

namespace Economic;

class CashBook_FindByNameList
{

    /**
     * @var ArrayOfString $names
     */
    protected $names = null;

    /**
     * @param ArrayOfString $names
     */
    public function __construct($names)
    {
      $this->names = $names;
    }

    /**
     * @return ArrayOfString
     */
    public function getNames()
    {
      return $this->names;
    }

    /**
     * @param ArrayOfString $names
     * @return \Economic\CashBook_FindByNameList
     */
    public function setNames($names)
    {
      $this->names = $names;
      return $this;
    }

}
