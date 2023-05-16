
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Politik</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center"> Edit Data Calon </h1>
                <form action="{{ isset($politik) ? route('politik.update', $politik->id_caleg) : route('politik.store') }}" method="post">
                    @csrf
                    {!! isset($politik) ? method_field('PUT') : '' !!}

                    <input type="hidden" name="id_caleg" value="{{ isset($politik) ? $politik->id_caleg : '' }}">

                    <div class="form-group">
                        <label for="nama" class="control-label">Nama Caleg</label>
                        <input type="text" name="nama_caleg" id="nama_caleg" class="form-control" placeholder="Nama Caleg" value="{{ isset($politik) ? $politik->nama_caleg : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="nama_partai" class="control-label">Nama Partai</label>
                        <input type="text" name="nama_partai" id="nama_partai" class="form-control" placeholder="Nama Partai" value="{{ isset($politik) ? $politik->nama_partai : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_suara" class="control-label">Jumlah Suara</label>
                        <input type="text" name="jumlah_suara" id="jumlah_suara" class="form-control" placeholder="Jumlah Suara" value="{{ isset($politik) ? $politik->jumlah_suara : '' }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>