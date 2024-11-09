@extends('layouts.mainlayout')
@section('content')
<div class="pb-2 m-auto mt-4 mb-2 border-2 w-25 border-secondry rounded-4">
    <h2 class="mt-4 mb-2 text-center fs-4 text-secondary fw-bold ">Update Student</h2>
    <form class="p-2 "  method="POST" action={{ route('student.update',$student->id) }}>
        @csrf
        @method('PUT')

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-secondary">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ old('name', $student->name) }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-secondary">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"  value="{{ old('email', $student->email) }}">
              </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label text-secondary">phone</label>
              <input type="text" name="phone" class="form-control" id="exampleInputPassword1" value="{{ old('phone', $student->phone) }}">
            </div>

            <div class="d-flex justify-content-center">
                <input type="submit" class="btn btn-primary w-50" value="Update">
            </div>

  </form>
</div>
@endsection
