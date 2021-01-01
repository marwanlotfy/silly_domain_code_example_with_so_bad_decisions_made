<?php

namespace Domain\Finance;

use Domain\Finance\Contracts\Transcationable;

class TranscationableAccount extends Account implements Transcationable
{
    private $debitedAmount;
    private $creditAmount;

    public function getCreditAmount()
    {
        return $this->creditAmount;
    }

    public function getDebitedAmount()
    {
        return $this->debitedAmount;
    }

    public function setBebitedAmount($debitedAmount)
    {
        $this->debitedAmount = $debitedAmount;
        return $this;
    }
    public function setCreditAmount($creditAmount)
    {
        $this->creditAmount = $creditAmount;
        return $this;
    }

    public function debitBy($amount)
    {
        $this->debitedAmount += $amount;
    }

    public function creditBy($amount)
    {
        $this->creditAmount += $amount;
    }
}
