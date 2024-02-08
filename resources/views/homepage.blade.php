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
        <div class="boxOne">
            <h2 style="color: #FFF6E9; font-size:100px">What is Plate?</h2>
        </div>

        <div class="boxTwo">
            <h5 style="color: #BBE2EC; font-size:30px">A multipurpose template for your website functionality such as forms, login, etc.</h5>
        </div>
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

    header .subtitle {
        transform: translateY(22vh);
    }

    section {
        font-size: 2rem;
        font-family: sans-serif;
    }

    section .box-container {
        position: relative;
        display: flex;
        transform: translateY(-200vh);
        z-index: 2;
    }

    .box-container .boxOne {
        transform: translateX(10vw);
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

       
        section .box-container {}
    }

    /* Ukuran mobile */
    @media screen and (max-width: 576px) {
        section .box-container {}
    }
</style>
@endsection