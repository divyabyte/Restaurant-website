@extends('layouts.master')

@section('title')
   Edit - Menu  
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">
                <h3> Menu </h3>
            </div>
                <div class="card-body">

                <div class="row">
                    <div class="col-md-6">

                        <form action="/menu-new-add/"   method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="username"  class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category" class="form-control">
                                <option value="veg">Veg</option>
                                <option value="non-veg">Non-Veg</option>
                                <option value="both">Both</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Restaurant</label>
                            <select name="res_id" class="form-control">
                                @foreach($users as $row)
                                    <option value="{{$row->id}}">{{ $row->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success"> ADD </button>
                        <a href="/menu" class="btn btn-danger"> Cancel </a>
                        </form>

                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection