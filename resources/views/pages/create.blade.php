@extends('layouts.mainlayout')
@section('content')
<div class="pb-2 m-auto mt-4 mb-2 border-2 w-25 border-secondry rounded-4">
    <h2 class="mt-4 mb-2 text-center fs-4 text-secondary fw-bold ">Create Student</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="p-2 " action={{ route('student.storeStudent') }} method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-secondary">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-secondary">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label text-secondary">Telephone</label>
            <input name="phone" type="text" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="d-flex justify-content-center">
            <input type="submit" class="btn btn-primary w-50">
        </div>

    </form>
</div>
@endsection
