@extends('layout') @section('content')
<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<div style="text-align:center;">
    <p style="font-family:'Montserrat';font-weight:900;font-size:40px;padding-top:200px;">Halo {{ $pengguna }}<br>{{ $date }}</p>
    <form action="/index" method="POST">
        @csrf
        <button class="btn p-2 btn-primary btn-lg" type="submit" name="btn_choice" value=1 style="margin-right:20px; min-width:100px">Sign In</button>
        <button class="btn p-2 btn-outline-primary btn-lg" type="submit" name="btn_choice" value=0 style="min-width:100px">Sign Up</button>
    </form>

    @if(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Login Failed',
                text: "{{ session('error') }}",
                confirmButtonColor: '#3085d6',
            });
        </script>
    @endif
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
</div>
