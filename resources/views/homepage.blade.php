@extends('layouts.mainlayout')

@section('container')
<img src="{{ asset('storage/lighthouse.jpg') }}" alt="lighthouse.jpg">
<div class="heading" style="background-color:#211C6A">
    <h1 class="title">Plate</h1>
    <h5 class="subtitle">for your template</h5>
</div>


<img src="{{ asset('storage/seaunder.jpg') }}" alt="seaunder.jpg" class="lighthouse" style="z-index: -1; width:1600px">
<div class="bodies">
    <div class="box-container boxOne col-md-6">
        <h2 style="color: #FFF6E9; font-size:100px">What is Plate?</h2>
    </div>

    <div class="box-container boxTwo col-md-6">
        <h5 style="color: #BBE2EC; font-size:30px">A multipurpose template for your website functionality such as forms, login, etc.</h5>
    </div>
</div>



<a href="https://www.freepik.com/free-vector/sea-background-video-conferencing_9470396.htm#query=sea%20background&position=3&from_view=keyword&track=ais&uuid=7fdd85a2-28df-49e2-b3b3-f16cede379b5">Image by pikisuperstar</a> on Freepik
<style>
    img:first-child {
        position: relative;
        justify-content: center;
        height: 100vh;
        width: 100%;
        transform: translateY(0vh);
        z-index: -1;
    }

    .heading .title,
    .subtitle {
        color: white;
        padding: 0;
        translate: 20vw -80vh;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1;
    }

    .heading .title {
        font-size: 7rem;
        color: white;
        text-shadow: 0 0 5px black;
    }

    .heading .subtitle {
        transform: translateY(0vh);
    }

    .bodies img:first-child {
        transform: translateY(70vh);
    }

    .boxOne {
        justify-content: start;
        font-family: "Lobster", sans-serif;
        font-style: normal;
        translate: 10vw 0vh;
        z-index: 1;
    }

    .bodies .boxTwo {
        justify-content: end;
        font-family: sans-serif;
    }


    /* Ukuran tablet */
    @media screen and (max-width: 760px) {}

    /* Ukuran smartphone */
    @media screen and (max-width: 576px) {}
</style>
@endsection