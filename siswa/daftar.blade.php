<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa Pendaftar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col items-center bg-gray-100 p-5">

    <h1 class="text-2xl font-bold text-blue-600 mb-5">📋 Daftar Siswa yang Telah Mendaftar</h1>

    <table class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl">
        <thead class="bg-blue-500 text-white">
            <tr>
                <th class="p-3">Nama Lengkap</th>
                <th class="p-3">Jenis Kelamin</th>
                <th class="p-3">Agama</th>
                <th class="p-3">Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswa as $data)
            <tr class="border-b">
                <td class="p-3">{{ $data->nama_depan }} {{ $data->nama_belakang }}</td>
                <td class="p-3">{{ $data->jenis_kelamin }}</td>
                <td class="p-3">{{ $data->agama }}</td>
                <td class="p-3">{{ $data->alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/" class="mt-5 inline-block bg-blue-500 text-white py-2 px-4 rounded-lg">🏠 Kembali ke Beranda</a>

</body>
</html>
