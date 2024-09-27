<?php
    $request = \Config\Services::request();    
    
    $menu = service('webly')->getMenu('Main Menu');
    
    function getChildren($items, &$str) {
        $path = \Config\Services::request()->getUri()->getPath();

        if(!empty($items)) {
            $str .= "<ul class='dropdown-menu'>";
            foreach($items as $item) {
                $active = strpos($path, $item->slug) === 0 ? 'active' : '';

                $str .= "<li class='{$active}'>";
                $str .= "<a href='/{$item->slug}'>{$item->value}</a>";
                getChildren($item->children, $str);
                $str .= "</li>";
            }
            $str .= "</ul>";
        } else {
            return false;
        }
    }

    $path = \Config\Services::request()->getUri()->getPath();
    $str = '';
    foreach($menu as $item) {
        $active = strpos($path, $item->slug) === 0 ? 'active' : '';
        $item->slug = $item->slug == "/" ? '/' : "/{$item->slug}";
        $item->slug = $item->slug == "/#" ? "#" : $item->slug;
        if(!$item->children) {
            $str .= "<li class='{$active}'>";
            $str .= "<a href='{$item->slug}'>{$item->value}</a>";
            $str .= "</li>";   
        } else {
            $str .= "<li class='dropdown {$active}'>";
            $str .= "<a href='{$item->slug}' class='dropdown-toggle' data-toggle='dropdown'>{$item->value}<b class='caret'></b></a>";
            getChildren($item->children, $str);
            $str .= "</li>";   
        }
    }

    // debug($str);
?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><?= setting('App.website_title') ?></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <?= $str ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>