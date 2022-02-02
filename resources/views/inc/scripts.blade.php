
@foreach (config('pr-base.base.scripts') as $path)
    <script type="text/javascript" src="{{ asset($path) }}"></script>
@endforeach
{{-- @include('inc.alerts') --}}

<!-- page script -->
<script type="text/javascript">
    // To make Pace works on Ajax calls
    $(document).ajaxStart(function() { Pace.restart(); });

    // Ajax calls should always have the CSRF token attached to them, otherwise they won't work
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
