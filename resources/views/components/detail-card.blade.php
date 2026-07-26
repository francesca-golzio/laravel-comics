

<div class="container">
    
    <div class="half_up_label text-uppercase">{{ $title }}</div>
    
    <div class="row g-5 p-4 mb-3 border border-primary">
  
        <div class="col-6 fs-5">{{ $description }}</div>
        
        <div class="col-3">
            <img src="{{ $thumb }}" alt="cover" class="detail_cover">
        </div>
        
        <div class="col-3 info">
            <div class="p-3">Series: {{ $series }}</div>
            <div class="p-3">Main Artist: {{ $artists }}</div>
            <div class="p-3">Main Writer: {{ $writers }}</div>
            <div class="p-3">{{ $price }}</div>
        </div>

    </div>    
    <br>
</div>