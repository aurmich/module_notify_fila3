@extends('adm_theme::layouts.app')
@section('content')
    <a class="btn btn-primary">+</a>
    <table class="table table-bordered">
    @foreach ($rows as $row)
        <tr>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            <td>{{ $row->id }}</td>
=======
            <td>{{ $row-> }}</td>
>>>>>>> 4f42322 (Merge remote-tracking branch 'origin/dev' into dev)
=======
=======
>>>>>>> a2dd458 (fix: auto resolve conflict)
            <td>{{ $row-> }}</td>
=======
<<<<<<< HEAD
            <td>{{ $row-> }}</td>
=======
            <td>{{ $row->id }}</td>
>>>>>>> 9165bf1 (.)
>>>>>>> 5a1e6f8 (fix: auto resolve conflict)
<<<<<<< HEAD
>>>>>>> 06e3ad9 (fix: auto resolve conflict)
=======
=======
            <td>{{ $row->id }}</td>
>>>>>>> ba48b8c (.)
>>>>>>> a2dd458 (fix: auto resolve conflict)

        </tr>
    @endforeach
    </table>
@endsection