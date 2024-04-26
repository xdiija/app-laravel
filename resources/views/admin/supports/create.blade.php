<h1>
    Nova Dúvida
</h1>
<a href="{{ route('supports.index') }}">
    Listar Dúvidas
</a>
@if($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif
<form action="{{ route('supports.store') }}" method="POST">
    @csrf()
    <input 
        id="subject" 
        name="subject"
        type="text"  
        placeholder="Assunto"
        value="{{ old('subject') }}"
    >
    <textarea 
        id="body" 
        name="body" 
        cols="30" rows="5" 
        placeholder="Descrição"
    >{{ old('body') }}</textarea>
    <button 
        id="btn_enviar" 
        type="submit"
    > 
        >Enviar< 
    </button>
</form>