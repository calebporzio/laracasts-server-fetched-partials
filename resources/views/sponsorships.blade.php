@extends('layout')

@section('content')
<h1 class="mb-2">Explore the GitHub Sponsors community</h1>

<h4 class="mb-4 text-muted">Find new open source contributors to support.</h4>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span class="text-muted">Sponsored developers and organizations</span>

        <button class="btn btn-outline-primary"><i class="fa fa-refresh"></i>&nbsp; Refresh</button>
    </div>

    <ul class="list-group list-group-flush">
        @foreach ($users as $user)
            <li class="list-group-item">
                <div class="row justify-content-between">
                    <div class="col-3 d-flex">
                        <img class="rounded-sm" src="{{ $user->avatar }}" width="48" height="48">
                        <a href="#" class="font-weight-bold ml-3"><h5>{{ $user->username }}</h5></a>
                    </div>

                    <div class="col-4">{{ $user->bio }}</div>

                    <div class="col-2">
                        <button class="btn btn-light btn-block"><i class="fa fa-heart text-danger"></i> Sponsor</button>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>

<script>
    //
</script>
@endsection
