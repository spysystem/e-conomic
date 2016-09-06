<?php

namespace Economic;

class KeyFigureCodeData
{

    /**
     * @var KeyFigureCodeHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeyFigureCodeHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param KeyFigureCodeHandle $Handle
     * @return \Economic\KeyFigureCodeData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \Economic\KeyFigureCodeData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Economic\KeyFigureCodeData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
