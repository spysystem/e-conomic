<?php

namespace Economic;

class ArrayOfBankPaymentTypeData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BankPaymentTypeData[] $BankPaymentTypeData
     */
    protected $BankPaymentTypeData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BankPaymentTypeData[]
     */
    public function getBankPaymentTypeData()
    {
      return $this->BankPaymentTypeData;
    }

    /**
     * @param BankPaymentTypeData[] $BankPaymentTypeData
     * @return \Economic\ArrayOfBankPaymentTypeData
     */
    public function setBankPaymentTypeData(array $BankPaymentTypeData = null)
    {
      $this->BankPaymentTypeData = $BankPaymentTypeData;
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
      return isset($this->BankPaymentTypeData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BankPaymentTypeData
     */
    public function offsetGet($offset)
    {
      return $this->BankPaymentTypeData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BankPaymentTypeData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->BankPaymentTypeData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->BankPaymentTypeData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BankPaymentTypeData Return the current element
     */
    public function current()
    {
      return current($this->BankPaymentTypeData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BankPaymentTypeData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BankPaymentTypeData);
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
      reset($this->BankPaymentTypeData);
    }

    /**
     * Countable implementation
     *
     * @return BankPaymentTypeData Return count of elements
     */
    public function count()
    {
      return count($this->BankPaymentTypeData);
    }

}
