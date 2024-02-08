@extends('layouts.mainlayout')

@section('container')
<header>
    <img src="{{ asset('storage/lighthouse.jpg') }}" alt="lighthouse.jpg">
    <h1 class="title">Plate</h1>
    <h5 class="subtitle">for your template</h5>
</header>

<section>
    <img src="{{ asset('storage/seaunder.jpg') }}" alt="seaunder.jpg">
    <div class="box-container">
        <h5>What is Plate?</h5>
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

    header img:first-child, img:nth-child(4) {
        position: absolute;
        justify-content: center;
        align-items: center;
        align-content: center;
        height: 100vh;
        width: 100%;
    }

   
    header .title, .subtitle {
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

    header .subtitle {
        transform: translateY(22vh);
    }

    section {
        font-size: 2rem;
        font-family: sans-serif;
    }

    section .box-container {
        position: relative;
        color: white;
        translate: 30vh 0;
        display: flex;
        justify-content: start;
    }


    @media screen and (max-width: 760px) {
        /* Ukuran tablet */
        section .box-container {
            translate: 0;
            transform: translateY(0px);
        }
    }

    /* Ukuran mobile */
    @media screen and (max-width: 576px) {
        section .box-container {
            translate: 0;
            transform: translateY(0px);
        }
    }

</style>
@endsection