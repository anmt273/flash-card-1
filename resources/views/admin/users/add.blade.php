@extends('admin.layouts.layouts')
@section('content')
    <div class="col-sm-6">
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title">{{__('Add User')}}</h4>
            </div>
            <div class="panel-body">
                <form action="{{route('admin.user.add')}}" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label>{{__('Name')}} <span class="text-required"> *</span></label>
                        <div class="row">
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="name" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{__('Email')}}<span class="text-required"> *</span></label>
                        <input class="form-control" type="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>{{__('Password')}}</label>
                        <input class="form-control" type="text" name="password"
                               placeholder="Type for new password here" minlength="6">
                    </div>
                    <div class="form-group">
                        <label>{{__('Birthday')}}</label>
                        <input class="form-control" type="date" name="birthday">
                    </div>
                    <div class="form-group">
                        <label>{{__('Salary')}}</label>
                        <input class="form-control" type="number" name="salary" value="0">
                    </div>
                    <div class="form-group">
                        <label>{{__('Regency')}}</label>
                        <select class="form-control" name="regency">
                            <option value="Adroid Dev">Adroid Dev</option>
                            <option value="Designer">Designer</option>
                            <option value="iOS Dev">iOS Dev</option>
                            <option value="PHP Dev">PHP Dev</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>{{__('Phone')}}</label>
                        <input class="form-control" type="number" name="phone">
                    </div>
                    <div class="form-group">
                        <label>{{__('Native Land')}}</label>
                        <input class="form-control" type="text" name="native_land">
                    </div>
                    <div class="form-group">
                        <label>{{__('Address')}}</label>
                        <input class="form-control" type="text" name="address">
                    </div>
                    <div class="form-group">
                        <label>{{__('Roles')}}</label>
                        <div class="row" style="margin-left: 0px">
                            <select class="select5" name="role_id" style="width: 100px">
                                @foreach(\Spatie\Permission\Models\Role::all() as $role)
                                    <option value="{{$role->name}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary min-width-100">{{__('Save')}}</button>
                        <a href="{{route('admin.user.list')}}" class="btn btn-warning min-width-100">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection