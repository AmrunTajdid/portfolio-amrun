@extends('layouts.app')

@section('content')

    {{-- 1. Navigation Bar --}}
    @include('components.navbar')

    <main class="flex-1 space-y-12">
        {{-- 2. Hero Section (Bento Layout) --}}
        @include('components.hero')

        {{-- 3. Skills & Specializations --}}
        @include('components.skills')

        {{-- 4. Featured Projects (4 New Core Projects in Bento Showcase) --}}
        @include('components.featured-bento')

        {{-- 5. All Projects (Interactive Filterable Grid with 9 Projects) --}}
        @include('components.project-grid')
    </main>

    {{-- 6. Footer & Collaboration CTA --}}
    @include('components.footer')

@endsection
