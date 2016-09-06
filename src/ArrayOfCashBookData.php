<?php

namespace Economic;

class ArrayOfCashBookData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CashBookData[] $CashBookData
     */
    protected $CashBookData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CashBookData[]
     */
    public function getCashBookData()
    {
      return $this->CashBookData;
    }

    /**
     * @param CashBookData[] $CashBookData
     * @return \Economic\ArrayOfCashBookData
     */
    public function setCashBookData(array $CashBookData = null)
    {
      $this->CashBookData = $CashBookData;
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
      return isset($this->CashBookData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CashBookData
     */
    public function offsetGet($offset)
    {
      return $this->CashBookData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CashBookData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CashBookData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CashBookData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CashBookData Return the current element
     */
    public function current()
    {
      return current($this->CashBookData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CashBookData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CashBookData);
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
      reset($this->CashBookData);
    }

    /**
     * Countable implementation
     *
     * @return CashBookData Return count of elements
     */
    public function count()
    {
      return count($this->CashBookData);
    }

}
