<!DOCTYPE html>
<html>
<head>
    <title>Klasemen Premier League</title>
    
</head>
<body>
    <div class="contrainer">
    <button onclick="goBack()" class="btn btn-light">Kembali</button>
    <h1 class="d-flex justify-content-center align-items-center">Klasemen Premier League</h1>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 35vh;">    

<div class="container">
    <br><br>
    <table  class="table table-bordered">
        <thead class="table-primary">
            <tr>
            <th scope="col">Posisi</th>
            <th scope="col">Klub</th>
            <th scope="col">Ikon Klub</th>
            <th scope="col">Menang</th>
            <th scope="col">Kalah</th>
            <th scope="col">Poin</th>
            <th scope="col">Banyak Permainan</th>
            </tr>
        </thead>
        @foreach ($standings as $team)
        <tbody>
            <tr>
            <th scope="row">{{$team['overall_league_position']}}</th>
            <td>{{ $team['team_name'] }}</td>
            <td><img src="{{ $team['team_badge'] }}"></td>
            <td>{{ $team['overall_league_W'] }}</td>
            <td>{{ $team['overall_league_L'] }}</td>
            <td>{{ $team['overall_league_PTS'] }}</td>
            <td>{{ $team['overall_league_payed'] }}</td>
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
