<?php

namespace App\Http\Controllers;

class MysqlController extends Controller {

    public function getAdd() {
        /*
        $select_sql = "select * from mp_article WHERE project=? limit ?";
        $article = \DB::select($select_sql, [3, 1]);
        echo '<pre>';
        echo $article['0']->id;
        var_dump($article);
        exit;
        */

        /*
        $insert_data = array(
            '测试内容-标题',
            '测试内容',
            '3',
        );

        $insert_sql = 'insert into mp_article(title, ext, project) values(?, ?, ?)';
        $result = \DB::insert($insert_sql, $insert_data);
        var_dump($result);exit;
        */

        /*$data = array(
            'name'  => 'test',
        );

        $result = \DB::table('user')->insert($data);*/

        /*$data = array(
            'name'  => 'test1',
        );

        $id = \DB::table('user')->insertGetId($data);*/

        /*
        $update_sql = 'update mp_article set title=? WHERE id =?';
        $update_data = array(
            '修改标题',
            175314,
        );

        $result = \DB::update($update_sql, $update_data);
        var_dump($result);exit;
        */

        //$resutl = \DB::table('user')->where('id', 5)->update(['name'=>'sun']);


        /*
        $delete_sql = 'delete from mp_article WHERE id =?';
        $delete_data = array(
            175314,
        );
        $result = \DB::delete($delete_sql, $delete_data);
        echo '<pre>';var_dump($result);exit;
        */

        //$result = \DB::table('user')->where('id', 5)->delete();

        /*
        try {
            \DB::beginTransaction();
            $mp_article_insert_data = array(
                '测试内容-标题',
                '测试内容',
                '3',
            );

            $mp_article_insert_sql = 'insert into mp_article(title, ext, project) values(?, ?, ?)';
            $result = \DB::insert($mp_article_insert_sql, $mp_article_insert_data);
            if (!$result) {
                throw new \Exception('error', 300022);
            }

            $mp_article_game_insert_data = array(
                '测试'
            );
            $mp_article_game_insert_sql = 'insert into mp_article_game (platform) values(?)';
            $result = \DB::insert($mp_article_game_insert_sql, $mp_article_game_insert_data);
            if (!$result) {
                throw new \Exception('error2', 300022);
            }

            \DB::commit();
        } catch(\Exception $e) {
            \DB::rollBack();
            throw new \Exception($e->getMessage(), $e->getCode());
        }
        */
    }

    public function getSelect() {
        //$data = \DB::table('user')->get();

        //$data = \DB::table('mp_article_game')->where('id', '188')->first();

        /*
        \DB::table('mp_article_game')->chunk(10, function($game) {
            echo '<pre>';var_dump($game);exit;
        });
        */

        /*
        $ids = \DB::table('mp_article_game')->lists('id');
        var_dump($ids);exit;
        */

        //$data = \DB::table('mp_article_game')->count();
        //$data = \DB::table('mp_article_game')->max("id");

        //$data = \DB::table('user')->select('id')->where('id', '=', '1');

        //$data = \DB::table('user')->select('id as uid')->get();

        //$data = \DB::table('mp_article_game')->distinct()->select('id')->where('id', 1001)->get();

        /*
        $query = \DB::table('mp_article_game')->select('id');
        $data = $query->addSelect('reply_times')->get();
        */

        //$data = \DB::table('mp_article_game')->select(\DB::raw('count(*) as count'))->where('id', '<', '1000')->get();


        //echo '<pre>';var_dump($data);exit;
    }
}