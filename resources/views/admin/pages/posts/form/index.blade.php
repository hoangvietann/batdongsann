@extends('admin/layout/main')
@section('subhead')
    <title>{{ $title }}</title>
@endsection
@section('subcontent')
<div id="create-post-page">
    <form id="post-form"  role="admin" data-ajax = "{{ (isset($post)) ? route('admin.posts.update', $post) : route('admin.posts.store') }}" 
    data-method = {{ (isset($post)) ? 'PUT' : 'POST' }}>
        <div class="py-5 relative">
            @include('frontend.pages.posts.crud.components.basic_info')

            @include('frontend.pages.posts.crud.components.posts_info')

            @include('frontend.pages.posts.crud.components.real_estate_info')

            @include('frontend.pages.posts.crud.components.tag_seo')

            @include('frontend.pages.posts.crud.components.images')

            @include('frontend.pages.posts.crud.components.contact_info')

            @include('frontend.pages.posts.crud.components.action')
        </div>
    </form>
    {{-- Modal --}}
    @include('frontend.pages.posts.crud.components.modal_add_attribute')
</div>

@endsection