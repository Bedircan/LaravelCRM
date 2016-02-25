@extends('app')

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <section class="panel">
                <header class="panel-heading tab-bg-dark-navy-grey ">
                    <ul class="nav nav-tabs bold">

                        <li class="active">
                            <a data-toggle="tab" href="#listele">Listele</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#ekle">Ekle</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#güncelle">Güncelle</a>
                        </li>
                    </ul>
                </header>
                <div class="panel-body">
                    <div class="tab-content">
                        <div id="listele" class="tab-pane active panel-body">
                            <form class="form-horizontal tasi-form center-block" method="post">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Müşteri Kısa Adı</label>
                                            <div>
                                                <select class="form-control input-sm m-bot15"
                                                        style="width:200px; float: left;">

                                                </select>
                                                <button class="btn btn-success btn-success-green" type="button" style=" height: 30px; "><i
                                                            class="fa fa-plus"></i></button>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Müşteri Ünvanı</label>
                                            <div>
                                                <select class="form-control input-sm m-bot15"
                                                        style="width:200px; float: left;">

                                                </select>
                                                <button class="btn btn-success" type="button" style=" height: 30px; "><i
                                                            class="fa fa-plus"></i></button>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Durumu</label>
                                            <div>
                                                <select class="form-control input-sm m-bot15"
                                                        style="width:200px; float: left;">

                                                </select>
                                                <button class="btn btn-success" type="button" style=" height: 30px; "><i
                                                            class="fa fa-plus"></i></button>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Sektörü</label>
                                            <div>
                                                <select class="form-control input-sm m-bot15"
                                                        style="width:200px; float: left;">

                                                </select>
                                                <button class="btn btn-success" type="button" style=" height: 30px; "><i
                                                            class="fa fa-plus"></i></button>
                                            </div>

                                        </div>


                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Tipi</label>
                                            <div>
                                                <select class="form-control input-sm m-bot15"
                                                        style="width:200px; float: left;">

                                                </select>
                                                <button class="btn btn-success" type="button" style=" height: 30px; "><i
                                                            class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Vergi Dairesi</label>
                                            <div>
                                                <select class="form-control input-sm m-bot15"
                                                        style="width:200px; float: left;">

                                                </select>
                                                <button class="btn btn-success" type="button" style=" height: 30px; "><i
                                                            class="fa fa-plus"></i></button>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Vergi Numarası</label>
                                            <div>
                                                <select class="form-control input-sm m-bot15"
                                                        style="width:200px; float: left;">

                                                </select>
                                                <button class="btn btn-success" type="button" style=" height: 30px; "><i
                                                            class="fa fa-plus"></i></button>
                                            </div>

                                        </div>


                                    </div>

                                    <div class="col-lg-4">

                                        <section class="panel">
                                            <header class="panel-heading">
                                                WYSIWYG Editors

                                            </header>
                                            <div class="panel-body" style="display: block;">
                                                Talha Metin
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </form>

                            <table id="example" width="100%"></table>

                        </div>

                        <div id="ekle" class="tab-pane panel-body">
                            <form class="form-horizontal tasi-form center-block" method="post">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Müşteri Kısa Adı</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Müşteri Ünvanı</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Durumu</label>
                                            <div class="col-sm-5">
                                                <select class="form-control">

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Sektörü</label>
                                            <div class="col-sm-5">
                                                <select class="form-control">

                                                </select>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Tipi</label>
                                            <div class="col-sm-5">
                                                <select class="form-control">

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-5">

                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Vergi Dairesi</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Vergi Numarası</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Muh. Kodu</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150"></label>
                                            <div class="col-sm-5">
                                                <button type="submit" class="btn-add-margin-left btn btn-success">Ekle
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>

                        <div id="güncelle" class="tab-pane panel-body">
                            <form class="form-horizontal tasi-form center-block" method="post">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Müşteri Kısa Adı</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Müşteri Ünvanı</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Durumu</label>
                                            <div class="col-sm-5">
                                                <select class="form-control">

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div class="col-sm-5">

                                                <button type="button" name="btn_müs_islem"
                                                        class="btn-add-margin-left btn btn-success"><i
                                                            class="fa fa-plus"></i> İşlemler
                                                </button>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Sektörü</label>
                                            <div class="col-sm-5">
                                                <select class="form-control">

                                                </select>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Tipi</label>
                                            <div class="col-sm-5">
                                                <select class="form-control">

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-5">

                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Vergi Dairesi</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Vergi Numarası</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150">Muh. Kodu</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-1 control-label width-150"></label>
                                            <div class="col-sm-5">
                                                <button type="submit" class="btn-add-margin-left btn btn-warning">
                                                    Güncelle
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </section>
        </section>

    </section>
@endsection
