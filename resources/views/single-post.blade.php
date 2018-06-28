@extends('layouts.app')

@section('content')

    <section class="single">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Мебель</a></li>
                    <li><span >Стол</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col l8 m12">
                    <images-box-component></images-box-component>
                    <info-box-component></info-box-component>
                    <bids-box-component></bids-box-component>
                    <rate-box-component></rate-box-component>
                </div>
                <div class="col l4 m12">
                    <price-box-component></price-box-component>

                    <div class="box box-default">
                        <div class="box-header">
                            <div class="box-title">Контакты</div>
                        </div>
                        <div class="box-body">
                            <p>Flushing Ave 202 New York</p>
                        </div>
                    </div>

                    <div class="box box-default">
                        <div class="box-header">
                            <div class="box-title">Cоздано</div>
                        </div>
                        <div class="box-body">
                            <p>22 April 2018</p>
                        </div>
                    </div>

                    <author-box-component></author-box-component>
                </div>
            </div>
            <comments-component></comments-component>
        </div>
    </section>

@endsection