<!DOCTYPE html>
<html>
<head>
    <title>Laporan Kandidat</title>
    <style>
        body {
            font-family: 'Helvetica', Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
        }
        .container {
            padding: 40px;
            margin: 0 auto;
            width: 90%;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 40px;
        }
        .header img {
            width: 80px;
            margin-bottom: 10px;
        }
        .header h2 {
            margin: 5px 0;
            font-size: 20px;
            color: #1a202c;
            font-weight: normal;
        }
        .header h1 {
            margin: 0;
            font-size: 26px;
            color: #2d3748;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: bold;
        }
        .line {
            border-bottom: 2px solid #333;
            margin-top: 10px;
            margin-bottom: 30px;
            width: 100px;
            margin-left: auto;
            margin-right: auto;
        }
        .title {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            color: #2d3748;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            margin-top: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            border-radius: 5px;
            overflow: hidden;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center; /* Center-align text in table cells */
        }
        th {
            background-color: #4a5568;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
        }
        tbody tr:nth-child(even) {
            background-color: #e2e8f0;
        }
        tbody tr:hover {
            background-color: #cbd5e0;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #718096;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ public_path('assets/logo.png') }}" alt="Logo" width="80px">
            <h1>Sistem Pendukung Keputusan Rekrutmen Bidan</h1>
            <h2>Metode Profile Matching</h2>
            <div class="line"></div>
        </div>

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

        <div class="footer">
            <p>© 2024 Sistem Pendukung Keputusan Rekrutmen Bidan. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
