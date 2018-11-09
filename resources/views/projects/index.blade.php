<div>
    @foreach( $projects as $project )
        <div>
            <div>
            <h3>{{ $project->name }}</h3>
            </div>
                <img src="{{ $project->images->first()->url }}">
                <br>
                {{ $project->description }}
            <div>
            </div>
        </div>
    @endforeach
</div>