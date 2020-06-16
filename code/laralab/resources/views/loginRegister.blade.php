<DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>登录</title>
    <body>
    <div style="margin: auto;width: 500px;margin-top: 100px">
        <form action="add" method="post">
            <div >
                <label>Name:</label>
                <input type="text" name="name" placeholder="Name" required="">
            </div>
            <div >
                <label>Password:</label>
                <input type="password" name="password" placeholder="Password" required="">
{{--                <br>--}}
{{--                <label>Confirm Password:</label>--}}
{{--                <input type="password" name="password" placeholder="Password" required="">--}}
            </div>
            <div >
                <strong>Email:</strong>
                    <input type="email" name="email" placeholder="Email" required="">
            </div>
            <div >
                <input type="hidden" id="_token" name="_token" value="{{csrf_token()}}">
                <button type="submit">注册</button>
            </div>
        </form>
    </div>
    </body>
    </html>
</DOCTYPE>
