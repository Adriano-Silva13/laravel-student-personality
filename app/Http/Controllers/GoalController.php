<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DailyGoal;
use App\Http\Requests\SetDailyGoalRequest;




class GoalController extends Controller
{
    public function setGoal (SetDailyGoalRequest $request)
    {
        $goal = DailyGoal::updateOrCreate(
            ['goal_date' => $request->date],
            ['hours' => $request->hours]
        );
        return redirect()->back()->with('sucess', 'meta diária salva com sucesso!');
    }
}
