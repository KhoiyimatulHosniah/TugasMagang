<!-- resources/views/formkegiatan.edit.blade.php -->
<form action="{{ route('formKegiatan.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- Tambahkan field-form Anda di sini -->
    <input type="text" name="title" value="{{ $data->title }}">
    <input type="text" name="description" value="{{ $data->description }}">
    <button type="submit">Update</button>
</form>