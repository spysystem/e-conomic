<?php

namespace Economic;

class ReportCodeHandle
{

    /**
     * @var int $Id1
     */
    protected $Id1 = null;

    /**
     * @var int $Id2
     */
    protected $Id2 = null;

    /**
     * @param int $Id1
     * @param int $Id2
     */
    public function __construct($Id1, $Id2)
    {
      $this->Id1 = $Id1;
      $this->Id2 = $Id2;
    }

    /**
     * @return int
     */
    public function getId1()
    {
      return $this->Id1;
    }

    /**
     * @param int $Id1
     * @return \Economic\ReportCodeHandle
     */
    public function setId1($Id1)
    {
      $this->Id1 = $Id1;
      return $this;
    }

    /**
     * @return int
     */
    public function getId2()
    {
      return $this->Id2;
    }

    /**
     * @param int $Id2
     * @return \Economic\ReportCodeHandle
     */
    public function setId2($Id2)
    {
      $this->Id2 = $Id2;
      return $this;
    }

}
