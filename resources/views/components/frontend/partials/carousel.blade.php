<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="{{ asset('assets/frontend/images/slider1.gif') }}" alt="Los Angeles" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
        <img src="{{ asset('assets/frontend/images/slider2.gif') }}" alt="Chicago" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
        <img src="{{ asset('assets/frontend/images/slider3.gif') }}" alt="New York" class="d-block" style="width:100%">
    </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
</button>
</div>