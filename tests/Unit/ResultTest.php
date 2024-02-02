<?php

namespace Tests\Unit;

use App\Models\Result;
use App\Services\ResultService;
use Tests\TestCase;

class ResultTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_top_results(): void
    {
        $resultService = new ResultService();

        // Get top ten results
        $topTenResults = $resultService->getTopTenResults();

        // Fastest result
        $best = $topTenResults->first();

        // Checking if there is a result that is faster
        $this->assertFalse(
            Result::where('milliseconds', '<', $best->milliseconds)
                ->exists()
        );
    }
}
