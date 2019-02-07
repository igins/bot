@extends('limitless::templates.one-sidebar-container')

@section('content')

    <!-- Inner container -->
    <div class="d-md-flex align-items-md-start">

        <!-- Left sidebar component -->
        <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left wmin-300 border-0 shadow-0 sidebar-expand-md">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Navigation -->
                <div class="card">
                    <div class="card-body bg-indigo-400 text-center card-img-top" style="background-image: url(http://demo.interface.club/limitless/assets/images/bg.png); background-size: contain;">
                        <div class="card-img-actions d-inline-block mb-3">
                            <img class="img-fluid rounded-circle" src="{{($data['user'])->profile->avatar}}" width="170" height="170" alt="">
                            <div class="card-img-actions-overlay rounded-circle">
                                <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                                    <i class="icon-plus3"></i>
                                </a>
                                <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                    <i class="icon-link"></i>
                                </a>
                            </div>
                        </div>

                        <h6 class="font-weight-semibold mb-0">{{($data['user'])->profile->full_name}}</h6>
                        <span class="d-block opacity-75">{{($data['user']->position->title)}}</span>

                        {{--<div class="list-icons list-icons-extended mt-3">--}}
                            {{--<a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="Google Drive"><i class="icon-google-drive"></i></a>--}}
                            {{--<a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="Twitter"><i class="icon-twitter"></i></a>--}}
                            {{--<a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="Github"><i class="icon-github"></i></a>--}}
                        {{--</div>--}}
                    </div>

                    <div class="card-body p-0">
                        <ul class="nav nav-sidebar mb-2">
                            <li class="nav-item-header">{{__("Управление")}}</li>
                            <li class="nav-item">
                                <a href="#profile" class="nav-link active" data-toggle="tab">
                                    <i class="icon-user"></i>
                                    {{__("Профиль")}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#schedule" class="nav-link" data-toggle="tab">
                                    <i class="icon-calendar3"></i>
                                    Schedule
                                    <span class="font-size-sm font-weight-normal opacity-75 ml-auto">02:56pm</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#inbox" class="nav-link" data-toggle="tab">
                                    <i class="icon-envelop2"></i>
                                    Inbox
                                    <span class="badge bg-danger badge-pill ml-auto">29</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#orders" class="nav-link" data-toggle="tab">
                                    <i class="icon-cart2"></i>
                                    Orders
                                    <span class="badge bg-success badge-pill ml-auto">16</span>
                                </a>
                            </li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item">
                                <a href="login_advanced.html" class="nav-link" data-toggle="tab">
                                    <i class="icon-switch2"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /left sidebar component -->


        <!-- Right content -->
        <div class="tab-content w-100 overflow-auto">
            <div class="tab-pane fade active show" id="profile">
                <!-- Profile info -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">{{__("Информация о профиле")}}</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="post" action="#">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>{{__("Имя")}}</label>
                                        <input type="text" name="first_name" value="{{($data['user'])->profile->first_name}}" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label>{{__("Фамилия")}}</label>
                                        <input type="text" name="last_name" value="{{($data['user'])->profile->last_name}}" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label>{{__("Отчество")}}</label>
                                        <input type="text" name="patronymic" value="{{($data['user'])->profile->patronymic}}" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Address line 1</label>
                                        <input type="text" value="Ring street 12" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Address line 2</label>
                                        <input type="text" value="building D, flat #67" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>City</label>
                                        <input type="text" value="Munich" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label>State/Province</label>
                                        <input type="text" value="Bayern" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label>ZIP code</label>
                                        <input type="text" value="1031" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                        <input type="text" readonly="readonly" value="eugene@kopyov.com" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Your country</label>
                                        <select class="form-control form-control-select2" data-fouc>
                                            <option value="germany" selected>Germany</option>
                                            <option value="france">France</option>
                                            <option value="spain">Spain</option>
                                            <option value="netherlands">Netherlands</option>
                                            <option value="other">...</option>
                                            <option value="uk">United Kingdom</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone #</label>
                                        <input type="text" value="+99-99-9999-9999" class="form-control">
                                        <span class="form-text text-muted">+99-99-9999-9999</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Upload profile image</label>
                                        <input type="file" class="form-input-styled" data-fouc>
                                        <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /profile info -->
            </div>
        </div>
        <!-- /right content -->

    </div>
    <!-- /inner container -->

@endsection

@section('title', $data['page']['title'])

@section('page-header')
    @includeIf('limitless::app.users.components.page-header')
@endsection

@section('body-class')
    {{$data['page']['class']}}
@endsection