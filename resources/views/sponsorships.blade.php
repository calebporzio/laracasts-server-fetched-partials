@extends('layout')

@section('content')
<h1 class="mb-2">Explore the GitHub Sponsors community</h1>

<h4 class="mb-4 text-muted">Find new open source contributors to support.</h4>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span class="text-muted">Sponsored developers and organizations</span>

        <button class="btn btn-outline-primary" onclick="fetchDevelopers()"><i class="fa fa-refresh"></i>&nbsp; Refresh</button>
    </div>

    <ul class="list-group list-group-flush" id="js-developers-partial-target">
        <!--  -->
    </ul>
</div>

<script>
    function fetchDevelopers() {
        fetch('/partials/developers')
            .then(response => response.text())
            .then(html => {
                document.querySelector('#js-developers-partial-target').innerHTML = html
            })
    }

    fetchDevelopers()
</script>
@endsection
