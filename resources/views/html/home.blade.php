@extends('html_layout')
@section('title', $entity->title)
@section('description', $entity->description)
@section('main')
    <!-- <p>{{$website->properties['donate']}}</p> -->
    <p>{{$website->properties['github']}}</p>
    <p>{{$website->properties['cuatromedios']}}</p>
    <h2>{{ $entity->title }}</h2>
    @if($media->isNotEmpty())
        <div class="hero-slider">
            @foreach($media->mediaWithTag('hero') as $hero)
                <img src="{{ $hero->slide }}" alt="{{ $hero->title }}" />
            @endforeach
        </div>
    @endif

    <p>{{ $entity->welcome }}</p>
    <h2>{{ $feature->title }}</h2>
    <p>{{ $feature->description }}</p>
 
    <!-- <ul>
        @forelse ($children as $child)
           <li>
               <a href="{{ $child->route }}">
                   @if($child->medium)<img src="{{ $child->medium->icon }}" alt="{{ $child->medium->title }}">@endif
                   {{ $child->title }}
               </a>
           </li>
        @empty
           <li>No children</li>
        @endforelse
    </ul> -->
@endsection
