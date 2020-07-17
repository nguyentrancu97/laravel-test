<?php

namespace Modules\Blog\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Blog\Entities\Blog;
use Illuminate\Support\Facades\DB;
class BlogTableSeedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $dataInsert = [
            'code' => 'ABC',
            'name' => 'Cham soc suc khoe',
        ];
        $blogList = Blog::get();
        if($blogList->count() == 0){
            DB::table('blog')->insert($dataInsert);
        }
    }
}
