<?php

namespace Economic;

class DebtorEntry_FindBySerialNumber
{

    /**
     * @var int $from
     */
    protected $from = null;

    /**
     * @var int $to
     */
    protected $to = null;

    /**
     * @param int $from
     * @param int $to
     */
    public function __construct($from, $to)
    {
      $this->from = $from;
      $this->to = $to;
    }

    /**
     * @return int
     */
    public function getFrom()
    {
      return $this->from;
    }

    /**
     * @param int $from
     * @return \Economic\DebtorEntry_FindBySerialNumber
     */
    public function setFrom($from)
    {
      $this->from = $from;
      return $this;
    }

    /**
     * @return int
     */
    public function getTo()
    {
      return $this->to;
    }

    /**
     * @param int $to
     * @return \Economic\DebtorEntry_FindBySerialNumber
     */
    public function setTo($to)
    {
      $this->to = $to;
      return $this;
    }

}
