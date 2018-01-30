<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request     as Request;
use Illuminate\Http\Response    as Response;

class TestController extends \App\Http\Controllers\Controller {
    public function __construct() {
        //在控制器指定中间件
        //$this->middleware('test');
    }

    public function lists() {
        echo "lists";
        exit;
    }

    public function add() {
        echo "add";
        exit;
    }

    public function json()
    {
        return response()->json(array(111));
    }

    public function view() {
        return view('/test/view', array('name' => 'test'));
    }

    public function middle() {
        return 111;
    }

    public function get() {
        echo "test";
        exit;
    }

    public function uses() {
        echo route('use');
        exit;
    }

    public function request(Request $request) {
        //获取path
        echo $request->path();
        //路由正则判断
        var_dump($request->is('test/*'));
        //获取url
        echo $request->url();
        echo $request->fullUrl();
        //判断请求方式
        var_dump($request->isMethod('get'));
        //获取name字段并设置默认值
        var_dump($request->input('name', 'default'));
        //获取name字段
        var_dump($request->name);
        //获取所有请求参数
        var_dump($request->all());
        //判断名字是否存在
        var_dump($request->has('name'));
        //获取cookie
        var_dump($request->cookie('uid'));
        //带参数跳转
        var_dump(redirect('form')->withInput($request->except('password')));
        //获取上一次的请求值
        var_dump($request->old());
    }

    public function cookie() {
        $response = new Response('Hello World');
        $response->withCookie(cookie('name', 'value', 1));
        return $response;
    }

    public function upload(Request $request) {
        $request->file('photo')->move('/tmp', 'tmp.png');
    }

    public function response() {
        $data = array(
            'name'  => 'SunnySmilez',
        );

        //return (new Response($data))->header('Content-Type', 'application/json')->cookie('name', 'SunnySmilez');
        //return response()->view('/test/response', $data)->header('Content-Type', 'application/json');
        //return response()->json(['name' => 'Abigail', 'state' => 'CA']);
        //return response()->download('/tmp/wifi-12-05-2017__09:49:54.log', 'test.txt');
        //return redirect('test/list');
        //return redirect()->action('TestController@lists');
        //return redirect()->route('use');
        //return redirect('/test/session')->with('status', 'ok');
        if (view()->exists('test.response')) {
            echo 'exists';
        }

        return view('/test/response', $data);
    }

    public function session(Request $request) {
        echo '<prere>';var_dump($request->session());exit;
    }

    public function log() {
        throw new \Exception('test', '112');
        \Log::debug(json_encode(array('hello', 'world')));
    }

}