<?php

namespace Economic;

class KeyFigureCode_FindByNumberResponse
{

    /**
     * @var KeyFigureCodeHandle $KeyFigureCode_FindByNumberResult
     */
    protected $KeyFigureCode_FindByNumberResult = null;

    /**
     * @param KeyFigureCodeHandle $KeyFigureCode_FindByNumberResult
     */
    public function __construct($KeyFigureCode_FindByNumberResult)
    {
      $this->KeyFigureCode_FindByNumberResult = $KeyFigureCode_FindByNumberResult;
    }

    /**
     * @return KeyFigureCodeHandle
     */
    public function getKeyFigureCode_FindByNumberResult()
    {
      return $this->KeyFigureCode_FindByNumberResult;
    }

    /**
     * @param KeyFigureCodeHandle $KeyFigureCode_FindByNumberResult
     * @return \Economic\KeyFigureCode_FindByNumberResponse
     */
    public function setKeyFigureCode_FindByNumberResult($KeyFigureCode_FindByNumberResult)
    {
      $this->KeyFigureCode_FindByNumberResult = $KeyFigureCode_FindByNumberResult;
      return $this;
    }

}
