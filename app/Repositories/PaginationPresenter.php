<?php

namespace App\Repositories;

use Illuminate\Pagination\LengthAwarePaginator;
use stdClass;

class PaginationPresenter implements PaginationInterface
{   
    /**
    * @var stdClass[]
    */
    private array $items;
    public function __construct(
        protected LengthAwarePaginator $paginator
    ){
        $this->items = $this->resolveItems($this->paginator->items());
    }
   public function items(): array
   {
        return $this->items;
   }
   public function currentPage(): int
   {
        return $this->paginator->currentPage() ?? 1;
   }
   public function nextPage(): int
   {
        return $this->paginator->currentPage() + 1;
   }
   public function previousPage(): int
   {
        return $this->paginator->currentPage() - 1;
   }
   public function total(): int
   {
        return $this->paginator->total() ?? 0;
   }
   public function onFirstPage(): bool
   {
        return $this->paginator->onFirstPage() ?? true;
   }
   public function onLastPage(): bool
   {
        return $this->paginator->onLastPage() ?? true;
   }
    public function hasMorePages(): bool
    {
        return $this->paginator->hasMorePages();
    }
   private function resolveItems(array $items): array
   {    
        $response = [];
        foreach ($items as $item) {

            $stdClassObj = new stdClass;

            foreach ($item->toArray() as $key => $value) {
                $stdClassObj->{$key} = $value;
            }

            array_push($response, $stdClassObj);
        }
        return $response;
   }
}