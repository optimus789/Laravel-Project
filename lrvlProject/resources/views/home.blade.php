@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pl-5">
        <div class="col-3"> 
            <img class="rounded-circle p-5" src="https://scontent-bom1-1.cdninstagram.com/vp/799ac37fc7ed246aafcf7b13abd07c32/5E48E8D2/t51.2885-19/s150x150/16230724_701744043339713_6183171391907430400_a.jpg?_nc_ht=scontent-bom1-1.cdninstagram.com">
        </div>
        <div class="col-9">
            <div><h2>{{ $user->username }}</h2></div>
            <div class="pt-2 d-flex">
                <div class="pr-5"><strong>4</strong> posts</div>
                <div class="pr-5"><strong>297</strong> followers</div>
                <div class="pr-5"><strong>389</strong> following</div>
            </div>
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. <i>Lorem</i> Nulla quis sem at nibh <i>Lorem</i> elementum imperdiet. Duis sagittis ipsum. Praesent mauris. <b>nibh</b> Fusce <b>sem</b> nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu <b>nec</b> eget nulla. Class aptent taciti <b>lacinia</b> sociosqu ad litora <i>imperdiet.</i> torquent per conubia nostra, <b>taciti</b> per <i>porta.</i> inceptos himenaeos. Curabitur <i>massa.</i> sodales ligula in <b>per</b> libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. <b>sodales</b> Aenean quam. In scelerisque sem <b>lacinia</b> at dolor. Maecenas mattis. Sed convallis tristique <b>at</b> sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus <b>egestas</b> non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla <b>turpis</b> metus metus, ullamcorper vel, tincidunt <b>aliquet.</b> sed, euismod in, <b>ipsum.</b> nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per <b>aptent</b> conubia nostra, per <b>sociosqu</b> inceptos himenaeos. <i>vel,</i> Nam nec ante. Sed lacinia, urna <b>inceptos</b> non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat <b>ante</b> mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus <b></i>.</p>-->
            <div class="pt-2"> <strong>Vinay Sudrik</strong> </div>
            <div>
                    They call me OPTIMUS 🎮
                    <br>Counter Strike Pro💻⚔️🔫🏁
                    <br>Wish me on August 7
                    <br>Yes a bit weird but I am what I am
                    <br>There is nothing as good as Breaking BAD...
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://scontent-bom1-1.cdninstagram.com/vp/f3222d6f758210765386b5b0518583c0/5E2825F6/t51.2885-15/e35/c225.0.630.630a/s480x480/20759933_355447974889433_5508076887450058752_n.jpg?_nc_ht=scontent-bom1-1.cdninstagram.com&_nc_cat=105"  style="width: 300px;">
        </div>
        <div class="col-4">
                <img src="https://scontent-bom1-1.cdninstagram.com/vp/589bd27829a55115400f1daf562e3098/5E3E9DCE/t51.2885-15/e35/s480x480/17333334_1277855332305708_9221845687082156032_n.jpg?_nc_ht=scontent-bom1-1.cdninstagram.com&_nc_cat=100" style="width: 300px;">
        </div>
        <div class="col-4">
                <img src="https://scontent-bom1-1.cdninstagram.com/vp/f3222d6f758210765386b5b0518583c0/5E2825F6/t51.2885-15/e35/c225.0.630.630a/s480x480/20759933_355447974889433_5508076887450058752_n.jpg?_nc_ht=scontent-bom1-1.cdninstagram.com&_nc_cat=105" style="width: 300px;">
        </div>
    </div>
</div>
@endsection
