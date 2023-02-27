@extends('layouts.layout')
@section('content')
        <div >
            <div class="welcome-img">
                <div class="overlay">
                    <h1><i>Pizza</i></h1>
                    <h1>Done Right</h1>
                </div>
            </div>
            <div class="lunch-special">
                   <div class="wrapper-arrow">
                    <div class="arrow"><x-ri-arrow-down-s-line /></div>
                   </div>
                   <div class="content">
                    <div class="text-left">
                        <h1><i>Lunch specials</i></h1>
                        <div class="specials-text">
                            <h2>Recipe No.1</h2>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                            </p>
                            <h2>70 kr</h2>
                        </div>
                    </div>
                    <div class="content-right">
                        <div class="cirkel"></div>
                    </div>
                   </div>
            </div>

            <p>{{session('mssg')}}</p>
        </div>
@endsection
