@extends('layouts.master')

@section('title')
   Edit - Restaurants  
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">
                <h3> Restaurants </h3>
            </div>
                <div class="card-body">

                <div class="row">
                    <div class="col-md-6">

                        <form action="/res-update/{{ $users->id }}"   method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="username" value="{{ $users->name }}" class="form-control">
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
                            <label>Location</label>
                            <select name="location" class="form-control">
                                <option value="law-gate">Law-gate</option>
                                <option value="lpu">LPU</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success"> Update </button>
                        <a href="/restaurant" class="btn btn-danger"> Cancel </a>
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