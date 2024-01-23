 <!-- BEGIN: Top Bar -->
 <div class="top-bar -mx-4 px-4 md:mx-0 md:px-0">
     <!-- BEGIN: Breadcrumb -->
     <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="#">Application</a></li>
             <li class="breadcrumb-item active" aria-current="page"><?= $menu; ?></li>
         </ol>
     </nav>
     <!-- END: Breadcrumb -->
     <!-- BEGIN: Search -->
     <div class="intro-x relative mr-3 sm:mr-6">
         <!-- <div class="search hidden sm:block">
             <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
             <i data-lucide="search" class="search__icon dark:text-slate-500"></i>
         </div> -->
         <a class="notification sm:hidden" href=""> <i data-lucide="search"
                 class="notification__icon dark:text-slate-500"></i> </a>
         <div class="search-result">
             <div class="search-result__content">
                 <div class="search-result__content__title">Pages</div>
                 <div class="mb-5">
                     <a href="" class="flex items-center">
                         <div
                             class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full">
                             <i class="w-4 h-4" data-lucide="inbox"></i>
                         </div>
                         <div class="ml-3">Mail Settings</div>
                     </a>
                     <a href="" class="flex items-center mt-2">
                         <div class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full">
                             <i class="w-4 h-4" data-lucide="users"></i>
                         </div>
                         <div class="ml-3">Users & Permissions</div>
                     </a>
                     <a href="" class="flex items-center mt-2">
                         <div
                             class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full">
                             <i class="w-4 h-4" data-lucide="credit-card"></i>
                         </div>
                         <div class="ml-3">Transactions Report</div>
                     </a>
                 </div>
                 <div class="search-result__content__title">Users</div>
                 <div class="mb-5">
                     <a href="" class="flex items-center mt-2">
                         <div class="w-8 h-8 image-fit">
                             <img alt="Midone - HTML Admin Template" class="rounded-full"
                                 src="dist/images/profile-15.jpg">
                         </div>
                         <div class="ml-3">Angelina Jolie</div>
                         <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                             angelinajolie@left4code.com</div>
                     </a>
                     <a href="" class="flex items-center mt-2">
                         <div class="w-8 h-8 image-fit">
                             <img alt="Midone - HTML Admin Template" class="rounded-full"
                                 src="dist/images/profile-10.jpg">
                         </div>
                         <div class="ml-3">Christian Bale</div>
                         <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                             christianbale@left4code.com</div>
                     </a>
                     <a href="" class="flex items-center mt-2">
                         <div class="w-8 h-8 image-fit">
                             <img alt="Midone - HTML Admin Template" class="rounded-full"
                                 src="dist/images/profile-8.jpg">
                         </div>
                         <div class="ml-3">Tom Cruise</div>
                         <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                             tomcruise@left4code.com</div>
                     </a>
                     <a href="" class="flex items-center mt-2">
                         <div class="w-8 h-8 image-fit">
                             <img alt="Midone - HTML Admin Template" class="rounded-full"
                                 src="dist/images/profile-11.jpg">
                         </div>
                         <div class="ml-3">Russell Crowe</div>
                         <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                             russellcrowe@left4code.com</div>
                     </a>
                 </div>
                 <div class="search-result__content__title">Products</div>
                 <a href="" class="flex items-center mt-2">
                     <div class="w-8 h-8 image-fit">
                         <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-13.jpg">
                     </div>
                     <div class="ml-3">Oppo Find X2 Pro</div>
                     <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp;
                         Tablet</div>
                 </a>
                 <a href="" class="flex items-center mt-2">
                     <div class="w-8 h-8 image-fit">
                         <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-11.jpg">
                     </div>
                     <div class="ml-3">Sony A7 III</div>
                     <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
                 </a>
                 <a href="" class="flex items-center mt-2">
                     <div class="w-8 h-8 image-fit">
                         <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-3.jpg">
                     </div>
                     <div class="ml-3">Nikon Z6</div>
                     <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
                 </a>
                 <a href="" class="flex items-center mt-2">
                     <div class="w-8 h-8 image-fit">
                         <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-7.jpg">
                     </div>
                     <div class="ml-3">Nikon Z6</div>
                     <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
                 </a>
             </div>
         </div>
     </div>
     <!-- END: Search -->
     <!-- BEGIN: Account Menu -->
     <div class="intro-x dropdown w-8 h-8">
         <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button"
             aria-expanded="false" data-tw-toggle="dropdown">
             <img alt="Profile" src="admin/<?= $admin["img_dir"]; ?>">
         </div>
         <div class="dropdown-menu w-56">
             <ul class="dropdown-content bg-primary text-white">
                 <li class="p-2">
                     <div class="font-medium"><?= $admin["nama_lengkap"]; ?></div>
                     <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">Administrator</div>
                 </li>
                 <li>
                     <hr class="dropdown-divider border-white/[0.08]">
                 </li>
                 <li>
                     <a href="profile.php" class="dropdown-item hover:bg-white/5"> <i data-lucide="settings"
                             class="w-4 h-4 mr-2"></i>
                         Pengaturan </a>
                 </li>
                 <li>
                     <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle"
                             class="w-4 h-4 mr-2"></i> Help </a>
                 </li>
                 <li>
                     <hr class="dropdown-divider border-white/[0.08]">
                 </li>
                 <li>
                     <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="log-out"
                             class="w-4 h-4 mr-2"></i> Logout </a>
                 </li>
             </ul>
         </div>
     </div>
     <!-- END: Account Menu -->
 </div>
 <!-- END: Top Bar -->