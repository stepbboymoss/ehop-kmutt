@extends('layouts.main')
@section('title', 'ห้องพัก')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12"> <br>
            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
            @endif
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>order</th>
                    </tr>
                    @foreach($places as $place)
                    <tr>
                        <td>{{$place['id']}}</td>
                        <td>{{$place['order']}}</td>
                        <td><a href="#" class="btn btn-primary">edit</a></td>
                        <td>
                            <form action="{{action('PlaceController@destroy', $place['id'])}}" method="post" class="delete_form">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit">DELETE</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
    $(document).ready(function(){
        $('.delete_form').on('submit',function(){
            if(confirm("คุณต้องการลบข้อมูลหรือไม่ ?")){
                return true;
            }
            else {
                return false;
            }
        });
    });
    </script>
@endsectionfo