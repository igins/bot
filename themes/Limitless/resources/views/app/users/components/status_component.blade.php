@if($type == "banned")
    <span class="badge badge-danger">{{__("Забанен")}}</span>
@elseif($type == "allowed")
    <span class="badge badge-success">{{__("Допущен")}}</span>
@elseif($type == "not_allowed")
    <span class="badge badge-warning ">{{__("Не допущен")}}</span>
@elseif($type == "pending")
    <span class="badge badge-info ">{{__("В ожидании")}}</span>
@elseif($type == "active")
    <span class="badge badge-success">{{__("Активный")}}</span>
@elseif($type == "inactive")
    <span class="badge badge-secondary">{{__("Не активен")}}</span>
@else
    <span class="badge badge-light">{{$text}}</span>
@endif