<!DOCTYPE html>
<html lang="en">
<head>
    <title>Election Results</title>
</head>
<body>
    <h2>Select Local Government</h2>
    <form action="{{ route('lga.results') }}" method="GET">
        <select name="lga_id">
            @foreach($lgas as $lga)
                <option value="{{ $lga->lga_id }}">{{ $lga->lga_name }}</option>
            @endforeach
        </select>
        <button type="submit">View Results</button>
    </form>

    <h3>Check Polling Unit Results</h3>
    <form action="{{ route('polling.results', ['id' => 1]) }}" method="GET">
        <input type="number" name="id" placeholder="Enter Polling Unit ID">
        <button type="submit">Check</button>
    </form>

    <h3>Add New Polling Unit Result</h3>
    <form action="{{ route('store.results') }}" method="POST">
        @csrf
        <input type="text" name="polling_unit_id" placeholder="Polling Unit ID">
        <input type="text" name="party" placeholder="Party Name">
        <input type="number" name="score" placeholder="Score">
        <button type="submit">Save</button>
    </form>
</body>
</html>
