<?php

namespace App\Repositories;

interface PaginationInterface
{
   public function items(): array;
   public function currentPage(): int;
   public function nextPage(): int;
   public function previousPage(): int;
   public function total(): int;
   public function onFirstPage(): bool;
   public function onLastPage(): bool;
   public function hasMorePages(): bool; 
}