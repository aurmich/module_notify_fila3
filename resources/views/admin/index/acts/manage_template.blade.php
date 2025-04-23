@extends('adm_theme::layouts.app')
@section('content')
    <a class="btn btn-primary">+</a>
    <table class="table table-bordered">
    @foreach ($rows as $row)
        <tr>
<<<<<<< HEAD
            <td>{{ $row->id }}</td>
=======
            <td>{{ $row-> }}</td>
>>>>>>> 4f42322 (Merge remote-tracking branch 'origin/dev' into dev)

        </tr>
    @endforeach
    </table>
@endsection