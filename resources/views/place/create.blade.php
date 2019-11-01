@extends('layouts.main')
@section('title', 'ห้องพัก')
@section('content')
<div class="row">
    <div class="col-md-12"> <br>
        <h3 align="center">add</h3> <br>
        <form  method="POST" action="{{ url('place')}}">
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" class="form-control" name="order" placeholder="order">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="detail" placeholder="detail">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="บันทึก">
            </div>
        </form>
    </div>
</div>
@endsection