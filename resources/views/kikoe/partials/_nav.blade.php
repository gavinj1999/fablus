<nav class="menu">
  <div class="container">
    <div class="brand">
      <a href="#">
        <img src="/storage/{{setting('kiko.kikologo')}}" alt="Kikoe Logo">
      </a>
    </div>
    <div class="mobile-toggle">
      <a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
    </div>
    <div class="mobile-toggle">
      <a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
    </div>
    <div id="menu-list">
      <ul class="nav-list">
        <li class="for-tablet nav-title"><a>Menu</a></li>
        <li class="for-tablet"><a href="login.html">Login</a></li>
        <li class="for-tablet"><a href="register.html">Register</a></li>
        <li><a href="/">Home</a></a></li>
        <li class="dropdown magz-dropdown">
          <a href="/categories">Categories<i class="ion-ios-arrow-right"></i></a>
          <ul class="dropdown-menu">
              <li><a style="text-transform: capitalize;" href="/category/all">All</a></li>
            @foreach($categories as $category)
            <li><a style="text-transform: capitalize;" href="/category/{{$category->name}}">{{$category->name}}</a></li>
          @endforeach
          </ul>
        </li>
        <li class="dropdown magz-dropdown"><a href="#">Dropdown <i class="ion-ios-arrow-right"></i></a>
          <ul class="dropdown-menu">
            <li><a href="category.html">Internet</a></li>
            <li class="dropdown magz-dropdown"><a href="category.html">Troubleshoot <i class="ion-ios-arrow-right"></i></a>
              <ul class="dropdown-menu">
                <li><a href="category.html">Software</a></li>
                <li class="dropdown magz-dropdown"><a href="category.html">Hardware <i class="ion-ios-arrow-right"></i></a>
                  <ul class="dropdown-menu">
                    <li><a href="category.html">Main Board</a></li>
                    <li><a href="category.html">RAM</a></li>
                    <li><a href="category.html">Power Supply</a></li>
                  </ul>
                </li>
                <li><a href="category.html">Brainware</a>
              </ul>
            </li>
            <li><a href="category.html">Office</a></li>
            <li class="dropdown magz-dropdown"><a href="#">Programming <i class="ion-ios-arrow-right"></i></a>
              <ul class="dropdown-menu">
                <li><a href="category.html">Web</a></li>
                <li class="dropdown magz-dropdown"><a href="category.html">Mobile <i class="ion-ios-arrow-right"></i></a>
                  <ul class="dropdown-menu">
                    <li class="dropdown magz-dropdown"><a href="category.html">Hybrid <i class="ion-ios-arrow-right"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Ionic Framework 1</a></li>
                        <li><a href="#">Ionic Framework 2</a></li>
                        <li><a href="#">Ionic Framework 3</a></li>
                        <li><a href="#">Framework 7</a></li>
                      </ul>
                    </li>
                    <li><a href="category.html">Native</a></li>
                  </ul>
                </li>
                <li><a href="category.html">Desktop</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#">Mega Menu <i class="ion-ios-arrow-right"></i> <div class="badge">Hot</div></a>
          <div class="dropdown-menu megamenu">
            <div class="megamenu-inner">
              <div class="row">
                <div class="col-md-3">
                  <div class="row">
                    <div class="col-md-12">
                      <h2 class="megamenu-title">Trending</h2>
                    </div>
                  </div>
                  <ul class="vertical-menu">
                    <li><a href="#"><i class="ion-ios-circle-outline"></i> Mega menu is a new feature</a></li>
                    <li><a href="#"><i class="ion-ios-circle-outline"></i> This is an example</a></li>
                    <li><a href="#"><i class="ion-ios-circle-outline"></i> For a submenu item</a></li>
                    <li><a href="#"><i class="ion-ios-circle-outline"></i> You can add</a></li>
                    <li><a href="#"><i class="ion-ios-circle-outline"></i> Your own items</a></li>
                  </ul>
                </div>
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-12">
                      <h2 class="megamenu-title">Featured Posts</h2>
                    </div>
                  </div>
                  <div class="row">
                    @foreach($megamenu as $mega)

                    <article class="article col-md-4 mini">
                      <div class="inner">
                        <figure>
                          <a href="single.html">
                            <img src="{{$mega->urlToImage}}" alt="Sample Article">
                          </a>
                        </figure>
                        <div class="padding">
                          <div class="detail">
                            <div class="time">{{$mega->published_at}}</div>
                            <div class="category"><a href="/category/{{$mega->category}}">{{$mega->category}}</a></div>
                          </div>
                          <h2><a href="/article/{{$mega->slug}}">{{$mega->title}}</a></h2>
                        </div>
                      </div>
                    </article>
    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#">Column <i class="ion-ios-arrow-right"></i></a>
          <div class="dropdown-menu megamenu">
            <div class="megamenu-inner">
              <div class="row">
                <div class="col-md-3">
                  <h2 class="megamenu-title">Column 1</h2>
                  <ul class="vertical-menu">
                    <li><a href="#">Example 1</a></li>
                    <li><a href="#">Example 2</a></li>
                    <li><a href="#">Example 3</a></li>
                    <li><a href="#">Example 4</a></li>
                    <li><a href="#">Example 5</a></li>
                  </ul>
                </div>
                <div class="col-md-3">
                  <h2 class="megamenu-title">Column 2</h2>
                  <ul class="vertical-menu">
                    <li><a href="#">Example 6</a></li>
                    <li><a href="#">Example 7</a></li>
                    <li><a href="#">Example 8</a></li>
                    <li><a href="#">Example 9</a></li>
                    <li><a href="#">Example 10</a></li>
                  </ul>
                </div>
                <div class="col-md-3">
                  <h2 class="megamenu-title">Column 3</h2>
                  <ul class="vertical-menu">
                    <li><a href="#">Example 11</a></li>
                    <li><a href="#">Example 12</a></li>
                    <li><a href="#">Example 13</a></li>
                    <li><a href="#">Example 14</a></li>
                    <li><a href="#">Example 15</a></li>
                  </ul>
                </div>
                <div class="col-md-3">
                  <h2 class="megamenu-title">Column 4</h2>
                  <ul class="vertical-menu">
                    <li><a href="#">Example 16</a></li>
                    <li><a href="#">Example 17</a></li>
                    <li><a href="#">Example 18</a></li>
                    <li><a href="#">Example 19</a></li>
                    <li><a href="#">Example 20</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="dropdown magz-dropdown"><a href="#">Dropdown Icons <i class="ion-ios-arrow-right"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="icon ion-person"></i> My Account</a></li>
            <li><a href="#"><i class="icon ion-heart"></i> Favorite</a></li>
            <li><a href="#"><i class="icon ion-chatbox"></i> Comments</a></li>
            <li><a href="#"><i class="icon ion-key"></i> Change Password</a></li>
            <li><a href="#"><i class="icon ion-settings"></i> Settings</a></li>
            <li class="divider"></li>
            <li><a href="#"><i class="icon ion-log-out"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
