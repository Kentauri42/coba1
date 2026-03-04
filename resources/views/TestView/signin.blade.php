@extends('layout') @section('content')
<div>
    <p style="font-family:'Montserrat';font-type:bold;font-weight:700;font-size:40px;padding-top:50px;padding-left:50px">Sign In</p>
    <form action="/signin" method="POST">
        @csrf
        <div class="input-group input-group-sm mb-3" style="padding-left: 50px; padding-right: 200px; padding-top: 10px">
        <div class="input-group-prepend" style="min-width: 100px">
            <span class="input-group-text" id="inputGroup-sizing-sm">Email : </span>
        </div>
        <input input type="email" name="eml" require class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>

        <div class="input-group input-group-sm mb-3" style="padding-left: 50px; padding-right: 200px">
        <div class="input-group-prepend" style="min-width: 100px">
            <span class="input-group-text" id="inputGroup-sizing-sm">Password : </span>
        </div>
        <input input type="password" name="pwd" require class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>

        <button style="margin-left: 50px; min-width:100px" class="btn p-2 btn-primary btn-md" type="submit" name="BtnLog" value=1>Submit</button>
        <button style="margin-left: 15px; min-width:100px" class="btn p-2 btn-outline-primary btn-md" type="submit" name="BtnLog" value=0>Cancel</button>
    </form>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
</div>
