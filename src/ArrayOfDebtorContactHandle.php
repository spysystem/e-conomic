<?php

namespace Economic;

class ArrayOfDebtorContactHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DebtorContactHandle[] $DebtorContactHandle
     */
    protected $DebtorContactHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DebtorContactHandle[]
     */
    public function getDebtorContactHandle()
    {
      return $this->DebtorContactHandle;
    }

    /**
     * @param DebtorContactHandle[] $DebtorContactHandle
     * @return \Economic\ArrayOfDebtorContactHandle
     */
    public function setDebtorContactHandle(array $DebtorContactHandle = null)
    {
      $this->DebtorContactHandle = $DebtorContactHandle;
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
      return isset($this->DebtorContactHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DebtorContactHandle
     */
    public function offsetGet($offset)
    {
      return $this->DebtorContactHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DebtorContactHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->DebtorContactHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DebtorContactHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DebtorContactHandle Return the current element
     */
    public function current()
    {
      return current($this->DebtorContactHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DebtorContactHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DebtorContactHandle);
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
      reset($this->DebtorContactHandle);
    }

    /**
     * Countable implementation
     *
     * @return DebtorContactHandle Return count of elements
     */
    public function count()
    {
      return count($this->DebtorContactHandle);
    }

}
