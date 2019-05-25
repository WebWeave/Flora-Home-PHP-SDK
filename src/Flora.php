<?php

namespace Flora\SDK;

class Flora
{
    /**
     * @var Connection
     */
    protected $connection;

    /**
     * Flora constructor.
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @return Products
     */
    public function Products()
    {
        return new Products($this->connection);
    }

    /**
     * @return Orders
     */
    public function Orders()
    {
        return new Orders($this->connection);
    }
}