@extends('layouts.app')

@section('content')
    <header class="video text-white d-flex">
        <div class="container my-auto">
            <div class="video-container">
                <div class="fullscreen-bg">
                    <video autoplay loop poster="images/background.jpg" class="fullscreen-bg__video">
                        <source src="video/THE-MEG.webm" type="video/webm">
                        <source src="video/THE-MEG.mp4" type="video/mp4">
                        <source src="video/THE-MEG.ogv" type="video/ogg">
                    </video>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('lists-video')
    <section id="lists-video">
        <div class="container">

        </div>
    </section>
@endsection

@section('contact-video')
    <section id="contact-video">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading ">Questions? Contact us.</h2>
                    <hr class="my-4">
                </div>
            </div>
            <div class="row  mb-4">
                <div class="col-lg-3 ml-auto text-center">
                    <ul>
                        <li>Lorem ipsom dolar sit</li>
                        <li>Lorem ipsom dolar sit</li>
                        <li>Lorem ipsom dolar sit</li>
                        <li>Lorem ipsom dolar sit</li>
                    </ul>
                </div>
                <div class="col-lg-3 ml-auto text-center">
                    <ul>
                        <li>Lorem ipsom dolar sit</li>
                        <li>Lorem ipsom dolar sit</li>
                        <li>Lorem ipsom dolar sit</li>
                        <li>Lorem ipsom dolar sit</li>
                    </ul>
                </div>
                <div class="col-lg-3 ml-auto text-center">
                    <ul>
                        <li>Lorem ipsom dolar sit</li>
                        <li>Lorem ipsom dolar sit</li>
                        <li>Lorem ipsom dolar sit</li>
                        <li>Lorem ipsom dolar sit</li>
                    </ul>
                </div>
                <div class="col-lg-3 mr-auto text-center">
                    <ul>
                        <li>Lorem ipsom dolar sit</li>
                        <li>Lorem ipsom dolar sit</li>
                        <li>Lorem ipsom dolar sit</li>
                        <li>Lorem ipsom dolar sit</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="text-center">Copyright @ <script> document.write(new Date().getFullYear()); </script> | Author: Dragoslav Predojevic</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            //ToDo
        });
    </script>
@endpush