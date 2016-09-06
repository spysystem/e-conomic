<?php

namespace Economic;

class KeyFigureCode_GetName
{

    /**
     * @var KeyFigureCodeHandle $keyFigureCodeHandle
     */
    protected $keyFigureCodeHandle = null;

    /**
     * @param KeyFigureCodeHandle $keyFigureCodeHandle
     */
    public function __construct($keyFigureCodeHandle)
    {
      $this->keyFigureCodeHandle = $keyFigureCodeHandle;
    }

    /**
     * @return KeyFigureCodeHandle
     */
    public function getKeyFigureCodeHandle()
    {
      return $this->keyFigureCodeHandle;
    }

    /**
     * @param KeyFigureCodeHandle $keyFigureCodeHandle
     * @return \Economic\KeyFigureCode_GetName
     */
    public function setKeyFigureCodeHandle($keyFigureCodeHandle)
    {
      $this->keyFigureCodeHandle = $keyFigureCodeHandle;
      return $this;
    }

}
