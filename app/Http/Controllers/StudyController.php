<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreStudyRecordRequest;
use App\Models\StudyRecord;
use App\Models\Subject;
use App\Models\DailyGoal;


class StudyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () { 
        $subjects = Subject::all();

        return view('form', compact('subjects'));
    }

    public function save (StoreStudyRecordRequest $request) 
    {
        $record = new StudyRecord();
        $record->subject_id = $request->subject;
        $record->study_date = $request->date;
        $record->hours = $request->hours;
        $record->save();

        return redirect()->back()->with('sucess', 'registro salvo com sucesso!');
    }

    public function dailyReport($date)
    {
        $goal = DailyGoal::where('goal_date', $date)->first();
        $totalHours = StudyRecord::where('study_date', $date)->sum('hours');
        dd($goal);

        $percentage = $goal ? ($totalHours / $goal->hours) * 100 : 0;
    }
}
