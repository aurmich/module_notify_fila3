@extends('adm_theme::layouts.app')
@section('content')
    <a class="btn btn-primary">+</a>
    <table class="table table-bordered">
    @foreach ($rows as $row)
        <tr>
<<<<<<< HEAD
            <td>{{ $row-> }}</td>
=======
            <td>{{ $row->id }}</td>
>>>>>>> 9165bf1 (.)

        </tr>
    @endforeach
    </table>
@endsection