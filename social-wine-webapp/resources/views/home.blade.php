@extends('layouts.app')

@section('content')
<div class="container" id ="home_app">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>@{{ title }}</h2>

                    <!-- <post-display v-for="post in posts"
                        :id="post.id"
                        :user_id="post.user_id"
                        :content="post.content"
                        :likes="post.likes"
                        :comments="post.comments"
                    /> -->
                </div>
            </div>
        </div>
    </div>
</div>

<script type="module">
    import {createApp} from "vue"
    import PostDisplay from "./vue-components/post-display.js"

    const app = createApp({
        data() {
            return {
                title: "Home title",
                user: @json($user),
                posts: @json($posts)
            }
        }
    });

    app.component('post-display', PostDisplay);
    app.mount("#home_app");
</script>
@endsection
