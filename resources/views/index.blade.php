@extends('app')

@section('content')
    <main class="row d-flex justify-content-center">
        <div class="container col-md-8 search-block d-flex justify-content-center m-1">
            <input type="text" class="search col-6" name="search" placeholder="Поиск">
            <img src="imgs/search2.png" alt="Найти" class="search-ico"/>
        </div>
        <div id="currentReviewsContainer" class="new-reviews container col-md-8 m-1">
            <short-review
                v-for="(review, index) in review_list" :key="index"
                v-bind:key="index"
                v-bind:mainpagescreen="review.main_image"
                v-bind:mainlink="review.mainlink"
                v-bind:commonscore="review.commonscore"
                v-bind:counter="review.counter"
                v-bind:content="review.content"
                v-bind:username="review.username"
                v-bind:userrating="review.userrating"
            ></short-review>
        </div>
    </main>
@endsection

@section('scripts')
    <script src="js/components.js"></script>
    <script src="js/index.js"></script>
@endsection
