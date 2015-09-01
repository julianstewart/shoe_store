<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Store.php";

    $server = 'mysql:host=localhost:8889;dbname=shoes_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class StoreTest extends PHPUnit_Framework_TestCase
    {

        function test_getStoreName()
        {
            //arrange
            $store_name = "Payless";
            $id = 1;
            $test_Store = new Store($store_name, $id);

            //act
            $result = $test_Store->getStoreName();

            //assert
            $this->assertEquals($store_name, $result);

            //for debugging
            var_dump($test_Store);

        }
    }


?>
