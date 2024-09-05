<div>
    <h2>Posts:</h2>

    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr wire:key='{{ $post->id }}'>
                    <td>{{ $post->title }}</td>
                    <td>{{ str($post->content)->words(10) }}</td>
                    <td>
                        <button type="button" wire:click='delete({{ $post->id }})'>Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
