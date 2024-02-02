<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\Result;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i<2000; $i++) {
            $member = Member::factory()->create();

            for ($j=0; $j<rand(0, 20); $j++) {
                Result::create([
                    'member_id' => $member->id,
                    'milliseconds' => rand(100, 6000)
                ]);
            }
        }
    }
}
