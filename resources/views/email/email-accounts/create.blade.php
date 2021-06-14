@extends('layouts.app')
@section('content')
<form>
    <div class="row mb-3">
        <label for="is_imap" class="col-sm-4">Is IMAP</label>
        <div class="col-sm-8">
            <div class="form-check">
                {{-- <label class="form-check-label" for="flexCheckDefault">
                Default checkbox
                </label> --}}
                <input class="form-check-input" type="checkbox" value="" id="is_imap">
            </div>
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-4 col-form-label">Incoming Mail</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" >
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-4 col-form-label">Incoming Port</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" >
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-4 col-form-label">Incoming SSL</label>
        <div class="col-sm-8">
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <label for="is_ssl" class="col-sm-4">Incoming SPA</label>
        <div class="col-sm-8">
            <div class="form-check">
                {{-- <label class="form-check-label" for="flexCheckDefault">
                Default checkbox
                </label> --}}
                <input class="form-check-input" type="checkbox" value="" id="is_imap">
            </div>
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-4 col-form-label">Outgoing Mail</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" >
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-4 col-form-label">Outgoing Port</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" >
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-4 col-form-label">Encription Method</label>
        <div class="col-sm-8">
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <label for="is_ssl" class="col-sm-4">Incoming SPA</label>
        <div class="col-sm-8">
            <div class="form-check">
                {{-- <label class="form-check-label" for="flexCheckDefault">
                Default checkbox
                </label> --}}
                <input class="form-check-input" type="checkbox" value="" id="is_imap">
            </div>
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-4 col-form-label">Color</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" >
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-4 col-form-label">Directory</label>
        <div class="col-sm-8">
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>
</form>
@endsection
