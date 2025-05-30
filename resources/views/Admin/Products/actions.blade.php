<nobr>
    <a href="{{ route('madmin.products.edit', $row->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
    <form action="{{ route('madmin.products.destroy', $row->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
            <i class="fa fa-trash"></i>
        </button>
    </form>
</nobr>
