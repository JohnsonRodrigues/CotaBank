<?php

namespace SpeedApps\CotaBank;

class Reversal
{
    public $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function reversal(string $chargeId)
    {
        $this->connection->authorization();
        $data = array(
            "tid" => $chargeId
        );
        return $this->connection->post('/v1/cancellation', $data);
    }
}
