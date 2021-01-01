<?php

namespace Domain\Finance\Contracts;

interface Transcationable
{
    public function debitBy(float $amount);
    public function creditBy(float $amount);
}
