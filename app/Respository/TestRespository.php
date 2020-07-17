<?php
namespace App\Respository;
use App\Respository\contact\testRespositoryInterface;

class TestRespository implements testRespositoryInterface {

    //override
    public function getData(){
        return 'get data succaaess blog 1';
    }
}
