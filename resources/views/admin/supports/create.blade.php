<h1> Nova Dúvida </h1>
<a href="{{ route('supports.index') }}">
    Listar Dúvidas
</a>

<x-alert/>

<form action="{{ route('supports.store') }}" method="POST">
    @include('admin.supports.partials.form')
</form>