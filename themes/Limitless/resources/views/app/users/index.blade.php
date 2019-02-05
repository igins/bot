@extends('limitless::templates.one-sidebar-container')

@section('content')

  <div class="card">

    <table class="table table-striped text-nowrap table-customers">
      <thead>
      <tr>
        <th width="200">{{__("Пользователь")}}</th>
        <th class="text-center">{{__("Зарегистрированн")}}</th>
        <th>{{__("Должность")}}</th>
        <th class="text-right">{{__("Статус")}}</th>
        <th class="text-right"></th>
      </tr>
      </thead>
      <tbody>
      @foreach($data['users'] as $u)
      <tr>
        <td>
          <div class="media">
            <div class="mr-3">
              <a href="{{route("backend.users.show", $u->id)}}">
                <img src="{{$u->profile->avatar}}" width="40" height="40" class="rounded-circle" alt="">
              </a>
            </div>

            <div class="media-body align-self-center">
              <a href="{{route("backend.users.show", $u->id)}}" class="font-weight-semibold">{{$u->profile->full_name}}</a>
              <div class="text-muted font-size-sm">
                {{__("Email")}}: {{$u->email}}
              </div>
            </div>
          </div>
        </td>
        <td class="text-center">{{$u->created_at->toFormattedDateString()}}</td>
        <td></td>
        <td class="text-right">

          @component("limitless::app.users.components.status_component", ['type'=>$u->status])
          @endcomponent

        </td>
        <td class="text-right">
          <div class="list-icons">
            <div class="list-icons-item dropdown">
              <a href="#" class="list-icons-item" data-toggle="dropdown">
                <i class="icon-menu7"></i>
              </a>

              <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
                <a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
                <a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
              </div>
            </div>
          </div>
        </td>
      </tr>
      @endforeach
      </tbody>
    </table>

  </div>
@endsection

@section('title', $data['page']['title'])

@section('page-header')
  @includeIf('limitless::app.users.components.page-header')
@endsection