@extends('layouts.app')

@section('content')
<!--Breadcrumb section starts-->
<div class="breadcrumb-section" style="background-image: url(images/breadcrumb/breadcrumb-2.jpg)">
    <div class="overlay op-5"></div>
    <div class="container">
        <div class="row align-items-center  pad-top-80">
            <div class="col-md-6 col-12">
                <div class="breadcrumb-menu">
                    <h2 class="page-title">Zikr and Muraqaba method</h2>
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
<!--Method section starts-->
<div class="blog-area section-padding mar-top-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h1 class="heading_1">Dhikr and Meditation Method</h1>
                </div>

                <div class="card text-center bg-success ">
                    <div class="card-body">
                        <h5 class="card-title"> Disclaimer </h5>
                        <p class="card-text text-body"> This Dhikr is a remedy based Dhikr for curing spiritual
                            ailments. It should not be attempted without the instructions and guidance of a Qualified
                            Sufi Shaykh. The same way Medicine is not taken without the instructions of a qualified
                            Doctor.</p>
                    </div>
                </div>

                <br>
                <h2 class="heading_2">Dhikr Method</h2>
                <p>
                    <button class="btn btn-success btn-lg btn-block" type="button" data-toggle="collapse"
                        aria-expanded="false" data-target="#Introductory" aria-controls="collapseExample">
                        1. Introductory Dhikr
                    </button>
                </p>
                <div class="collapse" id="Introductory">
                    <div class="card card-body">
                        <h6> 1. Read these Sunnah (Masnoon) Dhikr after every Salah/Prayer </h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>سُبْحَانَ اللهْ</td>
                                    <td>Subhān Allāh</td>
                                    <td>x33</td>

                                </tr>
                                <tr>
                                    <td>اَلْحَمْدُلِلهْ</td>
                                    <td>Alhamdulillāh</td>
                                    <td>x33</td>
                                </tr>
                                <tr>
                                    <td>اَللهُ اَکْبَرْ</td>
                                    <td>Allāhu akbar</td>
                                    <td>x34</td>
                                </tr>
                                <tr>
                                    <td>لَا إِلَٰهَ إِلَّا ٱللَّٰهُ مُحَمَّدٌ رَسُولُ ٱللَّٰهِ‎</td>
                                    <td>Lā ʾilāha ʾillā llāhu muḥammadur rasūlul ulāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td> أَسْتَغْفِرُ اللّٰهَ‎</td>
                                    <td>ʾastaḡfirululāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>اللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا صَلَّيْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ
                                        اللَّهُمَّ بَارِكْ عَلَى مُحَمَّدٍ، وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا بَارَكْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ</td>
                                    <td>(Darood e Ibrahim) ALLAHUMMA SALLI ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA
                                        SALLAITA ALA IBRAHIMA WA ALA AALI IBRAHIMA INNAKA HAMIDUM MAJID. ALLAHUMMA
                                        BAARIK ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA BAARAKTA ALA IBRAHIMA WA ALA
                                        AALI IBRAHIMA INNAKA HAMIDUM MAJID.</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>أعوذ بالله من الشيطان الرجيم</br>
                                        اللَّهُ لاَ إِلَهَ إِلاَّ هُوَ الْحَيُّ الْقَيُّومُ لاَ تَأْخُذُهُ سِنَةٌ وَلاَ
                                        نَوْمٌ لَهُ مَا فِي السَّمَاوَاتِ وَمَا فِي الأَرْضِ مَنْ ذَا الَّذِي يَشْفَعُ
                                        عِنْدَهُ إِلاَّ بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ
                                        وَلاَ يُحِيطُونَ بِشَيْءٍ مِنْ عِلْمِهِ إِلاَّ بِمَا شَاءَ وَسِعَ كُرْسِيُّهُ
                                        السَّمَاو ;َاتِ وَالأَرْضَ وَلاَ يَئُودُهُ حِفْظُهُمَا وَهُوَ الْعَلِيُّ
                                        الْعَظِيمُ </td>
                                    <td>(Ayatul Kursi) Allahu laaa ilaaha illaa huwal haiyul qai-yoom; laa taakhuzuhoo
                                        sinatunw wa laa nawm; lahoo maa fissamaawaati wa maa fil ard; man zallazee
                                        yashfa'u indahooo illaa be iznih; ya'lamu maa baina aideehim wa maa khalfahum;
                                        wa laa yuheetoona beshai 'immin 'ilmihee illa be maa shaaaa; wasi'a kursiyyuhus
                                        samaa waati wal arda wa la ya'ooduho hifzuhumaa; wa huwal aliyyul 'azeem</td>
                                    <td>x1</td>
                                </tr>
                            </tbody>

                        </table>
                        <h6> 2. Read these Remedy Zikr everyday for a total period of 40 days Uninterrupted</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>سَبْحَانَ اللهِ وَالْحَمْدُ لِلهِ وَلَااِلَهَ اِلَّا اللهُ وَ اللهُ اَکْبَرْ
                                    </td>
                                    <td>Subhān Allāhi Walhamdullilāhi Walāilāha Illallāhu wallāhuakbar</td>
                                    <td>x300</td>

                                </tr>
                                <tr>
                                    <td>لَاحَوْلَ وَلَاقُوَّۃَ اِلَّابِااﷲِ الْعَلِىِّ الْعَظیْمْ</td>
                                    <td>Lāhowla walāquwata ilābillāhil Alayilāzeem</td>
                                    <td>x200</td>
                                </tr>
                            </tbody>

                        </table>

                    </div>
                </div>
                <br>
                <p>
                    <button class="btn btn-success btn-lg btn-block" type="button" data-toggle="collapse"
                        aria-expanded="false" data-target="#Second" aria-controls="collapseExample">
                        2. Second Dhikr
                    </button>
                </p>
                <div class="collapse" id="Second">
                    <div class="card card-body">
                        <h6> 1. Read these Sunnah (Masnoon) Dhikr after every Salah/Prayer </h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>سُبْحَانَ اللهْ</td>
                                    <td>Subhān Allāh</td>
                                    <td>x33</td>

                                </tr>
                                <tr>
                                    <td>اَلْحَمْدُلِلهْ</td>
                                    <td>Alhamdulillāh</td>
                                    <td>x33</td>
                                </tr>
                                <tr>
                                    <td>اَللهُ اَکْبَرْ</td>
                                    <td>Allāhu akbar</td>
                                    <td>x34</td>
                                </tr>
                                <tr>
                                    <td>لَا إِلَٰهَ إِلَّا ٱللَّٰهُ مُحَمَّدٌ رَسُولُ ٱللَّٰهِ‎</td>
                                    <td>Lā ʾilāha ʾillā llāhu muḥammadur rasūlul ulāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td> أَسْتَغْفِرُ اللّٰهَ‎</td>
                                    <td>ʾastaḡfirululāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>اللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا صَلَّيْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ
                                        اللَّهُمَّ بَارِكْ عَلَى مُحَمَّدٍ، وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا بَارَكْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ</td>
                                    <td>(Darood e Ibrahim) ALLAHUMMA SALLI ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA
                                        SALLAITA ALA IBRAHIMA WA ALA AALI IBRAHIMA INNAKA HAMIDUM MAJID. ALLAHUMMA
                                        BAARIK ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA BAARAKTA ALA IBRAHIMA WA ALA
                                        AALI IBRAHIMA INNAKA HAMIDUM MAJID.</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>أعوذ بالله من الشيطان الرجيم</br>
                                        اللَّهُ لاَ إِلَهَ إِلاَّ هُوَ الْحَيُّ الْقَيُّومُ لاَ تَأْخُذُهُ سِنَةٌ وَلاَ
                                        نَوْمٌ لَهُ مَا فِي السَّمَاوَاتِ وَمَا فِي الأَرْضِ مَنْ ذَا الَّذِي يَشْفَعُ
                                        عِنْدَهُ إِلاَّ بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ
                                        وَلاَ يُحِيطُونَ بِشَيْءٍ مِنْ عِلْمِهِ إِلاَّ بِمَا شَاءَ وَسِعَ كُرْسِيُّهُ
                                        السَّمَاو ;َاتِ وَالأَرْضَ وَلاَ يَئُودُهُ حِفْظُهُمَا وَهُوَ الْعَلِيُّ
                                        الْعَظِيمُ </td>
                                    <td>(Ayatul Kursi) Allahu laaa ilaaha illaa huwal haiyul qai-yoom; laa taakhuzuhoo
                                        sinatunw wa laa nawm; lahoo maa fissamaawaati wa maa fil ard; man zallazee
                                        yashfa'u indahooo illaa be iznih; ya'lamu maa baina aideehim wa maa khalfahum;
                                        wa laa yuheetoona beshai 'immin 'ilmihee illa be maa shaaaa; wasi'a kursiyyuhus
                                        samaa waati wal arda wa la ya'ooduho hifzuhumaa; wa huwal aliyyul 'azeem</td>
                                    <td>x1</td>
                                </tr>
                            </tbody>

                        </table>
                        <h6> 2. Read these Sunnah (Masnoon) Dhikr everyday for life.</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> سُبْحَانَ اﷲِ وَالْحَمْدُِ ﷲِ وَلَآ اِلٰهَ اِلَّا اﷲُ وَاﷲُ اَکْبَرُ وَلَا
                                        حَوْلَ وَلَا قُوَّةَ اِلَّا بِاﷲِ الْعَلِيِ الْعَظِيْمِ.</td>
                                    <td>(Third Kalima) Subhān Allāhi Walhamdullilāhi Walāilāha Illallāhu wallāhuakbar
                                        Walā lāhowla walāquwata ilābillāhil alayilāzeem</td>
                                    <td>x100</td>

                                </tr>
                                <tr>
                                    <td>و صلی اللہ علی النبی الامی</td>
                                    <td>(Darood Shareef) Wassallahu 'Alannabiyil 'Umiyee</td>
                                    <td>x100</td>
                                </tr>
                                <tr>
                                    <td>أسْتَغْفِرُ اللهَ رَبي مِنْ كُلِ ذَنبٍ وَأتُوبُ إلَيهِ</td>
                                    <td>Astaghfirullah rabbi min kulli zambiyon wa atoobu ilaiyh</td>
                                    <td>x100</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6> 3. Delivery of reward per day</h6>
                        <p>Recite Surah Fatihah x1 and Surah al-Ikhlas x3. Have the intention of giving the reward of
                            this to Hadhrat Muhammad (Sallahu'AlahiWasalam), to all the Ambiyaa ('Alahimusalaam), the
                            Sahaabah (RidhwanullahuTa'ala'Anhum) and all the Mashaykh (Rahmatullahi'Alaihum) belonging
                            to the 4 Tasawwuf Silsalahs.</p>
                        <br>
                        <h6> 4. Read these Remedy Zikr everyday as instructed by your Sufi Guide/Shaykh</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>لَااِلٰهَ اِلَّا اللہْ</td>
                                    <td>Laailaha Illalaah</td>
                                    <td>x100</td>

                                </tr>
                                <tr>
                                    <td>لَااِلٰهَ اِلَّا ھُو</td>
                                    <td>Laailaha Ilaahoo</td>
                                    <td>x100</td>
                                </tr>
                                <tr>
                                    <td>حق</td>
                                    <td>Haq</td>
                                    <td>x100</td>
                                </tr>
                                <tr>
                                    <td>اَللہْ</td>
                                    <td>Allah</td>
                                    <td>x100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <p>
                    <button class="btn btn-success btn-lg btn-block" type="button" data-toggle="collapse"
                        aria-expanded="false" data-target="#Third" aria-controls="collapseExample">
                        3. Third Dhikr
                    </button>
                </p>
                <div class="collapse" id="Third">
                    <div class="card card-body">
                        <h6> 1. Read these Sunnah (Masnoon) Dhikr after every Salah/Prayer </h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>سُبْحَانَ اللهْ</td>
                                    <td>Subhān Allāh</td>
                                    <td>x33</td>

                                </tr>
                                <tr>
                                    <td>اَلْحَمْدُلِلهْ</td>
                                    <td>Alhamdulillāh</td>
                                    <td>x33</td>
                                </tr>
                                <tr>
                                    <td>اَللهُ اَکْبَرْ</td>
                                    <td>Allāhu akbar</td>
                                    <td>x34</td>
                                </tr>
                                <tr>
                                    <td>لَا إِلَٰهَ إِلَّا ٱللَّٰهُ مُحَمَّدٌ رَسُولُ ٱللَّٰهِ‎</td>
                                    <td>Lā ʾilāha ʾillā llāhu muḥammadur rasūlul ulāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td> أَسْتَغْفِرُ اللّٰهَ‎</td>
                                    <td>ʾastaḡfirululāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>اللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا صَلَّيْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ
                                        اللَّهُمَّ بَارِكْ عَلَى مُحَمَّدٍ، وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا بَارَكْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ</td>
                                    <td>(Darood e Ibrahim) ALLAHUMMA SALLI ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA
                                        SALLAITA ALA IBRAHIMA WA ALA AALI IBRAHIMA INNAKA HAMIDUM MAJID. ALLAHUMMA
                                        BAARIK ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA BAARAKTA ALA IBRAHIMA WA ALA
                                        AALI IBRAHIMA INNAKA HAMIDUM MAJID.</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>أعوذ بالله من الشيطان الرجيم</br>
                                        اللَّهُ لاَ إِلَهَ إِلاَّ هُوَ الْحَيُّ الْقَيُّومُ لاَ تَأْخُذُهُ سِنَةٌ وَلاَ
                                        نَوْمٌ لَهُ مَا فِي السَّمَاوَاتِ وَمَا فِي الأَرْضِ مَنْ ذَا الَّذِي يَشْفَعُ
                                        عِنْدَهُ إِلاَّ بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ
                                        وَلاَ يُحِيطُونَ بِشَيْءٍ مِنْ عِلْمِهِ إِلاَّ بِمَا شَاءَ وَسِعَ كُرْسِيُّهُ
                                        السَّمَاو ;َاتِ وَالأَرْضَ وَلاَ يَئُودُهُ حِفْظُهُمَا وَهُوَ الْعَلِيُّ
                                        الْعَظِيمُ </td>
                                    <td>(Ayatul Kursi) Allahu laaa ilaaha illaa huwal haiyul qai-yoom; laa taakhuzuhoo
                                        sinatunw wa laa nawm; lahoo maa fissamaawaati wa maa fil ard; man zallazee
                                        yashfa'u indahooo illaa be iznih; ya'lamu maa baina aideehim wa maa khalfahum;
                                        wa laa yuheetoona beshai 'immin 'ilmihee illa be maa shaaaa; wasi'a kursiyyuhus
                                        samaa waati wal arda wa la ya'ooduho hifzuhumaa; wa huwal aliyyul 'azeem</td>
                                    <td>x1</td>
                                </tr>
                            </tbody>

                        </table>
                        <h6> 2. Read these Sunnah (Masnoon) Dhikr everyday for life.</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> سُبْحَانَ اﷲِ وَالْحَمْدُِ ﷲِ وَلَآ اِلٰهَ اِلَّا اﷲُ وَاﷲُ اَکْبَرُ وَلَا
                                        حَوْلَ وَلَا قُوَّةَ اِلَّا بِاﷲِ الْعَلِيِ الْعَظِيْمِ.</td>
                                    <td>(Third Kalima) Subhān Allāhi Walhamdullilāhi Walāilāha Illallāhu wallāhuakbar
                                        Walā lāhowla walāquwata ilābillāhil alayilāzeem</td>
                                    <td>x100</td>

                                </tr>
                                <tr>
                                    <td>و صلی اللہ علی النبی الامی</td>
                                    <td>(Darood Shareef) Wassallahu 'Alannabiyil 'Umiyee</td>
                                    <td>x100</td>
                                </tr>
                                <tr>
                                    <td>أسْتَغْفِرُ اللهَ رَبي مِنْ كُلِ ذَنبٍ وَأتُوبُ إلَيهِ</td>
                                    <td>Astaghfirullah rabbi min kulli zambiyon wa atoobu ilaiyh</td>
                                    <td>x100</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6> 3. Delivery of reward per day</h6>
                        <p>Recite Surah Fatihah x1 and Surah al-Ikhlas x3. Have the intention of giving the reward of
                            this to Hadhrat Muhammad (Sallahu'AlahiWasalam), to all the Ambiyaa ('Alahimusalaam), the
                            Sahaabah (RidhwanullahuTa'ala'Anhum) and all the Mashaykh (Rahmatullahi'Alaihum) belonging
                            to the 4 Tasawwuf Silsalahs.</p>
                        <br>
                        <h6> 4. Read these Remedy Zikr everyday as instructed by your Sufi Guide/Shaykh</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>لَااِلٰهَ اِلَّا اللہْ</td>
                                    <td>Laailaha Illalaah</td>
                                    <td>x200</td>

                                </tr>
                                <tr>
                                    <td>لَااِلٰهَ اِلَّا ھُو</td>
                                    <td>Laailaha Ilaahoo</td>
                                    <td>x200</td>
                                </tr>
                                <tr>
                                    <td>حق</td>
                                    <td>Haq</td>
                                    <td>x200</td>
                                </tr>
                                <tr>
                                    <td>اَللہْ</td>
                                    <td>Allah</td>
                                    <td>x100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <p>
                    <button class="btn btn-success btn-lg btn-block" type="button" data-toggle="collapse"
                        aria-expanded="false" data-target="#Fourth" aria-controls="collapseExample">
                        4. Fourth Dhikr
                    </button>
                </p>
                <div class="collapse" id="Fourth">
                    <div class="card card-body">
                        <h6> 1. Read these Sunnah (Masnoon) Dhikr after every Salah/Prayer </h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>سُبْحَانَ اللهْ</td>
                                    <td>Subhān Allāh</td>
                                    <td>x33</td>

                                </tr>
                                <tr>
                                    <td>اَلْحَمْدُلِلهْ</td>
                                    <td>Alhamdulillāh</td>
                                    <td>x33</td>
                                </tr>
                                <tr>
                                    <td>اَللهُ اَکْبَرْ</td>
                                    <td>Allāhu akbar</td>
                                    <td>x34</td>
                                </tr>
                                <tr>
                                    <td>لَا إِلَٰهَ إِلَّا ٱللَّٰهُ مُحَمَّدٌ رَسُولُ ٱللَّٰهِ‎</td>
                                    <td>Lā ʾilāha ʾillā llāhu muḥammadur rasūlul ulāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td> أَسْتَغْفِرُ اللّٰهَ‎</td>
                                    <td>ʾastaḡfirululāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>اللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا صَلَّيْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ
                                        اللَّهُمَّ بَارِكْ عَلَى مُحَمَّدٍ، وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا بَارَكْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ</td>
                                    <td>(Darood e Ibrahim) ALLAHUMMA SALLI ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA
                                        SALLAITA ALA IBRAHIMA WA ALA AALI IBRAHIMA INNAKA HAMIDUM MAJID. ALLAHUMMA
                                        BAARIK ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA BAARAKTA ALA IBRAHIMA WA ALA
                                        AALI IBRAHIMA INNAKA HAMIDUM MAJID.</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>أعوذ بالله من الشيطان الرجيم</br>
                                        اللَّهُ لاَ إِلَهَ إِلاَّ هُوَ الْحَيُّ الْقَيُّومُ لاَ تَأْخُذُهُ سِنَةٌ وَلاَ
                                        نَوْمٌ لَهُ مَا فِي السَّمَاوَاتِ وَمَا فِي الأَرْضِ مَنْ ذَا الَّذِي يَشْفَعُ
                                        عِنْدَهُ إِلاَّ بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ
                                        وَلاَ يُحِيطُونَ بِشَيْءٍ مِنْ عِلْمِهِ إِلاَّ بِمَا شَاءَ وَسِعَ كُرْسِيُّهُ
                                        السَّمَاو ;َاتِ وَالأَرْضَ وَلاَ يَئُودُهُ حِفْظُهُمَا وَهُوَ الْعَلِيُّ
                                        الْعَظِيمُ </td>
                                    <td>(Ayatul Kursi) Allahu laaa ilaaha illaa huwal haiyul qai-yoom; laa taakhuzuhoo
                                        sinatunw wa laa nawm; lahoo maa fissamaawaati wa maa fil ard; man zallazee
                                        yashfa'u indahooo illaa be iznih; ya'lamu maa baina aideehim wa maa khalfahum;
                                        wa laa yuheetoona beshai 'immin 'ilmihee illa be maa shaaaa; wasi'a kursiyyuhus
                                        samaa waati wal arda wa la ya'ooduho hifzuhumaa; wa huwal aliyyul 'azeem</td>
                                    <td>x1</td>
                                </tr>
                            </tbody>

                        </table>
                        <h6> 2. Read these Sunnah (Masnoon) Dhikr everyday for life.</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> سُبْحَانَ اﷲِ وَالْحَمْدُِ ﷲِ وَلَآ اِلٰهَ اِلَّا اﷲُ وَاﷲُ اَکْبَرُ وَلَا
                                        حَوْلَ وَلَا قُوَّةَ اِلَّا بِاﷲِ الْعَلِيِ الْعَظِيْمِ.</td>
                                    <td>(Third Kalima) Subhān Allāhi Walhamdullilāhi Walāilāha Illallāhu wallāhuakbar
                                        Walā lāhowla walāquwata ilābillāhil alayilāzeem</td>
                                    <td>x100</td>

                                </tr>
                                <tr>
                                    <td>و صلی اللہ علی النبی الامی</td>
                                    <td>(Darood Shareef) Wassallahu 'Alannabiyil 'Umiyee</td>
                                    <td>x100</td>
                                </tr>
                                <tr>
                                    <td>أسْتَغْفِرُ اللهَ رَبي مِنْ كُلِ ذَنبٍ وَأتُوبُ إلَيهِ</td>
                                    <td>Astaghfirullah rabbi min kulli zambiyon wa atoobu ilaiyh</td>
                                    <td>x100</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6> 3. Delivery of reward per day</h6>
                        <p>Recite Surah Fatihah x1 and Surah al-Ikhlas x3. Have the intention of giving the reward of
                            this to Hadhrat Muhammad (Sallahu'AlahiWasalam), to all the Ambiyaa ('Alahimusalaam), the
                            Sahaabah (RidhwanullahuTa'ala'Anhum) and all the Mashaykh (Rahmatullahi'Alaihum) belonging
                            to the 4 Tasawwuf Silsalahs.</p>
                        <br>
                        <h6> 4. Read these Remedy Zikr everyday as instructed by your Sufi Guide/Shaykh</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>لَااِلٰهَ اِلَّا اللہْ</td>
                                    <td>Laailaha Illalaah</td>
                                    <td>x200</td>

                                </tr>
                                <tr>
                                    <td>لَااِلٰهَ اِلَّا ھُو</td>
                                    <td>Laailaha Ilaahoo</td>
                                    <td>x300</td>
                                </tr>
                                <tr>
                                    <td>حق</td>
                                    <td>Haq</td>
                                    <td>x300</td>
                                </tr>
                                <tr>
                                    <td>اَللہْ</td>
                                    <td>Allah</td>
                                    <td>x100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <p>
                    <button class="btn btn-success btn-lg btn-block" type="button" data-toggle="collapse"
                        aria-expanded="false" data-target="#Fifth" aria-controls="collapseExample">
                        5. Fifth Dhikr
                    </button>
                </p>
                <div class="collapse" id="Fifth">
                    <div class="card card-body">
                        <h6> 1. Read these Sunnah (Masnoon) Dhikr after every Salah/Prayer </h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>سُبْحَانَ اللهْ</td>
                                    <td>Subhān Allāh</td>
                                    <td>x33</td>

                                </tr>
                                <tr>
                                    <td>اَلْحَمْدُلِلهْ</td>
                                    <td>Alhamdulillāh</td>
                                    <td>x33</td>
                                </tr>
                                <tr>
                                    <td>اَللهُ اَکْبَرْ</td>
                                    <td>Allāhu akbar</td>
                                    <td>x34</td>
                                </tr>
                                <tr>
                                    <td>لَا إِلَٰهَ إِلَّا ٱللَّٰهُ مُحَمَّدٌ رَسُولُ ٱللَّٰهِ‎</td>
                                    <td>Lā ʾilāha ʾillā llāhu muḥammadur rasūlul ulāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td> أَسْتَغْفِرُ اللّٰهَ‎</td>
                                    <td>ʾastaḡfirululāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>اللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا صَلَّيْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ
                                        اللَّهُمَّ بَارِكْ عَلَى مُحَمَّدٍ، وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا بَارَكْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ</td>
                                    <td>(Darood e Ibrahim) ALLAHUMMA SALLI ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA
                                        SALLAITA ALA IBRAHIMA WA ALA AALI IBRAHIMA INNAKA HAMIDUM MAJID. ALLAHUMMA
                                        BAARIK ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA BAARAKTA ALA IBRAHIMA WA ALA
                                        AALI IBRAHIMA INNAKA HAMIDUM MAJID.</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>أعوذ بالله من الشيطان الرجيم</br>
                                        اللَّهُ لاَ إِلَهَ إِلاَّ هُوَ الْحَيُّ الْقَيُّومُ لاَ تَأْخُذُهُ سِنَةٌ وَلاَ
                                        نَوْمٌ لَهُ مَا فِي السَّمَاوَاتِ وَمَا فِي الأَرْضِ مَنْ ذَا الَّذِي يَشْفَعُ
                                        عِنْدَهُ إِلاَّ بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ
                                        وَلاَ يُحِيطُونَ بِشَيْءٍ مِنْ عِلْمِهِ إِلاَّ بِمَا شَاءَ وَسِعَ كُرْسِيُّهُ
                                        السَّمَاو ;َاتِ وَالأَرْضَ وَلاَ يَئُودُهُ حِفْظُهُمَا وَهُوَ الْعَلِيُّ
                                        الْعَظِيمُ </td>
                                    <td>(Ayatul Kursi) Allahu laaa ilaaha illaa huwal haiyul qai-yoom; laa taakhuzuhoo
                                        sinatunw wa laa nawm; lahoo maa fissamaawaati wa maa fil ard; man zallazee
                                        yashfa'u indahooo illaa be iznih; ya'lamu maa baina aideehim wa maa khalfahum;
                                        wa laa yuheetoona beshai 'immin 'ilmihee illa be maa shaaaa; wasi'a kursiyyuhus
                                        samaa waati wal arda wa la ya'ooduho hifzuhumaa; wa huwal aliyyul 'azeem</td>
                                    <td>x1</td>
                                </tr>
                            </tbody>

                        </table>
                        <h6> 2. Read these Sunnah (Masnoon) Dhikr everyday for life.</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> سُبْحَانَ اﷲِ وَالْحَمْدُِ ﷲِ وَلَآ اِلٰهَ اِلَّا اﷲُ وَاﷲُ اَکْبَرُ وَلَا
                                        حَوْلَ وَلَا قُوَّةَ اِلَّا بِاﷲِ الْعَلِيِ الْعَظِيْمِ.</td>
                                    <td>(Third Kalima) Subhān Allāhi Walhamdullilāhi Walāilāha Illallāhu wallāhuakbar
                                        Walā lāhowla walāquwata ilābillāhil alayilāzeem</td>
                                    <td>x100</td>

                                </tr>
                                <tr>
                                    <td>و صلی اللہ علی النبی الامی</td>
                                    <td>(Darood Shareef) Wassallahu 'Alannabiyil 'Umiyee</td>
                                    <td>x100</td>
                                </tr>
                                <tr>
                                    <td>أسْتَغْفِرُ اللهَ رَبي مِنْ كُلِ ذَنبٍ وَأتُوبُ إلَيهِ</td>
                                    <td>Astaghfirullah rabbi min kulli zambiyon wa atoobu ilaiyh</td>
                                    <td>x100</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6> 3. Delivery of reward per day</h6>
                        <p>Recite Surah Fatihah x1 and Surah al-Ikhlas x3. Have the intention of giving the reward of
                            this to Hadhrat Muhammad (Sallahu'AlahiWasalam), to all the Ambiyaa ('Alahimusalaam), the
                            Sahaabah (RidhwanullahuTa'ala'Anhum) and all the Mashaykh (Rahmatullahi'Alaihum) belonging
                            to the 4 Tasawwuf Silsalahs.</p>
                        <br>
                        <h6> 4. Read these Remedy Zikr everyday as instructed by your Sufi Guide/Shaykh</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>لَااِلٰهَ اِلَّا اللہْ</td>
                                    <td>Laailaha Illalaah</td>
                                    <td>x200</td>

                                </tr>
                                <tr>
                                    <td>لَااِلٰهَ اِلَّا ھُو</td>
                                    <td>Laailaha Ilaahoo</td>
                                    <td>x400</td>
                                </tr>
                                <tr>
                                    <td>حق</td>
                                    <td>Haq</td>
                                    <td>x400</td>
                                </tr>
                                <tr>
                                    <td>اَللہْ</td>
                                    <td>Allah</td>
                                    <td>x100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <p>
                    <button class="btn btn-success btn-lg btn-block" type="button" data-toggle="collapse"
                        aria-expanded="false" data-target="#Sixth" aria-controls="collapseExample">
                        6. Sixth Dhikr
                    </button>
                </p>
                <div class="collapse" id="Sixth">
                    <div class="card card-body">
                        <h6> 1. Read these Sunnah (Masnoon) Dhikr after every Salah/Prayer </h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>سُبْحَانَ اللهْ</td>
                                    <td>Subhān Allāh</td>
                                    <td>x33</td>

                                </tr>
                                <tr>
                                    <td>اَلْحَمْدُلِلهْ</td>
                                    <td>Alhamdulillāh</td>
                                    <td>x33</td>
                                </tr>
                                <tr>
                                    <td>اَللهُ اَکْبَرْ</td>
                                    <td>Allāhu akbar</td>
                                    <td>x34</td>
                                </tr>
                                <tr>
                                    <td>لَا إِلَٰهَ إِلَّا ٱللَّٰهُ مُحَمَّدٌ رَسُولُ ٱللَّٰهِ‎</td>
                                    <td>Lā ʾilāha ʾillā llāhu muḥammadur rasūlul ulāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td> أَسْتَغْفِرُ اللّٰهَ‎</td>
                                    <td>ʾastaḡfirululāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>اللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا صَلَّيْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ
                                        اللَّهُمَّ بَارِكْ عَلَى مُحَمَّدٍ، وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا بَارَكْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ</td>
                                    <td>(Darood e Ibrahim) ALLAHUMMA SALLI ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA
                                        SALLAITA ALA IBRAHIMA WA ALA AALI IBRAHIMA INNAKA HAMIDUM MAJID. ALLAHUMMA
                                        BAARIK ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA BAARAKTA ALA IBRAHIMA WA ALA
                                        AALI IBRAHIMA INNAKA HAMIDUM MAJID.</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>أعوذ بالله من الشيطان الرجيم</br>
                                        اللَّهُ لاَ إِلَهَ إِلاَّ هُوَ الْحَيُّ الْقَيُّومُ لاَ تَأْخُذُهُ سِنَةٌ وَلاَ
                                        نَوْمٌ لَهُ مَا فِي السَّمَاوَاتِ وَمَا فِي الأَرْضِ مَنْ ذَا الَّذِي يَشْفَعُ
                                        عِنْدَهُ إِلاَّ بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ
                                        وَلاَ يُحِيطُونَ بِشَيْءٍ مِنْ عِلْمِهِ إِلاَّ بِمَا شَاءَ وَسِعَ كُرْسِيُّهُ
                                        السَّمَاو ;َاتِ وَالأَرْضَ وَلاَ يَئُودُهُ حِفْظُهُمَا وَهُوَ الْعَلِيُّ
                                        الْعَظِيمُ </td>
                                    <td>(Ayatul Kursi) Allahu laaa ilaaha illaa huwal haiyul qai-yoom; laa taakhuzuhoo
                                        sinatunw wa laa nawm; lahoo maa fissamaawaati wa maa fil ard; man zallazee
                                        yashfa'u indahooo illaa be iznih; ya'lamu maa baina aideehim wa maa khalfahum;
                                        wa laa yuheetoona beshai 'immin 'ilmihee illa be maa shaaaa; wasi'a kursiyyuhus
                                        samaa waati wal arda wa la ya'ooduho hifzuhumaa; wa huwal aliyyul 'azeem</td>
                                    <td>x1</td>
                                </tr>
                            </tbody>

                        </table>
                        <h6> 2. Read these Sunnah (Masnoon) Dhikr everyday for life.</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> سُبْحَانَ اﷲِ وَالْحَمْدُِ ﷲِ وَلَآ اِلٰهَ اِلَّا اﷲُ وَاﷲُ اَکْبَرُ وَلَا
                                        حَوْلَ وَلَا قُوَّةَ اِلَّا بِاﷲِ الْعَلِيِ الْعَظِيْمِ.</td>
                                    <td>(Third Kalima) Subhān Allāhi Walhamdullilāhi Walāilāha Illallāhu wallāhuakbar
                                        Walā lāhowla walāquwata ilābillāhil alayilāzeem</td>
                                    <td>x100</td>

                                </tr>
                                <tr>
                                    <td>و صلی اللہ علی النبی الامی</td>
                                    <td>(Darood Shareef) Wassallahu 'Alannabiyil 'Umiyee</td>
                                    <td>x100</td>
                                </tr>
                                <tr>
                                    <td>أسْتَغْفِرُ اللهَ رَبي مِنْ كُلِ ذَنبٍ وَأتُوبُ إلَيهِ</td>
                                    <td>Astaghfirullah rabbi min kulli zambiyon wa atoobu ilaiyh</td>
                                    <td>x100</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6> 3. Delivery of reward per day</h6>
                        <p>Recite Surah Fatihah x1 and Surah al-Ikhlas x3. Have the intention of giving the reward of
                            this to Hadhrat Muhammad (Sallahu'AlahiWasalam), to all the Ambiyaa ('Alahimusalaam), the
                            Sahaabah (RidhwanullahuTa'ala'Anhum) and all the Mashaykh (Rahmatullahi'Alaihum) belonging
                            to the 4 Tasawwuf Silsalahs.</p>
                        <br>
                        <h6> 4. Read these Remedy Zikr everyday as instructed by your Sufi Guide/Shaykh</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>لَااِلٰهَ اِلَّا اللہْ</td>
                                    <td>Laailaha Illalaah</td>
                                    <td>x200</td>

                                </tr>
                                <tr>
                                    <td>لَااِلٰهَ اِلَّا ھُو</td>
                                    <td>Laailaha Ilaahoo</td>
                                    <td>x400</td>
                                </tr>
                                <tr>
                                    <td>حق</td>
                                    <td>Haq</td>
                                    <td>x600</td>
                                </tr>
                                <tr>
                                    <td>اَللہْ</td>
                                    <td>Allah</td>
                                    <td>x100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>

                <h2 class="heading_2">Muraqaba/Meditation Method</h2>

                <div class="text-center">
                    <div class="polaroid">
                        <img style="border-radius:8px;max-width:100%;" src="{{asset('images/latifa.png')}}">
                    </div>
                </div>
                <br>
                <p>
                    <button class="btn btn-success btn-lg btn-block" type="button" data-toggle="collapse"
                        aria-expanded="false" data-target="#Qalb" aria-controls="collapseExample">
                        1. Latifa e Qalb
                    </button>
                </p>
                <div class="collapse" id="Qalb">
                    <div class="card card-body">
                        <h6> 1. Read these Sunnah (Masnoon) Dhikr after every Salah/Prayer </h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>سُبْحَانَ اللهْ</td>
                                    <td>Subhān Allāh</td>
                                    <td>x33</td>

                                </tr>
                                <tr>
                                    <td>اَلْحَمْدُلِلهْ</td>
                                    <td>Alhamdulillāh</td>
                                    <td>x33</td>
                                </tr>
                                <tr>
                                    <td>اَللهُ اَکْبَرْ</td>
                                    <td>Allāhu akbar</td>
                                    <td>x34</td>
                                </tr>
                                <tr>
                                    <td>لَا إِلَٰهَ إِلَّا ٱللَّٰهُ مُحَمَّدٌ رَسُولُ ٱللَّٰهِ‎</td>
                                    <td>Lā ʾilāha ʾillā llāhu muḥammadur rasūlul ulāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td> أَسْتَغْفِرُ اللّٰهَ‎</td>
                                    <td>ʾastaḡfirululāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>اللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا صَلَّيْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ
                                        اللَّهُمَّ بَارِكْ عَلَى مُحَمَّدٍ، وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا بَارَكْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ</td>
                                    <td>(Darood e Ibrahim) ALLAHUMMA SALLI ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA
                                        SALLAITA ALA IBRAHIMA WA ALA AALI IBRAHIMA INNAKA HAMIDUM MAJID. ALLAHUMMA
                                        BAARIK ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA BAARAKTA ALA IBRAHIMA WA ALA
                                        AALI IBRAHIMA INNAKA HAMIDUM MAJID.</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>أعوذ بالله من الشيطان الرجيم</br>
                                        اللَّهُ لاَ إِلَهَ إِلاَّ هُوَ الْحَيُّ الْقَيُّومُ لاَ تَأْخُذُهُ سِنَةٌ وَلاَ
                                        نَوْمٌ لَهُ مَا فِي السَّمَاوَاتِ وَمَا فِي الأَرْضِ مَنْ ذَا الَّذِي يَشْفَعُ
                                        عِنْدَهُ إِلاَّ بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ
                                        وَلاَ يُحِيطُونَ بِشَيْءٍ مِنْ عِلْمِهِ إِلاَّ بِمَا شَاءَ وَسِعَ كُرْسِيُّهُ
                                        السَّمَاو ;َاتِ وَالأَرْضَ وَلاَ يَئُودُهُ حِفْظُهُمَا وَهُوَ الْعَلِيُّ
                                        الْعَظِيمُ </td>
                                    <td>(Ayatul Kursi) Allahu laaa ilaaha illaa huwal haiyul qai-yoom; laa taakhuzuhoo
                                        sinatunw wa laa nawm; lahoo maa fissamaawaati wa maa fil ard; man zallazee
                                        yashfa'u indahooo illaa be iznih; ya'lamu maa baina aideehim wa maa khalfahum;
                                        wa laa yuheetoona beshai 'immin 'ilmihee illa be maa shaaaa; wasi'a kursiyyuhus
                                        samaa waati wal arda wa la ya'ooduho hifzuhumaa; wa huwal aliyyul 'azeem</td>
                                    <td>x1</td>
                                </tr>
                            </tbody>

                        </table>
                        <h6> 2. Read these Sunnah (Masnoon) Dhikr everyday for life.</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> سُبْحَانَ اﷲِ وَالْحَمْدُِ ﷲِ وَلَآ اِلٰهَ اِلَّا اﷲُ وَاﷲُ اَکْبَرُ وَلَا
                                        حَوْلَ وَلَا قُوَّةَ اِلَّا بِاﷲِ الْعَلِيِ الْعَظِيْمِ.</td>
                                    <td>(Third Kalima) Subhān Allāhi Walhamdullilāhi Walāilāha Illallāhu wallāhuakbar
                                        Walā lāhowla walāquwata ilābillāhil alayilāzeem</td>
                                    <td>x100</td>

                                </tr>
                                <tr>
                                    <td>و صلی اللہ علی النبی الامی</td>
                                    <td>(Darood Shareef) Wassallahu 'Alannabiyil 'Umiyee</td>
                                    <td>x100</td>
                                </tr>
                                <tr>
                                    <td>أسْتَغْفِرُ اللهَ رَبي مِنْ كُلِ ذَنبٍ وَأتُوبُ إلَيهِ</td>
                                    <td>Astaghfirullah rabbi min kulli zambiyon wa atoobu ilaiyh</td>
                                    <td>x100</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6> 3. Delivery of reward per day</h6>
                        <p>Recite Surah Fatihah x1 and Surah al-Ikhlas x3. Have the intention of giving the reward of
                            this to Hadhrat Muhammad (Sallahu'AlahiWasalam), to all the Ambiyaa ('Alahimusalaam), the
                            Sahaabah (RidhwanullahuTa'ala'Anhum) and all the Mashaykh (Rahmatullahi'Alaihum) belonging
                            to the 4 Tasawwuf Silsalahs.</p>
                        <br>
                        <h6> 4. Practise the Muraqabah/Meditation lesson as instructed by your Sufi Guide/Shaykh</h6>

                        <p> Latifa e Qalb: Whilst having the Eyes closed, Mouth closed (tongue should not move) and
                            Facing the Qiblah imagine that the (spiritual Heart - located at Latifa e Qalb [see diagram
                            above]) is proclaiming الله، الله (Allah, Allah) repeatedly and Allah ta'ala is looking at
                            your Heart with love. </p><br>
                    </div>
                </div>
                <br>
                <p>
                    <button class="btn btn-success btn-lg btn-block" type="button" data-toggle="collapse"
                        aria-expanded="false" data-target="#Rooh" aria-controls="collapseExample">
                        2. Latifa e Rooh
                    </button>
                </p>
                <div class="collapse" id="Rooh">
                    <div class="card card-body">
                        <h6> 1. Read these Sunnah (Masnoon) Dhikr after every Salah/Prayer </h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>سُبْحَانَ اللهْ</td>
                                    <td>Subhān Allāh</td>
                                    <td>x33</td>

                                </tr>
                                <tr>
                                    <td>اَلْحَمْدُلِلهْ</td>
                                    <td>Alhamdulillāh</td>
                                    <td>x33</td>
                                </tr>
                                <tr>
                                    <td>اَللهُ اَکْبَرْ</td>
                                    <td>Allāhu akbar</td>
                                    <td>x34</td>
                                </tr>
                                <tr>
                                    <td>لَا إِلَٰهَ إِلَّا ٱللَّٰهُ مُحَمَّدٌ رَسُولُ ٱللَّٰهِ‎</td>
                                    <td>Lā ʾilāha ʾillā llāhu muḥammadur rasūlul ulāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td> أَسْتَغْفِرُ اللّٰهَ‎</td>
                                    <td>ʾastaḡfirululāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>اللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا صَلَّيْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ
                                        اللَّهُمَّ بَارِكْ عَلَى مُحَمَّدٍ، وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا بَارَكْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ</td>
                                    <td>(Darood e Ibrahim) ALLAHUMMA SALLI ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA
                                        SALLAITA ALA IBRAHIMA WA ALA AALI IBRAHIMA INNAKA HAMIDUM MAJID. ALLAHUMMA
                                        BAARIK ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA BAARAKTA ALA IBRAHIMA WA ALA
                                        AALI IBRAHIMA INNAKA HAMIDUM MAJID.</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>أعوذ بالله من الشيطان الرجيم</br>
                                        اللَّهُ لاَ إِلَهَ إِلاَّ هُوَ الْحَيُّ الْقَيُّومُ لاَ تَأْخُذُهُ سِنَةٌ وَلاَ
                                        نَوْمٌ لَهُ مَا فِي السَّمَاوَاتِ وَمَا فِي الأَرْضِ مَنْ ذَا الَّذِي يَشْفَعُ
                                        عِنْدَهُ إِلاَّ بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ
                                        وَلاَ يُحِيطُونَ بِشَيْءٍ مِنْ عِلْمِهِ إِلاَّ بِمَا شَاءَ وَسِعَ كُرْسِيُّهُ
                                        السَّمَاو ;َاتِ وَالأَرْضَ وَلاَ يَئُودُهُ حِفْظُهُمَا وَهُوَ الْعَلِيُّ
                                        الْعَظِيمُ </td>
                                    <td>(Ayatul Kursi) Allahu laaa ilaaha illaa huwal haiyul qai-yoom; laa taakhuzuhoo
                                        sinatunw wa laa nawm; lahoo maa fissamaawaati wa maa fil ard; man zallazee
                                        yashfa'u indahooo illaa be iznih; ya'lamu maa baina aideehim wa maa khalfahum;
                                        wa laa yuheetoona beshai 'immin 'ilmihee illa be maa shaaaa; wasi'a kursiyyuhus
                                        samaa waati wal arda wa la ya'ooduho hifzuhumaa; wa huwal aliyyul 'azeem</td>
                                    <td>x1</td>
                                </tr>
                            </tbody>

                        </table>
                        <h6> 2. Read these Sunnah (Masnoon) Dhikr everyday for life.</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> سُبْحَانَ اﷲِ وَالْحَمْدُِ ﷲِ وَلَآ اِلٰهَ اِلَّا اﷲُ وَاﷲُ اَکْبَرُ وَلَا
                                        حَوْلَ وَلَا قُوَّةَ اِلَّا بِاﷲِ الْعَلِيِ الْعَظِيْمِ.</td>
                                    <td>(Third Kalima) Subhān Allāhi Walhamdullilāhi Walāilāha Illallāhu wallāhuakbar
                                        Walā lāhowla walāquwata ilābillāhil alayilāzeem</td>
                                    <td>x100</td>

                                </tr>
                                <tr>
                                    <td>و صلی اللہ علی النبی الامی</td>
                                    <td>(Darood Shareef) Wassallahu 'Alannabiyil 'Umiyee</td>
                                    <td>x100</td>
                                </tr>
                                <tr>
                                    <td>أسْتَغْفِرُ اللهَ رَبي مِنْ كُلِ ذَنبٍ وَأتُوبُ إلَيهِ</td>
                                    <td>Astaghfirullah rabbi min kulli zambiyon wa atoobu ilaiyh</td>
                                    <td>x100</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6> 3. Delivery of reward per day</h6>
                        <p>Recite Surah Fatihah x1 and Surah al-Ikhlas x3. Have the intention of giving the reward of
                            this to Hadhrat Muhammad (Sallahu'AlahiWasalam), to all the Ambiyaa ('Alahimusalaam), the
                            Sahaabah (RidhwanullahuTa'ala'Anhum) and all the Mashaykh (Rahmatullahi'Alaihum) belonging
                            to the 4 Tasawwuf Silsalahs.</p>
                        <br>
                        <h6> 4. Practise the Muraqabah/Meditation lesson as instructed by your Sufi Guide/Shaykh</h6>

                        <p> Latifa e Rooh: Whilst having the Eyes closed, Mouth closed
                            (tongue should not move) and Facing the Qiblah imagine that from the Latifa e Rooh (see diagram above) is emenating الله، الله (Allah, Allah) repeatedly and
                            Allah
                            ta'ala is looking at your Latifa e Rooh with love. </p><br>
                    </div>
                </div>
                <br>
                <p>
                    <button class="btn btn-success btn-lg btn-block" type="button" data-toggle="collapse"
                        aria-expanded="false" data-target="#Sirr" aria-controls="collapseExample">
                        3. Latifa e Sirr
                    </button>
                </p>
                <div class="collapse" id="Sirr">
                    <div class="card card-body">
                        <h6> 1. Read these Sunnah (Masnoon) Dhikr after every Salah/Prayer </h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>سُبْحَانَ اللهْ</td>
                                    <td>Subhān Allāh</td>
                                    <td>x33</td>

                                </tr>
                                <tr>
                                    <td>اَلْحَمْدُلِلهْ</td>
                                    <td>Alhamdulillāh</td>
                                    <td>x33</td>
                                </tr>
                                <tr>
                                    <td>اَللهُ اَکْبَرْ</td>
                                    <td>Allāhu akbar</td>
                                    <td>x34</td>
                                </tr>
                                <tr>
                                    <td>لَا إِلَٰهَ إِلَّا ٱللَّٰهُ مُحَمَّدٌ رَسُولُ ٱللَّٰهِ‎</td>
                                    <td>Lā ʾilāha ʾillā llāhu muḥammadur rasūlul ulāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td> أَسْتَغْفِرُ اللّٰهَ‎</td>
                                    <td>ʾastaḡfirululāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>اللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا صَلَّيْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ
                                        اللَّهُمَّ بَارِكْ عَلَى مُحَمَّدٍ، وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا بَارَكْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ</td>
                                    <td>(Darood e Ibrahim) ALLAHUMMA SALLI ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA
                                        SALLAITA ALA IBRAHIMA WA ALA AALI IBRAHIMA INNAKA HAMIDUM MAJID. ALLAHUMMA
                                        BAARIK ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA BAARAKTA ALA IBRAHIMA WA ALA
                                        AALI IBRAHIMA INNAKA HAMIDUM MAJID.</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>أعوذ بالله من الشيطان الرجيم</br>
                                        اللَّهُ لاَ إِلَهَ إِلاَّ هُوَ الْحَيُّ الْقَيُّومُ لاَ تَأْخُذُهُ سِنَةٌ وَلاَ
                                        نَوْمٌ لَهُ مَا فِي السَّمَاوَاتِ وَمَا فِي الأَرْضِ مَنْ ذَا الَّذِي يَشْفَعُ
                                        عِنْدَهُ إِلاَّ بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ
                                        وَلاَ يُحِيطُونَ بِشَيْءٍ مِنْ عِلْمِهِ إِلاَّ بِمَا شَاءَ وَسِعَ كُرْسِيُّهُ
                                        السَّمَاو ;َاتِ وَالأَرْضَ وَلاَ يَئُودُهُ حِفْظُهُمَا وَهُوَ الْعَلِيُّ
                                        الْعَظِيمُ </td>
                                    <td>(Ayatul Kursi) Allahu laaa ilaaha illaa huwal haiyul qai-yoom; laa taakhuzuhoo
                                        sinatunw wa laa nawm; lahoo maa fissamaawaati wa maa fil ard; man zallazee
                                        yashfa'u indahooo illaa be iznih; ya'lamu maa baina aideehim wa maa khalfahum;
                                        wa laa yuheetoona beshai 'immin 'ilmihee illa be maa shaaaa; wasi'a kursiyyuhus
                                        samaa waati wal arda wa la ya'ooduho hifzuhumaa; wa huwal aliyyul 'azeem</td>
                                    <td>x1</td>
                                </tr>
                            </tbody>

                        </table>
                        <h6> 2. Read these Sunnah (Masnoon) Dhikr everyday for life.</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> سُبْحَانَ اﷲِ وَالْحَمْدُِ ﷲِ وَلَآ اِلٰهَ اِلَّا اﷲُ وَاﷲُ اَکْبَرُ وَلَا
                                        حَوْلَ وَلَا قُوَّةَ اِلَّا بِاﷲِ الْعَلِيِ الْعَظِيْمِ.</td>
                                    <td>(Third Kalima) Subhān Allāhi Walhamdullilāhi Walāilāha Illallāhu wallāhuakbar
                                        Walā lāhowla walāquwata ilābillāhil alayilāzeem</td>
                                    <td>x100</td>

                                </tr>
                                <tr>
                                    <td>و صلی اللہ علی النبی الامی</td>
                                    <td>(Darood Shareef) Wassallahu 'Alannabiyil 'Umiyee</td>
                                    <td>x100</td>
                                </tr>
                                <tr>
                                    <td>أسْتَغْفِرُ اللهَ رَبي مِنْ كُلِ ذَنبٍ وَأتُوبُ إلَيهِ</td>
                                    <td>Astaghfirullah rabbi min kulli zambiyon wa atoobu ilaiyh</td>
                                    <td>x100</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6> 3. Delivery of reward per day</h6>
                        <p>Recite Surah Fatihah x1 and Surah al-Ikhlas x3. Have the intention of giving the reward of
                            this to Hadhrat Muhammad (Sallahu'AlahiWasalam), to all the Ambiyaa ('Alahimusalaam), the
                            Sahaabah (RidhwanullahuTa'ala'Anhum) and all the Mashaykh (Rahmatullahi'Alaihum) belonging
                            to the 4 Tasawwuf Silsalahs.</p>
                        <br>
                        <h6> 4. Practise the Muraqabah/Meditation lesson as instructed by your Sufi Guide/Shaykh</h6>

                        <p> Latifa e Sirr: Whilst having the Eyes closed, Mouth closed
                            (tongue should not move) and Facing the Qiblah imagine that from the Latifa e Sirr (see diagram above) is emenating الله، الله (Allah, Allah) repeatedly and
                            Allah
                            ta'ala is looking at your Latifa e Sirr with love. </p><br>
                    </div>
                </div>
                <br>
                <p>
                    <button class="btn btn-success btn-lg btn-block" type="button" data-toggle="collapse"
                        aria-expanded="false" data-target="#Khafi" aria-controls="collapseExample">
                        4. Latifa e Khafi
                    </button>
                </p>
                <div class="collapse" id="Khafi">
                    <div class="card card-body">
                        <h6> 1. Read these Sunnah (Masnoon) Dhikr after every Salah/Prayer </h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>سُبْحَانَ اللهْ</td>
                                    <td>Subhān Allāh</td>
                                    <td>x33</td>

                                </tr>
                                <tr>
                                    <td>اَلْحَمْدُلِلهْ</td>
                                    <td>Alhamdulillāh</td>
                                    <td>x33</td>
                                </tr>
                                <tr>
                                    <td>اَللهُ اَکْبَرْ</td>
                                    <td>Allāhu akbar</td>
                                    <td>x34</td>
                                </tr>
                                <tr>
                                    <td>لَا إِلَٰهَ إِلَّا ٱللَّٰهُ مُحَمَّدٌ رَسُولُ ٱللَّٰهِ‎</td>
                                    <td>Lā ʾilāha ʾillā llāhu muḥammadur rasūlul ulāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td> أَسْتَغْفِرُ اللّٰهَ‎</td>
                                    <td>ʾastaḡfirululāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>اللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا صَلَّيْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ
                                        اللَّهُمَّ بَارِكْ عَلَى مُحَمَّدٍ، وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا بَارَكْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ</td>
                                    <td>(Darood e Ibrahim) ALLAHUMMA SALLI ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA
                                        SALLAITA ALA IBRAHIMA WA ALA AALI IBRAHIMA INNAKA HAMIDUM MAJID. ALLAHUMMA
                                        BAARIK ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA BAARAKTA ALA IBRAHIMA WA ALA
                                        AALI IBRAHIMA INNAKA HAMIDUM MAJID.</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>أعوذ بالله من الشيطان الرجيم</br>
                                        اللَّهُ لاَ إِلَهَ إِلاَّ هُوَ الْحَيُّ الْقَيُّومُ لاَ تَأْخُذُهُ سِنَةٌ وَلاَ
                                        نَوْمٌ لَهُ مَا فِي السَّمَاوَاتِ وَمَا فِي الأَرْضِ مَنْ ذَا الَّذِي يَشْفَعُ
                                        عِنْدَهُ إِلاَّ بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ
                                        وَلاَ يُحِيطُونَ بِشَيْءٍ مِنْ عِلْمِهِ إِلاَّ بِمَا شَاءَ وَسِعَ كُرْسِيُّهُ
                                        السَّمَاو ;َاتِ وَالأَرْضَ وَلاَ يَئُودُهُ حِفْظُهُمَا وَهُوَ الْعَلِيُّ
                                        الْعَظِيمُ </td>
                                    <td>(Ayatul Kursi) Allahu laaa ilaaha illaa huwal haiyul qai-yoom; laa taakhuzuhoo
                                        sinatunw wa laa nawm; lahoo maa fissamaawaati wa maa fil ard; man zallazee
                                        yashfa'u indahooo illaa be iznih; ya'lamu maa baina aideehim wa maa khalfahum;
                                        wa laa yuheetoona beshai 'immin 'ilmihee illa be maa shaaaa; wasi'a kursiyyuhus
                                        samaa waati wal arda wa la ya'ooduho hifzuhumaa; wa huwal aliyyul 'azeem</td>
                                    <td>x1</td>
                                </tr>
                            </tbody>

                        </table>
                        <h6> 2. Read these Sunnah (Masnoon) Dhikr everyday for life.</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> سُبْحَانَ اﷲِ وَالْحَمْدُِ ﷲِ وَلَآ اِلٰهَ اِلَّا اﷲُ وَاﷲُ اَکْبَرُ وَلَا
                                        حَوْلَ وَلَا قُوَّةَ اِلَّا بِاﷲِ الْعَلِيِ الْعَظِيْمِ.</td>
                                    <td>(Third Kalima) Subhān Allāhi Walhamdullilāhi Walāilāha Illallāhu wallāhuakbar
                                        Walā lāhowla walāquwata ilābillāhil alayilāzeem</td>
                                    <td>x100</td>

                                </tr>
                                <tr>
                                    <td>و صلی اللہ علی النبی الامی</td>
                                    <td>(Darood Shareef) Wassallahu 'Alannabiyil 'Umiyee</td>
                                    <td>x100</td>
                                </tr>
                                <tr>
                                    <td>أسْتَغْفِرُ اللهَ رَبي مِنْ كُلِ ذَنبٍ وَأتُوبُ إلَيهِ</td>
                                    <td>Astaghfirullah rabbi min kulli zambiyon wa atoobu ilaiyh</td>
                                    <td>x100</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6> 3. Delivery of reward per day</h6>
                        <p>Recite Surah Fatihah x1 and Surah al-Ikhlas x3. Have the intention of giving the reward of
                            this to Hadhrat Muhammad (Sallahu'AlahiWasalam), to all the Ambiyaa ('Alahimusalaam), the
                            Sahaabah (RidhwanullahuTa'ala'Anhum) and all the Mashaykh (Rahmatullahi'Alaihum) belonging
                            to the 4 Tasawwuf Silsalahs.</p>
                        <br>
                        <h6> 4. Practise the Muraqabah/Meditation lesson as instructed by your Sufi Guide/Shaykh</h6>

                        <p>  Latifa e Khafi: Whilst having the Eyes closed, Mouth closed
                            (tongue should not move) and Facing the Qiblah imagine that from the Latifa e Khafi (see diagram above) is emenating الله، الله (Allah, Allah) repeatedly and
                            Allah
                            ta'ala is looking at your Latifa e Khafi with love. </p><br>
                    </div>
                </div>
                <br>
                <p>
                    <button class="btn btn-success btn-lg btn-block" type="button" data-toggle="collapse"
                        aria-expanded="false" data-target="#Ikhfa" aria-controls="collapseExample">
                        5. Latifa e Ikhfa
                    </button>
                </p>
                <div class="collapse" id="Ikhfa">
                    < <div class="card card-body">
                        <h6> 1. Read these Sunnah (Masnoon) Dhikr after every Salah/Prayer </h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>سُبْحَانَ اللهْ</td>
                                    <td>Subhān Allāh</td>
                                    <td>x33</td>

                                </tr>
                                <tr>
                                    <td>اَلْحَمْدُلِلهْ</td>
                                    <td>Alhamdulillāh</td>
                                    <td>x33</td>
                                </tr>
                                <tr>
                                    <td>اَللهُ اَکْبَرْ</td>
                                    <td>Allāhu akbar</td>
                                    <td>x34</td>
                                </tr>
                                <tr>
                                    <td>لَا إِلَٰهَ إِلَّا ٱللَّٰهُ مُحَمَّدٌ رَسُولُ ٱللَّٰهِ‎</td>
                                    <td>Lā ʾilāha ʾillā llāhu muḥammadur rasūlul ulāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td> أَسْتَغْفِرُ اللّٰهَ‎</td>
                                    <td>ʾastaḡfirululāh</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>اللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا صَلَّيْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ
                                        اللَّهُمَّ بَارِكْ عَلَى مُحَمَّدٍ، وَعَلَى آلِ مُحَمَّدٍ
                                        كَمَا بَارَكْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
                                        .إِنَّكَ حَمِيدٌ مَجِيدٌ</td>
                                    <td>(Darood e Ibrahim) ALLAHUMMA SALLI ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA
                                        SALLAITA ALA IBRAHIMA WA ALA AALI IBRAHIMA INNAKA HAMIDUM MAJID. ALLAHUMMA
                                        BAARIK ALA MUHAMMADIW WA ALA AALI MUHAMMADIN KAMAA BAARAKTA ALA IBRAHIMA WA ALA
                                        AALI IBRAHIMA INNAKA HAMIDUM MAJID.</td>
                                    <td>x3</td>
                                </tr>
                                <tr>
                                    <td>أعوذ بالله من الشيطان الرجيم</br>
                                        اللَّهُ لاَ إِلَهَ إِلاَّ هُوَ الْحَيُّ الْقَيُّومُ لاَ تَأْخُذُهُ سِنَةٌ وَلاَ
                                        نَوْمٌ لَهُ مَا فِي السَّمَاوَاتِ وَمَا فِي الأَرْضِ مَنْ ذَا الَّذِي يَشْفَعُ
                                        عِنْدَهُ إِلاَّ بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ
                                        وَلاَ يُحِيطُونَ بِشَيْءٍ مِنْ عِلْمِهِ إِلاَّ بِمَا شَاءَ وَسِعَ كُرْسِيُّهُ
                                        السَّمَاو ;َاتِ وَالأَرْضَ وَلاَ يَئُودُهُ حِفْظُهُمَا وَهُوَ الْعَلِيُّ
                                        الْعَظِيمُ </td>
                                    <td>(Ayatul Kursi) Allahu laaa ilaaha illaa huwal haiyul qai-yoom; laa taakhuzuhoo
                                        sinatunw wa laa nawm; lahoo maa fissamaawaati wa maa fil ard; man zallazee
                                        yashfa'u indahooo illaa be iznih; ya'lamu maa baina aideehim wa maa khalfahum;
                                        wa laa yuheetoona beshai 'immin 'ilmihee illa be maa shaaaa; wasi'a kursiyyuhus
                                        samaa waati wal arda wa la ya'ooduho hifzuhumaa; wa huwal aliyyul 'azeem</td>
                                    <td>x1</td>
                                </tr>
                            </tbody>

                        </table>
                        <h6> 2. Read these Sunnah (Masnoon) Dhikr everyday for life.</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dhikr</th>
                                    <th scope="col">Transliteration</th>
                                    <th scope="col">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> سُبْحَانَ اﷲِ وَالْحَمْدُِ ﷲِ وَلَآ اِلٰهَ اِلَّا اﷲُ وَاﷲُ اَکْبَرُ وَلَا
                                        حَوْلَ وَلَا قُوَّةَ اِلَّا بِاﷲِ الْعَلِيِ الْعَظِيْمِ.</td>
                                    <td>(Third Kalima) Subhān Allāhi Walhamdullilāhi Walāilāha Illallāhu wallāhuakbar
                                        Walā lāhowla walāquwata ilābillāhil alayilāzeem</td>
                                    <td>x100</td>

                                </tr>
                                <tr>
                                    <td>و صلی اللہ علی النبی الامی</td>
                                    <td>(Darood Shareef) Wassallahu 'Alannabiyil 'Umiyee</td>
                                    <td>x100</td>
                                </tr>
                                <tr>
                                    <td>أسْتَغْفِرُ اللهَ رَبي مِنْ كُلِ ذَنبٍ وَأتُوبُ إلَيهِ</td>
                                    <td>Astaghfirullah rabbi min kulli zambiyon wa atoobu ilaiyh</td>
                                    <td>x100</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6> 3. Delivery of reward per day</h6>
                        <p>Recite Surah Fatihah x1 and Surah al-Ikhlas x3. Have the intention of giving the reward of
                            this to Hadhrat Muhammad (Sallahu'AlahiWasalam), to all the Ambiyaa ('Alahimusalaam), the
                            Sahaabah (RidhwanullahuTa'ala'Anhum) and all the Mashaykh (Rahmatullahi'Alaihum) belonging
                            to the 4 Tasawwuf Silsalahs.</p>
                        <br>
                        <h6> 4. Practise the Muraqabah/Meditation lesson as instructed by your Sufi Guide/Shaykh</h6>

                        <p> Latifa e Ikhfa: Whilst having the Eyes closed, Mouth closed
                            (tongue should not move) and Facing the Qiblah imagine that from the Latifa e Ikhfa (see diagram above) is emenating الله، الله (Allah, Allah) repeatedly and
                            Allah
                            ta'ala is looking at your Latifa e Ikhfa with love. </p><br>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!--Blog Details section  ends-->




@endsection()