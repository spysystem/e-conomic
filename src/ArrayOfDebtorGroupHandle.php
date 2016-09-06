<?php

namespace Economic;

class ArrayOfDebtorGroupHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DebtorGroupHandle[] $DebtorGroupHandle
     */
    protected $DebtorGroupHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DebtorGroupHandle[]
     */
    public function getDebtorGroupHandle()
    {
      return $this->DebtorGroupHandle;
    }

    /**
     * @param DebtorGroupHandle[] $DebtorGroupHandle
     * @return \Economic\ArrayOfDebtorGroupHandle
     */
    public function setDebtorGroupHandle(array $DebtorGroupHandle = null)
    {
      $this->DebtorGroupHandle = $DebtorGroupHandle;
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
      return isset($this->DebtorGroupHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DebtorGroupHandle
     */
    public function offsetGet($offset)
    {
      return $this->DebtorGroupHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DebtorGroupHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->DebtorGroupHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DebtorGroupHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DebtorGroupHandle Return the current element
     */
    public function current()
    {
      return current($this->DebtorGroupHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DebtorGroupHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DebtorGroupHandle);
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
      reset($this->DebtorGroupHandle);
    }

    /**
     * Countable implementation
     *
     * @return DebtorGroupHandle Return count of elements
     */
    public function count()
    {
      return count($this->DebtorGroupHandle);
    }

}
