@props(['index'])

<div class="container">
    @php
    $comic = config('comics')[$index];
    @endphp
    
    <div class="half_up_label text-uppercase">{{ $comic['title'] }}</div>
    
    <div class="row g-5 p-4 mb-3 border border-primary">
  
        <div class="col-6 fs-5">{{ $comic['description'] }}</div>
        
        <div class="col-3 detail_cover_container">
            <img src="{{ $comic['thumb'] }}" alt="cover" class="detail_cover">
        </div>
        
        <div class="col-3 info">
            <div class="p-3">Series: {{ $comic['series'] }}</div>
            <div class="p-3">Main Artist: {{ $comic['artists'][0] }}</div>
            <div class="p-3">Main Writer: {{ $comic['writers'][0] }}</div>
            <div class="p-3">{{ $comic['price'] }}</div>
        </div>

    </div>    
    <br>
</div>