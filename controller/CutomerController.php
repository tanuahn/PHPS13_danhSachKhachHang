<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 12/02/19
 * Time: 16:09
 */

namespace model;
//use model\Customer;
//use model\CustomerDB;
//use model\DBConnection;


class CutomerController
{
    public $customerDB;

    public function __construct()
    {
        $connerction = new DBConnection("mysql:host=localhost; db=ds_khach_hang", "root", "25251325");
        $this->customerDB = new CustomerDB($connerction->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/add.php';
        } else {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];

            $customer = new Customer($name, $email, $address);
            $this->customerDB->create($customer);
            $message = 'Customer created';
            include 'view/add.php';
        }
    }
}