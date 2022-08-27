@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Categories</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert"> 
  {{session('success')}}
</div>
@endif
<div class="table-responsive col-lg-6">
    <a class="btn btn-primary" href="/dashboard/category/create">Create new categoru</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Category Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$category->name}}</td>
              <td>
                  <a class="badge bg-info" href="/dashboard/categories/{{$category->slug}}">
                      <span data-feather="eye"></span>
                  </a>
                  <a class="badge bg-warning" href="/dashboard/categories/{{$category->slug}}/edit">
                      <span data-feather="edit"></span>
                  </a>

                  <form action="/dashboard/categories/{{$category->slug}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure you want to delete this')"><span data-feather="x-circle"></span></button>
                  </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection