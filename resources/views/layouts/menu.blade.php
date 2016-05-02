<li class="treeview  {{ Request::is('posts*') ? 'active' : '' }}">
    <a href="#"><span>Posts</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{!! route('admin.posts.index') !!}">List Posts</a></li>
      <li><a href="{!! route('admin.posts.create') !!}">New Post</a></li>

    </ul>
</li>

<li class="treeview  {{ Request::is('news*') ? 'active' : '' }}">
    <a href="#"><span>News</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{!! route('admin.news.index') !!}">List News</a></li>
      <li><a href="{!! route('admin.news.create') !!}">New News</a></li>
    </ul>
</li>

