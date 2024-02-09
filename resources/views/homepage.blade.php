@extends('layouts.mainlayout')

@section('container')
<header style="background-color:#211C6A">
    <img src="{{ asset('storage/lighthouse.jpg') }}" alt="lighthouse.jpg">
    <h1 class="p-1 title">Plate</h1>
    <h5 class="p-1 subtitle">for your template</h5>
</header>

<section>
    <img src="{{ asset('storage/seaunder.jpg') }}" alt="seaunder.jpg" class="lighthouse">

    <div class="box-container boxOne col-md-6">
        <h2 style="color: #FFF6E9; font-size:100px">What is Plate?</h2>
    </div>

    <div class="box-container boxTwo col-md-6">
        <h5 style="color: #BBE2EC; font-size:30px">A multipurpose template for your website functionality such as forms, login, etc.</h5>
    </div>

    <div class="container">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur repellat non dignissimos dolor hic quas provident sint accusantium sapiente eligendi? Facere dolorem sint, asperiores nemo accusantium facilis molestias velit ipsum?</div>
</section>

<a href="https://www.freepik.com/free-vector/sea-background-video-conferencing_9470396.htm#query=sea%20background&position=3&from_view=keyword&track=ais&uuid=7fdd85a2-28df-49e2-b3b3-f16cede379b5">Image by pikisuperstar</a> on Freepik
<style>
    .title {
        font-size: 7rem;
        color: white;
        text-shadow: 0 0 5px black;
    }

    header img:first-child {
        justify-content: center;
        height: 100vh;
        width: 100%;
        z-index: -1;
    }

    header .title,
    .subtitle {
        color: white;
        padding: 0;
        transform: translateY(-78vh);
        display: flex;
        justify-content: center;
        z-index: 1;
    }

    .subtitle {
        transform: translateY(-81vh);
    }

    section {
        font-size: 2rem;
        font-family: sans-serif;
    }


    .boxOne {
        justify-content: start;
        font-family: "Lobster", sans-serif;
        font-style: normal;
    }

    .boxTwo {
        justify-content: end;
        font-family: sans-serif;
    }


    /* Ukuran tablet */
    @media screen and (max-width: 760px) {}

    /* Ukuran smartphone */
    @media screen and (max-width: 576px) {}
</style>
@endsection