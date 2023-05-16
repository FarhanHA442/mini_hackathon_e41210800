<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Politik</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center"> Data Politik </h1>
                <a href="{{ route('politik.create') }}"><div class="btn btn-primary">Tambah Data</div></a>
                <table class="table table-bordered table-hover">
                    <thead>
                        <th>ID Caleg</th>
                        <th>Nama Caleg</th>
                        <th>Nama Partai</th>
                        <th>Jumlah Suara</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($politik as $item)
                            <tr>
                                <td>{{ $item->id_caleg }}</td>
                                <td>{{ $item->nama_caleg }}</td>
                                <td>{{ $item->nama_partai }}</td>
                                <td>{{ $item->jumlah_suara }}</td>
                                <td>
                                    <a href="{{ route('politik.edit', $item->id_caleg) }}"><button class="btn btn-primary">Ubah</button></a>
                                    <form action="{{ route('politik.destroy', $item->id_caleg) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    
</body>
</html>
