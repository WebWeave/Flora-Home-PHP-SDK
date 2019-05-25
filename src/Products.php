<?php

namespace Flora\SDK;

class Products
{
    /**
     * @var Connection
     */
    protected $connection;

    /**
     * Products constructor.
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function getProducts()
    {
        return $this->connection->get('products/get');
    }

    /**
     * @param \DateTime $dateTime
     * @return mixed
     * @throws \Exception
     */
    public function getRecentProducts(\DateTime $dateTime)
    {
        return $this->connection->get('products/recent', ['fromdt' => $dateTime->format(\DateTime::ATOM)]);
    }
}