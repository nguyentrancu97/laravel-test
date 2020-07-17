<?php

namespace App\Http\Controllers;

use App\Respository\contact\testRespositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class ApiController extends Controller
{
    private $testRespository;

    public function __construct(testRespositoryInterface $testRespository)
    {
        $this->testRespository = $testRespository;
    }

    public function testApi(Request $request){
        $request->session()->put('test', '1');
        Cookie::queue('test', 'abc', 5);
        return true;
    }
    public function getCookie(Request $request){
        $a = Cookie::get('laravel_session');
        dd($a);
        // $request->session()->forget('test');
        dd($request->session()->all());
    }

    public function testRespository (Request $request){
        $a = $this->testRespository->getData();
        return $a;
    }
}
