@extends('adm_theme::layouts.app')
@section('content')
    <a class="btn btn-primary">+</a>
    <table class="table table-bordered">
    @foreach ($rows as $row)
        <tr>
<<<<<<< HEAD
<<<<<<< HEAD
            <td>{{ $row->id }}</td>
=======
            <td>{{ $row-> }}</td>
>>>>>>> 4f42322 (Merge remote-tracking branch 'origin/dev' into dev)
=======
            <td>{{ $row-> }}</td>
=======
<<<<<<< HEAD
            <td>{{ $row-> }}</td>
=======
            <td>{{ $row->id }}</td>
>>>>>>> 9165bf1 (.)
>>>>>>> 5a1e6f8 (fix: auto resolve conflict)
>>>>>>> 06e3ad9 (fix: auto resolve conflict)

        </tr>
    @endforeach
    </table>
@endsection