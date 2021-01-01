<?php

namespace Domain\Finance;

use Domain\Finance\Contracts\Transcationable;

class EntryParty  
{
    private $account;
    private $amount;

    public function setAccount(Transcationable $account)
    {
        $this->account = $account;
        return $this;
    }
    public function setShareAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function getAccount() : Transcationable
    {
        return $this->account;
    }

    public function getShareAmount()
    {
        return $this->amount;
    }
}
