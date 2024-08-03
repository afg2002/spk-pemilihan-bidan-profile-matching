<!DOCTYPE html>
<html>
<head>
    <title>Laporan Kandidat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            padding: 20px;
        }
        .title {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            color: #2d3748;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center; /* Center-align text in table cells */
        }
        th {
            background-color: #f3f4f6;
            color: #1a202c;
            font-weight: bold;
        }
        tbody tr:nth-child(even) {
            background-color: #f9fafb;
        }
        tbody tr:hover {
            background-color: #f0f4f8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Laporan Pelamar</h1>
        <table>
            <thead>
                <tr>
                    <th>Nama Kandidat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($candidates as $candidate)
                    <tr>
                        <td>{{ $candidate->nama_kandidat }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
