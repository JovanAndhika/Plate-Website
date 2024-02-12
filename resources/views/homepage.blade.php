@extends('layouts.mainlayout')

@section('container')
<div class="wrapper gap-0">
    <img src="{{ asset('storage/lighthouse.jpg') }}" alt="lighthouse.jpg">
    <header style="background-color:#211C6A">
        <h1 class="title">Plate</h1>
        <h5 class="subtitle">for your template</h5>
    </header>

    <img src="{{ asset('storage/seaunder.jpg') }}" alt="seaunder.jpg" class="lighthouse" style="width:1600px;">
    <section>
        <div class="box-container boxOne col-md-6">
            <h2 style="color: #FFF6E9; font-size:100px">What is Plate?</h2>
        </div>

        <div class="box-container boxTwo col-md-6">
            <h5 style="color: #BBE2EC; font-size:30px">A multipurpose template for your website functionality such as forms, login, etc.</h5>
        </div>

        <div class="timeline">
            <h1 style="color:#FFF6E9">How to Use</h1>
            <ul>
                <li style="--accent-color:#41516C">
                    <div class="date">Step One</div>
                    <div class="title">Click navbar template</div>
                    <div class="descr">Dropdown and choose for what role is the website!</div>
                </li>
                <li style="--accent-color:#FBCA3E">
                    <div class="date">Step Two</div>
                    <div class="title">Select parts</div>
                    <div class="descr">Select what template you want to use</div>
                </li>
                <li style="--accent-color:#E24A68">
                    <div class="date">Last Step</div>
                    <div class="title">Click go to link</div>
                    <div class="descr">Ready to go to make website</div>
                </li>
            </ul>
        </div>
    </section>

    <footer>
        <div class="credits container">
            <a style="color: #7F27FF;" target="_blank" href="https://www.freepik.com/free-vector/infographic-template-with-yearly-info_1252895.htm">inspired by</a>
            <a style="color: #7F27FF;" href="https://www.freepik.com/free-vector/sea-background-video-conferencing_9470396.htm#query=sea%20background&position=3&from_view=keyword&track=ais&uuid=7fdd85a2-28df-49e2-b3b3-f16cede379b5">Image by pikisuperstar</a>
            <br>
        </div>
    </footer>


    <style>
        img:first-child {
            position: relative;
            justify-content: center;
            height: 100vh;
            width: 100%;
            transform: translateY(0vh);
            z-index: -1;
        }

        header .title,
        .subtitle {
            position: absolute;
            color: white;
            padding: 0;
            translate: 55vw -71vh;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1;
        }

        header .title {
            font-size: 7rem;
            color: white;
            text-shadow: 0 0 5px black;
        }

        header .subtitle {
            translate: 58vw -52vh;
        }


        img:nth-child(3) {
            position: relative;
            transform: translateY(-10px);
            z-index: -1;
        }

        section .boxOne {
            position: absolute;
            justify-content: start;
            font-family: "Lobster", sans-serif;
            font-style: normal;
            translate: 10vw -140vh;
            z-index: 1;
        }

        section .boxTwo {
            position: absolute;
            justify-content: end;
            font-family: sans-serif;
            translate: 45vw -110vh;
            z-index: 1;
        }

        section .timeline {
            position: absolute;
            translate: 16vw -80vh;
        }


        .timeline h1 {
            text-align: center;
        }

        .timeline ul {
            --col-gap: 2rem;
            --row-gap: 2rem;
            --line-w: 0.25rem;
            display: grid;
            grid-template-columns: var(--line-w) 1fr;
            grid-auto-columns: max-content;
            column-gap: var(--col-gap);
            list-style: none;
            width: min(60rem, 90%);
            margin-inline: auto;
        }

        /* line */
        .timeline ul::before {
            content: "";
            grid-column: 1;
            grid-row: 1 / span 20;
            background: rgb(225, 225, 225);
            border-radius: calc(var(--line-w) / 2);
        }

        /* columns*/

        /* row gaps */
        .timeline ul li:not(:last-child) {
            margin-bottom: var(--row-gap);
        }

        /* card */
        .timeline ul li {
            grid-column: 2;
            --inlineP: 1.5rem;
            margin-inline: var(--inlineP);
            grid-row: span 2;
            display: grid;
            grid-template-rows: min-content min-content min-content;
        }

        /* date */
        .timeline ul li .date {
            --dateH: 3rem;
            height: var(--dateH);
            margin-inline: calc(var(--inlineP) * -1);

            text-align: center;
            background-color: var(--accent-color);

            color: white;
            font-size: 1.25rem;
            font-weight: 700;

            display: grid;
            place-content: center;
            position: relative;

            border-radius: calc(var(--dateH) / 2) 0 0 calc(var(--dateH) / 2);
        }

        /* date flap */
        .timeline ul li .date::before {
            content: "";
            width: var(--inlineP);
            aspect-ratio: 1;
            background: var(--accent-color);
            background-image: linear-gradient(rgba(0, 0, 0, 0.2) 100%, transparent);
            position: absolute;
            top: 100%;

            clip-path: polygon(0 0, 100% 0, 0 100%);
            right: 0;
        }

        /* circle */
        .timeline ul li .date::after {
            content: "";
            position: absolute;
            width: 2rem;
            aspect-ratio: 1;
            background: var(--bgColor);
            border: 0.3rem solid var(--accent-color);
            border-radius: 50%;
            top: 50%;

            transform: translate(50%, -50%);
            right: calc(100% + var(--col-gap) + var(--line-w) / 2);
        }

        /* title descr */
        .timeline ul li .title,
        .timeline ul li .descr {
            background: #EFECEC;
            position: relative;
            padding-inline: 1.5rem;
        }

        .timeline ul li .title {
            overflow: hidden;
            padding-block-start: 1.5rem;
            padding-block-end: 1rem;
            font-weight: 500;
        }

        .timeline ul li .descr {
            padding-block-end: 1.5rem;
            font-weight: 300;
        }

        /* shadows */
        .timeline ul li .title::before,
        .timeline ul li .descr::before {
            content: "";
            position: absolute;
            width: 90%;
            height: 0.5rem;
            background: rgba(0, 0, 0, 0.5);
            left: 50%;
            border-radius: 50%;
            filter: blur(4px);
            transform: translate(-50%, 50%);
        }

        .timeline ul li .title::before {
            bottom: calc(100% + 0.125rem);
        }

        .timeline ul li .descr::before {
            z-index: -1;
            bottom: 0.25rem;
        }

        @media (min-width: 40rem) {
            .timeline ul {
                grid-template-columns: 1fr var(--line-w) 1fr;
            }

            .timeline ul::before {
                grid-column: 2;
            }

            .timeline ul li:nth-child(odd) {
                grid-column: 1;
            }

            .timeline ul li:nth-child(even) {
                grid-column: 3;
            }

            /* start second card */
            .timeline ul li:nth-child(2) {
                grid-row: 2/4;
            }

            .timeline ul li:nth-child(odd) .date::before {
                clip-path: polygon(0 0, 100% 0, 100% 100%);
                left: 0;
            }

            .timeline ul li:nth-child(odd) .date::after {
                transform: translate(-50%, -50%);
                left: calc(100% + var(--col-gap) + var(--line-w) / 2);
            }

            .timeline ul li:nth-child(odd) .date {
                border-radius: 0 calc(var(--dateH) / 2) calc(var(--dateH) / 2) 0;
            }
        }

        footer {
            position: absolute;
            translate: 0 0;
        }

        footer .credits a {
            margin: 0 0;
            display: flex;
            padding: 0 30px;
            margin-top: 1rem;
            text-align: left;
        }

        /* Ukuran Laptop mini */
        @media screen and (max-width: 1100px) {
            header .title,
            .subtitle {
                translate: 45vw -71vh;
            }

            header .subtitle {
                translate: 52vw -52vh;
            }

            section .boxOne {
                translate: 3vw -160vh;
            }

            section .timeline {
                position: absolute;
                translate: 3vw -90vh;
            }

            section .boxTwo {
                translate: 3vw -120vh;
            }
        }



        /* Ukuran tablet */
        @media screen and (max-width: 760px) {

            header .title,
            .subtitle {
                translate: 14vw -71vh;
            }

            header .subtitle {
                translate: 29vw -52vh;
            }

            section .boxOne {
                translate: 3vw -160vh;
            }

            section .boxTwo {
                translate: 3vw -120vh;
            }

            section .timeline {
                position: absolute;
                translate: 0vw -90vh;
            }


        }

        /* Ukuran smartphone */
        @media screen and (max-width: 576px) {

            header .title,
            .subtitle {
                translate: 14vw -71vh;
            }

            header .subtitle {
                translate: 29vw -52vh;
            }

            section .boxOne {
                translate: 3vw -160vh;
            }

            section .boxTwo {
                translate: 1vw -120vh;
            }

            section .timeline {
                position: absolute;
                translate: -3vw -95vh;
            }

            footer{
                translate: 0 8vh;
            };
        }

        .wrapper {
            align-content: flex-start;
            overflow-x: hidden;
        }
    </style>
</div>
@endsection