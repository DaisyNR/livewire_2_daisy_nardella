<div>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-8 text-light mt-5">
                <form wire:submit ="store">
                    <div class="mb-3">
                        <label for="title" class="form-label">Add a title:</label>
                        <input wire:model.blur="title" type="text" class="form-control" id="title">
                        <div class="text-danger fw-bold">@error('title') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <label for="subtitle" class="form-label">Add a subtitle:</label>
                        <input wire:model.blur="subtitle" type="text" class="form-control" id="subtitle">
                        <div class="text-danger fw-bold">@error('subtitle') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <label for="body" class="form-label">Write your article:</label>
                        <textarea wire:model.blur="body" id="body" class="form-control" cols="30" rows="5"></textarea>
                        <div class="text-danger fw-bold">@error('body') {{ $message }} @enderror</div>
                    </div>
                    
                    <button type="submit" class="btn btn-light">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
