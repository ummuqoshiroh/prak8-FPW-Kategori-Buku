<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <style> table, th, td { border: 1px solid black; border-collapse: collapse; padding: 8px; } </style>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NPM</th>
                <th>Program Studi</th>
                <th>Fakultas</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $mhs)
            <tr>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->npm }}</td>
                <td>{{ $mhs->prodi }}</td>
                <td>{{ $mhs->fakultas }}</td>
                <td>{{ $mhs->semester }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>