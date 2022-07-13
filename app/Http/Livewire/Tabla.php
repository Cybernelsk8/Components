<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Tabla extends Component
{

    use WithPagination;

    public $pageSize = 10, $search='';
    public $field='id',$sort='asc';

    public function render()
    {
        $data = DB::table('tks_tickets')
                    ->where('name','LIKE','%'.$this->search.'%')
                    ->orWhere(function($query){
                        $query->orWhere('id','LIKE','%'.$this->search.'%')
                                ->orWhere('email','LIKE','%'.$this->search.'%');
                    })
                    ->select('id','name','email','dt')
                    ->orderBy($this->field,$this->sort)
                    ->paginate($this->pageSize);

        return view('livewire.tabla',compact('data'));
    }

    public function sort($field)
    {
        $this->field = $field;
        $this->sort = ($this->sort === 'asc') ? 'desc' : 'asc'; 

    }
    
    public function resetPages()
    {
        $this->resetPage();
    }
}
