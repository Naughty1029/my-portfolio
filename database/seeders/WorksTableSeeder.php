<?php

namespace Database\Seeders;

use App\Models\Work;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
            [
                'title' => 'ASA石神井グループ HP',
                'comment' => 'WordPressで新聞配達屋さんのホームページをつくりました',
                'url' => 'https://asa-shakujii.co.jp/',
                'github' => null,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'title' => 'ReactとTypeScript',
                'comment' => 'テキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'url' => 'https://sample.com/',
                'github' => 'https://sample.com/',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'title' => 'WordPressとPHP',
                'comment' => 'テキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'url' => 'https://sample.com/',
                'github' => 'https://sample.com/',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'title' => 'PHPとLaravel',
                'comment' => 'テキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'url' => 'https://sample.com/',
                'github' => 'https://sample.com/',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'title' => 'TypeScript',
                'comment' => 'テキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'url' => 'https://sample.com/',
                'github' => 'https://sample.com/',
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
        $work = Work::find(1);
        $work->categories()->sync([1,2,3]);

        $work = Work::find(2);
        $work->categories()->sync([4,5]);

        $work = Work::find(3);
        $work->categories()->sync([2,3]);

        $work = Work::find(4);
        $work->categories()->sync([2,6]);

        $work = Work::find(5);
        $work->categories()->sync([5]);
    }
}
