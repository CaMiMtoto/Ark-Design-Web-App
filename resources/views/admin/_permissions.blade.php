<form action="{{ route('admin.users.permissions.store',$user->id) }}" method="post" id="permissionsForm">
    @csrf
    <div class="modal-body">
        <div class="row">
            @foreach($permissions as $permission)
                <div class="col-md-6">
                    <div class="form-check my-2 ">
                        <input class="form-check-input" type="checkbox"
                               {{ in_array($permission->id,$givenPermissions)?'checked':'' }} value="{{ $permission->id }}"
                               name="permissions[]"
                               id="permission_{{$permission->id}}">
                        <label class="form-check-label" for="permission_{{$permission->id}}">
                            {{$permission->name}}
                        </label>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
        <button type="button" class="btn btn-light btn-sm" data-bs-dismiss="modal">Close</button>
    </div>
</form>
