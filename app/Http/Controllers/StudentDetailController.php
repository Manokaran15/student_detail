<?php

namespace App\Http\Controllers;

use App\Models\StudentDetail;
use App\Models\StudentMarkDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class StudentDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data = StudentDetail::with('children')->get()->toArray();
            $datas = StudentMarkDetail::with('parent')->get()->toArray();

            // dd($datas);
            $datas = StudentMarkDetail::with('student')->get()->toArray();
            // dd($datas, $data);
            $results = [];
            foreach ($datas as $data) {
                $tamil_mark = $data['tamil_mark'];
                $english_mark = $data['english_mark'];
                $maths_mark = $data['maths_mark'];
                $science_mark = $data['science_mark'];
                $history_mark = $data['history_mark'];
                $geography_mark = $data['geography_mark'];

                $total_mark = $tamil_mark + $english_mark + $maths_mark + $science_mark + $history_mark + $geography_mark;

                $average_mark = number_format($total_mark / 6, 2);

                $student_name = $data['student']['student_name'];
                $roll_number = $data['student']['roll_number'];
                $date_of_birth = $data['student']['date_of_birth'];

                $age = Carbon::parse($date_of_birth)->age;

                $results[] = ['total_mark' => $total_mark, 'average_mark' => $average_mark, 'student_name' => $student_name, 'roll_number' => $roll_number, 'age' => $age];

            }
            return view('student_table', compact('results'));
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message'=> $th,
            ], 500);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'student_name'      => "required|regex:/^[a-zA-Z]+$/u|max:255",
                'roll_number'       => 'required|regex:/^[a-zA-Z0-9]+$/u',
                'date_of_birth'     => "required|date|before_or_equal:today",
                'tamil_mark'        => "required|digits_between:1,3",
                'english_mark'      => 'required|digits_between:1,3',
                'maths_mark'        => "required|digits_between:1,3",
                'science_mark'      => "required|digits_between:1,3",
                'history_mark'      => 'required|digits_between:1,3',
                'geography_mark'    => "required|digits_between:1,3",
            ]);

            $name = $request->student_name;
            $roll_number = $request->roll_number;
            $date_of_birth = $request->date_of_birth;

            $create = StudentDetail::create([
                'student_name'      => $name,
                'roll_number'       => $roll_number,
                'date_of_birth'     => $date_of_birth,
            ]);

            $student_list = StudentDetail::orderBy('created_at', 'desc')->first();
            $student_id = $student_list->id;

            $tamil_mark = $request->tamil_mark;
            $english_mark = $request->english_mark;
            $maths_mark = $request->maths_mark;
            $science_mark = $request->science_mark;
            $history_mark = $request->history_mark;
            $geography_mark = $request->geography_mark;


            $create_marks = StudentMarkDetail::create([
                'student_id'        => $student_id,
                'tamil_mark'        => $tamil_mark,
                'english_mark'      => $english_mark,
                'maths_mark'        => $maths_mark,
                'science_mark'      => $science_mark,
                'history_mark'      => $history_mark,
                'geography_mark'    => $geography_mark,
            ]);

            return redirect('/student-table');
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message'=> $th,
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentDetail  $studentDetail
     * @return \Illuminate\Http\Response
     */
    public function show(StudentDetail $studentDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentDetail  $studentDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentDetail $studentDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentDetail  $studentDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentDetail $studentDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentDetail  $studentDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentDetail $studentDetail)
    {
        //
    }
}
