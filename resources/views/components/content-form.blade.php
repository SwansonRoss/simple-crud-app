@props(['action', 'id'])
<form action="/{{ $action }}" method="POST">
    @csrf
    @if ($action === "update")
    <label for="content_id">
        <input type="hidden" name="content_id" id="content_id" value="{{ $id }}">
    </label>
    @endif
    <label for="content">
        <input type="text" name="content" id="content">
    </label>
    <button type="submit">{{ $action }} entry</button>
</form>