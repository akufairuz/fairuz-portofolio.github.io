@extends('layouts.main')

@section('isinya')
<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <img alt="Bootstrap Image Preview" src="/img/{{ $post['gambar'] }}" class="rounded" width="100%">
        </div>
        <div class="col-md-8">
            <h2>
                {{ $post['judul_postingan'] }}
            </h2>
            <small>Author : <b> {{ $post['author'] }} </b></small>
            <p>
                {{ $post['body'] }}
            </p>
            <p>
                <a class="btn" href="/blog">Kembali »</a>
            </p>
        </div>

    </div>
</div>
@endsection