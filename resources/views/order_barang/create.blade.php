@extends('layouts.app')
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h1 {
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

form {
    display: inline;
}

button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
}

button:hover {
    background-color: #0056b3;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"], input[type="number"], input[type="date"] {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

</style>
@section('content')
<h1  style="text-align:center;">Create Order Barang</h1>
<form action="{{ route('order_barang.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Tanggal:</label>
        <input type="date" name="tanggal" required>
    </div>
    <div class="form-group">
        <label>Kode Supplier:</label>
        <input type="number" name="kode_supplier" required>
    </div>
    <div class="form-group">
        <label>PPN:</label>
        <input type="number" name="PPN" required>
    </div>
    <button type="submit">Create</button>
</form>
@endsection
