<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('albums')->insert([
          'name' => 'name1',
          'year' => '2021',
          'times_sold' => '69',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ]);
      DB::table('albums')->insert([
          'name' => 'name2',
          'year' => '2021',
          'times_sold' => '69',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ]);
      DB::table('albums')->insert([
          'name' => 'name3',
          'year' => '2021',
          'times_sold' => '69',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ]);
      DB::table('albums')->insert([
          'name' => 'name4',
          'year' => '2021',
          'times_sold' => '69',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ]);
      DB::table('albums')->insert([
          'name' => 'name5',
          'year' => '2021',
          'times_sold' => '69',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ]);
    }
}
