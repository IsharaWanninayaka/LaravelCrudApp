@extends('layouts.mainlayout')

@section('content')
    @if(@session('sucess'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="text-center card-header fs-2">{{ __('Student Management System') }}</div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th class=" bg-secondary" scope="col">ID</th>
                                <th class=" bg-secondary" scope="col">Name</th>
                                <th class=" bg-secondary" scope="col">Email</th>
                                <th class=" bg-secondary" scope="col">phone</th>
                                <th class="text-center bg-secondary" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($students as $student)
                                <tr>
                                    <th scope="row">{{ $student->id }}</th>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td class="space-x-4 ">
                                        <div class="w-10 m-auto d-flex justify-content-center align-items-center ">
                                           <a href={{ route('student.updateStudent',$student->id) }} class="btn btn-warning me-2">EDIT</a>
                                           <form method="POST" action={{ route('student.deleteStudent',$student->id) }}>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                                           </form>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center mt-2" >
        <button onclick="navigateStudentCreate()" type="button" class="btn btn-primary">ADD STUDENT </button>
    </div>

    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

    @endsection
