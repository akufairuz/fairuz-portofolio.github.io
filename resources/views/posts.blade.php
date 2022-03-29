@extends('layouts.main')

@section('isinya')

<div class="col-md-3">
    <span class="Label">Kategori</span>
    <ul>
        <li class="list-item">
            Lorem ipsum dolor sit amet
        </li>
        <li class="list-item">
            Consectetur adipiscing elit
        </li>
        <li class="list-item">
            Integer molestie lorem at massa
        </li>
        <li class="list-item">
            Facilisis in pretium nisl aliquet
        </li>
        <li class="list-item">
            Nulla volutpat aliquam velit
        </li>
        <li class="list-item">
            Faucibus porta lacus fringilla vel
        </li>
        <li class="list-item">
            Aenean sit amet erat nunc
        </li>
        <li class="list-item">
            Eget porttitor lorem
        </li>
    </ul>
</div>
<div class="col-md-9">
    <div class="row">
        @foreach($postingannya as $posting)
        <div class="col-md-4">
            <img alt="Bootstrap Image Preview" src="img/{{ $posting['gambar'] }}" class="rounded" width="100%">
        </div>
        <div class="col-md-8">
            <a href="/posts/{{ $posting->slug }}">
                <h2>
                    {{ $posting->judul }}
                </h2>
            </a>
            <small>Di Publish : <b> {{ $posting->published_at }} </b></small>
            <p>
                {{ $posting->excerpt }}

            </p>
            <p>
                <a class="btn" href="/posts/{{ $posting->slug }}">View details »</a>
            </p>
        </div>
        @endforeach
    </div>
    <nav>
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#">Previous</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">4</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">5</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
@endsection