
<div class="form-group">
    <label class="col-md-12">Author Name</label>
    <div class="col-md-12">
        <input name="name" value="{{old('name',isset($author)?$author->name:null)}}" type="text" placeholder="Enter Author Name" class="form-control form-control-line @error('name') is-invalid @enderror">
    </div>
    @error('name')
    <span class="text text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    <label for="example-email" class="col-md-12">Author Email</label>
    <div class="col-md-12">
        <input name="email" value="{{old('email',isset($author)?$author->email:null)}}" type="email" placeholder="Enter Author Email" class="form-control form-control-line @error('email') is-invalid @enderror" >
    </div>
    @error('email')
    <div class="text text-danger">{{$message}}</div>
    @enderror
</div>

<div class="form-group">
    <label class="col-md-12">Phone No</label>
    <div class="col-md-12">
        <input name="phone" value="{{old('phone',isset($author)?$author->phone:null)}}" type="text" placeholder="Enter Author Phone" class="form-control form-control-line @error('phone') is-invalid @enderror">
    </div>
    @error('phone')
    <div class="text text-danger">{{$message}}</div>
    @enderror
</div>
<div class="form-group">
    <label class="col-md-12">Address</label>
    <div class="col-md-12">
        <textarea rows="5" name="address" class="form-control form-control-line @error('address') is-invalid @enderror">{{old('address',isset($author)?$author->address:null)}}</textarea>
    </div>
    @error('address')
    <div class="text text-danger">{{$message}}</div>
    @enderror
</div>
<div class="form-group">
    <label class="col-sm-12">Gender</label>
    @php
        if(old('gender'))
          {
            $gender=old('gender');
          }
         elseif (isset($author))
           {
             $gender=$author->gender;
           }
        else
        {
           $gender=null;
        }
    @endphp
    <div class="col-md-12">
        <input name="gender" @if($gender=='male') checked @endif value="male" type="radio" id="male" ><label for="male">Male</label>
        <input name="gender" @if($gender=='female') checked @endif value="female" type="radio" id="female" ><label for="male">Female</label>
        <input name="gender" @if($gender=='others') checked @endif value="others" type="radio" id="others" ><label for="male">Others</label>
    </div>
    @error('gender')
     <div class="text text-danger">{{$message}}</div>
    @enderror
</div>
