<?php

namespace SpeedApps\CotaBank;

class CotaBank
{
    private Connection $connection;
    private Charge $charge;

    public function __construct(string $user, string $password, string $environment)
    {
        $this->connection = new Connection($user, $password, $environment);
        $this->charge = new Charge($this->connection);
    }

    public function getCharge(): Charge
    {
        return $this->charge;
    }




}
