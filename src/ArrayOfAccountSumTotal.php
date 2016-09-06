<?php

namespace Economic;

class ArrayOfAccountSumTotal implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AccountSumTotal[] $AccountSumTotal
     */
    protected $AccountSumTotal = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountSumTotal[]
     */
    public function getAccountSumTotal()
    {
      return $this->AccountSumTotal;
    }

    /**
     * @param AccountSumTotal[] $AccountSumTotal
     * @return \Economic\ArrayOfAccountSumTotal
     */
    public function setAccountSumTotal(array $AccountSumTotal = null)
    {
      $this->AccountSumTotal = $AccountSumTotal;
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
      return isset($this->AccountSumTotal[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountSumTotal
     */
    public function offsetGet($offset)
    {
      return $this->AccountSumTotal[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountSumTotal $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->AccountSumTotal[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->AccountSumTotal[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AccountSumTotal Return the current element
     */
    public function current()
    {
      return current($this->AccountSumTotal);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccountSumTotal);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccountSumTotal);
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
      reset($this->AccountSumTotal);
    }

    /**
     * Countable implementation
     *
     * @return AccountSumTotal Return count of elements
     */
    public function count()
    {
      return count($this->AccountSumTotal);
    }

}
