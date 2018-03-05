<?php
namespace app\index\controller;

use think\Controller;
use think\Request ;
use app\index\model;
use think\model\Collection;


class Index extends Controller
{
    function __construct(Request $request = null)
    {
        parent::__construct($request);
    }

    public function index()
    {
	    echo 'this is test';

    }

}
