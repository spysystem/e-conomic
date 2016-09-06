<?php

namespace Economic;

class ArrayOfBankPaymentTypeHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BankPaymentTypeHandle[] $BankPaymentTypeHandle
     */
    protected $BankPaymentTypeHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BankPaymentTypeHandle[]
     */
    public function getBankPaymentTypeHandle()
    {
      return $this->BankPaymentTypeHandle;
    }

    /**
     * @param BankPaymentTypeHandle[] $BankPaymentTypeHandle
     * @return \Economic\ArrayOfBankPaymentTypeHandle
     */
    public function setBankPaymentTypeHandle(array $BankPaymentTypeHandle = null)
    {
      $this->BankPaymentTypeHandle = $BankPaymentTypeHandle;
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
      return isset($this->BankPaymentTypeHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BankPaymentTypeHandle
     */
    public function offsetGet($offset)
    {
      return $this->BankPaymentTypeHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BankPaymentTypeHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->BankPaymentTypeHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->BankPaymentTypeHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BankPaymentTypeHandle Return the current element
     */
    public function current()
    {
      return current($this->BankPaymentTypeHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BankPaymentTypeHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BankPaymentTypeHandle);
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
      reset($this->BankPaymentTypeHandle);
    }

    /**
     * Countable implementation
     *
     * @return BankPaymentTypeHandle Return count of elements
     */
    public function count()
    {
      return count($this->BankPaymentTypeHandle);
    }

}
