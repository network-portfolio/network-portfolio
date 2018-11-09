<div>
    @foreach( $projects as $project )
        <div>
            <div>
                <h3>{{ $project->name }}</h3>
                <p>{{ $project->description }}</p>
            </div>
            <div>
                @foreach( $project->images as $image )
                    <img src="{{ $image->url }}" width="400px">
                @endforeach
                <br>
                <p>Created by {{ $project->user->name }}
                    @foreach( $project->projectMembers as $member)
                        {{ " - " . $member->user->name }}
                    @endforeach
                </p>
            </div>
        </div>
    @endforeach
</div>