<?php
 /** @var $paginator \Illuminate\Pagination\LengthAwarePaginator */
?>
@if($paginator->hasmorePages())
<nav class="pagination my-large">
    @if($paginator->onFirstPage())
    <span class="pagination-item">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
          stroke="currentColor" style="width: 18px">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>
    </span>
    @else

    <a href="{{$paginator->previousPageUrl()}}" class="pagination-item">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
        stroke="currentColor" style="width: 18px">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
      </svg>
    </a>
    @endif

    <a href="#" class="pagination-item"> 1 </a>
    <a href="#" class="pagination-item"> 2 </a>
    <span class="pagination-item active"> 3 </span>
    <a href="#" class="pagination-item"> 4 </a>
    <a href="#" class="pagination-item">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
        stroke="currentColor" style="width: 18px">
        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
      </svg>
    </a>
   
  </nav>
  @endif