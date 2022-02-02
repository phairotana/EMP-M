<meta charset="utf-8">
<meta name="description" content="">
<meta name="Saquib" content="Blade">
<title>EMP MANAGE</title>
<!-- load bootstrap from a cdn -->

@foreach (config('pr-base.base.styles') as $path)
    <link rel="stylesheet" type="text/css" href="{{ asset($path) }}">
@endforeach
