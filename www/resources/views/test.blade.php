
<html>
    <body>
        <h1>userInfoInput</h1>
        <form method="post" action="{{ route('getUserInfo') }}">
            {!! csrf_field() !!}
            userID: <input type="text" name="userId" />
            <input type="submit"></input>
        </form>
        <h1>CommentInfoInput</h1>
        <form method="post" action="{{ route('getComment') }}">
            {!! csrf_field() !!}
            feedId: <input type="text" name="feedId" />
            <input type="submit"></input>
        </form>
        <h1>CommentNumberInfoInput</h1>
        <form method="post" action="{{ route('getComment') }}">
            {!! csrf_field() !!}
            feedId: <input type="text" name="feedId" />
            <input type="submit"></input>
        </form>
        <h1>LikeNumberInfoInput</h1>
        <form method="post" action="{{ route('getLikeNumber') }}">
            {!! csrf_field() !!}
            feedId: <input type="text" name="feedCommentId" />
            <input type="submit"></input>
        </form>
    </body>
</html>