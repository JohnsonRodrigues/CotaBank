<?php

namespace SpeedApps\CotaBank;

class CotaBank
{
    private Connection $connection;
    private Charge $charge;
    private Reversal $reversal;

    public function __construct(string $user, string $password, string $environment)
    {
        $this->connection = new Connection($user, $password, $environment);
        $this->charge = new Charge($this->connection);
        $this->reversal = new Reversal($this->connection);
    }

    public function getCharge(): Charge
    {
        return $this->charge;
    }

    public function getReversal(): Reversal
    {
        return $this->reversal;
    }
}
