<?php

namespace SpeedApps\CotaBank;

class CotaBank
{
    private  $connection;
    private  $charge;
    private  $reversal;

    public function __construct(string $user, string $password, string $environment)
    {
        $this->connection = new Connection($user, $password, $environment);
        $this->charge = new Charge($this->connection);
        $this->reversal = new Reversal($this->connection);
    }

    public function getCharge()
    {
        return $this->charge;
    }

    public function getReversal()
    {
        return $this->reversal;
    }
}
