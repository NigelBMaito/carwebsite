@props(['title'=> ''])

<x-base-layout :$title>
  
    <X-layouts.header />
     {{$slot}}
   

</x-base-layout>
 
