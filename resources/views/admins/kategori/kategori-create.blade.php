@extends('admins.layouts.main', ['page' => 'dashboard-kategori-create'])

@section('title', 'Tambah Kategori')

@section('content')
<main class="w-full flex flex-col justify-center items-center py-12 gap-12 container mx-auto">
    <h1 class="text-5xl font-bold">Tambah Kategori Lomba</h1>
    <form action="/admin/kategori-create" method="post" class="flex flex-col gap-1 w-[480px] justify-start">
        @csrf
        <label for="name" class="label-input">Nama Kategori Lomba</label>
        <input type="text" name="name" id="name" class="input-field" placeholder="Masukkan nama kategori lomba" required>
        <div class="w-full h-12 flex gap-4 mt-5">
            <a href="/admin/kategori" class="btn-secondary-normal w-full">Kembali</a>
            <button type="submit" class="btn-primary-normal w-full">Tambah Kategori</button>
        </div>
    </form>
</main>
@endsection
