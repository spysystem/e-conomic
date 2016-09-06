<?php

namespace Economic;

class ArrayOfAccountingYearData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AccountingYearData[] $AccountingYearData
     */
    protected $AccountingYearData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountingYearData[]
     */
    public function getAccountingYearData()
    {
      return $this->AccountingYearData;
    }

    /**
     * @param AccountingYearData[] $AccountingYearData
     * @return \Economic\ArrayOfAccountingYearData
     */
    public function setAccountingYearData(array $AccountingYearData = null)
    {
      $this->AccountingYearData = $AccountingYearData;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->AccountingYearData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountingYearData
     */
    public function offsetGet($offset)
    {
      return $this->AccountingYearData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountingYearData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->AccountingYearData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->AccountingYearData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AccountingYearData Return the current element
     */
    public function current()
    {
      return current($this->AccountingYearData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccountingYearData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccountingYearData);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->AccountingYearData);
    }

    /**
     * Countable implementation
     *
     * @return AccountingYearData Return count of elements
     */
    public function count()
    {
      return count($this->AccountingYearData);
    }

}
