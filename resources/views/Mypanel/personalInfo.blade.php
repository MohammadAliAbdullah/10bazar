 <div class="p-4">
     <!-- Personal Information -->
     {!! Form::model($profile, [
         'method' => 'PATCH',
         'route' => ['mypanel.profile.update', $profile->id],
         'class' => 'form-horizontal',
     ]) !!}
     <div class="mb-4">
         <h5 class="mb-4">Personal Information</h5>
         <div class="row g-3">
             <div class="col-md-6">
                 <label class="form-label">Name</label>
                 <input type="text" class="form-control" name="name" value="{{ $profile->name }}" readonly>
             </div>
             <div class="col-md-6">
                 <label class="form-label">Email</label>
                 <input type="email" name="email" class="form-control" value="{{ $profile->email }}">
             </div>
             <div class="col-md-6">
                 <label class="form-label">Phone</label>
                 <input type="tel" name="phone" class="form-control" value="{{ $profile->phone }}" readonly>
             </div>
             <div class="col-12">
                 <label class="form-label">Address</label>
                 <textarea class="form-control" name="address" rows="4">{{ $profile->address }}</textarea>
             </div>
         </div>
     </div>

     <!-- Settings Cards -->
     <div class="row g-4 mb-4">
         <div class="col-md-6">
             <div class="settings-card card">
                 <div class="card-body">
                     <div class="d-flex justify-content-between align-items-center">
                         <div>
                             <h6 class="mb-1">Two-Factor Authentication
                             </h6>
                             <p class="text-muted mb-0 small">Add an
                                 extra layer
                                 of
                                 security</p>
                         </div>
                         <div class="form-check form-switch">
                             <input class="form-check-input" type="checkbox" checked>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-md-6">
             <div class="settings-card card">
                 <div class="card-body">
                     <div class="d-flex justify-content-between align-items-center">
                         <div>
                             <h6 class="mb-1">Email Notifications</h6>
                             <p class="text-muted mb-0 small">Receive
                                 activity
                                 updates
                             </p>
                         </div>
                         <div class="form-check form-switch">
                             <input class="form-check-input" type="checkbox" checked>
                         </div>
                     </div>
                 </div>
             </div>
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
