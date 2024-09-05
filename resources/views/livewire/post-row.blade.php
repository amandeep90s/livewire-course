<tr>
    <td>{{ $post->title }}</td>
    <td>{{ str($post->content)->words(10) }}</td>
    <td>
        <button type="button" wire:click='$parent.delete({{ $post->id }})'>Delete</button>
    </td>
</tr>
