<h1>Edição da dúvida {{ $support->id }}</h1>
<a href="{{ route('supports.index') }}">
    Listar Dúvidas
</a>
<x-alert/>

<form action="{{ route('supports.update', $support->id) }}" method="POST">
    <input type="hidden" value="PUT" name="_method">
    @include('admin.supports.partials.form', [
        'support' => $support
    ])
</form>