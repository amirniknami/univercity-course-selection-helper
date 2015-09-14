<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">سامانه انتخاب واحد</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            @if(Auth::check())
               <form class="navbar-right navbar-form">
		   <div class="form-control"> {{$user->name}}  hi </div>
                   <a href="auth/logout" class="btn btn-primary">خروج</a>
               </form>
            @else
                <div class="navbar-right navbar-form">
                    <a href="auth/login" class="btn btn-primary">ورود</a>
                </div>
            @endif

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>