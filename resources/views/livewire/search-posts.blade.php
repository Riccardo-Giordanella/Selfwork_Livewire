<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 d-flex justify-content-center">
            <input wire:model.live="search" class="mb-3" type="text" placeholder="Cerca tra i post...">
            @if (session()->has('alert'))
            <div class="alert alert-warning">
                {{session('alert')}}
            </div>
            @endif
        </div>
        @foreach ($posts as $post)
        <div class="col-12 col-md-4 d-flex flex-wrap">
            <div class="card mx-auto my-2" style="width: 18rem">
                <div class="card-body">
                    <h5 class="card-title">
                        {{$post->title}}
                    </h5>
                    <p>{{$post->body}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
