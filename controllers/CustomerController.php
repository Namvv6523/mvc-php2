<?php
require_once "./models/Customer.php";

class BaseController
{
    protected $customer;

    public function __construct()
    {
        $this->customer = new Customer();
    }
}
class CustomerController extends BaseController
{
    function listCustomer()
    {
        $customers = $this->customer->getCustomer();
        include_once "./views/Customer/list.php";
    }
    function addCustomer()
    {
        if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
            $name = $_POST['username'];
            $age = $_POST['age'];
            $customers = $this->customer->add($name, $age);
            header("location:?url=/");
        }
        include_once "./views/Customer/add.php";
    }
    function updateCustomer()
    {
        if (isset($_POST['update']) && ($_POST['update'])) {
            $id = $_POST['id'];
            $name_new = $_POST['username'];
            $age_new = $_POST['age'];
            $customers = $this->customer->update($id, $name_new, $age_new);
            header("location:?url=/");
        }

        include_once "./views/Customer/update.php";
    }
    function removeCustomer()
    {
        $customers = $this->customer->delete();
        header("location:?url=/");
    }
}
