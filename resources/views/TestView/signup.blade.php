@extends('layout') @section('content')
<div>
    <p style="font-family:'Montserrat';font-type:bold;font-weight:700;font-size:40px;padding-top:50px;padding-left:50px">Sign Up</p>
    <form action="/signup" method="POST">
        @csrf
        <div class="input-group input-group-sm mb-3" style="padding-left: 50px; padding-right: 200px; padding-top: 10px">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Nama Lengkap : </span>
        </div>
        <input input type="text" name="nl" require class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>

        <div class="input-group input-group-sm mb-3" style="padding-left: 50px; padding-right: 200px; padding-top: 10px">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Email : </span>
        </div>
        <input input type="email" name="eml" require class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>

        <div class="input-group input-group-sm mb-3" style="padding-left: 50px; padding-right: 200px; padding-top: 10px">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Password : </span>
        </div>
        <input input type="password" name="pwd" require class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>

        <button style="margin-left: 50px; min-width:100px" class="btn p-2 btn-primary btn-md" type="submit" name="BtnLog" value=1>Submit</button>
        <button style="margin-left: 15px; min-width:100px" class="btn p-2 btn-outline-primary btn-md" type="submit" name="BtnLog" value=0>Cancel</button>
    </form>
    <!-- Well begun is half done. - Aristotle -->
</div>
