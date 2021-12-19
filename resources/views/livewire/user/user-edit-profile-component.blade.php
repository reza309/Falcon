<div class="container">
    <div class="panel panel-default" style="position:relative;">
        <div class="panel panel-heading text-white-50 p-lg-3">
            Update Profile
        </div>
        <div class="panel panel-body pb-lg-3 pe-lg-3">
            @if(Session::has('message'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('message')}}
                </div>
            @endif
            <form wire:submit.prevent="updateProfile">
                <div class="row">
                    <div class="col-lg-4">
                        @if($newimage)
                        <img src="{{$newimage->temporaryUrl()}}" alt="Profile Image" class="img img-fluid profile-img ms-lg-3">
                        @elseif($images)
                        <img src="{{asset('storage/app/profile')}}/{{$images}}" alt="Profile Image" class="img img-fluid profile-img ms-lg-3">
                        @else
                        <img src="{{asset('images/profile/default.png')}}" alt="Profile Image" class="img img-fluid profile-img ms-lg-3">
                        @endif
                        <div class="p-lg-3 mt-3">
                        <input type="file" class="form-control" wire:model="newimage">
                        </div>
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
                                        <td>
                                            <input type="text" class="form-control" wire:model="name">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <th>:</th>
                                        <td>{{$email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <th>:</th>
                                        <td><input type="text" class="form-control" wire:model="mobile"></td>
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
                                        <td><input type="text" class="form-control" wire:model="line1"></td>
                                    </tr>
                                    <tr>
                                        <th>Address Line2</th>
                                        <th>:</th>
                                        <td><input type="text" class="form-control" wire:model="line2"></td>
                                    </tr>
                                    <tr>
                                        <th>Country</th>
                                        <th>:</th>
                                        <td>
                                            <input type="search" id="country" class="form-control" wire:model="country" list="country-list">
                                            <datalist id="country-list">
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="India">India</option>
                                                <option value="China">China</option>
                                                <option value="Soudi Arabia">Soudi Arabia</option>
                                            </datalist>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <th>:</th>
                                        <td><input type="text" class="form-control" wire:model="city"></td>
                                    </tr>
                                    <tr>
                                        <th>Province</th>
                                        <th>:</th>
                                        <td><input type="text" class="form-control" wire:model="province" ></td>
                                    </tr>
                                    <tr>
                                        <th>Postal Code</th>
                                        <th>:</th>
                                        <td>
                                            <input type="text" class="form-control" wire:model="postal_code" list="postal-code">
                                            <datalist id="postal-code">
                                                <option value="Bhuyapur-1960">Bhuyapur-1960</option>
                                                <option value="Bhuyapur-1900">Bhuyapur-1900</option>
                                                <option value="Bhuyapur-1950">Bhuyapur-1950</option>
                                            </datalist>
                                        </td>
                                    </tr>
                                </table>
                            </li>
                            <li class="list-group-item">
                                <input type="submit" value="Save" class="btn btn-primary btn-custom border-0 pe-lg-5 ps-lg-5 float-end">
                                <div class="clearfix"></div>
                            </li>
                        </ul>
                    </div>
                </div>  
            </form>
            <!-- ending row -->
        </div>
    </div>
    
</div>

