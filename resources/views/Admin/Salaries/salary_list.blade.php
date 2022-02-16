@extends('layouts.blank')
@section('content')


<div class="col-md-8">
    <div class="card">
        @if (session()->get('success'))
            <div class="alert alert-success remove-ms">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="card-header text-success font-weight-bold">
            Salaries List
        </div>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <body>
                @foreach ($salaries as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->salary }}</td>
                        <td>
                            <a href="{{ URL('admin/salary/' . $item->id . '/edit') }}" class="btn btn-primary btn-sm"
                                title="Edit"><i class="fas fa-edit"></i></a>

                            <a href="{{ URL('admin/salary-list/' . $item->id) }}" class="btn btn-danger btn-sm"
                                title="Delete"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
            </body>
        </table>
    </div>
    <script>
        setTimeout(function() {
            $('.remove-ms').addClass('d-none');
        }, 1000);
    </script>
</div>
@endsection
