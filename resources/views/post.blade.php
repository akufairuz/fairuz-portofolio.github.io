@extends('layouts.main')

@section('isinya')
<div class="col-md-12">
    <h3>Detail Postingan</h3>
    <div class="row">
        <div class="col-md-4">
            <img alt="Bootstrap Image Preview" src="/img/{{ $post->gambar }}" class="rounded" width="100%">
        </div>
        <div class="col-md-8">
            <h2>
                {{ $post->judul }}
            </h2>
            <small>Di Publish : <b> {{ $post->published_at }} </b></small>
            <p>
                <!-- cara menampilkan data dan tidak menjalankan tag HTML -->
                {!! $post->body !!}
            </p>

            <p>

                <a class="btn" href="/blog">Kembali »</a>
            </p>
        </div>

    </div>
</div>
@endsection