@extends('master')
@section('title', 'Student Details')

@section('main_section')
<div class="container">
    <div class="text-center">
        <h3>Student Details</h3>
    </div>
    <div class="text-end">
        <button class="btn btn-warning"><a href="/student-form" class="text-decoration-none text-dark">Add Student</a></button>
    </div>
    <div class="table table-responsive fixTableHead first_content">
        <table id="example" class="table table-borderless">
            <thead>
                <tr>
                    <th class="ps-3 pe-0 align-middle">Student Name</th>
                    <th class="ps-0 pe-0 align-middle">Roll Number</th>
                    <th class="ps-0 pe-0 align-middle">Age</th>
                    <th class="ps-0 pe-0 align-middle">Total Marks</th>
                    <th class="ps-0 pe-0 align-middle">Average Marks</th>
                </tr>
            </thead>
            <tbody>
                @isset($results)
                @foreach ($results as $result)
                    <tr>
                        <td class="ps-3 pe-0 align-middle">{{ $result['student_name'] }}</td>
                        <td class="ps-3 pe-0 align-middle">{{ $result['roll_number'] }}</td>
                        <td class="ps-3 pe-0 align-middle">{{ $result['age'] }}</td>
                        <td class="ps-3 pe-0 align-middle">{{ $result['total_mark'] }}</td>
                        <td class="ps-3 pe-0 align-middle">{{ $result['average_mark'] }}</td>
                    </tr>
                @endforeach
                @endisset
            </tbody>
        </table>
    </div>
</div>
@endsection
