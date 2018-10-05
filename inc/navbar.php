<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="/">
                Starpedia
            </a>
        </div>
        <div class="navbar-collapse collapse">
<!--            <ul class="nav navbar-nav pull-right">-->
<!--                <li class="active"><a href="#">Home</a></li>-->
<!--                <li><a href="/">About</a></li>-->
<!--                <li class="dropdown">-->
<!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Wiki<b class="caret"></b></a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a href="/">Left Sidebar</a></li>-->
<!--                        <li class="active"><a href="/">Right Sidebar</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
            <form action="/testform" method="POST" class="form-inline pull-right my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" name="Search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 search-btn" type="submit">Search</button>
            </form>
        </div><!--/.nav-collapse -->
    </div>
</div>
<!-- /.navbar -->