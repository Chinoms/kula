@extends('layouts.mainlayout')

@section('content')
<main>

    <!--? slider Area Start-->
    <div class="slider-area position-relative fix">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9 col-md-11 col-sm-10">
                            <div class="hero__caption">
                                <span data-animation="fadeInUp" data-delay="0.2s">WRESTLING</span>
                                <h1 data-animation="fadeInUp" data-delay="0.5s">Kula Kingdom</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9 col-md-11 col-sm-10">
                            <div class="hero__caption">
                                <span data-animation="fadeInUp" data-delay="0.2s">Strength</span>
                                <h1 data-animation="fadeInUp" data-delay="0.5s">Loving Culture</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- stroke Text -->
        <div class="stock-text">
            <h2>WRESTLING</h2>
            <h2>WRESTLING</h2>
        </div>
        <!-- Arrow -->
        <!--<div class="thumb-content-box">
                <div class="thumb-content">
                    <h3>Learn More About Kula Kingdom</h3>
                    <a href="#"> <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>-->
    </div>
    <!-- slider Area End-->

    <!--? Hero Start -->
    <!--<div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70 text-center">
                                <h2>Gallery</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    <!-- Hero End -->
    <!--? Start Sample Area -->
    <section class="sample-text-area">
        <div class="container box_1170">
            <h3 class="text-heading">KULA WRESTLING</h3>
            <p class="sample-text">
                Nobody knows when wrestling started in Kula, but it is believed to be an integral part of the Kula culture since the 1800s.
                Wrestling serves dual purposes as a sport and also an entertainment especially during the Christmas and the New Year.
                It is usually organized and participated by men.
                Wrestling is a practice and acknowledgment of skill and strength as well as promotion of the culture, values, and tradition by young and physically capable men.
                A man is believed to prove his physical strength when he is able to fight off aggressors and so wrestling helps mostly these young men to show their strength, courage, and skills.
                A young man who comes out victorious in traditional wrestling becomes very popular, admired and respected in the community.
                They are also seen as warriors or distinguished especially among the females who want to date them.

            </p>
        </div>
    </section>
    <!-- End Sample Area -->

    <!-- End Button -->
    <!--? Start Align Area -->
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <h3 class="mb-30">Age grade Contest</h3>
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{asset('img/elements/wrest11.PNG')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9 mt-sm-20">
                        <p>The wrestling is usually initiated by a few men who will convince their age grade to challenge the older age grade.
                            Once it is accepted by the majority in the group, their Patron will be informed and a formal meeting will then take place.
                            The younger age grade will present to the Patron or on his absence the leader of the older age grade a bottle of hot drink or local gin (kai kai), seven seeds of palm kernel in a breakable plate (sucer), and head of a yam (buru-sibi) as a token to challenge them to the wrestling match.
                            Once the match is accepted, a date will be set for the wresting match. There will be practices prior to the event, and the wrestlers will be encouraged to eat better foods, stay in shape, and avoid or abstain from sexual activities to purify their bodies and retain their energy and strength.
                            To discourage those who may not adhere to these strict rules, they will all sleep in the same area.
                            There will be a wake the night before the event where the groups will be dancing, singing, and demonstrating to let the community know that the event will take place the following day.</p>
                    </div>
                </div>
            </div>



            <div class="section-top-border">
                <h3 class="mb-30">Wrestling Sessions</h3>
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{asset('img/elements/wrest22.PNG')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9 mt-sm-20">
                        <p>There are usually two sessions, one in the morning. The drummers will start playing about 4 O’clock in the morning but the event starts before sunrise at about 7 a.m. and last about two hours.
                            The other session is in the evening after sunset or about 4 and 5 p.m. The drummers arrive first to setup the obudu (the big drum), obudu-paliye (second drum), Alili, and Koko or kpor-kpor.
                            The spectators, the Elders, and Chiefs start arriving at the venue prior to the entry of the wrestlers. The Chiefs and Elders sit close to the drummers while the families and supporters stand behind and around the wrestlers.
                            The competing age grades will gather opposite one another on the field. Each of the age grades have a Patron who motivates their camp to wrestle well.
                            The motivator (patron) holds some special leaves which he uses to whip the wrestlers. He will whip their hands and buttocks and that is the activator to start wrestling.
                            The wrestling starts with the younger age grade presenting their wrestler followed by the older age grade. The referees are the two Patrons representing the groups and the Chief drummer.
                            Whoever throws ( back touches the ground) or raises the other above the ground is declared the winner by the referees or the Chief drummer who changes the beating of the drum to signify a winner.
                            If the wrestlers are unable to throw each other, in a stalemate, or out of bounce, it is declared a draw. If there is a winner, the winning side will have a utter jubilation, gyration, and dancing on the field.
                            Most of the jubilation and dancing will be done by the females of the group and family members who are there to support the wrestlers.
                            Money and cloth George prints (injiri) will be thrown at the winner and this will go on for few minutes.</p>
                    </div>
                </div>
            </div>





        </div>
        <!-- End Align Area -->
</main>
@endsection