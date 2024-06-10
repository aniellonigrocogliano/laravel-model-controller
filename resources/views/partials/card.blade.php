<div class="mscard card">

    <div class="image-container" />
    <img src="{{ $Movies['image'] }}" class="card-img-top normal-image" alt="}">

</div>
<div class="card-body">

    <p class="card-text">Titolo originale: {{ $Movies['original_title'] }}</p>
    <h5 class="card-title">Titolo: {{ $Movies['title'] }}</h5>
    @php
        $date = date('d/m/Y', strtotime($Movies['date']));
    @endphp
    <p class="card-text"><i class="fa-solid fa-calendar-days"></i> {{ $date }} </p>
    @if ($Movies['nationality'] === 'american')
        <p class="card-text"><i class="fa-solid fa-globe"></i> <img src="{{ Vite::asset('resources/img/us.png') }}"
                class="" alt="{{ $Movies['nationality'] }}"></p>
    @else
        <p class="card-text"><i class="fa-solid fa-globe"></i> <img src="{{ Vite::asset('resources/img/gb.png') }}"
                class="" alt="{{ $Movies['nationality'] }}"></p>
    @endif
    <p class="card-text"><i class="fa-solid fa-square-poll-vertical"></i>
        @php
            $vote = round($Movies['vote']);

            for ($i = 0; $i < 10; $i++) {
                if ($i < $vote) {
                    echo '<i class="fa-solid fa-star"></i>';
                } else {
                    echo '<i class="fa-regular fa-star"></i>';
                }
            }

        @endphp</p>
</div>
</div>
