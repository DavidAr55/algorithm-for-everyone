@extends('layouts.layout')

@section('title', 'Algorithm for Everyone')

@section('content')
<!-- Nodos logotipo -->
<img src="{{ asset('images/nodes-logo.png') }}" id="nodes">

<canvas class="matrix-efect" id="matrix-lienzo"></canvas>

<main class="container-header">
    <div class="landing-header">
        <h1 class="ff-Varino fs-45 color-2 mg-bottom-25">ALGORITHM FOR EVERYONE</h1>
        <p class="ff-Cascadia color-2">At Algorithm for Everyone, our goal is to centralize a database of the most commonly used algorithms in programming, offering detailed explanations and graphical examples to facilitate understanding. From sorting and searching algorithms to graph and tree algorithms, we cover a wide range of topics to meet the needs of programmers at all levels.</p>
        <p class="ff-Cascadia color-2">Whether you are learning to code or looking to enhance your skills, our blog is designed to be your reliable resource. Join us on the exciting journey of discovering the fascinating world of algorithms and making programming accessible to everyone.</p>
        <p class="ff-Cascadia color-2">Explore, learn, and enjoy at Algorithm for Everyone!</p>
    </div>
    <button onclick="scrollToContent('#more')" class="fleettnet-button">See more <i class="fa-solid fa-chevron-down"></i></button>
</main>

<section class="section-content pd-top-75" style="height: 2000px;" id="more">
    <h1 class="color-2">See more</h1>
</section>
@endsection