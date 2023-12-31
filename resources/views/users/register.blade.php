@extends('users.layouts.main', ['page' => 'register'])

@section('title', 'Register')

@section('content')
<main class="w-full h-screen flex items-center justify-between container mx-auto">
    <div class="flex flex-col relative -top-6">
        <a href="/" class="w-fit btn-secondary-small flex gap-1 items-center">
            <x-phosphor-caret-left class="w-5 h-5"/>
            <p>Kembali</p>
        </a>
        <img src="{{ asset('assets/images/register.png') }}" alt="" class="hidden md:block h-[480px] w-auto">
    </div>
    <div class="p-12 flex flex-col gap-6 bg-white rounded-2xl shadow">
        <h1 class="text-5xl font-bold">Buat Akun</h1>
        <form action="/register" method="post" class="w-full md:w-[360px] flex flex-col gap-1">
            @csrf
            <label for="name" class="label-input">Nama</label>
            <input type="text" name="name" id="name" placeholder="Masukkan nama anda" class="input-field">
            <label for="email" class="label-input mt-3">Email</label>
            <input type="email" name="email" id="email" placeholder="Masukkan email anda" class="input-field">
            <label for="no_tlp" class="label-input mt-3">Nomor Whatsapp</label>
            <input type="tel" name="no_tlp" id="no_tlp" placeholder="Masukkan nomor whatsapp anda" class="input-field">
            <label for="password" class="label-input mt-3">Password</label>
            <input type="password" name="password" id="password" placeholder="Masukkan password anda" class="input-field">
            <button type="submit" class="btn-primary-normal mt-5">Buat Akun</button>
        </form>
        <p class="text-neutral-500 text-center">
            Sudah punya akun? <a href="/login" class="font-semibold text-primary-300 hover:text-primary-400">Masuk</a> di sini.
        </p>
    </div>
</main>
@endsection
