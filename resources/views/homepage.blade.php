@extends('layouts.mainlayout')

@section('container')
<header>
    <img src="{{ asset('storage/lighthouse.jpg') }}" alt="lighthouse.jpg">
    <div class="d-grid gap-1">
    <h1 class="p-1 title">Plate</h1>
    <h5 class="p-1 subtitle">for your template</h5>
    </div>
</header>

<section>
    <img src="{{ asset('storage/seaunder.jpg') }}" alt="seaunder.jpg">
    <div class="box-container">
        <div class="boxOne col-md-6">
            <h2 style="color: #FFF6E9; font-size:100px">What is Plate?</h2>
        </div>
    </div>

    <div class="boxTwo col-md-6">
        <h5 style="color: #BBE2EC; font-size:30px">A multipurpose template for your website functionality such as forms, login, etc.</h5>
    </div>
</section>

<a href="https://www.freepik.com/free-vector/sea-background-video-conferencing_9470396.htm#query=sea%20background&position=3&from_view=keyword&track=ais&uuid=7fdd85a2-28df-49e2-b3b3-f16cede379b5">Image by pikisuperstar</a> on Freepik
<style>
    .title {
        font-size: 7rem;
        color: white;
        text-shadow: 0 0 5px black;
    }

    header {
        z-index: -1;
    }

    header img:first-child,
    img:nth-child(4) {
        position: absolute;
        justify-content: center;
        align-items: center;
        align-content: center;
        height: 100vh;
        width: 100%;
    }


    header .title,
    .subtitle {
        color: white;
        padding: 0;
        transform: translateY(25vh);
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        align-content: center;
        z-index: 1;
    }

    .subtitle{
        transform: translateY(20vh);
    }

    section {
        font-size: 2rem;
        font-family: sans-serif;
    }

    section .box-container {
        position: relative;
        display: flex;
        transform: translateY(-10vh);
        z-index: 2;
    }

    .box-container .boxOne {
        justify-content: start;
        font-family: "Lobster", sans-serif;
        font-style: normal;
    }

    .box-container .boxTwo {
        transform: translateY(30vh);
        justify-content: end;
        font-family: sans-serif;
        font-weight: 100;
    }


    /* Ukuran tablet */
    @media screen and (max-width: 760px) {

    }

    
    /* Ukuran smartphone */
    @media screen and (max-width: 576px) {
        
    }
</style>
@endsection