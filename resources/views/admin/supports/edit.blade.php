<h1>Edição da dúvida {{ $support->id }}</h1>
@if($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif
<form action="{{ route('supports.update', $support->id) }}" method="POST">
    @csrf()
    <input type="hidden" value="PUT" name="_method">
    <input 
        id="subject" 
        name="subject"
        type="text" 
        placeholder="Assunto"
        value="{{ $support->subject }}"
    >
    <textarea 
        id="body" 
        name="body" 
        cols="30" rows="5" 
        placeholder="Descrição"
    >{{ $support->body }}
    </textarea>
    <button 
        id="btn_enviar" 
        type="submit"
    > 
        >Enviar< 
    </button>
</form>