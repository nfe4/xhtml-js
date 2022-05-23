// var app = new Framework7({
var routes = [
    // Index page
    {
        path: '/',
        url: './index.php',
        name: 'home',
    },

    // About page
    {
        path: '/about/',
        url: '/pages/about.php',
        name: 'about',
    },

    // Right Panel pages
    {
        path: '/panel-right-1/',
        content: `
      <div class="page">
        <div class="navbar">
          <div class="navbar-bg"></div>
          <div class="navbar-inner sliding">
            <div class="left">
              <a href="#" class="link back">
                <i class="icon icon-back"></i>
                <span class="if-not-md">Back</span>
              </a>
            </div>
            <div class="title">Panel Page 1</div>
          </div>
        </div>
        <div class="page-content">
          <div class="block">
            <p>This is a right panel page 1</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo saepe aspernatur inventore dolorum voluptates consequatur tempore ipsum! Quia, incidunt, aliquam sit veritatis nisi aliquid porro similique ipsa mollitia eaque ex!</p>
          </div>
        </div>
      </div>
    `,
    },
    {
        path: '/panel-right-2/',
        content: `
      <div class="page">
        <div class="navbar">
          <div class="navbar-bg"></div>
          <div class="navbar-inner sliding">
            <div class="left">
              <a href="#" class="link back">
                <i class="icon icon-back"></i>
                <span class="if-not-md">Back</span>
              </a>
            </div>
            <div class="title">Panel Page 2</div>
          </div>
        </div>
        <div class="page-content">
          <div class="block">
            <p>This is a right panel page 2</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo saepe aspernatur inventore dolorum voluptates consequatur tempore ipsum! Quia, incidunt, aliquam sit veritatis nisi aliquid porro similique ipsa mollitia eaque ex!</p>
          </div>
        </div>
      </div>
    `,
    },

    // Account
    {
        path: '/signin/',
        componentUrl: './pages/signin.php',
    },
    {
        path: '/admin-signin/',
        componentUrl: './pages/admin-signin.php',
    },
    {
        path: '/logout/',
        componentUrl: './pages/logout.php',
    },
    {
        path: '/student-login-check/',
        componentUrl: './pages/11.php',
    },
    {
        path: '/signup/',
        componentUrl: './pages/signup.php',
    },

    // Pages
    {
        path: '/welcome/',
        url: './pages/welcome.php',
    },
    {
        path: '/signin-student/',
        componentUrl: './pages/student.php',
    },
    {
        path: '/home/',
        url: './pages/home.php',
    },
    {
        path: '/home-teacher/',
        url: './pages/teacher.php',
    },
    {
        path: '/home-admin/',
        url: './pages/admin.php',
    },
    {
        path: '/teacher-lecture/',
        componentUrl: './pages/teacher-lecture.php',
    },
    {
        path: '/search/',
        componentUrl: './pages/search.php',
    },
    {
        path: '/job-detail/',
        componentUrl: './pages/job-detail.php',
    },
    {
        path: '/syllabus/',
        componentUrl: './pages/syllabus.php',
    },
    {
        path: '/syllabus-php/',
        componentUrl: './pages/syllabus-php.php',
    },
    {
        path: '/syllabus-os/',
        componentUrl: './pages/syllabus-os.php',
    },
    {
        path: '/syllabus-net/',
        componentUrl: './pages/syllabus-net.php',
    },
    {
        path: '/apply-form/',
        url: './pages/apply-form.php',
    },
    {
        path: '/company-detail/',
        url: './pages/company-detail.php',
    },
    {
        path: '/profile/',
        url: './pages/profile.php',
    },
    {
        path: '/teacher-profile/',
        url: './pages/teacher-profile.php',
    },
    {
        path: '/notifications-app/',
        url: './pages/notifications-app.php',
    },

    // Messages
    {
        path: '/messages-list/',
        url: './pages/messages-list.php',
    },
    {
        path: '/elements/',
        url: './pages/elements.php',
    },

    // Components
    {
        path: '/accordion/',
        url: './pages/accordion.php',
    },
    {
        path: '/action-sheet/',
        componentUrl: './pages/action-sheet.php',
    },
    {
        path: '/appbar/',
        componentUrl: './pages/appbar.php',
    },
    {
        path: '/area-chart/',
        componentUrl: './pages/area-chart.php',
    },
    {
        path: '/autocomplete/',
        componentUrl: './pages/autocomplete.php',
    },
    {
        path: '/badge/',
        url: './pages/badge.php',
    },
    {
        path: '/delete/',
        url: './pages/delete.php',
    },
    {
        path: '/edit/',
        url: './pages/edit.php',
    },
    {
        path: '/buttons/',
        componentUrl: './pages/buttons.php',
    },
    {
        path: '/calendar/',
        componentUrl: './pages/calendar.php',
    },
    {
        path: '/calendar-page/',
        componentUrl: './pages/calendar-page.php',
    },
    {
        path: '/cards/',
        url: './pages/cards.php',
    },
    {
        path: '/cards-expandable/',
        url: './pages/cards-expandable.php',
    },
    {
        path: '/checkbox/',
        componentUrl: './pages/checkbox.php',
    },
    {
        path: '/chips/',
        componentUrl: './pages/chips.php',
    },
    {
        path: '/color-picker/',
        componentUrl: './pages/color-picker.php',
    },
    {
        path: '/contacts-list/',
        url: './pages/contacts-list.php',
    },
    {
        path: '/content-block/',
        url: './pages/content-block.php',
    },
    {
        path: '/data-table/',
        componentUrl: './pages/data-table.php',
    },
    {
        path: '/dialog/',
        componentUrl: './pages/dialog.php',
    },
    {
        path: '/elevation/',
        url: './pages/elevation.php',
    },
    {
        path: '/fab/',
        url: './pages/fab.php',
    },
    {
        path: '/fab-morph/',
        url: './pages/fab-morph.php',
    },
    {
        path: '/form-storage/',
        url: './pages/form-storage.php',
    },
    {
        path: '/gauge/',
        componentUrl: './pages/gauge.php',
    },
    {
        path: '/grid/',
        url: './pages/grid.php',
    },
    {
        path: '/icons/',
        componentUrl: './pages/icons.php',
    },
    {
        path: '/infinite-scroll/',
        componentUrl: './pages/infinite-scroll.php',
    },
    {
        path: '/inputs/',
        url: './pages/inputs.php',
    },
    {
        path: '/register/',
        url: './pages/register.php',
    },
    {
        path: '/courses/',
        url: './pages/courses.php',
    },
    {
        path: '/teacher-admin/',
        url: './pages/admin-teacher.php',
    },
    {
        path: '/add-new-sub/',
        url: './pages/subject.php',
    },
    {
        path: '/lazy-load/',
        url: './pages/lazy-load.php',
    },
    {
        path: '/list/',
        url: './pages/list.php',
    },
    {
        path: '/list-index/',
        componentUrl: './pages/list-index.php',
    },
    {
        path: '/login-screen/',
        componentUrl: './pages/login-screen.php',
    },
    {
        path: '/login-screen-page/',
        componentUrl: './pages/login-screen-page.php',
    },
    {
        path: '/menu/',
        componentUrl: './pages/menu.php',
    },
    {
        path: '/menu-list/',
        componentUrl: './pages/menu-list.php',
    },
    {
        path: '/messages/',
        componentUrl: './pages/messages.php',
    },
    {
        path: '/navbar/',
        url: './pages/navbar.php',
    },
    {
        path: '/navbar-hide-scroll/',
        url: './pages/navbar-hide-scroll.php',
    },
    {
        path: '/notifications/',
        componentUrl: './pages/notifications.php',
    },
    {
        path: '/panel/',
        url: './pages/panel.php',
    },
    {
        path: '/photo-browser/',
        componentUrl: './pages/photo-browser.php',
    },
    {
        path: '/picker/',
        componentUrl: './pages/picker.php',
    },
    {
        path: '/pie-chart/',
        componentUrl: './pages/pie-chart.php',
    },
    {
        path: '/popup/',
        componentUrl: './pages/popup.php',
    },
    {
        path: '/popover/',
        url: './pages/popover.php',
    },
    {
        path: '/preloader/',
        componentUrl: './pages/preloader.php',
    },
    {
        path: '/progressbar/',
        componentUrl: './pages/progressbar.php',
    },
    {
        path: '/pull-to-refresh/',
        componentUrl: './pages/pull-to-refresh.php',
    },
    {
        path: '/radio/',
        url: './pages/radio.php',
    },
    {
        path: '/range/',
        componentUrl: './pages/range.php',
    },
    {
        path: '/searchbar/',
        url: './pages/searchbar.php',
    },
    {
        path: '/searchbar-expandable/',
        url: './pages/searchbar-expandable.php',
    },
    {
        path: '/sheet-modal/',
        componentUrl: './pages/sheet-modal.php',
    },
    {
        path: '/skeleton/',
        componentUrl: './pages/skeleton.php',
    },
    {
        path: '/smart-select/',
        url: './pages/smart-select.php',
    },
    {
        path: '/sortable/',
        url: './pages/sortable.php',
    },
    {
        path: '/stepper/',
        componentUrl: './pages/stepper.php',
    },
    {
        path: '/subnavbar/',
        url: './pages/subnavbar.php',
    },
    {
        path: '/subnavbar-title/',
        url: './pages/subnavbar-title.php',
    },
    {
        path: '/swiper/',
        url: './pages/swiper.php',
        routes: [{
                path: 'swiper-horizontal/',
                url: './pages/swiper-horizontal.php',
            },
            {
                path: 'swiper-vertical/',
                url: './pages/swiper-vertical.php',
            },
            {
                path: 'swiper-space-between/',
                url: './pages/swiper-space-between.php',
            },
            {
                path: 'swiper-multiple/',
                url: './pages/swiper-multiple.php',
            },
            {
                path: 'swiper-nested/',
                url: './pages/swiper-nested.php',
            },
            {
                path: 'swiper-loop/',
                url: './pages/swiper-loop.php',
            },
            {
                path: 'swiper-3d-cube/',
                url: './pages/swiper-3d-cube.php',
            },
            {
                path: 'swiper-3d-coverflow/',
                url: './pages/swiper-3d-coverflow.php',
            },
            {
                path: 'swiper-3d-flip/',
                url: './pages/swiper-3d-flip.php',
            },
            {
                path: 'swiper-fade/',
                url: './pages/swiper-fade.php',
            },
            {
                path: 'swiper-scrollbar/',
                url: './pages/swiper-scrollbar.php',
            },
            {
                path: 'swiper-gallery/',
                componentUrl: './pages/swiper-gallery.php',
            },
            {
                path: 'swiper-custom-controls/',
                url: './pages/swiper-custom-controls.php',
            },
            {
                path: 'swiper-parallax/',
                url: './pages/swiper-parallax.php',
            },
            {
                path: 'swiper-lazy/',
                url: './pages/swiper-lazy.php',
            },
            {
                path: 'swiper-pagination-progress/',
                url: './pages/swiper-pagination-progress.php',
            },
            {
                path: 'swiper-pagination-fraction/',
                url: './pages/swiper-pagination-fraction.php',
            },
            {
                path: 'swiper-zoom/',
                url: './pages/swiper-zoom.php',
            },
        ],
    },
    {
        path: '/swipeout/',
        componentUrl: './pages/swipeout.php',
    },
    {
        path: '/tabs/',
        url: './pages/tabs.php',
    },
    {
        path: '/tabs-static/',
        url: './pages/tabs-static.php',
    },
    {
        path: '/fingerprint/',
        url: './pages/finger.php',
    },
    {
        path: '/facescan/',
        url: './pages/face.php',
    },
    {
        path: '/tabs-animated/',
        url: './pages/tabs-animated.php',
    },
    {
        path: '/tabs-swipeable/',
        url: './pages/tabs-swipeable.php',
    },
    {
        path: '/reset/',
        url: './pages/reset.php',
    },
    {
        path: '/tabs-routable/',
        url: './pages/tabs-routable.php',
        tabs: [{
                path: '/',
                id: 'tab1',
                content: `
        <div class="block">
          <p>Tab 1 content</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam enim quia molestiae facilis laudantium voluptates obcaecati officia cum, sit libero commodi. Ratione illo suscipit temporibus sequi iure ad laboriosam accusamus?</p>
          <p>Saepe explicabo voluptas ducimus provident, doloremque quo totam molestias! Suscipit blanditiis eaque exercitationem praesentium reprehenderit, fuga accusamus possimus sed, sint facilis ratione quod, qui dignissimos voluptas! Aliquam rerum consequuntur deleniti.</p>
          <p>Totam reprehenderit amet commodi ipsum nam provident doloremque possimus odio itaque, est animi culpa modi consequatur reiciendis corporis libero laudantium sed eveniet unde delectus a maiores nihil dolores? Natus, perferendis.</p>
        </div>
        `,
            },
            {
                path: '/tab2/',
                id: 'tab2',
                content: `
        <div class="block">
          <p>Tab 2 content</p>
          <p>Suscipit, facere quasi atque totam. Repudiandae facilis at optio atque, rem nam, natus ratione cum enim voluptatem suscipit veniam! Repellat, est debitis. Modi nam mollitia explicabo, unde aliquid impedit! Adipisci!</p>
          <p>Deserunt adipisci tempora asperiores, quo, nisi ex delectus vitae consectetur iste fugiat iusto dolorem autem. Itaque, ipsa voluptas, a assumenda rem, dolorum porro accusantium, officiis veniam nostrum cum cumque impedit.</p>
          <p>Laborum illum ipsa voluptatibus possimus nesciunt ex consequatur rem, natus ad praesentium rerum libero consectetur temporibus cupiditate atque aspernatur, eaque provident eligendi quaerat ea soluta doloremque. Iure fugit, minima facere.</p>
        </div>
        `,
            },
            {
                path: '/tab3/',
                id: 'tab3',
                content: `
        <div class="block">
          <p>Tab 3 content</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam enim quia molestiae facilis laudantium voluptates obcaecati officia cum, sit libero commodi. Ratione illo suscipit temporibus sequi iure ad laboriosam accusamus?</p>
          <p>Deserunt adipisci tempora asperiores, quo, nisi ex delectus vitae consectetur iste fugiat iusto dolorem autem. Itaque, ipsa voluptas, a assumenda rem, dolorum porro accusantium, officiis veniam nostrum cum cumque impedit.</p>
          <p>Laborum illum ipsa voluptatibus possimus nesciunt ex consequatur rem, natus ad praesentium rerum libero consectetur temporibus cupiditate atque aspernatur, eaque provident eligendi quaerat ea soluta doloremque. Iure fugit, minima facere.</p>
        </div>
        `,
            },
        ],
    },
    {
        path: '/text-editor/',
        componentUrl: './pages/text-editor.php',
    },
    {
        path: '/toast/',
        componentUrl: './pages/toast.php',
    },
    {
        path: '/toggle/',
        url: './pages/toggle.php',
    },
    {
        path: '/toolbar-tabbar/',
        componentUrl: './pages/toolbar-tabbar.php',
        routes: [{
                path: 'tabbar/',
                componentUrl: './pages/tabbar.php',
            },
            {
                path: 'tabbar-labels/',
                componentUrl: './pages/tabbar-labels.php',
            },
            {
                path: 'tabbar-scrollable/',
                componentUrl: './pages/tabbar-scrollable.php',
            },
            {
                path: 'toolbar-hide-scroll/',
                url: './pages/toolbar-hide-scroll.php',
            },
        ],
    },
    {
        path: '/tooltip/',
        componentUrl: './pages/tooltip.php',
    },
    {
        path: '/treeview/',
        componentUrl: './pages/treeview.php',
    },
    {
        path: '/timeline/',
        url: './pages/timeline.php',
    },
    {
        path: '/timeline-vertical/',
        url: './pages/timeline-vertical.php',
    },
    {
        path: '/timeline-horizontal/',
        url: './pages/timeline-horizontal.php',
    },
    {
        path: '/timeline-horizontal-calendar/',
        url: './pages/timeline-horizontal-calendar.php',
    },
    {
        path: '/virtual-list/',
        componentUrl: './pages/virtual-list.php',
    },
    {
        path: '/virtual-list-vdom/',
        componentUrl: './pages/virtual-list-vdom.php',
    },
    {
        path: '/vi/',
        componentUrl: './pages/vi.php',
    },

    // Color Themes
    {
        path: '/color-themes/',
        componentUrl: './pages/color-themes.php',
    },

    // Effects
    {
        path: '/page-transitions/',
        componentUrl: './pages/page-transitions.php',
    },
    {
        path: '/page-transitions/:effect',
        componentUrl: './pages/page-transitions-effect.php',
    },

    // Page Loaders
    {
        path: '/page-loader-component/:user/:userId/:posts/:postId/',
        componentUrl: './pages/page-loader-component.php',
    },
    {
        path: '/master-detail/',
        url: './pages/master-detail-master.php',
        master: true,
        detailRoutes: [{
            path: '/master-detail/:id/',
            componentUrl: './pages/master-detail-detail.php',
        }, ],
    },

    // Default route (404 page). MUST BE THE LAST
    {
        path: '(.*)',
        url: './pages/404.php',
    },
];

// });