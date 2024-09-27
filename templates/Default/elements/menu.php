<?php
    $request = \Config\Services::request();    
    
    $menu = service('webly')->getMenu('Main Menu');
    
    function getChildren($items, &$str) {
        $path = \Config\Services::request()->getUri()->getRoutePath();

        if(!empty($items)) {
            $str .= "<ul class='dropdown-menu'>";
            foreach($items as $item) {
                $active = strpos($path, $item->slug) === 0 ? 'active' : '';

                $str .= "<li class='nav-item '>";
                $str .= "<a class='nav-link' href='/{$item->slug}'>{$item->value}</a>";
                getChildren($item->children, $str);
                $str .= "</li>";
            }
            $str .= "</ul>";
        } else {
            return false;
        }
    }

    $path = \Config\Services::request()->getUri()->getRoutePath();
    $path = empty($path) ? '/' : $path;

    $str = '';
    foreach($menu as $item) {
        $active = strpos($path, $item->slug) === 0 ? 'active' : '';
        $item->slug = $item->slug == "/" ? '/' : "/{$item->slug}";
        $item->slug = $item->slug == "/#" ? "#" : $item->slug;
        if(!$item->children) {
            $str .= "<li class='nav-item  '>";
            $str .= "<a class='nav-link {$active}' href='{$item->slug}'>{$item->value}</a>";
            $str .= "</li>";   
        } else {
            $str .= "<li class='nav-item  dropdown'>";
            $str .= "<a href='# ' class='dropdown-toggle nav-link {$active}' data-toggle='dropdown'>{$item->value} <i class='fa fa-caret-down'></i> </a>";
            getChildren($item->children, $str);
            $str .= "</li>";   
        }
    }

    // debug($str);
?>

<!-- Start Top Header -->
<div class="fables-forth-background-color fables-top-header-signin">
    <div class="container-fluid">
        <div class="row" id="top-row">
            <div class="col-12 col-sm-12 ">
                <!-- <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle border-0 bg-transparent font-13 lang-dropdown-btn pl-0" type="button" id="dropdownLangButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   EN/ HINDI
                  </button>
                  <div class="dropdown-menu p-0 fables-forth-background-color rounded-0 m-0 border-0 lang-dropdown" aria-labelledby="dropdownLangButton">
                        <a class="dropdown-item white-color font-13 fables-second-hover-color" href="/">
                       English</a>
                        <a class="dropdown-item white-color font-13 fables-second-hover-color" href="#">
                      Hindi</a> 
                  </div>
                </div> -->
                
<div class=" " ><marquee class="text-white" style="font-size: 17px;font-style: italic;font-weight:bold"> 
<?= block('scroll-line') ?>


</marquee></div>
                
            </div>
       
            <!-- <div class="col-12 col-sm-4 text-right d-none d-md-inline">
            <p class="text-white font-13"><i class="fables-iconphone">&nbsp;</i> Phone :  +91 87702 68673  <i class="fables-iconemail">&nbsp;</i> Email: jashpure@gmail.com </p>
            </div>
             -->
        </div>
    </div>
</div>

<div class="fables-navigation fables-main-background-color py-lg-0">
    <div class="container-fluid">
               <div class="row">
                   <div class="col-12 col-md-11 pr-md-0">                       
                       <nav class="navbar navbar-expand-md btco-hover-menu p-0">
         
                            <a class="pl-0" href="/"><img alt="Jashpure" src="/<?= setting('App.logo') ?>" alt="Jashpure" class="py-2" style="height:120px"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fables-iconmenu-icon text-white font-16"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="fablesNavDropdown"> 

                                <ul class="navbar-nav ml-auto fables-nav">   
                                    <!-- <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                            Link Name
                                        </a>
                                        
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                            Link Name
                                        </a>
                                        
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                            Link Name
                                        </a>
                                        
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                            Link Name
                                        </a>
                                        
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                            Link Name
                                        </a>
                                        
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                            Link Name
                                        </a>
                                        
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                            Link Name
                                        </a>
                                        
                                    </li> -->
                                    <?= $str ?>
                                    <!-- <li class='nav-item  dropdown'>
                                        <a href='#' class='dropdown-toggle nav-link ' data-toggle='dropdown'>Tourism <i class='fa fa-caret-down'></i> </a>
                                        <ul class='dropdown-menu'>
                                            <li class='nav-item '><a class='nav-link' href='/tourism/about-us'>About Us </a></li> 
                                            <li class='nav-item '><a class='nav-link' href='/tourism/different-tour-packages'>Different Tour Packages </a></li> 

                                        </ul>
                                    </li> -->
                                    <!-- <li class="nav-item ">
                                        <a class="nav-link" href="#">
                                            Contact Us
                                        </a>
                                        
                                    </li> -->
                                  
                                </ul> 
                           
                                <form action="/search" class="d-md-flex d-none"  method="post" class="w-50" enctype="multipart/form-data">
                                <?= csrf_field() ?>
                                    <input class="form-control me-2 p-2" name="search" type="search" placeholder="Search Here..." aria-label="Search" value="<?= old('search') ?>">
                                    <button class="btn btn-info" type="submit"><img alt="search" src="/templates/Default/assets/custom/images/search.png"  style="height:20px"></button>
                                </form>

                    </div>
                </nav>
                   </div>
                 <div class="col-12 col-md-1  pr-md-0 icons-header-mobile">
                       
                    <div class="fables-header-icons">
                    <a href="/shop/cart" class="fables-third-text-color  right px-3 px-md-2 px-lg-5 fables-second-hover-color top-header-link max-line-height position-relative">
                        <i class="fables-iconcart-icon font-20"></i>
                        <i class="fables-cart-number fables-second-background-color text-center cart_count"><?= session()->get('cart_count') ?? 0 ?></i>
                    </a>
 
                         </div>

                         <a href="#" class="open-search fables-third-text-color right d-md-none d-block top-header-link px-3 px-md-2 px-lg-4 fables-second-hover-color border-0 max-line-height">
                            <span class="fables-iconsearch-icon"></span>
                        </a> 
                         
                         <!-- <div class="  dropdown">
                            <a href="/products " class="dropdown-toggle fables-third-text-color fables-second-hover-color font-13 top-header-link px-3 px-md-2 px-lg-4 max-line-height" data-toggle="dropdown"><i class="fables-iconuser"></i><b class="caret"></b></a><ul class="dropdown-menu">
                                <li class="nav-item "><a class="nav-link text-dark" href="#">Login</a></li>
                                <li class="nav-item "><a class="nav-link text-dark" href="#">Register </a></li></ul></div>
                    -->
                         
                         
                         
                         
                    </div> 
                   </div>
               </div>
    </div>
</div> 