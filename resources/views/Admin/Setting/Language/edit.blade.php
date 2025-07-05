@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => __('Edit Language') . ': ' . $locale,
        'parent' => __('Setting'),
        'child' => __('Edit Languages'),
        'button' => __('Back'),
        'button_icon' => 'fa fa-arrow-left',
        'route' => route('madmin.lang.index'),
    ])

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('Admin.include.message')

                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('madmin.lang.update', $locale) }}">
                            @csrf

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="translation-table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width: 40%">Key</th>
                                            <th>Translation</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($translations as $key => $value)
                                            <tr>
                                                <td>
                                                    <input type="text" name="keys[]" value="{{ $key }}"
                                                        class="form-control" readonly>
                                                </td>
                                                <td>
                                                    <input type="text" name="translations[{{ $key }}]"
                                                        value="{{ $value }}" class="form-control">
                                                </td>
                                                <td>
                                                    @if ($loop->last)
                                                        <button type="button" class="btn btn-secondary btn-sm"
                                                            onclick="addNewRow()">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-success">Save Changes</button>
                                <a href="{{ route('madmin.lang.index') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
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
            delBtn.onclick = function() {
                row.remove();
            };

            keyCell.appendChild(keyInput);
            valCell.appendChild(valInput);
            delCell.appendChild(delBtn);
        }
    </script>
@endsection
