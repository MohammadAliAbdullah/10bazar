<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Brand Data</title>
</head>
<body>
    <h1>Category Brand Data</h1>

    @php
        $categoryBrandData = Cache::get('category_brand_data', []);
    @endphp

    @if(is_array($categoryBrandData) && count($categoryBrandData) > 0)
        @foreach($categoryBrandData as $category)
            <div>
                <h2>{{ $category['category_name'] ?? 'N/A' }}</h2>
                <p>Slug: {{ $category['slug'] ?? 'N/A' }}</p>

                @if(is_array($category['brand']) && count($category['brand']) > 0)
                    <h3>Brands:</h3>
                    <ul>
                        @foreach($category['brand'] as $brand)
                            <li>
                                {{ $brand['brand_name'] ?? 'N/A' }} (ID: {{ $brand['brand_id'] ?? 'N/A' }})
                                <p>Slug: {{ $brand['slug'] ?? 'N/A' }}</p>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>No brands available for this category.</p>
                @endif
            </div>
        @endforeach
    @else
        <p>No category brand data available.</p>
    @endif
</body>
</html>
