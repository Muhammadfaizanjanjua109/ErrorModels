<?php

namespace Database\Seeders;

use App\Http\Controllers\review as ReviewController;
use App\Models\blogs;
use App\Models\review as Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=blogs::first();
        $admin->Review->comment='loream ipsuma Comment';
        $admin->Review->blog_id=1;
        $admin->save();
    }
}
