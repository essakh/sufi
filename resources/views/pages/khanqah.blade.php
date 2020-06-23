@extends('layouts.app')

@section('content')
 <!--Breadcrumb section starts-->
 <div class="breadcrumb-section" style="background-image: url(images/breadcrumb/breadcrumb-2.jpg)">
    <div class="overlay op-5"></div>
    <div class="container">
        <div class="row align-items-center  pad-top-80">
            <div class="col-md-6 col-12">
                <div class="breadcrumb-menu">
                    <h2 class="page-title">Khanqah Rahamkaria Imdadia UK</h2>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="breadcrumb-menu text-right sm-left">
                    <ul>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb section ends-->
 <!--About section starts-->
 <div class="about-section section-padding pad-bot-90">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about-text res-box"  style="background-color: #D7D5B1"> 
                    <h2>About Khanqah Rahamkaria Imdadia UK</h2>
                    <p>Khanqah Rahamkaria Imdadia UK is a branch of the Khanqah Rahamkaria Imdadia in Rawalpindi, Pakistan. The Khanqah is under the guidance of Arif Billah Hadhrat Shaykh Syed Shabbir Ahmed Kaka Khel hafeezahullah ( Senior Khalifa Majaz of Hadhrat Shaykh Sufi Iqbal Muhajir Madani RA). Hadhrat Shaykh Shabbir is a renowned Sufi Shaykh who ardently follows the Qur'an & Sunnah and is known for guiding others away from bid'ah and innovations and onto the true path of Tasawwuf, which can only come through total submission to commands of the Beloved, Allah Azza WA Jal. </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-img">
                    <img src="images/about/about.png" alt="...">
                </div>
            </div>
        </div>
    </div>
</div>
<!--About section ends-->
@endsection()