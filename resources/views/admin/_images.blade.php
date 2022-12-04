<div class="row">
    @foreach($images as $image)
        <div class="col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <img src="{{ $image->image_url }}" class="img-fluid h-150px w-100 " style="object-fit: contain"/>
                    <form action="{{ route('admin.projects.images.destroy', $image->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-icon rounded-circle btn-sm mt-3">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    @endforeach
</div>
