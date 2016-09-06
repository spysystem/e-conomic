<?php

namespace Economic;

class TermOfPayment_Create
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var TermOfPaymentType $type
     */
    protected $type = null;

    /**
     * @var int $days
     */
    protected $days = null;

    /**
     * @param string $name
     * @param TermOfPaymentType $type
     * @param int $days
     */
    public function __construct($name, $type, $days)
    {
      $this->name = $name;
      $this->type = $type;
      $this->days = $days;
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
     * @return \Economic\TermOfPayment_Create
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return TermOfPaymentType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param TermOfPaymentType $type
     * @return \Economic\TermOfPayment_Create
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return int
     */
    public function getDays()
    {
      return $this->days;
    }

    /**
     * @param int $days
     * @return \Economic\TermOfPayment_Create
     */
    public function setDays($days)
    {
      $this->days = $days;
      return $this;
    }

}
