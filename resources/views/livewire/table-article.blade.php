<div>
    <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12">
                <table class="table table-borderless table-transparent">
                    <thead class="table-info table-striped-columns rounded-pill">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Subtitle</th>
                            <th scope="col">Body</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                        <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$article->title}}</td>
                            <td>{{$article->subtitle}}</td>
                            <td>{{$article->body}}</td>
                            <td>
                                <a class="btn btn-success" href="{{route('article.show', compact('article'))}}">Read more</a>
                                <a class="btn btn-warning" href="{{route('article.edit', compact('article'))}}">Edit</a>
                                <button wire:click="destroy({{$article}})" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>
