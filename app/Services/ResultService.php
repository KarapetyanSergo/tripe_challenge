<?php

namespace App\Services;

use App\Models\Member;
use App\Models\Result;
use Illuminate\Database\Eloquent\Collection;

class ResultService
{
    public function createResult(float $milliseconds, ?string $email = null): Result
    {
        $memberId = null;

        if ($email) {
            $member = Member::where('email', $email)
                ->first();

            if (!$member) {
                $member = Member::create([
                    'email' => $email
                ]);
            }

            $memberId = $member->id;
        }

        return Result::create([
            'milliseconds' => $milliseconds,
            'member_id' => $memberId
        ]);
    }

    public function getTopTenResults(?string $email = null): Collection
    {
        return Result::select(
                'members.email',
                'results.milliseconds'
            )
            ->join('members', 'members.id', 'results.member_id')
            ->when($email, function ($q) use ($email) {
                $q->where('members.email', $email);
            })
            ->orderBy('milliseconds')
            ->take(10)
            ->get();
    }
}
