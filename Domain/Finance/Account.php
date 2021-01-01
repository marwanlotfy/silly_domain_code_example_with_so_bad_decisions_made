<?php

namespace Domain\Finance;


abstract class Account
{
    protected $id;
    protected $beginingDebit;
    protected $beginingCredit;
    protected $name;
    protected $parent = null;

    public function setParent(NonTranscationableAccount $parent)
    {
        $this->parent = $parent;
    }

    public function getParent()
    {
        return $this->parent;
    }

    abstract public function getDebitedAmount();

    abstract public function getCreditAmount();

    public function getFinalDebtied()
    {
        return max(
            0,
            $this->getTotalDebit() - $this->getTotalCredit(),
        );
    }

    public function getFinalCredited()
    {
        return max(
            0,
            $this->getTotalCredit() - $this->getTotalDebit(),
        );
    }

    public function getTotalDebit()
    {
        return $this->getbeginingDebit() + $this->getDebitedAmount();
    }

    public function getTotalCredit()
    {
        return $this->getBeginingCredit() + $this->getCreditAmount();
    }

    public function getBeginingCredit()
    {
        return $this->beginingCredit;
    }

    public function getbeginingDebit()
    {
        return $this->beginingDebit;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setBeginingDebit($beginingDebit)
    {
        $this->beginingDebit = $beginingDebit;
        return $this;
    }

    public function setBeginingCredit($beginingCredit)
    {
        $this->beginingCredit = $beginingCredit;
        return $this;
    }
}
