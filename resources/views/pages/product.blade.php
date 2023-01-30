@extends('layouts.main-layout')

@section('content')
    {{-- top bar della pagina prodotto in cui compare il banner con l'immagine del fumetto selezionato --}}
    <div class="ms_top_bar_product container-fluid">
        <div class="container">
            <div class="ms_banner_product">
                <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
                <div class="ms_top_badges_banner">
                    COMIC BOOK
                </div>
                <div class="ms_bottom_badges_banner">
                    VIEW GALLERY
                </div>
            </div>
        </div>
    </div>

    {{-- sezione in cui inserisco la descrizione del fumetto selzionato --}}
    <div class="container-fluid py-4">
        <div class="container d-flex justify-content-center align-items-center">
            {{-- container descrizione e dettagli per l'acquisto del fumetto --}}
            <div class="ms_desc_comic col-8">
                <h1 class="ms_title_comic">Action Comics #1000: The Deluxe Edition</h1>

                <div class="ms_buy_details my-3">
                    
                </div>

                <p>
                    The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!
                </p>
            </div>

            {{-- container pubblicità --}}
            <div class="ms_ctn_publicity col-4 text-end">
                <h2>ADVERTISEMENT</h2>
                <div class="ms_slot_img_adv">
                    <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- sezione in cui inserisco i dettagli del fumetto --}}
    <div class="ms_section_details_comic container-fluid p-4">
        <div class="container d-flex">
            <div class="ms_ctn_talent col-6 pe-3">
                <h4>Talent</h4>

                <div class="ms_slot_info d-flex justify-content-between py-2">
                    <h6 class="col-2">Art by:</h6>
                    <div class="col-8">
                        José Luis García-López, Clay Mann, Rafael Albuquerque, Patrick Gleason, Dan Jurgens, Joe Shuster, Neal Adams, Curt Swan, John Cassaday, Olivier Coipel, Jim Lee
                    </div>
                </div>

                <div class="ms_slot_info d-flex justify-content-between py-2">
                    <h6 class="col-2">Written by:</h6>
                    <div class="col-8">
                        Brad Meltzer, Tom King, Scott Snyder, Geoff Johns, Brian MichaelBendis, Paul Dini, Louise Simonson, Richard Donner, Marv Wolfman, Peter J Tomasi, Dan Jurgens, Jerry Siegel, Paul Levitz
                    </div>
                </div>
            </div>
            <div class="ms_ctn_specs col-6">
                <h4>Specs</h4>

                <div class="ms_slot_info d-flex justify-content-between py-2">
                    <h6 class="col-2">Series:</h6>
                    <div class="col-8">
                        ACTION COMICS
                    </div>
                </div>

                <div class="ms_slot_info d-flex justify-content-between py-2">
                    <h6 class="col-2">U.S. price:</h6>
                    <div class="col-8">
                        &dollar;19.99
                    </div>
                </div>

                <div class="ms_slot_info d-flex justify-content-between py-2">
                    <h6 class="col-2">On Sale Date:</h6>
                    <div class="col-8">
                        Oct 02 2018
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection