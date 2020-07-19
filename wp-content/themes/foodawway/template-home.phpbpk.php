<?php 
// Template name: Home
get_header(); ?>

<div class="hwork">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_hwork">
                    <ul>
                        <li class="order">
                            <div class="title">Order your food</div>
                        </li>
                        <li class="deliver_L">
                            <div class="title">Delivery location</div>
                        </li>
                        <li class="deliver_pick">
                            <div class="title">Delivery or Pick up</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section>
    <div class="client_say">
        <div class="main_client">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="middle_Cpitch">
                            <h2 class="title">Whats Clients Say</h2>
                            <div class="testi_slider">
                                <div>
                                    <p class="desc">
                                        <span class="double_quat"></span>I ordered Pizza for the first time & I’m so glad I did! I Can’t wait till I order again. Thick, tasty,
                                        <br>absolutely delicious Pizza! The gal taking my order was so nice as well. <span class="double_quat2"></span>
                                    </p>
                                    <div class="sign"> 
                                        <span class="name">Paulette Pettry</span>
                                        <span class="Desig">CEO</span> 
                                    </div>
                                </div>
                                <div>
                                    <p class="desc">
                                        <span class="double_quat"></span>Wow I have found a great pizza place. They brought me a great pizza and the guy that delivered
                                        <br> my pizza was a cool dude. Thanks for the great pizza. I recommend to everyone.<span class="double_quat2"></span>
                                    </p>
                                    <div class="sign"> 
                                        <span class="name">Jhon Walker</span> <span class="Desig">CEO</span> 
                                    </div>
                                </div>
                                <div>
                                    <p class="desc">
                                        <span class="double_quat"></span>Great pizza. Tastes so fresh and original. Beats any of the chains hands down.
                                        <br> I was so glad to hear Mike’s was opening in Oregon and now it is a wonderful reality.
                                        <br> Give them a try, you won’t be sorry! <span class="double_quat2"></span>
                                    </p>
                                    <div class="sign"> 
                                        <span class="name">Glenn Cook</span> <span class="Desig">CEO</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="map">
    <iframe src="https://maps.google.com/maps?hl=en&amp;q=new%20maxico%20city+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=6&amp;iwloc=B&amp;output=embed"></iframe>
</div>

<ons-navigator swipeable id="onsenNavigator" page="page_home.html"></ons-navigator>
<template id="page_home.html">
    <ons-page id="page_home" modifier="white_background">
       
       <div class="home_tabbar"></div>

       
   </ons-page>
</template>
<template id="splitter.html">
    <ons-splitter>
      <ons-splitter-side id="menu" side="left" width="180px" collapse >
        <ons-page id="splitter">
            
          <div class="left_panel image_loaded"> 
           <ons-button modifier="quiet" onclick="closePanel();">
             <ons-icon icon="ion-ios-close-empty" size="25px"></ons-icon>
         </ons-button>
         <div>         
             
             <div class="is-loading small-loader" style="text-align: center;">
               <div class="spinner"></div>
               <img class="rounded_image" src="images/avatar.jpg"> 
           </div>
           
       </div>
   </div> <!--left_panel-->
   
   <ons-list id="splitter_list" modifier="is_rtl">
    <ons-list-item onclick="closePanel();" tappable>
      <span class="trn">Home</span>
  </ons-list-item>
  <ons-list-item onclick="showPage('info.html')" tappable>
      <span class="trn">About</span>
  </ons-list-item>        
  <ons-list-item onclick="showPage('map.html')" tappable>          
      <span class="trn">Location</span>
  </ons-list-item>
  
  <ons-list-item onclick="showPage('book.html')" tappable class="menu_book">          
      <span class="trn">Book a table</span>
  </ons-list-item>
  
  <ons-list-item onclick="showPage('photo.html')" tappable class="menu_photo" >          
      <span class="trn">Gallery</span>
  </ons-list-item>
  
  <ons-list-item onclick="showPage('promos.html')" tappable class="menu_promo" >          
      <span class="trn">Promos</span>
  </ons-list-item>
  
  <ons-list-item onclick="showPage('contact_us.html')" tappable  class="menu_contactus" >          
      <span class="trn">Contact Us</span>
  </ons-list-item>
  
</ons-list>
</ons-page>
</ons-splitter-side>
<ons-splitter-content id="content" page="category.html"></ons-splitter-content>
</ons-splitter>
</template>
<template id="category.html">
  <ons-page id="page_category" on-infinite-scroll="infiniteCategory" class="image_loaded" >
      
<!--   <ons-toolbar modifier="transparent_toolbar is_rtl">
    <div class="left">
        <ons-toolbar-button onclick="openMenu()">
          <ons-icon icon="md-menu" size="25px"></ons-icon>
        </ons-toolbar-button>
    </div>
    
    <div class="center app_title">     
    </div>
    
    <div class="right">
        <ons-toolbar-button onclick="showPage('search_category.html')">
          <ons-icon icon="md-search" size="25px" ></ons-icon>
        </ons-toolbar-button>        
        <ons-toolbar-button onclick="showNotificationPage()">
          <div class="notification_count notification"></div>
          <ons-icon icon="md-notifications" size="25px"></ons-icon>
        </ons-toolbar-button>
        
    </div>
</ons-toolbar> -->

<ons-pull-hook id="pull_category">
    <span class="trn">Pull to refresh</span>
</ons-pull-hook>

<!-- <ons-back-button modifier="fixed_back_button">Back</ons-back-button>  -->

<div class="h10"></div>

<div class="stic-home-user">
    <h3 class="print_username"></h3>
    <br>
    <ons-icon class="stic-user-icon" onclick="showPage('settings_menu.html')" icon="user-circle"></ons-icon>
</div>

<div class="stic-home-search">
    <div class="search-wrap">
      <ons-input type="text" name="home_search" class="home_search" required modifier="transparent" placeholder="What are you looking for?" onclick="showPage('search_category.html');" float ></ons-input>
      <div>
        <img class="stic-icon" src="lib/icons/search.svg" onerror="this.src='<?php echo get_stylesheet_directory_uri()?>/images/search.png'">
      </div>
  </div> 
</div>

<input type="hidden" name="home_banner_index" class="home_banner_index" id="home_banner_index">
<div class="banner_wrap"></div>
<div class="offer_wrap"></div>

<input type="hidden" name="infinite_scroll_done" id="infinite_scroll_done" class="infinite_scroll_done" value="0"> 

<div class="stic-title">
   <ons-icon icon="align-left"></ons-icon>
   <div class="home-title">
     <ons-col class="stic-half-col left">
      <span class="main trn">Categories</span>
      <br>
      <span class="min trn">Choose what you wish</span>
  </ons-col>
</div>
</div> 

<ons-list id="infinite_category" modifier="is_rtl">    
</ons-list>

<!-- <div class="category_loader bottom_loader bottom_gap"></div> -->

<!-- <div class="bottom_gap3"></div> -->

<ons-fab modifier="floating_category" class="fab_floating_category" position="bottom right" onclick="showFloatingCategory();" > 
    <div class="fab_inner">
      <ons-row>
        <ons-col width="30px" vertical-align="center"><ons-icon icon="fa-utensils" size="16px" ></ons-icon></ons-col>
        <ons-col width="30px" vertical-align="center"><span class="trn">MENU</span></ons-col>
    </ons-row>
</div>
</ons-fab>

</ons-page>
</template>

<ons-modal id="default_loader" direction="up">
  <div style="text-align: center">
    <p>
      <ons-icon icon="md-spinner" size="28px" spin></ons-icon>
  </p>
</div>
</ons-modal>
<?php get_footer(); ?>