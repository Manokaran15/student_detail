@extends('master')
@section('title', 'Add Student Details')

@section('main_section')
<div class="create">
    <div class="create_content">
        <div class="container">
            <div class="row pt-2">
                <div class="col-lg-12 d-flex justify-content-between align-items-center mx-auto">
                    <h2>Create a New Student</h2>
                    <a href="/" class="btn btn-warning rounded">Goto Home</a>
                </div>
            </div>
            <hr class="my-2">
            <div class="row my-3">
            <div class="col-lg-6 mx-auto">
                <div class="card shadow">
                    <div class="card-header bg-info">
                        <h3 class="text-dark text-center fw-bold">Add New Student</h3>
                    </div>
                    <div class="card-body p-4">
                        <form method="post" action="/student-form" enctype="multipart/form-data">
                            @csrf
                            <div class="my-2 pb-2">
                                <label class="fw-bold" for="student_name">Student Name:</label>
                                <input type="text" name="student_name" id="student_name" class="form-control @error('student_name') is-invalid @enderror" placeholder="Student Name" value="{{ old('student_name') }}">
                                @error('student_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="my-2 pb-2">
                                <label class="fw-bold" for="roll_number">Roll Number:</label>
                                <input type="text" name="roll_number" id="roll_number" class="form-control @error('roll_number') is-invalid @enderror" placeholder="Roll Number" value="{{ old('roll_number') }}">
                                @error('roll_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="my-2 pb-2">
                                <label class="fw-bold" for="date_of_birth">Date of Birth:</label>
                                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror" placeholder="Date of Birth" value="{{ old('date_of_birth') }}">
                                @error('date_of_birth')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <h4 class="text-center">Subject Marks</h4>
                                <div class="col-6 my-2 pb-2">
                                    <label class="fw-bold" for="tamil_mark">Tamil Mark:</label>
                                    <input type="number" name="tamil_mark" id="tamil_mark" class="form-control @error('tamil_mark') is-invalid @enderror" placeholder="Tamil Mark" value="{{ old('tamil_mark') }}">
                                    @error('tamil_mark')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6 my-2 pb-2">
                                    <label class="fw-bold" for="english_mark">English Mark:</label>
                                    <input type="number" name="english_mark" id="english_mark" class="form-control @error('english_mark') is-invalid @enderror" placeholder="English Mark" value="{{ old('english_mark') }}">
                                    @error('english_mark')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6 my-2 pb-2">
                                    <label class="fw-bold" for="maths_mark">Maths Mark:</label>
                                    <input type="number" name="maths_mark" id="maths_mark" class="form-control @error('maths_mark') is-invalid @enderror" placeholder="Maths Mark" value="{{ old('maths_mark') }}">
                                    @error('maths_mark')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6 my-2 pb-2">
                                    <label class="fw-bold" for="science_mark">Science Mark:</label>
                                    <input type="number" name="science_mark" id="science_mark" class="form-control @error('science_mark') is-invalid @enderror" placeholder="Science Mark" value="{{ old('science_mark') }}">
                                    @error('science_mark')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6 my-2 pb-2">
                                    <label class="fw-bold" for="history_mark">History Mark:</label>
                                    <input type="number" name="history_mark" id="history_mark" class="form-control @error('history_mark') is-invalid @enderror" placeholder="History Mark" value="{{ old('history_mark') }}">
                                    @error('history_mark')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6 my-2 pb-2">
                                    <label class="fw-bold" for="geography_mark">Geography Mark:</label>
                                    <input type="number" name="geography_mark" id="geography_mark" class="form-control @error('geography_mark') is-invalid @enderror" placeholder="Geography Mark" value="{{ old('geography_mark') }}">
                                    @error('geography_mark')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="my-2 text-center">
                                <input type="submit" value="Add Student" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
