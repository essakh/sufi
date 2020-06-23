@extends('layouts.app')

@section('content')

<!--Hero section starts-->
<div class="hero v1 section-padding bg-zoom">
    <div class="overlay op-3"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="hero__title places-tab">
                    Fehme Tasawwuf Course Registration 2020
                </h1>
                <p class="hero__description">
                    Authentic Sufism Explained
                </p>
            </div>
            <div class="col-md-12 text-center mar-top-20">
                <ul class="hero__list">
                    <li class="hero__list-item">
                        <a class="place active-list" href="#">Register <i class="icofont-google-map"
                                aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Hero section ends--
<!--mobile app start-->
<div class="app-section section-padding pad-top-70" style="background-color: #c8c695">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="app-content">
                    <h2>Mamulaat As-Salikeen<span>Get the App!</span></h2>
                    <ul>
                        <li><i class="ion-android-checkbox-outline" aria-hidden="true"></i> Contains daily mamulaat for
                            mureeds </li>
                        <li><i class="ion-android-checkbox-outline" aria-hidden="true"></i> Daily Supplications</li>
                        <li><i class="ion-android-checkbox-outline" aria-hidden="true"></i> Durood o Salam and other
                            Masnoon readings</li>
                        <li><i class="ion-android-checkbox-outline" aria-hidden="true"></i> The extremely powerful
                            Manzil Jadeed</li>
                    </ul>
                    <div class="device-logo mar-top-40 xs-center">
                        <a href="https://play.google.com/store/apps/details?id=com.tazkia.mamulaat"><img
                                src="images/others/android.png" alt="..."> </a>
                        <a href="https://apps.apple.com/gb/app/mamulaat/id1483535627"><img src="images/others/apple.png"
                                alt="..."> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="app-img text-center">
                    <img src=" images/bg/iphoneapp.png" alt="...">
                </div>
            </div>
        </div>
    </div>
</div>
<!--mobile app ends-->
<!--Timetable-->
<div class="coupon-section section-padding">
    <div class="container ">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h2 class="section-title v1">Weekly English Lecture Schedule</h2>
            </div>
            <div class="col-md-12">
                <div class="row trending-place-item" style="background-color: #fffce0">
                    <table class="table table-theme mb-0 text-center table-condensed">
                        <thead class="table-header">
                            <tr>
                                <th scope="col">Day</th>
                                <th scope="col">Programme</th>
                                <th scope="col">Time (UK)</th>
                                <th scope="col">Live Available On</th>
                            </tr>
                        </thead>
                        <tbody class="schedule-table-body">
                            <tr>
                                <th scope="row">Sunday</th>
                                <td>English Lecture (by Shaykh Shabbir Kaka Khel db)</td>
                                <td class="time-cell">4:00 pm</td>
                                <td><a href="https://www.tazkia.org">www.tazkia.org</a></td>
                            </tr>
                            <tr>
                                <th scope="row">Tuesday</th>
                                <td>Nashrut Teeb Fi Dhikr al Habib</td>
                                <td class="time-cell">7:15 pm</td>
                                <td><a href="https://mixlr.com/khanqah-imdadia-rahamkaria-uk">Mixlr (link)</a></td>
                            </tr>
                            <tr>
                                <th scope="row">Thursday</th>
                                <td>Majlis of Salawat & Salam</td>
                                <td class="time-cell">7:15 pm</td>
                                <td><a href="https://mixlr.com/khanqah-imdadia-rahamkaria-uk">Mixlr (link)</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        

    </div>
</div>
<!--time table ends-->
<!--Whatsapp start-->
<div class="coupon-section section-padding "   style="background-color: #c8c695">
    <div class="container ">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h2 class="section-title v1">Join our Whatsapp Group</h2>
            </div>
            <div class="col-md-8 offset-md-2 text-center">
                <h1> Brothers Only </h1>>
                <div class="about-img">
                    <img src="{{asset('images/misc/whatsapp.png')}}">
                </div>
            </div>
            {{-- <div class="col">
              
            </div>
            <div class="col">
                <h1> Sisters Only </h1>>
                <div class="about-img">
                    <img src="images/misc/whatsapp.png" alt="...">
                </div>
            </div> --}}
       
        </div>
        

    </div>
</div>
<!--Whatsapp ends-->

@endsection()