@extends('layouts.blank')
@section('content')

<div class="card">
    @if (session()->get('success'))
            <div class="alert alert-success remove-ms">
                {{ session()->get('success') }}
            </div>
        @endif
    <div class="card-header text-success font-weight-bold">
        Department List
    </div>
    <table class="table table-striped ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Detail</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <body>
            @foreach ($departments as $item )
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->detail }}</td>
                     <td>
                        {{-- <a href="{{ URL('admin/department/' . $item->id . '/show') }}" class="btn btn-success btn-sm"><i
                            class="fas  fa-eye"></i></a> --}}

                   <a href="{{ URL('admin/department/' . $item->id . '/edit') }}" class="btn btn-primary btn-sm"
                        title="Edit"><i class="fas fa-edit"></i></a>

                    <a href="{{ URL('admin/department-list/' . $item->id) }}" class="btn btn-danger btn-sm"
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
@endsection
