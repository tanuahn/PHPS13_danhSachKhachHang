<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 12/02/19
 * Time: 16:00
 */

namespace model;


class CustomerDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($customer)
    {
        $sql = "INSERT INTO 'customer'('name', 'email', 'address') value ('Tuan Anh','','Ha Noi')";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customer->name);
        $statement->bindParam(2, $customer->email);
        $statement->bindParam(3, $customer->address);
        return $statement->execute();
    }
}