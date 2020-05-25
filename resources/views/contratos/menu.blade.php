@extends('layout')

@section('title', 'menu')

@section('content')
<div class="btn-group dropright">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropright
  </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
    <a class="dropdown-item" href="#">keny</a>
    <a class="dropdown-item" href="#">allan</a>
    <a class="dropdown-item" href="#">elizabet</a>
  </div>
</div>

<select class="form-control form-control-lg" name="OS">
   <option value="1">Windows Vista</option>
   <option value="2">Windows 7</option>
   <option value="3">Windows XP</option>
   <option value="10">Fedora</option>
   <option value="11">Debian</option>
   <option value="12">Suse</option>
</select>

Fecha nacimiento: <input type="date" name="cumpleanios" step="1" min="2013-01-01" max="2013-12-31" value="2013-01-01">

<div class="input-group date" data-provide="datepicker">
    <input type="text" class="form-control">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
@endsection