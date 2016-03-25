@extends('layouts.master')

@section('content')
    @include('includes.message-block')
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header>
                <h3>what do you have to say!</h3>
                <form action="{{route('post.create')}}" method="post">
                    <div class="form-group">
                        <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your post"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Post</button>
                    <input type="hidden" value="{{Session::token()}}" name="_token">
                </form>
            </header>
        </div>
    </section>
    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What other people say...</h3></header>
            <article class="post">
                <p>
                    Lorem ipsum dolor sit amet, duo tollit scribentur te. Ne sit recusabo conclusionemque, cum an iudicabit appellantur. No per eruditi propriae instructior, quo te modo eripuit.
                    Tation albucius delicatissimi in eum.
                </p>
                <div class="info">
                    Posted by Monish on 20 Mar 2016
                </div>
                <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a> |
                </div>
            </article>
            <article class="post">
                <p>
                    Lorem ipsum dolor sit amet, duo tollit scribentur te. Ne sit recusabo conclusionemque, cum an iudicabit appellantur. No per eruditi propriae instructior, quo te modo eripuit.
                    Tation albucius delicatissimi in eum.
                </p>
                <div class="info">
                    Posted by Monish on 20 Mar 2016
                </div>
                <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a> |
                </div>
            </article>
        </div>
    </section>
@endsection