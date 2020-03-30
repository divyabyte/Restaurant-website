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

                        <form action="/menu-update/{{ $users->id }}"   method="POST">
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
                            <label>Price</label>
                            <input type="text" name="price"  class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select name="category" class="form-control">
                                <option value="chinese">Chinese</option>
                                <option value="quick Bites">Quick Bites</option>
                                <option value="breads">Breads</option>
                                <option value="main Course">Main Course</option>
                                <option value="dessert">Dessert</option>
                                <option value="thali">Thali</option>
                                <option value="non-veg">Non-veg</option>
                                <option value="beverage">Beverage</option>
                                <option value="italian">Italian</option>
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