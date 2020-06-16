<DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>login</title>
    <body>
    <div style="margin: auto;width: 500px;margin-top: 100px">
        <form action="loginCheck" method="post">
            <div >
                <label>Name:</label>
                <input type="text" name="name" placeholder="Name" required="">
            </div>
            <div >
                <label>Password:</label>
                <input type="password" name="password" placeholder="Password" required="">
            </div>
            <div >
                <strong>Email:</strong>
                    <input type="email" name="email" placeholder="Email" required="">
            </div>
            <div >
                <input type="hidden" id="_token" name="_token" value="{{csrf_token()}}">
                <button onclick="register();">注册</button>
                <button type="submit">登录</button>
            </div>
            <div id="response"></div>
        </form>
    </div>
    </body>
    <script>
        function register() {
            location.href = "{{'loginRegister'}}";
        };
    </script>
{{--    <script>--}}
{{--        $.ajaxSetup({--}}
{{--            headers: {--}}
{{--                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    //携带csrf_token，否则会返回错误500--}}
{{--            }--}}
{{--        });--}}

{{--        $(".btn-submit").click(function (e) {--}}
{{--            document.getElementById("response").innerHTML = "";--}}
{{--            e.preventDefault();--}}
{{--            var name = $("input[name=name]").val();--}}
{{--            var password = $("input[name=password]").val();--}}
{{--            var email = $("input[name=email]").val();--}}
{{--            $.ajax({--}}
{{--                type: 'POST',--}}
{{--                url: '/loginCheck',--}}
{{--                data: {name: name, password: password, email: email},--}}
{{--                success: function () {--}}
{{--                    location.href = "{{'check_user'}}?name="+name+"&password="+password+"&email="+email;--}}
{{--                },--}}
{{--                error: data => {--}}
{{--                    if (data.status === 422) {--}}
{{--                        var errors = $.parseJSON(data.responseText);    //转json格式，或直接使用 data.responseJSON--}}
{{--                        $.each(errors, function (key, value) {--}}
{{--                            $('#response').addClass("alert alert-danger");--}}
{{--                            if ($.isPlainObject(value)) {--}}
{{--                                $.each(value, function (key, value) {--}}
{{--                                    console.log(key + " " + value);--}}
{{--                                    $('#response').show().append(value + "<br/>");--}}

{{--                                });--}}
{{--                            } else {--}}
{{--                                $('#response').show().append(value + "<br/>"); //this is my div with messages--}}
{{--                            }--}}
{{--                        });--}}
{{--                    }--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}

    </html>
</DOCTYPE>
