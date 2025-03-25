<!DOCTYPE html>
<html lang="en">
<head>
    <title>LGA Results</title>
</head>
<body>
    <h2>Total Votes for Selected LGA</h2>
    <table>
        <tr>
            <th>Party</th>
            <th>Total Score</th>
        </tr>
        @foreach($results as $result)
        <tr>
            <td>{{ $result->party_abbreviation }}</td>
            <td>{{ $result->total_score }}</td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('home') }}">Go Back</a>
</body>
</html>
