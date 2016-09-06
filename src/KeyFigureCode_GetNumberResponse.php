<?php

namespace Economic;

class KeyFigureCode_GetNumberResponse
{

    /**
     * @var string $KeyFigureCode_GetNumberResult
     */
    protected $KeyFigureCode_GetNumberResult = null;

    /**
     * @param string $KeyFigureCode_GetNumberResult
     */
    public function __construct($KeyFigureCode_GetNumberResult)
    {
      $this->KeyFigureCode_GetNumberResult = $KeyFigureCode_GetNumberResult;
    }

    /**
     * @return string
     */
    public function getKeyFigureCode_GetNumberResult()
    {
      return $this->KeyFigureCode_GetNumberResult;
    }

    /**
     * @param string $KeyFigureCode_GetNumberResult
     * @return \Economic\KeyFigureCode_GetNumberResponse
     */
    public function setKeyFigureCode_GetNumberResult($KeyFigureCode_GetNumberResult)
    {
      $this->KeyFigureCode_GetNumberResult = $KeyFigureCode_GetNumberResult;
      return $this;
    }

}
