@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Edit Admin'),
        'parent' => __('Home'),
        'child' => __('Admin'),
        'button' => __('Back to List'),
        'button_icon' => 'lni lni-arrow-left', 
        'route' => route('madmin.adminuser.index'),
    ])

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        @include('Admin.include.message')
                        {!! Form::model($value, [
                            'method' => 'PATCH',
                            'route' => ['madmin.adminuser.update', $value->id],
                            'class' => 'p-3'
                        ]) !!}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('name', 'Name') !!}
                                    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('email', 'Email') !!}
                                    {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('passwords', 'Password') !!}
                                    <div class="input-group">
                                        <input type="password" name="passwords" id="passwords" class="form-control" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text" onclick="togglePassword()">
                                                <i class="lni lni-eye" id="togglePasswordIcon" style="cursor: pointer;"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6" @if($value->id == 1) hidden @endif>
                                <div class="form-group">
                                    {!! Form::label('status', 'Status') !!}
                                    {!! Form::select('status', ['Active' => 'Active', 'Deactive' => 'Deactive'], null, [
                                        'class' => 'form-control',
                                        'required'
                                    ]) !!}
                                </div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-info">Update</button>
                            <button onclick="window.history.back()" type="button" class="btn btn-secondary">Cancel</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
<script>
    function togglePassword() {
        const passwordInput = document.getElementById('passwords');
        const icon = document.getElementById('togglePasswordIcon');
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        icon.classList.toggle('fa-eye');
        icon.classList.toggle('fa-eye-slash');
    }
</script>
@endsection
