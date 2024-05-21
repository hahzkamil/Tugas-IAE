<!DOCTYPE html>
<html>
<head>
    <title>Tim Premier League</title>
    
</head>
<body>
    <div class="contrainer">
    <button onclick="goBack()" class="btn btn-light">Kembali</button>
    <h1 class="d-flex justify-content-center align-items-center">Tim di Premier League</h1>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 35vh;">    

<div class="container">
    <br><br>
    <table  class="table table-bordered">
        <thead class="table-primary">
            <tr>
            <th scope="col">Klub</th>
            <th scope="col">Ikon Klub</th>
            <th scope="col">Tahun Berdiri</th>
            <th scope="col">Stadium</th>
            <th scope="col">Kota</th>
            <th scope="col">Lokasi</th>
            </tr>
        </thead>
        @foreach ($team as $tim)
        <tbody>
            <tr>
            <th scope="row">{{$tim['team_name']}}</th>
            <td><img src="{{ $tim['team_badge'] }}"></td>
            <td>{{ $tim['team_founded'] }}</td>
            <td>{{ $tim['venue']['venue_name'] }}</td>
            <td>{{ $tim['venue']['venue_city'] }}</td>
            <td>{{ $tim['venue']['venue_address'] }}</td>
        </tbody>
        @endforeach
    </table>
    <div class="d-flex justify-content-end">
    </div>
</div>
</div>

</body>
<script>
function goBack() {
  window.history.back();
}
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</html>
