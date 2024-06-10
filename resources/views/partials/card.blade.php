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
    <p class="card-text">Data di uscita: {{ $date }} </p>
    <p class="card-text">Nazionalità: {{ $Movies['nationality'] }}</p>
    <p class="card-text">Voto: {{ $Movies['vote'] }}</p>
</div>
</div>
