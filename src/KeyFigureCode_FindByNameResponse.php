<?php

namespace Economic;

class KeyFigureCode_FindByNameResponse
{

    /**
     * @var KeyFigureCodeHandle $KeyFigureCode_FindByNameResult
     */
    protected $KeyFigureCode_FindByNameResult = null;

    /**
     * @param KeyFigureCodeHandle $KeyFigureCode_FindByNameResult
     */
    public function __construct($KeyFigureCode_FindByNameResult)
    {
      $this->KeyFigureCode_FindByNameResult = $KeyFigureCode_FindByNameResult;
    }

    /**
     * @return KeyFigureCodeHandle
     */
    public function getKeyFigureCode_FindByNameResult()
    {
      return $this->KeyFigureCode_FindByNameResult;
    }

    /**
     * @param KeyFigureCodeHandle $KeyFigureCode_FindByNameResult
     * @return \Economic\KeyFigureCode_FindByNameResponse
     */
    public function setKeyFigureCode_FindByNameResult($KeyFigureCode_FindByNameResult)
    {
      $this->KeyFigureCode_FindByNameResult = $KeyFigureCode_FindByNameResult;
      return $this;
    }

}
