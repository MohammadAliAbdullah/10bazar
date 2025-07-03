@foreach ($products as $key => $value)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $value->title }}</td>
        <td>{{ $value->slug }}</td>
        <td>
            <img src="{{ asset('public/assets/images/products/' . $value->thumb) }}" width="50" height="30">
        </td>
        <td>{{ $value->category->title ?? 'N/A' }}</td>
        <td>{{ $value->brand->title ?? 'N/A' }}</td>
        <td>
            @if ($value->status == 'Active')
                <span class="badge badge-danger">{{ $value->status }}</span>
            @else
                <span class="bg bg-danger">{{ $value->status }}</span>
            @endif
        </td>
        <td>{{ $value->created_at->diffForHumans() }}</td>
        <td>
            <div class="d-flex">
                <a href="{{ route('madmin.products.edit', $value->id) }}" class="btn btn-success btn-sm mr-1">
                    <i class="lni-pencil-alt"></i>
                </a>
                {!! Form::open(['method' => 'DELETE', 'route' => ['madmin.products.destroy', $value->id]]) !!}
                <button type="submit" value="Delete" class="btn btn-danger btn-sm"
                    onclick="return confirm('Do you want to Delete')">X</button>
                {!! Form::close() !!}
            </div>
        </td>
    </tr>
@endforeach
