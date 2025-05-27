<div class="p-4">
    <h5 class="mb-4">Personal Information</h5>
    {!! Form::open(['method' => 'POST', 'route' => 'mypanel.password.store', 'class' => 'form-horizontal']) !!}
    <div class="row g-3">
        <div class="col-md-12">
            <label class="form-label">Old Password</label>
            <input type="password" class="form-control" name="old_password" value="">
        </div>
        <div class="col-md-12">
            <label class="form-label">New Password</label>
            <input type="password" name="new_password" class="form-control" value="">
        </div>
        <div class="col-md-12">
            <label class="form-label">Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control" value="">
        </div>
    </div>

    <div class="d-flex justify-content-start mt-3">
        <div class="save">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
        <div class="save">
            <button onclick="window.history.back()" class="btn btn-default float-right">Cancel</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>
