<?php

namespace Domain\Finance;

use Domain\Finance\Contracts\IteratableEntry;
use Closure;

class Entry implements IteratableEntry
{
    private $id;
    private $debitParties = [];
    private $creditParties = [] ;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function addDebitParty(EntryParty $entryParty)
    {
        $this->debitParties[] = $entryParty;
        return $this;
    }

    public function addCreditParty(EntryParty $entryParty)
    {
        $this->creditParties[] = $entryParty;
        return $this;
    }

    public function transfer()
    {
        foreach ($this->debitParties as $entryParty) {
            $entryParty->getAccount()->debitBy($entryParty->getShareAmount());
        }

        foreach ($this->creditParties as $entryParty) {
            $entryParty->getAccount()->creditBy($entryParty->getShareAmount());
        }
    }

    public function forEachDebitParty(Closure $closure)
    {
        foreach($this->debitParties as $party){
            $closure($party);
        }
    }

    public function forEachCreditParty(Closure $closure)
    {
        foreach($this->creditParties as $party){
            $closure($party);
        }
    }

}
