<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Newserific
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>GAB | Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/layout/styles/layout.css') }}">
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div class="fl_left">
      <h1><a href="index.html">GAB.</a></h1>
      <p>Menyuguhkan berita terkini untuk anda</p>
    </div>
    <div class="fl_right"><a href="#"><img src="images/demo/468x60.gif" alt="" /></a></div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="/">Home</a></li>
        <li ><a href="lifestyle">Lifestyle</a></li>
        <li><a href="otomotif">Otomotif</a></li>
        <li><a href="">Tech</a></li>
      </ul>
    </div>
    <div id="search">
      <form action="berita" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="Search" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
{{-- <div class="wrapper col4"> --}}
    @if ($index->count())
    <div class="container">
        <div class="row align-items-start">
          <div class="col">
            <div class="card mb-3">
                <img src="{{$index[7]->img_url}}"weight="653px" height="366px" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$index[7]->title}}</h5>
                  <p class="card-text">{{$index[7]->description}}</p>
                  <p class="card-text"><a href="{{$index[7]->source_url}}">Continue Reading &raquo;</a></p></p>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card mb-3">
                <img src="{{$index[9]->img_url}}"weight="653px" height="366px" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$index[9]->title}}</h5>
                  <p class="card-text">{{$index[9]->description}}</p>
                  <p class="card-text"><a href="{{$index[9]->source_url}}">Continue Reading &raquo;</a></p></p>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card mb-3">
                <img src="{{$index[10]->img_url}}" weight="653px" height="366px" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$index[10]->title}}</h5>
                  <p class="card-text">{{$index[10]->description}}</p>
                  <p class="card-text"><a href="{{$index[10]->source_url}}">Continue Reading &raquo;</a></p></p>
                </div>
              </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col">
            <div class="card mb-3">
                <img src="{{$index[1]->img_url}}"weight="653px" height="366px" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$index[1]->title}}</h5>
                  <p class="card-text">{{$index[1]->description}}</p>
                  <p class="card-text"><a href="{{$index[1]->source_url}}">Continue Reading &raquo;</a></p></p>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card mb-3">
                <img src="{{$index[20]->img_url}}" weight="653px" height="366px" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$index[20]->title}}</h5>
                  <p class="card-text">{{$index[20]->description}}</p>
                  <p class="card-text"><a href="{{$index[20]->source_url}}">Continue Reading &raquo;</a></p></p>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card mb-3">
                <img src="{{$index[25]->img_url}}"weight="653px" height="366px" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$index[25]->title}}</h5>
                  <p class="card-text">{{$index[25]->description}}</p>
                  <p class="card-text"><a href="{{$index[25]->source_url}}">Continue Reading &raquo;</a></p></p>
                </div>
              </div>
          </div>
        </div>
        <div class="row align-items-end">
          <div class="col">
            <div class="card mb-3">
                <img src="{{$index[66]->img_url}}"weight="653px" height="366px" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$index[66]->title}}</h5>
                  <p class="card-text">{{$index[66]->description}}</p>
                  <p class="card-text"><a href="{{$index[66]->source_url}}">Continue Reading &raquo;</a></p></p>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card mb-3">
                <img src="{{$index[33]->img_url}}"weight="653px" height="366px" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$index[33]->title}}</h5>
                  <p class="card-text">{{$index[33]->description}}</p>
                  <p class="card-text"><a href="{{$index[33]->source_url}}">Continue Reading &raquo;</a></p></p>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card mb-3">
                <img src="{{$index[90]->img_url}}"weight="653px" height="366px" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$index[90]->title}}</h5>
                  <p class="card-text">{{$index[90]->description}}</p>
                  <p class="card-text"><a href="{{$index[90]->source_url}}">Continue Reading &raquo;</a></p></p>
                </div>
              </div>
          </div>
        </div>
      </div>
    @endif
    <div id="column">
    {{-- @if ($index->count())
      <ul id="latestnews">
        <li><img src="{{$index[1]->img_url}}" alt="">
          <p><strong><a href="{{$index[1]->source_url}}">{{$index[1]->title}}</a></strong>{{$index[1]->description}}</p>
        </li>
        <li><img src="{{$index[2]->img_url}}" alt="">
          <p><strong><a href="{{$index[2]->source_url}}">{{$index[2]->title}}</a></strong>{{$index[2]->description}}</p>
        </li>
        <li><img src="{{$index[3]->img_url}}" alt="">
          <p><strong><a href="{{$index[3]->source_url}}">{{$index[3]->title}}</a></strong>{{$index[3]->description}}</p>
        </li>
        <li><img src="{{$index[4]->img_url}}" alt="">
          <p><strong><a href="{{$index[4]->source_url}}">{{$index[4]->title}}</a></strong>{{$index[4]->description}}</p>
        </li>
        <li class="last"><img src="{{$index[5]->img_url}}" alt="">
          <p><strong><a href="{{$index[5]->source_url}}">{{$index[5]->title}}</a></strong>{{$index[5]->description}}</p>
        </li>
      </ul>
    @endif --}}
    </div>
    <br class="clear" />
  </div>
  <br class="clear" />
{{-- </div> --}}
<div class="wrapper col7">
  <div id="copyright">
    <p class="center">Copyright &copy; 2022 by <a href="#">Hito | IT-0202 | 1202199006</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>