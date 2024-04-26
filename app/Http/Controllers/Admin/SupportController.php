<?php

namespace App\Http\Controllers\Admin;

use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use App\Models\Support;
use App\Services\SupportService;
use Illuminate\Http\Request;

class SupportController extends Controller
{   
    public function __construct(
        protected SupportService $service
    ) {}
    public function index(Request $request)
    {   
        $supports = $this->service->getAll($request->filter);
        return view('admin/supports/index', compact('supports'));
    }
    public function show(string $id)
    {      
        //$support = $support->find($id);
        //$support = $support->where('id', '!=', $id)->first();
        //$support = $support->where('id', $id)->first();
        //return $support ? view('admin/supports/show', compact('support')) : back();

        if(!$support = $this->service->getOne($id)){
            return back();
        }

        return view('admin/supports/show', compact('support'));
    }

    public function create()
    {   
        return view('admin/supports/create');
    }

    public function store(StoreUpdateSupport $request, Support $support)
    {   
        //$data = $request->validated();  //$data = $request->all();
        //$data['status'] = 'a';
        //$support->create($data);
        $this->service->new(
            CreateSupportDTO::makeFromRequest($request)
        );

        return redirect()->route('supports.index');
    }

    public function edit(string $id)
    {      
        //$support = $support->where('id', $id)->first();
        //return $support ? view('admin/supports.edit', compact('support')) : back();
        if(!$support = $this->service->getOne($id)){
            return back();
        }

        return view('admin/supports.edit', compact('support'));
    }

    public function update(StoreUpdateSupport $request, Support $support, string | int $id)
    {      
        //$support = $support->where('id', $id)->first();

        /*$support ? $support->update($request->only([
            'subject', 'body'
        ])) : back();*/

        $support = $this->service->update(
            UpdateSupportDTO::makeFromRequest($request)
        );
        
        return $support ? redirect()->route('supports.index') : back();
    }
    public function destroy(string $id)
    {
        //if(!$support = Support::find($id)){
        //   return back();
        //}
        $this->service->delete($id);
        return redirect()->route('supports.index');
    }
}
