@extends('layout') @section('content')
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand">a</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
        </div>
        <form class="form-inline my-2 my-lg-0" action="/logout" method="POST">
            @csrf
            <button class="btn p-2 btn-primary btn-lg" type="submit" style="font-size:15px;margin-top:8px;margin-right:15px;max-height:50px;min-width:75px;position:absolute;right:0">Logout</button>
        </form>
    </div>
  </div>
</nav>
