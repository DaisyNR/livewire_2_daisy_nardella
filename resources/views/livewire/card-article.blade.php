<div>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <h6 class="card-subtitle">{{$article->subtitle}}</h6>
                        <p class="card-text">{{$article->body}}</p>
                        <a href="{{route('article.index')}}" class="btn btn-primary">Go back</a>
                        <a class="btn btn-warning" href="{{route('article.edit', compact('article'))}}">Edit</a>
                        <button wire:click="destroy({{$article}})" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
