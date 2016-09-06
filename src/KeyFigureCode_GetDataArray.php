<?php

namespace Economic;

class KeyFigureCode_GetDataArray
{

    /**
     * @var ArrayOfKeyFigureCodeHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfKeyFigureCodeHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfKeyFigureCodeHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfKeyFigureCodeHandle $entityHandles
     * @return \Economic\KeyFigureCode_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
