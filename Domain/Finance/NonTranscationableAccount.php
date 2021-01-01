<?php

namespace Domain\Finance;

class NonTranscationableAccount extends Account 
{
    private $children = [];

    public function addChildAccount(Account $account)
    {
        $this->children[] = $account;
    }

    public function getCreditAmount()
    {
        $creditAmount = 0;
        foreach ($this->children as $childAccount) {
            $creditAmount += $childAccount->getCreditAmount();
        }
        return $creditAmount;
    }

    public function getDebitedAmount()
    {
        $debitAmount = 0;
        foreach ($this->children as $childAccount) {
            $debitAmount += $childAccount->getDebitedAmount();
        }
        return $debitAmount;
    }
}
