<div class="container">
    <div class="panel panel-default" style=" position:relative;">
        <div class="panel panel-heading text-white-50 p-lg-3">
            Profile
        </div>
        <div class="panel panel-body pb-lg-3 pe-lg-3">
            <div class="row">
                <div class="col-lg-4">
                    @if($user->profile->images)
                    <img src="{{asset('storage/app/profile')}}/{{$user->profile->images}}" alt="Profile Image " class="img img-fluid profile-img me-lg-0 me-1 p-0">
                    @else
                    <img src="{{asset('images/profile/default.png')}}" alt="Profile Image" class="img img-fluid profile-img me-lg-0 me-1 p-0">
                    @endif
                </div>
                <div class="col-lg-8">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item active">
                            <h3>Personal &amp; Contact</h3>
                        </li>
                        <li class="list-group-item">
                            <table class="table table-border-less table-responsive" style="width:auto;">
                                <tr>
                                    <th>Name</th>
                                    <th>:</th>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <th>:</th>
                                    <td>{{$user->email}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <th>:</th>
                                    <td>{{$user->profile->mobile}}</td>
                                </tr>
                            </table>
                        </li>
                    </ul>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item active">
                        <h3>Address</h3>
                        </li>
                        <li class="list-group-item">
                            <table class="table table-border-less table-responsive w-auto">
                                <tr>
                                    <th>Address Line1</th>
                                    <th>:</th>
                                    <td>{{$user->profile->line1}}</td>
                                </tr>
                                <tr>
                                    <th>Address Line2</th>
                                    <th>:</th>
                                    <td>{{$user->profile->line2}}</td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <th>:</th>
                                    <td>{{$user->profile->city}}</td>
                                </tr>
                                <tr>
                                    <th>Province</th>
                                    <th>:</th>
                                    <td>{{$user->profile->province}}</td>
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <th>:</th>
                                    <td>{{$user->profile->country}}</td>
                                </tr>
                                <tr>
                                    <th>Postal Code</th>
                                    <th>:</th>
                                    <td>{{$user->profile->postal_code}}</td>
                                </tr>
                            </table>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('user.editprofile')}}" class="btn btn-primary btn-custom border-0 float-end">
                                <i class="fas fa-edit"></i>
                                Edit Profile
                            </a>
                            <div class="clearfix"></div>
                        </li>
                    </ul>
                </div>
            </div>  
            <!-- ending row -->
        </div>
    </div>
    
</div>
