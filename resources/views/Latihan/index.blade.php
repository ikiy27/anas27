@extends('layouts.master')

@section('content')
    
        @php 
        $nama="Ikiy"; 
        $bapa = "Kelana";
        @endphp

        <div class="text-center">
                <h3>
                        Hai Anas
                </h3>

                <h1>
                        Nama saya {{ $nama }} bin <?php echo $bapa; ?>
                </h1>

                <p>
                        Selamat Datang
                </p>

                <p> 
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Corl0207_%2828225976491%29.jpg" class="img-fluid" alt="ikan comel" width=" 50%" height="50%">
                </p>

        </div>
@endsection