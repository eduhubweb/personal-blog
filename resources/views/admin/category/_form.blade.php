
<div class="form-group">
    <label class="col-md-12">Category Name</label>
    <div class="col-md-12">
        <input name="name" value="{{old('name',isset($category)?$category->name:null)}}" type="text" placeholder="Enter Category Name" class="form-control form-control-line @error('name') is-invalid @enderror">
    </div>
    @error('name')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>


<div class="form-group">
    <label class="col-md-12">Details</label>
    <div class="col-md-12">
        <textarea name="details"  rows="5" class="form-control form-control-line @error('details') is-invalid @enderror">{{old('details',isset($category)?$category->details:null)}}</textarea>
    </div>
    @error('details')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
