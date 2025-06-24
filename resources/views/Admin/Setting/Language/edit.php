@extends('Admin.layouts.master')

@section('content')
<div class="container mt-4">
    <h3>Edit Language: {{ $locale }}</h3>
    <form method="POST" action="{{ route('madmin.lang.update', $locale) }}">
        @csrf
        <table class="table table-striped" id="translation-table">
            <thead>
                <tr>
                    <th style="width: 40%">Key</th>
                    <th>Translation</th>
                    <th style="width: 10%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($translations as $key => $value)
                <tr>
                    <td><input type="text" name="keys[]" value="{{ $key }}" class="form-control" readonly></td>
                    <td><input type="text" name="translations[{{ $key }}]" value="{{ $value }}" class="form-control"></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <button type="button" class="btn btn-sm btn-secondary mb-3" onclick="addNewRow()">+ Add New</button>

        <div>
            <button class="btn btn-success">Save Changes</button>
            <a href="{{ route('madmin.lang.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
</div>

<script>
    function addNewRow() {
        const table = document.getElementById('translation-table').getElementsByTagName('tbody')[0];
        const row = table.insertRow();
        const keyCell = row.insertCell(0);
        const valCell = row.insertCell(1);
        const delCell = row.insertCell(2);

        const keyInput = document.createElement('input');
        keyInput.type = 'text';
        keyInput.name = 'keys_new[]';
        keyInput.className = 'form-control';

        const valInput = document.createElement('input');
        valInput.type = 'text';
        valInput.name = 'values_new[]';
        valInput.className = 'form-control';

        const delBtn = document.createElement('button');
        delBtn.className = 'btn btn-danger btn-sm';
        delBtn.type = 'button';
        delBtn.innerText = 'X';
        delBtn.onclick = function () {
            row.remove();
        };

        keyCell.appendChild(keyInput);
        valCell.appendChild(valInput);
        delCell.appendChild(delBtn);
    }
</script>
@endsection
