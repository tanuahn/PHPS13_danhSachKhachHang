<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 12/02/19
 * Time: 15:57
 */

namespace model;


class Customer
{
    public $id;
    public $name;
    public $email;
    public $address;

    public function __construct($name,$email,$address)
    {
        $this->name = $name;
        $this->email =$email;
        $this->address = $address;
    }
}