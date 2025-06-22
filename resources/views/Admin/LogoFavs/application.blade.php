@extends('Admin.layouts.master')

@section('content')
<div class="container">
    <h2>System Settings</h2>

    @if(session('success'))
        <div style="color: green">{{ session('success') }}</div>
    @endif

    <form action="{{ route('madmin.logofavs.store') }}" method="POST">
        @csrf

        <h4>General Info</h4>
        <input type="text" name="site_title" placeholder="Site Title" value="{{ old('site_title') }}"><br>
        <input type="text" name="store_name" placeholder="Store Name" value="{{ old('store_name') }}"><br>
        <textarea name="address" placeholder="Address">{{ old('address') }}</textarea><br>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
        <input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}"><br>

        <h4>Branding & Logos</h4>
        <input type="text" name="logo" placeholder="Logo Path" value="{{ old('logo') }}"><br>
        <input type="text" name="splash_logo" placeholder="Splash Logo Path" value="{{ old('splash_logo') }}" required><br>
        <input type="text" name="favicon" placeholder="Favicon Path" value="{{ old('favicon') }}"><br>

        <h4>VAT and Service Charges</h4>
        <input type="number" name="vat" placeholder="VAT (%)" value="{{ old('vat', 0) }}"><br>
        <label><input type="checkbox" name="show_vat_number" value="1" {{ old('show_vat_number') ? 'checked' : '' }}> Show VAT Number</label><br>
        <input type="text" name="vat_number" placeholder="VAT Number" value="{{ old('vat_number') }}"><br>
        <input type="number" name="service_charge" placeholder="Service Charge" value="{{ old('service_charge', 0) }}"><br>

        <label>Discount Type:
            <select name="discount_type">
                <option value="0" {{ old('discount_type') == 0 ? 'selected' : '' }}>Amount</option>
                <option value="1" {{ old('discount_type') == 1 ? 'selected' : '' }}>Percent</option>
            </select>
        </label><br>

        <label>Service Charge Type:
            <select name="service_charge_type">
                <option value="0" {{ old('service_charge_type') == 0 ? 'selected' : '' }}>Amount</option>
                <option value="1" {{ old('service_charge_type') == 1 ? 'selected' : '' }}>Percent</option>
            </select>
        </label><br>

        <input type="text" name="discount_rate" placeholder="Discount Rate" value="{{ old('discount_rate', '0.000') }}"><br>

        <h4>Location & Language</h4>
        <input type="text" name="country" placeholder="Country" value="{{ old('country') }}"><br>
        <textarea name="google_map_embed_link" placeholder="Google Map Embed Link">{{ old('google_map_embed_link') }}</textarea><br>
        <input type="text" name="latitude" placeholder="Latitude" value="{{ old('latitude') }}"><br>
        <input type="text" name="longitude" placeholder="Longitude" value="{{ old('longitude') }}"><br>
        <input type="number" name="currency_id" placeholder="Currency ID" value="{{ old('currency_id', 0) }}"><br>
        <input type="text" name="language" placeholder="Language" value="{{ old('language') }}"><br>
        <input type="text" name="timezone" placeholder="Timezone" value="{{ old('timezone', 'Asia/Dhaka') }}" required><br>

        <h4>Formatting</h4>
        <textarea name="date_format" placeholder="Date Format" required>{{ old('date_format', 'd-m-Y') }}</textarea><br>
        <input type="text" name="site_alignment" placeholder="Site Alignment (LTR or RTL)" value="{{ old('site_alignment') }}"><br>

        <h4>Footer and Texts</h4>
        <textarea name="powered_by_text" placeholder="Powered by Text">{{ old('powered_by_text') }}</textarea><br>
        <input type="text" name="footer_text" placeholder="Footer Text" value="{{ old('footer_text') }}"><br>

        <h4>Contact</h4>
        <input type="text" name="whatsapp_number" placeholder="WhatsApp Number" value="{{ old('whatsapp_number') }}"><br>

        <h4>Refund & Approvals</h4>
        <label><input type="checkbox" name="refund_restriction" value="1" {{ old('refund_restriction') ? 'checked' : '' }}> Restrict Refund</label><br>
        <label><input type="checkbox" name="refund_auto_approve" value="1" {{ old('refund_auto_approve', 1) ? 'checked' : '' }}> Auto-approve Refund</label><br>
        <input type="text" name="refund_deduction_percent" placeholder="Refund Deduction (%)" value="{{ old('refund_deduction_percent', '0.00') }}"><br>

        <h4>Inventory System</h4>
        <label>Inventory Type:
            <select name="inventory_type">
                <option value="1" {{ old('inventory_type') == 1 ? 'selected' : '' }}>Periodic</option>
                <option value="2" {{ old('inventory_type') == 2 ? 'selected' : '' }}>Perpetual</option>
            </select>
        </label><br><br>

        <button type="submit">Save Settings</button>
    </form>
</div>
@endsection
