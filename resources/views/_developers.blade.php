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
