<?php

namespace Flora\SDK;

class Orders
{
    /**
     * @var Connection
     */
    protected $connection;

    /**
     * Orders constructor.
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @param array $params
     * @return mixed
     * @throws \Exception
     */
    public function create(array $params)
    {
        return $this->connection->post('orders/create', $params);
    }
}