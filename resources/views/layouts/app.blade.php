@props(['title'=> '', 'bodyClass'=> null, 'footerLinks'=>''])

<x-base-layout :$title :$bodyClass>
  
    <X-layouts.header />
     {{$slot}}
   

</x-base-layout>
 
