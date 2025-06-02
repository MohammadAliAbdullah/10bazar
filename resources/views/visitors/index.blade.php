{{-- @extends('layouts.app') --}}

@section('content')
<div class="container">
    <h1>Visitor Logs</h1>

    {{-- Chart Section --}}
    <canvas id="visitorsChart" height="100"></canvas>

    <hr>

    {{-- Visitor Table --}}
    <table class="table mt-4">
        <thead>
            <tr>
                <th>IP Address</th>
                <th>Country</th>
                <th>City</th>
                <th>Browser</th>
                <th>Platform</th>
                <th>Device</th>
                <th>Referer</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($visitors as $visitor)
                <tr>
                    <td>{{ $visitor->ip }}</td>
                    <td>{{ $visitor->country }}</td>
                    <td>{{ $visitor->city }}</td>
                    <td>{{ $visitor->browser }}</td>
                    <td>{{ $visitor->platform }}</td>
                    <td>{{ $visitor->device }}</td>
                    <td>{{ $visitor->referer }}</td>
                    <td>{{ $visitor->created_at->format('Y-m-d') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $visitors->links() }}
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

{{-- Chart Script --}}
<script>
    const ctx = document.getElementById('visitorsChart').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($chartLabels) !!},
            datasets: [{
                label: 'Visitor Count',
                data: {!! json_encode($chartData) !!},
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: { stepSize: 1 }
                }
            }
        }
    });
</script>
{{-- @endsection --}}
