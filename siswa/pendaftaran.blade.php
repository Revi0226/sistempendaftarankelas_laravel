<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pendaftaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap');

        body {
            font-family: 'Quicksand', sans-serif;
            background: linear-gradient(135deg, #A8E6CF, #DCEDC1);
        }

        .card {
            background: #fff;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1);
        }

        .btn {
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .btn:hover {
            transform: scale(1.05);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .btn-back {
            background: #FF8C94;
        }

        .btn-confirm {
            background: #55C1FF;
        }
    </style>
</head>
<body class="flex justify-center items-center min-h-screen">

    <div class="card w-96 text-center">
        <h2 class="text-2xl font-bold text-blue-600 mb-3">✅ Konfirmasi Pendaftaran</h2>
        
        <div class="text-left text-gray-700">
            <p><strong>👤 Nama Lengkap:</strong> {{ session('nama_depan') }} {{ session('nama_belakang') }}</p>
            <p><strong>⚧ Jenis Kelamin:</strong> {{ session('jenis_kelamin') }}</p>
            <p><strong>🕌 Agama:</strong> {{ session('agama') }}</p>
            <p><strong>📍 Alamat:</strong> {{ session('alamat') }}</p>
        </div>

        <div class="flex justify-between mt-4">
            <a href="/pendaftaran" class="btn btn-back text-white p-2 rounded-lg">🔙 Kembali</a>
            <form action="/simpan-pendaftaran" method="POST">
                @csrf
                <button type="submit" class="btn btn-confirm text-white p-2 rounded-lg">✅ Konfirmasi</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    (session('success'))
        Swal.fire({
            title: "Berhasil!",
            text: "{{ session('success') }}",
            icon: "success",
            confirmButtonText: "Lanjut",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "/halaman-selanjutnya";
            }
        });
</script>


</body>

</html>