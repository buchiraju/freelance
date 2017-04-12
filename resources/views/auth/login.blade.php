@extends('layouts.app')

@section('content')
<div class="container">
    <div  id="page-content" class="row marginBottom50">
        <div class="col-md-8">
            <h1 class="margin0">The Rita’s Italian Ice Story</h1>
            <h3>A Genuinely Cool History</h3>
            <p>As it turns out, people have been enjoying water ice for centuries.
                This cool treat’s heritage can be traced&nbsp;back to Ancient Rome and Greece where,
                it is said, people would infuse handfuls of snow from Mount Etna with wines and syrups as a special delicacy.
                In fact, Sicily is often cited as the birthplace of modern water ice as far as the Western world is concerned.
                Interestingly, the flavors once preferred in the western part of Sicily are still among the most popular today: coffee and lemon.
            </p>
            <h3>Conquering Europe and the New World</h3>
            <p>Water ice made its European debut around the same time as ice cream—in the second half of the 17th century.
                But whether water ice was first prepared in Italy, France, or Spain, no one knows for sure.
                Whatever the point of origin though, the delicious news spread quickly and eventually crossed the English Channel to Britain.
                From there, it was just a short hop to the “new world” as British and European settlers brought their favorite frosty treat to the fledgling cities on the Atlantic Coast of America.
                Water ice had officially become an international hit.
            </p>
            <h3>A Star is Born—and it’s Delicious</h3>            
            <p>We can’t imagine a more appropriate setting for the Rita’s story to begin than the sweltering hot summer of 1984. It&nbsp;was then that Bob Tumolo, a former Philadelphia firefighter, started selling Italian Ice (also referred to as water ice) from a small porch window in Bensalem, Pennsylvania. With the modest goal of earning a little extra income, he named the business after his wife. You guessed it! Her name is Rita.</p>
            <p>Bob and his mother, Elizabeth, set to work on their special formulation of Italian Ice, which they made fresh each day. They quickly perfected the flavors and consistency of the frozen treat, adding chunks of fresh fruit to the recipes—and ensuring freshness by discarding whatever they hadn’t sold after 36 hours.</p>
            <p>Rita’s Italian Ice was a flavor sensation with Philadelphians, who are arguably the most devoted and discriminating consumers of water ice in the United States. By 1987, Bob and his brother, John, had opened three more Rita’s locations in the Philadelphia area to meet increasing demand. Soon, customers started approaching Bob, wanting a taste of Rita’s success. In 1989, Bob started franchising the business and by 1996, Rita’s had grown to more than 100 outlets in nine states.</p>
            <p>Today, Rita’s Italian Ice continues to grow, expand, and spread happiness everywhere it goes. Still made fresh every day with real fruit. Still refreshing. Still fun. Still delicious. Just like it was in the early days when Bob Tumolo and his mother opened the very first Rita’s in Philadelphia.</p>            
        </div>
        <div id="auth_login_form" class="col-md-4">
            <div id="auth_login" class="well well-lg clearfix clearboth">
                <h2 class="text-center">Management Console</h2>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <label for="email" class="control-label">Username</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <label for="password" class="control-label">Password</label>
                            <input id="password" type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-large btn-info btnWrapper">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>                
    </div>
</div>
@endsection
