<?php

namespace Economic;

class ArrayOfAccountSumTotalByDateInterval implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AccountSumTotalByDateInterval[] $AccountSumTotalByDateInterval
     */
    protected $AccountSumTotalByDateInterval = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountSumTotalByDateInterval[]
     */
    public function getAccountSumTotalByDateInterval()
    {
      return $this->AccountSumTotalByDateInterval;
    }

    /**
     * @param AccountSumTotalByDateInterval[] $AccountSumTotalByDateInterval
     * @return \Economic\ArrayOfAccountSumTotalByDateInterval
     */
    public function setAccountSumTotalByDateInterval(array $AccountSumTotalByDateInterval = null)
    {
      $this->AccountSumTotalByDateInterval = $AccountSumTotalByDateInterval;
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
      return isset($this->AccountSumTotalByDateInterval[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountSumTotalByDateInterval
     */
    public function offsetGet($offset)
    {
      return $this->AccountSumTotalByDateInterval[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountSumTotalByDateInterval $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->AccountSumTotalByDateInterval[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->AccountSumTotalByDateInterval[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AccountSumTotalByDateInterval Return the current element
     */
    public function current()
    {
      return current($this->AccountSumTotalByDateInterval);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccountSumTotalByDateInterval);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccountSumTotalByDateInterval);
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
      reset($this->AccountSumTotalByDateInterval);
    }

    /**
     * Countable implementation
     *
     * @return AccountSumTotalByDateInterval Return count of elements
     */
    public function count()
    {
      return count($this->AccountSumTotalByDateInterval);
    }

}
