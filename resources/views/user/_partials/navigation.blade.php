<ul class="sidebar-menu" data-widget="tree">
   <li>
      <a href='#'>
      <img src="{{ asset('public/icons/dashboard1.png') }}" class="icon" alt="dashboard">
      <span>Dashboard</span>
      </a>
   </li>
   <li>
      <a href='{{ route('genealogy.tree') }}'>
      <img src="{{ asset('public/icons/tree.png') }}" class="icon" alt="dashboard">
      <span>Genealogy</span>
      </a>
   </li> 
   <li>
      <a href='{{ route('position.create') }}'>
      <img src="{{ asset('public/icons/buy.png') }}" class="icon" alt="dashboard">
      <span>Buying Position</span>
      </a>
   </li>
   <li>
      <a href='#'>
      <img src="{{ asset('public/icons/add_funds.png') }}" class="icon" alt="dashboard">
      <span>Add Funds</span>
      </a>
   </li>  
   <li>
      <a href='#'>
      <img src="{{ asset('public/icons/transfer.png') }}" class="icon" alt="dashboard">
      <span>Funds Transfer</span>
      </a>
   </li> 
   <li>
      <a href='#'>
      <img src="{{ asset('public/icons/promotion.png') }}" class="icon" alt="dashboard">
      <span>Discounts</span>
      </a>
   </li>
   <li>
      <a href='#'>
      <img src="{{ asset('public/icons/ebook.png') }}" class="icon" alt="dashboard">
      <span>Ebooks</span>
      </a>
   </li>
    <li class="treeview" id="menu_3">
      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
      <img src="{{ asset('public/icons/business.png') }}" class="icon" alt="dashboard">
      <span>History</span>
      <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i></span>
      </a>
      <ul class="treeview-menu">
         <li><a href='#'><i class="fa fa-circle-o"></i> <span parent-id="menu_3">Transaction History</span></a></li>
         <li><a href='#'><i class="fa fa-circle-o"></i> <span parent-id="menu_3">Funds History</span></a></li>
         <li><a href='#'><i class="fa fa-circle-o"></i> <span parent-id="menu_3">Withdrawal History</span></a></li>
         <li><a href='#'><i class="fa fa-circle-o"></i> <span parent-id="menu_3">Transfer History</span></a></li>
      </ul>
   </li>
    <li class="treeview" id="menu_4">
      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
      <img src="{{ asset('public/icons/withdrawal.png') }}" class="icon" alt="dashboard">
      <span>Withdrawal</span>
      <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i></span>
      </a>
      <ul class="treeview-menu">
         <li><a href='#'><i class="fa fa-circle-o"></i> <span parent-id="menu_4">Withdrawal</span></a></li>
         <li><a href='#'><i class="fa fa-circle-o"></i> <span parent-id="menu_4">Withdrawal History</span></a></li>
      </ul>
   </li>
   <li class="treeview" id="menu_2">
      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
      <img src="{{ asset('public/icons/setting.png') }}" class="icon" alt="dashboard">
      <span>Settings</span>
      <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i></span>
      </a>
      <ul class="treeview-menu">
        
         <li><a href='#'><i class="fa fa-circle-o"></i> <span parent-id="menu_2">Profile Settings</span></a></li>
         <li><a href='#'><i class="fa fa-circle-o"></i> <span parent-id="menu_2">Password Change</span></a></li>
      </ul>
   </li>
  
    <li>
      <a href='{{ route('login.logout') }}'>
      <img src="{{ asset('public/icons/signout.svg') }}">
      <span>Logout</span>
      </a>
   </li>  
    <li>
      <a target="_blank" href='{{ url('/') }}/affiliate/{{ Auth::user()->user_name }}'>
      <img src="{{ asset('public/icons/affiliate.png') }}">
      <span>Affiliate Links</span>
      </a>
   </li>
</ul>