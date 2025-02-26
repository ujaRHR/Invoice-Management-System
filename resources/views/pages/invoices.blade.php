@extends('layouts.main')

@section('title', 'Invoices | DySiQ Invoice')

@section('content')
@include('components.invoices.invoices-list')
@include('components.invoices.add-invoice')
@include('components.invoices.edit-invoice')
@include('components.invoices.delete-invoice')
@endsection