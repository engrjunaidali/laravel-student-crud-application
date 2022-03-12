@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Students</div>

                <div class="card-body">
                    <form method="POST" action="/students-add">
                        @csrf
                        {{-- Student Name --}}
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Student Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Name"
                                    required autocomplete="name" autofocus>
                            </div>
                        </div>
                        {{-- Father Name --}}
                        <div class="row mb-3">
                            <label for="father_name" class="col-md-4 col-form-label text-md-end">Father Name</label>

                            <div class="col-md-6">
                                <input id="father_name" type="text" class="form-control" name="father_name"
                                    placeholder="Father Name" required autofocus>
                            </div>
                        </div>
                        {{-- Caste --}}
                        <div class="row mb-3">
                            <label for="caste" class="col-md-4 col-form-label text-md-end">Caste</label>

                            <div class="col-md-6">
                                <input id="caste" type="text" class="form-control" name="caste" placeholder="Caste"
                                    required autofocus>
                            </div>
                        </div>
                        {{-- DOB --}}
                        <div class="row mb-3">
                            <label for="dob" class="col-md-4 col-form-label text-md-end">DOB</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" placeholder="Date Of Birth"
                                    required autofocus>
                            </div>
                        </div>
                        {{-- Address --}}
                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address"
                                    placeholder="Address" required autofocus>
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Student
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Std.ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Father Name</th>
                    <th scope="col">Caste</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Address</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <th scope="row">{{ $student->student_id }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->father_name }}</td>
                        <td>{{ $student->caste }}</td>
                        <td>{{ $student->dob }}</td>
                        <td>{{ $student->address }}</td>
                      </tr>
                    @endforeach
                  
                  
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
