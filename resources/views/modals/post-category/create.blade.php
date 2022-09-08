<!-- Modal -->
<div class="modal fade" id="createPostCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Create Post Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.post.category.store') }}" method="POST">
                    @csrf
                    <div class="form-section">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ old('name') }}">
                    </div>
                    <div class="form-section my-2 ">
                        <button type="submit" class="btn btn-info btn-sm float-end">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
