<div>
    @foreach( $projects as $project )
        <div>
            <div>
                <h3>{{ $project->name }}</h3>
            </div>
            <div>
                <img src="{{ $project->images->first()->url }}">
                <br>
                {{ $project->description }}
            </div>
        </div>
    @endforeach
</div>