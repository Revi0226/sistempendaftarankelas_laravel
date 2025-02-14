<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap');

        body {
            font-family: 'Quicksand', sans-serif;
            background: linear-gradient(135deg, #FFD3B5, #FFAAA5);
        }

        .card {
            background: #fff;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-submit {
            background: #FF6B6B;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .btn-submit:hover {
            transform: scale(1.05);
            box-shadow: 0px 4px 10px rgba(255, 107, 107, 0.4);
        }
    </style>
</head>
<body class="flex justify-center items-center min-h-screen">

    <div class="card w-96 text-center">
        <h2 class="text-2xl font-bold text-pink-600 mb-3">🎉 Pendaftaran Kelas 🎉</h2>
        
        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="/pendaftaran" method="POST" class="text-left">
            @csrf
            <label class="block text-gray-700 font-semibold">Nama Depan:</label>
            <input type="text" name="nama_depan" class="w-full p-2 border border-gray-300 rounded-lg mb-3" required>

            <label class="block text-gray-700 font-semibold">Nama Belakang:</label>
            <input type="text" name="nama_belakang" class="w-full p-2 border border-gray-300 rounded-lg mb-3" required>

            <label class="block text-gray-700 font-semibold">Jenis Kelamin:</label>
            <select name="jenis_kelamin" class="w-full p-2 border border-gray-300 rounded-lg mb-3" required>
                <option value="Laki-laki">👦 Laki-laki</option>
                <option value="Perempuan">👧 Perempuan</option>
            </select>

            <label class="block text-gray-700 font-semibold">Agama:</label>
            <select name="agama" class="w-full p-2 border border-gray-300 rounded-lg mb-3" required>
                <option value="Islam">🕌 Islam</option>
                <option value="Kristen">⛪ Kristen</option>
                <option value="Katolik">✝ Katolik</option>
                <option value="Hindu">🕉 Hindu</option>
                <option value="Buddha">☸ Buddha</option>
                <option value="Konghucu">☯ Konghucu</option>
            </select>

            <label class="block text-gray-700 font-semibold">Alamat:</label>
            <textarea name="alamat" class="w-full p-2 border border-gray-300 rounded-lg mb-3" required></textarea>

            <button type="submit" class="w-full btn-submit text-white p-2 rounded-lg">📌 Daftar Sekarang</button>
        </form>
    </div>

</body>
</html>