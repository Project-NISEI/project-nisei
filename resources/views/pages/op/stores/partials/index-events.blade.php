<div class="row">
    <div class="col-sm-12">
        <h4 class="headline"><span>{{ $heading }}</span></h4>
        <br>
    </div>
    @foreach ($events as $event)
        <div class="col-sm-12 col-lg-6">
            <a class="event-card" href="/op/available-kits/{{ $event->slug }}">
                @if ($event->listing_image)
                    <img src="{{ $event->listing_image }}" alt="{{ $event->name }}" class="event-card__image">
                @endif
                <p class="event-card__name">{{ $event->name }}</p>
                <p class="event-card__info">Base price: ${{ $event->price }}</p>
                @if (time() <= strtotime($event->expires_on))
                    <p class="event-card__info">On sale through: {{ date_format(date_sub(date_create($event->expires_on),date_interval_create_from_date_string("1 day")),"F j, Y") }} (UTC)</p>
                @else
                    <p class="event-card__subtle">Ended: {{ $event->expires_on }}</p>
                @endif
            </a>
        </div>
    @endforeach
</div>