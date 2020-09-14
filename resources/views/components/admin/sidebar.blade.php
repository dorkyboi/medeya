{{--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger | rose"
    Tip 2: You can change the color of background using: data-background-color="white | black | red"
    Tip 3: you can also add an image using data-image tag
--}}


<div class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" data-color="primary" data-background-color="black">

    <div class="logo">
        <!-- Sidebar - Brand -->
        <a class="simple-text logo-mini" href="/">
            <img src="/img/logo.png" alt="logo" />
        </a>
    </div>

    <div class="sidebar-wrapper ps-container ps-theme-default ps-active-y">
        {{ (new \App\MenuItems\MenuItemsOrchestrator())->render() }}
    </div>

    <div class="sidebar-background" style="background-color: darkslateblue"></div>
</div>
