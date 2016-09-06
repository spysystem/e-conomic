<?php

namespace Economic;

class KeyFigureCode_GetDataResponse
{

    /**
     * @var KeyFigureCodeData $KeyFigureCode_GetDataResult
     */
    protected $KeyFigureCode_GetDataResult = null;

    /**
     * @param KeyFigureCodeData $KeyFigureCode_GetDataResult
     */
    public function __construct($KeyFigureCode_GetDataResult)
    {
      $this->KeyFigureCode_GetDataResult = $KeyFigureCode_GetDataResult;
    }

    /**
     * @return KeyFigureCodeData
     */
    public function getKeyFigureCode_GetDataResult()
    {
      return $this->KeyFigureCode_GetDataResult;
    }

    /**
     * @param KeyFigureCodeData $KeyFigureCode_GetDataResult
     * @return \Economic\KeyFigureCode_GetDataResponse
     */
    public function setKeyFigureCode_GetDataResult($KeyFigureCode_GetDataResult)
    {
      $this->KeyFigureCode_GetDataResult = $KeyFigureCode_GetDataResult;
      return $this;
    }

}
