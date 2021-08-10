<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;

class CustomerSearch extends Component
{
    private $query;
    
    public $searchStr;
    
    public $limit = 10;
    
    public function __construct()
    {
        $this->query = Customer::limit($this->limit);
    }
    
    public function increment()
    {
        $this->count++;
    }
    
    public function search()
    {
        if(!empty($this->searchStr) && is_string($this->searchStr))
        {
            $searchStrLike = '%' . str_replace(' ', '%', $this->searchStr) . '%';
            
            $this->query->where(function($query) use ($searchStrLike)
            {
                $query
                    ->where('first_name', 'LIKE', $searchStrLike)
                    ->orWhere('last_name', 'LIKE', $searchStrLike)
                    ->orWhere('address', 'LIKE', $searchStrLike)
                    ->orWhere('company', 'LIKE', $searchStrLike)
                    ->orWhere('phone_number', 'LIKE', $searchStrLike)
                    ->orWhere('email', 'LIKE', $searchStrLike)
                ;
            });
        }
    }
    
    public function render()
    {
        $this->search();
        
        $customers = $this->query->get();
        
        return view('livewire.customer-search', [
            'customers' => $customers,
        ]);
    }
}
