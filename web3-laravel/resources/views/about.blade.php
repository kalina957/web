@extends('layouts.app')

@section('content')

    <div class="box mt-5 text-white font-weight-bold" data-appears-component-name="Homepage_Vesta_ApiSpec_WhatIsEtsy" style="background-color: #212121">
        <div class="col-group body-max-width appears-ready p-5" >

            <div class="mt-xs-5 ">

                <div class="text-center body-max-width ">
                    <h2 class="wt-text-heading-02 mb-xs-2 font-weight-bold" > What is Fonsy? </h2>

                    <div class="col-group pt-xs-6" >
                        <div class="col-md-10 col-offset-md-1 col-lg-8 col-offset-lg-2 col-offset-xl-0 col-xl-4  " >
                            <h3 class="wt-text-heading-01 mb-xs-1 font-weight-bold"> A one-of-a-kind community </h3>
                            <p class="wt-text-body-01 font-weight-bold" > Fonsy is a global online marketplace, where people come together to make, sell, buy, and
                                collect unique items. </p>
                        </div>
                        <div class="col-md-10 col-offset-md-1 col-lg-8 col-offset-lg-2 col-offset-xl-0 col-xl-4 mb-xs-4 mb-lg-6 mb-xl-2 pr-sm-4 pl-sm-4 pr-xs-2 pl-xs-2">
                            <h3 class="wt-text-heading-01 mb-xs-1 font-weight-bold"> Support independent creators </h3>
                            <p class="wt-text-body-01 font-weight-bold"> There’s no Fonsy warehouse – just millions of people selling the things they love. We make the
                                whole process easy, helping you connect directly with makers to find something extraordinary. </p>
                        </div>
                        <div class="col-md-10 col-offset-md-1 col-lg-8 col-offset-lg-2 col-offset-xl-0 col-xl-4 mb-xs-4 mb-lg-6 mb-xl-2 pr-sm-4 pl-sm-4 pr-xs-2 pl-xs-2">
                            <h3 class="wt-text-heading-01 mb-xs-1 font-weight-bold"> Peace of mind </h3>
                            <p class="wt-text-body-01 font-weight-bold"> Your privacy is the highest priority of our dedicated team. And if you ever need assistance,
                                we are always ready to step in for support. </p>
                        </div>
                    </div>
                </div>
                <div><img src="{{url('/images/gal-new.jpg')}}" alt="Image"/></div>
            </div>
        </div>
    </div>
@endsection
