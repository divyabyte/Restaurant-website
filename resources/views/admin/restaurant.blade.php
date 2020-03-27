@extends('layouts.master')

@section('title')
    Restaurant
@endsection

@section('content')

  <div class="row">

    <div class="col-md-12">
      <div class="card">
        <div class="card-header">

          <h5>
            <span> Restaurants </span>
            <a href="/res-add" class="btn btn-info float-right">ADD</a>
          </h5>

          @if(session('status'))
          <div class="alert alert-success" role="alert">
          {{ session('status') }}
          </div>
          @endif


        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Id</th>
                <th>Name</th>
                <th>Category</th>
                <th>User_Id</th>
                <th>Location</th>
                <th>Edit</th>
                <th>Delete</th>
              </thead>
              <tbody>
                @foreach($users as $row)
                  <tr>
                  <td>{{ $row->id}}</td>
                  <td>{{ $row->name}}</td>
                  <td>{{ $row->category}}</td>
                  <td>{{ $row->user_id}}</td>
                  <td>{{ $row->location}}</td>
                  <td>
                    <a href="/res-edit/{{ $row->id }}" class="btn btn-success">EDIT</a>
                  </td>
                  <td>
                    <form action="/res-delete/{{ $row->id }}" method="post">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                  </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
      
  </div>



@endsection

@section('scripts')

@endsection