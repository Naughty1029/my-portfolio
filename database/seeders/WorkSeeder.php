<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkSeeder extends Seeder
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
                'title' => 'Sample01',
                'comment' => 'テキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'url' => 'https://sample.com/',
                'github' => 'https://sample.com/',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'title' => 'Sample02',
                'comment' => 'テキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'url' => 'https://sample.com/',
                'github' => 'https://sample.com/',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'title' => 'Sample03',
                'comment' => 'テキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'url' => 'https://sample.com/',
                'github' => 'https://sample.com/',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'title' => 'Sample04',
                'comment' => 'テキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'url' => 'https://sample.com/',
                'github' => 'https://sample.com/',
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
    }
}
