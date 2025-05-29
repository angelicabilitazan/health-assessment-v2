@extends('layout.master')
@section('contents')
 <div class="container mt-5">
     <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="mb-0">Records</h4>
      <a class="btn btn-success" href=" {{ route('assess')}}">Add New Record</a>
    </div>
    <table class="table table-bordered table-striped">
      <thead class="table-light">
        <tr>
          <th>#</th>
          <th>Name</th>
          <th class="text-end">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ( $mgapasyente as $pasyente)
          <tr>
            <td>{{ $pasyente->id }}</td>
            <td>{{ $pasyente->first_name }} {{ $pasyente->last_name }}</td>
            <td class="text-end">
              <a class="btn btn-sm btn-primary">Edit</a>
              <a class="btn btn-sm btn-danger">Delete</a>
              <a class="btn btn-sm btn-secondary">Download</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection