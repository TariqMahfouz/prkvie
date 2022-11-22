<div class="form-group mt-4">
    <label for="project_content">Project Content:</label>
    <textarea min="0" step="0.1" class="form-control @error('project_content') is-invalid @enderror" id="project_content"
        rows="7" name="project_content">{{ $project_content ?? '' }}</textarea>
</div>

<div class="form-group mt-4">
    <label for="about_us">About Us:</label>
    <textarea min="0" step="0.1" class="form-control @error('about_us') is-invalid @enderror" id="about_us"
        rows="7" name="about_us">{{ $about_us ?? '' }}</textarea>
</div>

<hr>

<div class="row">
    <div class="form-group col-6">
        <label for="hq_address">HQ Address:</label>
        <input type="text" required class="form-control @error('hq_address') is-invalid @enderror" id="hq_address"
            name="hq_address" value="{{old('hq_address', (isset($hq_address) ? $hq_address : ''))}}">
    </div>
    
    <div class="form-group col-6">
        <label for="branch_address">Branch Address:</label>
        <input type="text" required class="form-control @error('branch_address') is-invalid @enderror" id="branch_address"
            name="branch_address" value="{{old('branch_address', (isset($branch_address) ? $branch_address : ''))}}">
    </div>
</div>

<hr>

<div class="row">
    <div class="form-group col-3">
        <label for="facebook">Facebook:</label>
        <input type="text" required class="form-control @error('facebook') is-invalid @enderror" id="facebook"
            name="facebook" value="{{old('facebook', (isset($facebook) ? $facebook : ''))}}">
    </div>
    
    <div class="form-group col-3">
        <label for="tiktok">Tiktok:</label>
        <input type="text" required class="form-control @error('tiktok') is-invalid @enderror" id="tiktok"
            name="tiktok" value="{{old('tiktok', (isset($tiktok) ? $tiktok : ''))}}">
    </div>
    
    <div class="form-group col-3">
        <label for="instagram">Instagram:</label>
        <input type="text" required class="form-control @error('instagram') is-invalid @enderror" id="instagram"
            name="instagram" value="{{old('instagram', (isset($instagram) ? $instagram : ''))}}">
    </div>
    
    <div class="form-group col-3">
        <label for="youtube">Youtube:</label>
        <input type="text" required class="form-control @error('youtube') is-invalid @enderror" id="youtube"
            name="youtube" value="{{old('youtube', (isset($youtube) ? $youtube : ''))}}">
    </div>
</div>


<hr>

<div class="row">
    <div class="form-group col-6">
        <label for="call_us_number">Call Us Number:</label>
        <input type="text" required class="form-control @error('call_us_number') is-invalid @enderror" id="call_us_number"
            name="call_us_number" value="{{old('call_us_number', (isset($call_us_number) ? $call_us_number : ''))}}">
    </div>
    
    <div class="form-group col-6">
        <label for="call_us_email">Call Us Email:</label>
        <input type="text" required class="form-control @error('call_us_email') is-invalid @enderror" id="call_us_email"
            name="call_us_email" value="{{old('call_us_email', (isset($call_us_email) ? $call_us_email : ''))}}">
    </div>
</div>

<hr>

<div class="row">
    <div class="form-group col-6">
        <label for="lat">GEO Location Latitude:</label>
        <input type="text" required class="form-control @error('lat') is-invalid @enderror" id="lat"
            name="lat" value="{{old('lat', (isset($lat) ? $lat : ''))}}">
    </div>
    
    <div class="form-group col-6">
        <label for="lon">GEO Location Longitude:</label>
        <input type="text" required class="form-control @error('lon') is-invalid @enderror" id="lon"
            name="lon" value="{{old('lon', (isset($lon) ? $lon : ''))}}">
    </div>
</div>
