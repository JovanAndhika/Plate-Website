@extends('layouts.mainlayout')

@section('container')
<div class="d-flex justify-content-center mb-3">
    <a class="btn btn-primary" href="https://github.com/JovanAndhika/template-website/blob/c17000c770838b136ec70eb3d7eba34fe6495999/template-website/forms/formOne.txt">Go to code&nbsp;<i class="bi bi-box-arrow-up-right"></i></a>
</div>
<div class="container p-5 formOne-container">
    <div class="title">Registration</div>
    <form class="d-flex justify-content-center" method="post" action="">
        @csrf
        @method('post')
        <div class="row g-2 gx-3 gy-3">
            <div class="col-md-6">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="col-md-6">
                <label for="exampleInputMajor" class="form-label">Major</label>
                <input type="text" class="form-control" id="exampleInputMajor">
            </div>
            <div class="col-md-6">
                <label for="exampleDate" class="form-label">Date</label>
                <input type="date" class="form-control" id="exampleDate">
            </div>
            <div class="col-md-6">
                <label for="exampleNumber" class="form-label">Batch (ex. 2023)</label>
                <input type="number" class="form-control" id="exampleNumber">
            </div>
            <div class="col-md-6">
                <label for="exampleSomething" class="form-label">Something</label>
                <input type="number" class="form-control" id="exampleSomething">
            </div>

            <!-- Add hidden to make the row have even column-->
            <div class="col-md-6">
                <label for="exampleDate" class="form-label"></label>
                <input type="hidden" class="form-control" id="exampleDate">
            </div>

            <div class="d-grid gap-2 col-4 mx-auto mt-5">
                <button class="btn btn-primary" type="button">Button</button>
            </div>
        </div>

    </form>
</div>

<style>
    .formOne-container {
        font-family: 'Poppins', sans-serif;
        box-sizing: border-box;
        max-width: 700px;
        width: 100%;
        /* background-image: url("https://cdn.oneesports.gg/cdn-data/2024/02/HonkaiStarRail_Firefly_FirstEncounter-1024x576.jpg"); */
        background: #fff;
        border-radius: 5px;
    }

    .formOne-container .title {
        font-size: 25px;
        font-weight: 500;
        position: relative;
    }

    .fontOne-container .title::before {
        content: '';
        position: absolute;
        bottom: 0;
        height: 3px;
        width: 30px;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }
</style>
@endsection