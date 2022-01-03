@props(['object'])
<div>
    <p>{{ $object-> content }}</p>
    <div>
        <button>U in CRUD</button>
        <form action="/delete" method="post">
            @csrf
            <label for="content_id">
                <input type="hidden" name="content_id" value="{{ $object->id }}">
            </label>
            <button>D in CRUD</button>
        </form>
    </div>
    <div>
        <x-content-form action="update" :id="$object->id" />
    </div>
</div>