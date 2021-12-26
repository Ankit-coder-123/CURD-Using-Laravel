<!DOCTYPE html>
<html Lang="en">
    <head>
        <meta charset ="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Comlete" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
        <title>CRUD Qury Builder</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
<form action="" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
     <input type="text" class="form-control" id="name" name="name" 
     value="{{$student->name}}">
</div>
<div class="mb-3">
        <label for="city" class="form-label">City</label>
     <input type="text" class="form-control" id="city" name="city" 
     value="{{$student->city}}">
</div>
<div class="mb-3">
        <label for="marks" class="form-label">Marks</label>
     <input type="number" class="form-control" id="marks" name="marks" 
     value="{{$student->marks}}">
</div>
<button type="submit" class="btn btn-primary">Update</button>
</from>
@if (session()->has('status'))
<div class="alert- alert-success">
    {{session('status')}}
</div>
@endif
</div>
</div>
</div>