<?php

namespace Economic;

class KeyFigureCode_GetData
{

    /**
     * @var KeyFigureCodeHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param KeyFigureCodeHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return KeyFigureCodeHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param KeyFigureCodeHandle $entityHandle
     * @return \Economic\KeyFigureCode_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
