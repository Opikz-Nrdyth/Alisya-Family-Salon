@foreach ($portofolio as $item)
    <div class="photo-item" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
        <img src="{{ $item['image'] }}" alt="Portofolio Image">
        <p>{{ $item['description'] }}</p>
    </div>
@endforeach
