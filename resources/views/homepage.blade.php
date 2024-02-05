@extends('layouts.mainlayout')

@section('container')
<div class="wrapper">
    <header>
        <img src="{{ asset('storage/lighthouse.jpg') }}" alt="lighthouse.jpg">
        <img src="{{ asset('storage/seaunder.jpg') }}" alt="seaunder.jpg">
        <h1 class="title">Plate</h1>
        <h5 class="subtitle">for your template</h5>
    </header>

    <section>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde fuga mollitia, aperiam deserunt quos reiciendis esse recusandae quasi debitis facere error dolore maiores veniam. Tempora corporis quidem distinctio debitis fugit?
    </section>

    <a href="https://www.freepik.com/free-vector/sea-background-video-conferencing_9470396.htm#query=sea%20background&position=3&from_view=keyword&track=ais&uuid=7fdd85a2-28df-49e2-b3b3-f16cede379b5">Image by pikisuperstar</a> on Freepik

</div>



<style>
    .title{
        font-size: 7rem;
        color: white;
        text-shadow: 0 0 5px black;
    }

    .wrapper{
        height: 100vh;
        overflow-y: auto;
        overflow-x: hidden;
    }

    .wrapper img:first-child {
        width: 100vh;
    }

    .wrapper img:nth-child(2) {
        width: 100vh;
    }

    section{
        font-size: 2rem;
        padding: 2rem;
        font-family: sans-serif;
    }
</style>
@endsection