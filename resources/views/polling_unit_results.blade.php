<!DOCTYPE html>
<html lang="en">
<head>
    <title>Polling Unit Results</title>
</head>
<body>
    <h2>Polling Unit Results</h2>
    <table>
        <tr>
            <th>Party</th>
            <th>Score</th>
        </tr>
        @foreach($results as $result)
        <tr>
            <td>{{ $result->party_abbreviation }}</td>
            <td>{{ $result->party_score }}</td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('home') }}">Go Back</a>
</body>
</html>
