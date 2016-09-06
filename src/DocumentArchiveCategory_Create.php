<?php

namespace Economic;

class DocumentArchiveCategory_Create
{

    /**
     * @var int $number
     */
    protected $number = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param int $number
     * @param string $name
     */
    public function __construct($number, $name)
    {
      $this->number = $number;
      $this->name = $name;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param int $number
     * @return \Economic\DocumentArchiveCategory_Create
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Economic\DocumentArchiveCategory_Create
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
