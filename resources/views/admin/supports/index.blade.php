<h1>Listagem de Supports</h1>
<a href="{{ route('supports.create') }}">Criar Dúvida</a>
<table>
    <thead>
        <th>Assunto</th>
        <th>Descricao</th>
        <th>Status</th>
        <th>Ações</th>
    </thead>
    <tbody>
        @foreach ($supports->items() as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->body }}</td>
                <td>{{ getStatusSupport($support->status) }}</td>
                <td>
                    <a 
                    href="{{ route('supports.show', $support->id) }}">(+)
                    </a>
                     - 
                     <a 
                    href="{{ route('supports.edit', $support->id) }}">(E)
                    </a> 
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<x-pagination 
    :paginator="$supports"
    :appends="$filters"     
/>