@extends('frontend.master')
@section('content')
    <div class="container">
        <div class="order_confirmed">
            <p class="tick-image">
                <img src="https://img.icons8.com/nolan/256/double-tick.png"/>
            </p>
            <p class="text-center confirm_text">
                Your Order Has Been Successfully Confirmed !!!!
            </p>
            <a href="{{route('home')}}" id="home_link">
                <button type="submit" class="btn btn-success Back_home_button">
                    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                    Back To Shopping
                </button>
            </a>
        </div>
    </div>
@endsection
@push('css')
    <style>
        .order_confirmed{
            margin-bottom: 5em;
        }
        .tick-image{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .confirm_text{
            font-size: 2em;
            background: repeating-linear-gradient(90deg, #04abfb, #dc00f7 35.7em);
            color: white;
            margin-bottom: 1em;
        }
        .Back_home_button{
            background: transparent;
            border: 2px solid teal;
            color: teal;
            font-size: 20px;
            font-weight: 500;
            letter-spacing: 3px;
        }
        .Back_home_button:hover{
            transition: 1s;
            background: repeating-linear-gradient(90deg, #dc00f7, #04abfb 13.3em);
            color: white;
        }
        #home_link{
            display: flex;
            justify-content: center;
        }
    </style>
@endpush
