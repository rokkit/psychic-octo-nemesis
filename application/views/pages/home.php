<style type="text/css">
.orange {
	background: #cf6700 url(/application/assets/img/toolbar_x.png) repeat-x;
	color:#000000;
}
</style>
<div class="navbar  navbar-fixed-top ">
      <div class="navbar-inner orange">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Одноклассники</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><li><?php echo anchor('pages/about/', 'About', 'class="link-class"'); ?></li></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container" style="margin-top:50px;">

<div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Profile</li>
              <li><?php echo anchor('auth/logout/', 'Logout', 'class="link-class"'); ?></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
            <h1>Hello, <?php echo $user->name ?></h1>
          </div>

        </div><!--/span-->
      </div>
    </div>
