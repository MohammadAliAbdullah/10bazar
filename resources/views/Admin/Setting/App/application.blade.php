@extends('Admin.layoutApp.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0 text-dark">System Settings</h1>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card shadow-sm">

                @include('Admin.include.message')

                {!! Form::open([
                    'method' => 'POST',
                    'route' => 'madmin.appsetting.store',
                    'files' => true,
                    'class' => 'form-horizontal'
                ]) !!}

                {!! Form::hidden('id', $setting->id ?? null) !!}

                <ul class="nav nav-tabs mb-3" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#general">General Info</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#branding">Branding & Logos</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#invoice">Invoice</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#location">Location & Language</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#social">Social Media</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#other">Other</a></li>
                </ul>

                <div class="tab-content p-3 border bg-white">
                    {{-- General Info --}}
                    <div class="tab-pane fade show active" id="general">
                        @foreach ([
                            'site_title' => 'Site Title',
                            'store_name' => 'Store Name',
                            'email' => 'Email',
                            'phone' => 'Phone',
                        ] as $name => $label)
                            <div class="form-group row">
                                {!! Form::label($name, $label, ['class' => 'col-sm-3 col-form-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::text($name, old($name, $setting->$name ?? ''), ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        @endforeach

                        <div class="form-group row">
                            {!! Form::label('address', 'Address', ['class' => 'col-sm-3 col-form-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::textarea('address', old('address', $setting->address ?? ''), ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    {{-- Branding --}}
                    <div class="tab-pane fade" id="branding">
                        <div class="form-group row">
                            {!! Form::label('logo', 'Logo', ['class' => 'col-sm-3 col-form-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::file('logo', ['class' => 'form-control', 'onchange' => "previewImage(this, 'logoPreview')"]) !!}
                                <img id="logoPreview"
                                     src="{{ isset($setting->logo) ? asset($setting->logo) : '' }}"
                                     class="img-thumbnail mt-2"
                                     style="{{ isset($setting->logo) ? '' : 'display:none;' }} max-height:100px;" />
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('favicon', 'Favicon', ['class' => 'col-sm-3 col-form-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::file('favicon', ['class' => 'form-control', 'onchange' => "previewImage(this, 'faviconPreview')"]) !!}
                                <img id="faviconPreview"
                                     src="{{ isset($setting->favicon) ? asset($setting->favicon) : '' }}"
                                     class="img-thumbnail mt-2"
                                     style="{{ isset($setting->favicon) ? '' : 'display:none;' }} max-height:50px;" />
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('splash_logo', 'Splash Logo Path', ['class' => 'col-sm-3 col-form-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::text('splash_logo', old('splash_logo', $setting->splash_logo ?? ''), ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    {{-- Invoice --}}
                    <div class="tab-pane fade" id="invoice">
                        <div class="form-group row">
                            {!! Form::label('invoice_company', 'Company Name (Invoice)', ['class' => 'col-sm-3 col-form-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::text('invoice_company', old('invoice_company', $setting->invoice_company ?? ''), ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('invoice_email', 'Invoice Email', ['class' => 'col-sm-3 col-form-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::email('invoice_email', old('invoice_email', $setting->invoice_email ?? ''), ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('invoice_logo', 'Invoice Logo', ['class' => 'col-sm-3 col-form-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::file('invoice_logo', ['class' => 'form-control', 'onchange' => "previewImage(this, 'invoiceLogoPreview')"]) !!}
                                <img id="invoiceLogoPreview"
                                     src="{{ isset($setting->invoice_logo) ? asset($setting->invoice_logo) : '' }}"
                                     class="img-thumbnail mt-2"
                                     style="{{ isset($setting->invoice_logo) ? '' : 'display:none;' }} max-height:100px;" />
                            </div>
                        </div>
                    </div>

                    {{-- Location --}}
                    <div class="tab-pane fade" id="location">
                        @foreach ([
                            'country' => 'Country',
                            'latitude' => 'Latitude',
                            'longitude' => 'Longitude',
                            // 'currency_id' => 'Currency ID',
                            'language' => 'Language',
                            'timezone' => 'Timezone',
                        ] as $name => $label)
                            <div class="form-group row">
                                {!! Form::label($name, $label, ['class' => 'col-sm-3 col-form-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::text($name, old($name, $setting->$name ?? ''), ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        @endforeach
                        <div class="form-group row">
                            {!! Form::label('currency_id', 'Currency', ['class' => 'col-sm-3 col-form-label']) !!}
                            <div class="col-sm-9">
                                <select name="currency_id" id="currency_id" class="form-control">
                                    @foreach ($currencies as $currency)
                                        <option value="{{ $currency->id }}" {{ (old('currency_id', $setting->currency_id ?? '') == $currency->id) ? 'selected' : '' }}>
                                            {{ $currency->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('google_map_embed_link', 'Google Map Embed Link', ['class' => 'col-sm-3 col-form-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::textarea('google_map_embed_link', old('google_map_embed_link', $setting->google_map_embed_link ?? ''), ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                     {{-- social media --}}
                    <div class="tab-pane fade" id="social">
                        @foreach ([
                            'facebook' => 'Facebook',
                            'twitter' => 'Twitter',
                            'linkedin' => 'LinkedIn',
                            'instagram' => 'Instagram',
                            'youtube' => 'YouTube',
                            'tiktok' => 'TikTok',
                        ] as $name => $label)
                            <div class="form-group row">
                                {!! Form::label($name, $label, ['class' => 'col-sm-3 col-form-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::text($name, old($name, $setting->$name ?? ''), ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- Other --}}
                    <div class="tab-pane fade" id="other">
                        @foreach ([
                            'date_format' => 'Date Format',
                            'site_alignment' => 'Site Alignment',
                            'footer_text' => 'Footer Text',
                        ] as $name => $label)
                            <div class="form-group row">
                                {!! Form::label($name, $label, ['class' => 'col-sm-3 col-form-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::text($name, old($name, $setting->$name ?? ''), ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        @endforeach

                        <div class="form-group row">
                            {!! Form::label('powered_by_text', 'Powered By Text', ['class' => 'col-sm-3 col-form-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::textarea('powered_by_text', old('powered_by_text', $setting->powered_by_text ?? ''), ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Save Settings</button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </section>
@endsection

@section('script')
<script>
    function previewImage(input, previewId) {
        const file = input.files[0];
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.getElementById(previewId);
            preview.src = e.target.result;
            preview.style.display = 'block';
        };
        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection
