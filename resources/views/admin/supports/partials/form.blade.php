@csrf()
<input 
    id="subject" 
    name="subject"
    type="text"  
    placeholder="Assunto"
    value="{{ $support->subject ?? old('subject') }}"
>
<textarea 
    id="body" 
    name="body" 
    cols="30" rows="5" 
    placeholder="Descrição"
>{{ $support->body ?? old('body') }}</textarea>
<button 
    id="btn_enviar" 
    type="submit"
> 
    >Enviar< 
</button>