<?php

namespace Domain\Finance\Contracts;

use Closure;

interface IteratableEntry
{
    public function forEachDebitParty(Closure $closure);
    public function forEachCreditParty(Closure $closure);
}