<div class="sidebar" data-color="purple" data-background-color="white"
    data-image="{{ asset('../assetss/img/sidebar-1.jpg')}}">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="/produit" class="simple-text logo-normal">
            Société<br>Beauty Farah

        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="/produit">
                    <i class="material-icons"></i>
                    <p>les produits</p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="produit/create">
                    <i class="material-icons">library_books</i>
                    <p>Ajouter un produit</p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{route('contact.index')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Listes des messages</p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{route('user.index')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Listes des clients</p>
                </a>
            </li>
       
           
            
        </ul>
    </div>
</div>
