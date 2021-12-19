<?php

namespace App\Http\Livewire\User;

use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class UserEditProfileComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $mobile;
    public $images;
    public $line1;
    public $line2;
    public $city;
    public $country;
    public $province;
    public $postal_code;
    public $newimage;

    public function mount()
    {
        $user = User::find(Auth::user()->id);
        $this-> name=$user->name;
        $this-> email=$user->email;
        $this-> mobile=$user->profile->mobile;
        $this-> images=$user->profile->images;
        $this-> line1=$user->profile->line1;
        $this-> line2=$user->profile->line2;
        $this-> city=$user->profile->city;
        $this-> country=$user->profile->country;
        $this-> province=$user->profile->province;
        $this-> postal_code=$user->profile->postal_code;
        $this-> newimage=$user->profile->newimage;
    }

    public function updateProfile(){
        $user = User::find(Auth::user()->id);
        $user->name = $this->name;
        $user->save();

        if($this->newimage){
            if ($this->images) {
                unlink('storage/app/profile/'.$this->images);
            }
            $imageName = Carbon::now()->timestamp.".".$this->newimage->extension();
            $this->newimage->storeAs('profile',$imageName);
            $user->profile->images = $imageName;
        }
        $user->profile->mobile = $this->mobile;
       
        $user->profile->line1 = $this->line1;
        $user->profile->line2 = $this->line2;
        $user->profile->city = $this->city;
        $user->profile->country = $this->country;
        $user->profile->province = $this->province;
        $user->profile->postal_code = $this->postal_code;

        $user->profile->save();
        session()->flash('message','Profile has been updated successfully');
    }
    public function render()
    {
        return view('livewire.user.user-edit-profile-component')->layout('layouts.base');
    }
}
