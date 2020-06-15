<?php get_header(); ?>
<ons-navigator swipeable id="onsenNavigator" page="page_settings.html"></ons-navigator>


<template id="page_settings.html">
  <ons-page id="page_settings" modifier="orange_page" >

     
     <h2 class="app_title"></h2> 
     <div class="wrap" id="settings_error">
       <p class="make_center trn color_white small">Looks like we are having issue loading the app, try to refresh.</p>
       <ons-button modifier="quiet white_button" onclick="getAppSettings()" class="full_width">
          <ons-icon class="color_white" size="18px" icon="md-refresh"></ons-icon>
          <span class="trn">try again</span>          
       </ons-button>
     </div>
     
     <!--<div class="floating_logo_wrap grey_bg"></div>-->
  
  </ons-page>
</template>


<template id="page_startup.html">
  <ons-page id="page_startup" modifier="food_bg is_rtl" >
      
   <div class="dim_background">
   
     <h2 class="app_title">KARENDERIA</h2>
     <p class="to_text_white trn">We prepare the best food in town!</p>
 
      
	<ons-bottom-toolbar modifier="bottom_toolbar1">
	  <p><ons-button modifier="large normal_large to_orange" onclick="showPage('signup.html')" >
	    <span class="trn">Let's Go</span>
	  </ons-button>
	  </p>
	  
	  <p>
	  <ons-button modifier="quiet to_text_white" onclick="showPage('login.html')" >
	  <span class="trn">Already a member? Sign in</span>
	  </ons-button>
	  </p>
	  
	  <p>
	  <ons-button modifier="quiet to_text_white" onclick="resetToPage('page_home.html')" >
	  <span class="trn">SKIP</span>
	  </ons-button>
	  </p>
	  
	</ons-bottom-toolbar>
   
    
   </div>   
   
  </ons-page>
</template>


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
      	<img class="stic-icon" src="lib/icons/search.svg" onerror="this.src='search.png'">
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

<ons-modal id="settings_loader" direction="up">
<!--   <div style="text-align: center">
    <p class="small">      
      <ons-icon icon="md-spinner" size="28px" spin></ons-icon><br/>
      <span class="trn">loading settings</span>...
    </p>
  </div> -->
</ons-modal>


<template id="temp.html">
  <ons-page id="temp">  
  
    <p style="text-align: center;">
      This is the temp page
    </p>
  </ons-page>
</template>


<template id="item.html"  >
  <ons-page id="page_item" on-infinite-scroll="infiniteItem" modifier="white_background is_rtl" >  
  
  <ons-toolbar modifier="is_rtl">
	  <div class="left">
	    <ons-back-button>Back</ons-back-button>
	  </div>
	  <div class="center page_title">
	  </div>
  </ons-toolbar>
  
  <ons-pull-hook id="pull_item">
   <span class="trn">Pull to refresh</span>
  </ons-pull-hook>  

  <div class="search_wrapper" id="stic_search">
    <ons-search-input id="search" class="search_for_item" placeholder="Search for item" onclick="showPageNormal('search_item.html');"></ons-search-input>
    <div class="stic-icon">
      <div>
        <img src="lib/icons/search.svg" onerror="this.src='search.png'">
      </div>
    </div>
  </div>  
     
    <input type="hidden" name="cat_id" id="cat_id" class="cat_id">   
    <input type="hidden" name="infinite_scroll_done" id="infinite_scroll_done" class="infinite_scroll_done" value="0">  
    
    <ons-list id="infinite_item" class="image_loaded" modifier="is_rtl">    
    </ons-list>
    
    <div class="make_center loader_item">      
    </div>
    
    <!-- <div class="bottom_gap3"></div>         -->
    
    
    <ons-fab modifier="floating_category" class="fab_floating_category" position="bottom right" onclick="showFloatingCategory();" > 
	<div class="fab_inner">
	 <ons-row>
	   <ons-col width="30px" vertical-align="center"><ons-icon icon="fa-utensils" size="16px" ></ons-icon></ons-col>
	   <ons-col width="30px" vertical-align="center"><span class="trn">MENU</span></ons-col>
	 </ons-row>
	 </div>
    </ons-fab>
    
    <ons-bottom-toolbar class="basket_toolbar">	  
		  <ons-button modifier="large to_orange no_shadow basket_button" onclick="showCart();"  >
		    <ons-row>
		      <ons-col class="contents" width="80px"><span class="basket_count"></span></ons-col>
		      <ons-col class="separator" width="2px">|</ons-col>
		      <ons-col class="contents" width="90px" class="basket_total_wrap"><span class="basket_total"></span></ons-col>
		      <ons-col width="40px" ></ons-col>
		      <ons-col class="text-right"><span class="trn">View cart</span> >></ons-col>
		    </ons-row>
		  </ons-button>	  
	</ons-bottom-toolbar>

   <ons-fab class="basket_normal is_rtl" position="bottom right" onclick="showCart();">
     <div class="cart_count notification"></div>
     <ons-icon icon="md-shopping-cart" class="color_green"></ons-icon>     
    </ons-fab>		
    
  </ons-page>
</template>


<template id="item_details.html" >  
  <ons-page id="page_item_details" modifier="white_background is_rtl" class="image_loaded" >    
  
  <ons-toolbar class="transparent" modifier="is_rtl">
	  <div class="left">
	    <ons-back-button>Back</ons-back-button>
	  </div>
<!-- 	  <div class="center">
	  </div> -->
	  <div class="stic-fav right favorite_button">	      
	  </div>
  </ons-toolbar>

  <ons-pull-hook id="page_item_details_pull">
	<span class="trn">Pull to refresh</span>
  </ons-pull-hook>   
  
  <form id="frm_item" class="frm_item" method="POST">
  <input type="hidden" name="category_id" id="category_id" class="category_id">
  <input type="hidden" name="item_id" id="item_id" class="item_id">
  <div class="item_details_wrap"></div>
  </form> 
  
 <div class="wrap mb20">
   <ons-row class="quantity_wrap">
     <ons-col width="80px" class="minus">           
       <ons-button modifier="quiet" class="full_width" onclick="minusQty( $(this) )" >
         <ons-icon icon="md-minus" size="20px" ></ons-icon>
       </ons-button>
     </ons-col>
     
     <ons-col class="stic-lateral-wrap">
        <ons-input name="qty" id="qty" modifier="transparent" value="1" class="numeric_only item_qty" ></ons-input>            
     </ons-col>
     
     <ons-col width="80px" class="plus">
       <ons-button modifier="quiet" class="full_width"  onclick="addQty( $(this) )"  >
         <ons-icon icon="md-plus" size="20px"></ons-icon>
       </ons-button>
     </ons-col>
   </ons-row>  
 </div> <!--wrap-->

  <ons-bottom-toolbar >
  <ons-button modifier="large quiet_orange no_shadow" class="full_width add_to_cart" onclick="addToCart()" >
      <span class="trn">Add to cart</span>
    </ons-button> 
  </ons-bottom-toolbar>
   
  <div class="page_item_details_loader bottom_loader"></div>
    
  </ons-page>  
</template>


<template id="cart.html">
  <ons-page id="page_cart" modifier="white_background is_rtl" >  
  
    <ons-pull-hook id="page_cart_pull">
	<span class="trn">Pull to refresh</span>
	</ons-pull-hook>  
	
    
    <ons-back-button modifier="fixed_back_button" onclick="backToHome(1);">Back</ons-back-button> 
  
     <form class="frm_cart" id="frm_cart" method="POST">
       <input type="hidden" name="transaction_type" id="transaction_type" class="transaction_type">
       <input type="hidden" name="delivery_date" id="delivery_date" class="delivery_date">
       <input type="hidden" name="delivery_time" id="delivery_time" class="delivery_time">
       
       <input type="hidden" name="delivery_address" id="delivery_address" class="delivery_address">
       <input type="hidden" name="cart_total_value" id="cart_total_value" class="cart_total_value">
       <input type="hidden" name="cart_total_value_raw" id="cart_total_value_raw" class="cart_total_value_raw">
       
       <input type="hidden" name="required_delivery_time" id="required_delivery_time" class="required_delivery_time">
       
       <input type="hidden" name="has_addressbook" id="has_addressbook" class="has_addressbook">             
              
       <input type="hidden" name="min_delivery_order" id="min_delivery_order" class="min_delivery_order">
       <input type="hidden" name="cart_sub_total" id="cart_sub_total" class="cart_sub_total">
       
       <div class="cart_details"></div>     
     </form>

     <div class="no_order_wrap">
       <div class="center"> 
       <img src="lib/icons/empty.svg">
        <h4 class="trn">Make your first order</h4>
        <p class="small trn">Your cart is empty. Add something from the menu</p>       
       </div>
     </div>
     
     <div class="page_cart_loader bottom_loader"></div>
     
     <ons-bottom-toolbar modifier="" class="bottom_toolbar_checkout">     
       <ons-button modifier="large quiet_orange" class="full_width button_nopadding checkout_action" onclick="preCheckout()" >
         <div class="equal_table">
           <div class="col col-1 trn">Continue</div>
           <!-- <div class="col col-2"><span class="cart_total"></span></div> -->
         </div>
       </ons-button>     
     </ons-bottom-toolbar>
     
  
  </ons-page>
</template>

<template id="dialog_transaction_type.html">
  <ons-dialog id="dialog_transaction_type" cancelable modifier="medium_dialog">
    <ons-page id="dialog_transaction_type" modifier="white_background" >      
      <div class="services_wrap"></div>      
    </ons-page>
  </ons-dialog>
</template>


<template id="dialog_delivery_date.html">
  <ons-dialog id="dialog_delivery_date" cancelable modifier="large_dialog">
    <ons-page id="dialog_delivery_date" modifier="white_background" >      
      <div class="delivery_date_wrap"></div>      
    </ons-page>
  </ons-dialog>
</template>

<template id="dialog_delivery_time.html">
  <ons-dialog id="dialog_delivery_time" cancelable modifier="large_dialog">
    <ons-page id="dialog_delivery_time" modifier="white_background" >      
      <div class="delivery_time_wrap"></div>      
    </ons-page>
  </ons-dialog>
</template>



<template id="signup.html">
<ons-page id="signup" modifier="white_background page_style is_rtl" >  

<!-- <ons-back-button modifier="fixed_back_button">Back</ons-back-button> -->

<div class="stic-fake-toolbar"></div> 

<div class="wrap mb20">
<h3 class="trn">Sign up</h3>
<span class="stic-uppercase trn" onclick="resetToPage('login.html')">Sign in</span>
<p class="small mt20 trn">Create an account with new email address</p>
<ons-icon class="stic-skip-icon" icon="long-arrow-alt-right" size="16px" ></ons-icon>
<p class="small trn stic-darkblue inblock" onclick="resetToPage('page_home.html')">Skip</p>
</div>

<form method="POST" id="frm_register" class="frm_register">  
<input type="hidden" name="next_step" id="next_step" class="next_step" >

<ons-list modifier="field_list" id="signup_list">     
	<ons-list-item>
	   <ons-input name="first_name" id="first_name_field" required class="full_width" modifier="material" placeholder="First name" float></ons-input>
     <img class="stic-icon" src="lib/icons/user.svg" onerror="this.src='user.png'">
	</ons-list-item>
	
	<ons-list-item>
	  <ons-input name="last_name" required class="full_width last_name" modifier="underbar" placeholder="Last name" float></ons-input>
     <img class="stic-icon" src="lib/icons/user.svg" onerror="this.src='user.png'">
	</ons-list-item>
	
	<ons-list-item class="contact_phone_field">
	  <ons-input type="text" name="contact_phone"  required class="full_width contact_phone" modifier="underbar" placeholder="Mobile number" float  onfocus="showPage('enter_phone.html')" onclick="showPage('enter_phone.html')"></ons-input>
    <img class="stic-icon" src="lib/icons/mobile.svg" onerror="this.src='mobile.png'">
	</ons-list-item>
	
	<ons-list-item class="email_address_field">
	  <ons-input type="email" name="email_address" email required class="full_width email_address" modifier="underbar" placeholder="Email address" float></ons-input>
    <img class="stic-icon" src="lib/icons/mail.svg" onerror="this.src='mail.png'">
	</ons-list-item>
	
	<ons-list-item>
	  <ons-input type="password" name="password" required class="full_width password" modifier="underbar" placeholder="Password" float></ons-input>
    <img class="stic-icon" src="lib/icons/lock.svg" onerror="this.src='lock.png'">
	</ons-list-item>
	
	<ons-list-item>
	  <ons-input type="password" name="cpassword"  required class="full_width cpassword" modifier="underbar" placeholder="Confirm Password" float></ons-input>
    <img class="stic-icon" src="lib/icons/lock.svg" onerror="this.src='lock.png'">
	</ons-list-item>
	
	<!--<ons-list-item modifier="nodivider">
	  <p class="small trn">By creating an account, you agree to receive sms from vendor.</p>
	</ons-list-item>
	
	<ons-list-item>

<label class="left">
<ons-checkbox name="check_terms_condition" input-id="check_terms_condition" class="check_terms_condition" value="1"></ons-checkbox>
</label>
<label for="check_terms_condition" class="center small ">
   <span class="trn">I Agree To The</span>&nbsp;<a href="javascript:;" class="small" onclick="openTerms()">
   <span class="trn">terms_conditions</span>
</a>
</label>
	      
	</ons-list-item>-->
</ons-list>	

</form>

<div class="bottom_gap"></div>

<ons-bottom-toolbar >
<ons-button modifier="large quiet_orange no_shadow" class="full_width" onclick="customerRegister()" >
    <span class="trn">Continue</span>
  </ons-button> 
</ons-bottom-toolbar>

</ons-page>
</template>


<template id="address_form.html">
  <ons-page id="address_form" modifier="is_rtl" >  
  
  <ons-back-button modifier="fixed_back_button">Back</ons-back-button> 
  <div class="map_half" id="map_address"></div>

  <div class="header_grey" style="text-align: right">
    <ons-button id="location_change" class="noborder" modifier="quiet button_small trn" onclick="showPage('map_enter_address.html')" >
    <span class="trn">CHANGE</span>
    </ons-button>
  </div>
  
  
  <form method="POST" id="frm_address" class="frm_address">  
  <input type="hidden" name="lat" id="lat" class="lat">
  <input type="hidden" name="lng" id="lng" class="lng">
  <input type="hidden" name="search_address2" id="search_address2" class="search_address2">
  
  <input type="hidden" name="mapbox_drag_map" class="mapbox_drag_map" id="mapbox_drag_map">
  <input type="hidden" name="mapbox_drag_end" class="mapbox_drag_end" id="mapbox_drag_end">
     
  <ons-list modifier="field_list" id="login_list">     
	<ons-list-item>	   
	  <ons-input type="text" name="street" required  class="full_width street" modifier="underbar" placeholder="Street" float></ons-input>
      <img class="stic-icon" src="lib/icons/pin.svg" onerror="this.src='pin.png'">
	</ons-list-item>	 
	
	<ons-list-item>	   
	  <ons-input type="text" name="city" required  class="full_width city" modifier="underbar" placeholder="City" float></ons-input>
      <img class="stic-icon" src="lib/icons/pin.svg" onerror="this.src='pin.png'">
	</ons-list-item>	 
	
	<ons-list-item>	   
	   <ons-input type="text" name="state"  required class="full_width state" modifier="underbar" placeholder="State" float></ons-input>
      <img class="stic-icon" src="lib/icons/pin.svg" onerror="this.src='pin.png'">
	</ons-list-item>	 
	
	<ons-list-item>	   
	  <ons-input type="text" name="zipcode"  class="full_width zipcode" modifier="underbar" placeholder="Zip Code" float></ons-input>
      <img class="stic-icon" src="lib/icons/pin.svg" onerror="this.src='pin.png'">
	</ons-list-item>	 
	
	<ons-list-item class="country_list_wrap">	   
	</ons-list-item>	 
	
	<ons-list-item>	   
	  <ons-input type="text" name="location_name"  class="full_width location_name" modifier="underbar" placeholder="Floor/unit/Room #" float></ons-input>
      <img class="stic-icon" src="lib/icons/booking-history.svg" onerror="this.src='pin.png'">
	</ons-list-item>	 
	
    <ons-list-item>	   
	  <ons-input type="text" name="contact_phone" required  class="full_width contact_phone" modifier="underbar" placeholder="Contact number" float onclick="showPage('enter_phone.html')" onfocus="showPage('enter_phone.html')" ></ons-input>
      <img class="stic-icon" src="lib/icons/mobile.svg" onerror="this.src='pin.png'">
	</ons-list-item>	 
	
	<ons-list-item>	
	  <ons-input type="text" name="delivery_instruction"  class="full_width delivery_instruction" modifier="underbar" placeholder="Delivery instructions" float></ons-input>   
      <img class="stic-icon" src="lib/icons/edit.svg" onerror="this.src='pin.png'">
	</ons-list-item>
	
	<ons-list-item>	
	
	<label class="left min34">
		<ons-checkbox name="save_address" class="save_address"  input-id="save_address" value="1"></ons-checkbox>
	</label>
	<label for="save_address" class="center">
		<span class="trn">Save to my address book</span> 
	</label>	
	</ons-list-item>
	
  </ons-list>
  </form>
   
   <div class="bottom_gap"></div>
   
   <ons-bottom-toolbar >
   <ons-button modifier="large quiet_orange no_shadow" class="full_width button_nopadding" onclick="setDeliveryAddress()" >
        <span class="trn">Apply</span>
      </ons-button> 
  </ons-bottom-toolbar>    
      

  </ons-page>
</template>



<template id="address_form_select.html">
  <ons-page id="address_form_select" modifier="is_rtl" >  

     <ons-toolbar modifier="is_rtl">
	  <div class="left">
	    <ons-back-button>Back</ons-back-button>
	  </div>
	  <div class="center">
	    <!-- <span class="trn">SELECT ADDRESS</span> -->
	  </div>
  </ons-toolbar>
  

<form id="frm_address_form_select" class="frm_address_form_select iphonex_margin" method="POST">  
<ons-list modifier="field_list" id="login_list">     
	<ons-list-item class="address_book_wrap">
	</ons-list-item>
	
	<ons-list-item>
	  <ons-input name="contact_phone" required class="full_width contact_phone" modifier="underbar" placeholder="Contact number" float onclick="showPage('enter_phone.html')" onfocus="showPage('enter_phone.html')" ></ons-input>
	</ons-list-item>
	
	<ons-list-item>
	  <ons-input type="text" name="delivery_instruction"  class="full_width delivery_instruction" modifier="underbar" placeholder="Delivery instructions" float></ons-input>
	</ons-list-item>
</ons-list>	  
</form>

<!--   <ons-fab position="bottom right" modifier="mini">
    <ons-icon icon="md-plus" class="color_green" onclick="showAddressForm()"></ons-icon>
  </ons-fab> -->

  	<ons-button modifier="large quiet_orange no_shadow" class="stic-bottom-btn full_width button_nopadding" onclick="showAddressForm()" >
     <span class="trn">Change address</span>
   </ons-button>   
  
   <ons-bottom-toolbar modifier="transparent" >    
     <ons-button modifier="large quiet_orange no_shadow" class="full_width button_nopadding" onclick="setAddressBook()" >
        <span class="trn">Apply</span>
      </ons-button>       
    </ons-bottom-toolbar>
  
</ons-page>
</template>




<template id="payment_option.html">
  <ons-page id="payment_option" modifier="white_background is_rtl" >  

  <ons-toolbar modifier="is_rtl" >
	  <div class="left">
	    <ons-back-button>Back</ons-back-button>
	  </div>
	  <!-- <div class="center"><span class="trn">PAYMENT</span></div> -->
  </ons-toolbar>
  
  <div class="wrap">
    <h3 class="trn">Select payment</h3>
    <!-- <p class="trn small">We use it to make sure our deliveries reach you</p> -->
  </div>
  
  <div class="payment_list_wrap"></div>
  
  <div class="bottom_gap"></div>
  
  <ons-bottom-toolbar modifier="" >    
       <ons-button modifier="large quiet_orange no_shadow" class="full_width button_nopadding" onclick="initPayment()" >     
         <span class="trn">Place order</span>
       </ons-button>           
  </ons-bottom-toolbar>
  
</ons-page>
</template>


<template id="cod_forms.html">
  <ons-page id="cod_forms" modifier="white_background is_rtl" >  

  <ons-toolbar modifier="is_rtl">
	  <div class="left">
	    <ons-back-button>Back</ons-back-button>
	  </div>
	  <div class="center"></div>
  </ons-toolbar>
  
  <div class="wrap">
    <h3 class="trn">Change? For how much?</h3>
    <p class="small trn">Enter the amount you'll pay. We calculate your change.</p>
  </div>
    
  <form id="frm_cod_forms" class="wrap frm_cod_forms" method="POST"  onsubmit="return false;" >
	<ons-input type="number" name="order_change" id="order_change" class="order_change block" modifier="transparent" ></ons-input>  
  </form>

    
  <ons-bottom-toolbar modifier="" >    
       <ons-button modifier="large quiet_orange no_shadow" class="full_width button_nopadding" onclick="submitCOD()" >     
         <span class="trn">Place order</span>
       </ons-button>           
  </ons-bottom-toolbar>
  
</ons-page>
</template>


<template id="receipt.html">
  <ons-page id="receipt" modifier="page_white is_rtl" > 
   
   <input type="hidden" name="receipt_order_id" id="receipt_order_id" class="receipt_order_id">

   <div class="content-wrap">
      <img class="stic-successful" src="lib/icons/successful.svg" onerror="this.src='successful.png'">
   </div>
   
    <div class="stic-lateral-wrap stic-center">
     <h3 class="trn">Order Success</h3>  
     <p class="order_place_label small trn"></p>
    </div>

   <ons-button class="stic-bottom-btn" modifier="quiet to_text_orange margin_auto" onclick="trackOrder()"  >
     <span class="trn">Track Order</span>
   </ons-button>

   <ons-bottom-toolbar modifier="">                    
     <ons-button modifier="large to_orange no_shadow" onclick="backToHome(1);" >
     <span class="trn">Back to Home</span>
     </ons-button>   
   </ons-bottom-toolbar>
  
  </ons-page>
</template>


<template id="profile_menu.html">
  <ons-page id="profile_menu" modifier="white_background" > 

     <ons-toolbar modifier="is_rtl" >	  
	  <div class="center trn">You</div>
    </ons-toolbar>
  
    <div class="wrap2 is_rtl">
       <h3 class="profile_name"></h3>
    </div>
        
	    <ons-list modifier="list_menu is_rtl" id="profile_menu_list">
	    </ons-list>      
	      	      
             
  </ons-page>
</template>


<template id="settings_menu.html">
  <ons-page id="settings_menu" modifier="white_background is_rtl" > 

   <ons-toolbar modifier="is_rtl">	  
      <div class="left"><ons-back-button>Back</ons-back-button></div>
    </ons-toolbar>

    <div class="wrap">
      <h3 class="trn">Profile</h3>
      <p class="trn small mb20">Manage your profile, orders, adresses etc.</p>
    </div>
    
   <ons-list class="stic-new-list" modifier="list_menu">

	   <ons-list-item modifier="chevron" tappable onclick="showPage('customer_profile.html')" >
	   	<div class="left"><img src="lib/icons/edit.svg" onerror="this.src='edit.png'"></div>
	   	<div class="center">Edit profile</div>
	   </ons-list-item>
	   
	   <ons-list-item modifier="chevron" tappable onclick="showPage('addressbook_list.html')" >
	   	<div class="left"><img src="lib/icons/pin.svg" onerror="this.src='pin.png'"></div>
	   	<div class="center">Address book</div>
	   </ons-list-item>
	   
	   <ons-list-item modifier="chevron" tappable onclick="showPage('booking_history.html')" >
	   	<div class="left"><img src="lib/icons/booking-history.svg" onerror="this.src='booking-history.png'"></div>
	   	<div class="center">Booking history</div>
	   </ons-list-item>

	   <ons-list-item modifier="chevron" tappable onclick="showPage('creditcard_list.html')" >
	   	<div class="left"><img src="lib/icons/credit-card.svg" onerror="this.src='credit-card.png'"></div>
	   	<div class="center">Credit cards</div>
	   </ons-list-item>
	   
	   <ons-list-item modifier="chevron" tappable onclick="showPage('favorites_item.html')" >
	   	<div class="left"><img src="lib/icons/heart.svg" onerror="this.src='heart.png'"></div>
	   	<div class="center">Favorites</div>
	   </ons-list-item>
	   
	   <ons-list-item modifier="chevron" tappable onclick="showPage('notification.html')" >
	   	<div class="left"><img src="lib/icons/notification.svg" onerror="this.src='notification.png'"></div>
	   	<div class="center">Notifications</div>
	   </ons-list-item>
	   
	   <ons-list-item modifier="chevron" tappable onclick="showPage('app_settings_menu.html')" >
	   	<div class="left"><img src="lib/icons/settings.svg" onerror="this.src='settings.png'"></div>
	   	<div class="center">Settings</div>
	   </ons-list-item>
	   
	   <ons-list-item modifier="chevron" tappable onclick="showPage('contact_us.html')" >
	   	<div class="left"><img src="lib/icons/mail.svg" onerror="this.src='mail.png'"></div>
	   	<div class="center">Contact us</div>
	   </ons-list-item>	 

	   <ons-list-item modifier="chevron" tappable onclick="logout()" >
	   	<div class="left"><img src="lib/icons/logout.svg" onerror="this.src='logout.png'"></div>
	   	<div class="center">Log out</div>
	   </ons-list-item>

	</ons-list>

  </ons-page>
</template>


<template id="app_settings_menu.html">
  <ons-page id="app_settings_menu" modifier="white_background is_rtl" > 

   <ons-toolbar modifier="is_rtl">	  
      <div class="left"><ons-back-button>Back</ons-back-button></div>
    </ons-toolbar>

    <div class="wrap">
      <h3 class="trn">Settings</h3>
    </div>
    
   <ons-list id="stic_app_settings" class="stic-new-list" modifier="list_menu">

	   <ons-list-item modifier="chevron" tappable onclick="showPage('language.html')" >
	   	<div class="left"><img src="lib/icons/language.svg" onerror="this.src='language.png'"></div>
	   	<div class="center">Language</div>
	   </ons-list-item>

	   <ons-list-item modifier="chevron" tappable onclick="showDeviceID()" >
	   	<div class="left"><img src="lib/icons/mobile.svg" onerror="this.src='mobile.png'"></div>
	   	<div class="center">Device information</div>
	   </ons-list-item>	   
	   
	   <ons-list-item >
	   	<div class="left"><img src="lib/icons/mobile.svg" onerror="this.src='mobile.png'"></div>
	   	<div class="center">App version</div>
	   	<div class="right app_version"></div>
	   </ons-list-item>

	   <ons-list-item >
	   	 <div class="left"><img src="lib/icons/notification.svg" onerror="this.src='notification.png'"></div>
	     <div class="center"><span class="trn">Enable/Disable push notification</span></div>
	     <div class="right">
	       <ons-switch name="enabled_push" id="enabled_push" class="enabled_push" value="1" onchange="receivePush()" ></ons-switch>
	     </div>
	   </ons-list-item>   

	</ons-list>

  </ons-page>
</template>


<template id="customer_profile.html">
  <ons-page id="customer_profile" modifier="white_background is_rtl" > 


    <ons-back-button modifier="fixed_back_button">Back</ons-back-button> 

    <div class="stic-camera">
    	<ons-icon icon="camera" size="18px"></ons-icon>     
    </div>
    
    <div class="profile_header image_loaded">      
	    <div class="dim_bg absolute">	    
			<div class="profile_inner">
				<div class="is-loading small-loader">
					<div class="spinner"></div>
					<img class="rounded_image" src="images/avatar.jpg">      
				</div>	 
			</div>
	    </div>
    </div>

    <div class="loading_wrap" >
     <p class="trn" >Uploading...</p>
     <ons-progress-bar value="0" secondary-value="100"></ons-progress-bar>
    </div>
    
  
<form id="frm_profile" class="frm_profile mt40" method="POST">    
<ons-list modifier="field_list" id="login_list">    
	
	<ons-list-item>
	 <ons-input name="first_name" required class="full_width first_name" modifier="material" placeholder="First name" float></ons-input>
     <img class="stic-icon" src="lib/icons/edit.svg" onerror="this.src='edit.png'">
	</ons-list-item>
	
	<ons-list-item>
	  <ons-input name="last_name" required class="full_width last_name" modifier="underbar" placeholder="Last name" float></ons-input>
     <img class="stic-icon" src="lib/icons/edit.svg" onerror="this.src='edit.png'">
	</ons-list-item>
	
	<ons-list-item>
	  <ons-input name="contact_phone" required class="full_width contact_phone" modifier="underbar" placeholder="Mobile no." float onclick="showPage('enter_phone.html')" onfocus="showPage('enter_phone.html')" ></ons-input>
    <img class="stic-icon" src="lib/icons/mobile.svg" onerror="this.src='mobile.png'">
	</ons-list-item>

	<ons-list-item>
	 <ons-input type="email" name="email_address" email  class="full_width email_address" modifier="underbar" disabled placeholder="Email address" float></ons-input>
     <img class="stic-icon" src="lib/icons/mail.svg" onerror="this.src='edit.png'">
	</ons-list-item>
	
	<ons-list-item>
	</ons-list-item>
	
</ons-list>	    
</form>

	<ons-button class="stic-bottom-btn" modifier="quiet to_text_orange margin_auto" onclick="showPage('change_password.html')"  >
	  <span class="trn">Change password</span>
	</ons-button>
    
    <ons-bottom-toolbar modifier="transparent" >    
      <ons-button modifier="large quiet_orange no_shadow" class="full_width button_nopadding btn_profile" onclick="saveProfile()" >
         <span class="trn">Save changes</span>
       </ons-button>           
    </ons-bottom-toolbar>

  </ons-page>
</template>
    
<template id="change_password.html">
  <ons-page id="change_password" modifier="is_rtl" > 

   <ons-toolbar modifier="is_rtl">	  
      <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <!-- <div class="center"><span class="trn">CHANGE PASSWORD</span></div> -->
    </ons-toolbar>
    

 <form id="frm_changepassword" class="frm_changepassword" method="POST">    
<ons-list modifier="field_list" id="login_list">     
	<ons-list-item>
	  <ons-input type="password" name="current_password" required class="current_password full_width" modifier="material" placeholder="Enter current password" float></ons-input>
     <img class="stic-icon" src="lib/icons/lock.svg" onerror="this.src='lock.png'">
	</ons-list-item>
	
	<ons-list-item>
	  <ons-input type="password" name="password" required class="password full_width" modifier="material" placeholder="Enter new password" float></ons-input>
     <img class="stic-icon" src="lib/icons/unlock.svg" onerror="this.src='unlock.png'">
	</ons-list-item>
	
	<ons-list-item>
	  <ons-input type="password" name="cpassword" required class="cpassword full_width" modifier="material" placeholder="Confirm new password" float></ons-input>
     <img class="stic-icon" src="lib/icons/unlock.svg" onerror="this.src='unlock.png'">
	</ons-list-item>
</ons-list>	
</form>
    
  
    <ons-bottom-toolbar modifier="transparent" >    
       <ons-button modifier="large quiet_orange no_shadow" class="full_width button_nopadding" onclick="saveChangePassword()" >    
         <span  class="trn">SAVE CHANGES</span>
       </ons-button>           
    </ons-bottom-toolbar>

  </ons-page>
</template>


<template id="language.html">
  <ons-page id="language" modifier="white_background is_rtl" > 

   <ons-toolbar modifier="is_rtl">	  
      <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <!-- <div class="center"><span class="trn">LANGUAGE</span></div> -->
    </ons-toolbar>
    
    
	<ons-pull-hook id="language_pull">
	<span class="trn">Pull to refresh</span>
	</ons-pull-hook>

	<div class="wrap mb20">
	  <h3 class="trn">Select language</h3>
	  <p class="small trn">Choose the language you prefer</p>
	</div>   
	
	<ons-list id="language_list">     
	</ons-list>  
	
	<div class="language_loader bottom_loader"></div>
	
	<div class="bottom_gap"></div>
              
  </ons-page>
</template>


<template id="login.html">
<ons-page id="login" modifier="white_background page_style is_rtl" >  

<!-- <ons-back-button modifier="fixed_back_button">Back</ons-back-button>  -->

<div class="stic-fake-toolbar"></div> 

<div class="wrap mb20">
<h3 class="trn">Sign in</h3>
<span class="stic-uppercase trn" onclick="resetToPage('signup.html')">Sign up</span>
<p class="small mt20 trn">Log in using your email address or mobile</p>
<ons-icon class="stic-skip-icon" icon="long-arrow-alt-right" size="16px" ></ons-icon>
<p class="small trn stic-darkblue inblock" onclick="resetToPage('page_home.html')">Skip</p>
</div>

<form id="frm_login" class="frm_login" method="POST">
<ons-list modifier="field_list" id="login_list">     
	<ons-list-item>
	   <ons-input name="username" id="username_field" autoFocus required class="full_width username_field" modifier="material" placeholder="Mobile number or email" float></ons-input>
     <img class="stic-icon" src="lib/icons/mail.svg" onerror="this.src='mail.png'">
	</ons-list-item>
	
	<ons-list-item>
	  <ons-input type="password" name="password" required class="full_width password_field" modifier="underbar" placeholder="Password" float></ons-input>
    <img class="stic-icon" src="lib/icons/lock.svg" onerror="this.src='lock.png'">
	</ons-list-item>
	
	<ons-list-item modifier="nodivider">
	   <ons-button modifier="quiet" onclick="showPage('forgot_pass.html')" >
        <span class="trn stic-lightblue">Forgot Password?</span>
      </ons-button>       
	</ons-list-item>
		
</ons-list>  
</form>

<ons-bottom-toolbar >
  <ons-button modifier="large quiet_orange no_shadow" class="full_width" onclick="login()" >
    <span class="trn">Continue</span>
  </ons-button> 
</ons-bottom-toolbar>

  </ons-page>
</template>


<template id="enter_phone.html">
  <ons-page id="enter_phone" modifier="white_background is_rtl" >  

  <ons-toolbar>
	  <div class="left">
	    <ons-back-button>Back</ons-back-button>
	  </div>	  
  </ons-toolbar>
  
  <div class="wrap mt20">
	  <h3 class="trn">Enter your mobile no.</h3>
	  <p class="small trn">We use it to make sure our deliveries reach you</p>
	  <div class="bottom_gap1"></div>
	  
	  <form id="frm_setphone" class="frm_setphone" method="POST" onsubmit="return false;">
	   <div class="field_wrap">
         <div class="equal_table full_width">
           <div class="col prefix_wrap" style="width:20%;">
                         
              <ons-input  required name="prefix" class="full_width prefix" modifier="underbar"
               onclick="showMobileCode();" float></ons-input>
           
           </div> 
           <div class="col" style="width:80%;vertical-align:bottom;" >
              <ons-input maxlength="15" type="number" id="mobile_number" required name="mobile_number" class="full_width mobile_number" modifier="underbar" placeholder="Mobile no." float></ons-input>
    		<img class="stic-icon" src="lib/icons/mobile.svg" onerror="this.src='mobile.png'">
           </div> 
         </div>         
      </div>
     </form> 
	  
  </div> <!--wrap-->
  
    <ons-bottom-toolbar modifier="transparent" >    
     <ons-button modifier="large quiet_orange no_shadow" class="full_width" onclick="setMobileNuber()" >
        <span class="trn">Apply</span>
      </ons-button>     
    </ons-bottom-toolbar>

</ons-page>
</template>



<template id="creditcard_list.html">
  <ons-page id="creditcard_list" modifier="is_rtl" >  

  <ons-toolbar modifier="is_rtl">
	  <div class="left">
	    <ons-back-button>Back</ons-back-button>
	  </div>	  
	  <div class="center"> 
	     <!-- <span class="trn">CARDS</span> -->
	  </div>
  </ons-toolbar>
    
  <!--<ons-list-title modifier="list_title_grey">
    <span class="trn">YOUR CREDIT CARDS</span>
  </ons-list-title>
  <div class="cc_list"></div>-->
  
  <ons-pull-hook id="pull_creditcard_list">
   <span class="trn">Pull to refresh</span>
  </ons-pull-hook>  

  <div class="wrap">
  	<h3 class="trn">Credit cards</h3>
  	<p class="small trn mb20">Manage your saved cards</p>
  </div>
  
  <input type="hidden" name="creditcard_infinite" class="creditcard_infinite" value="">
  
  <ons-list id="ons_creditcard_list">     
  </ons-list>  
  
  <div class="creditcard_list_loader bottom_loader"></div>
  
  <ons-bottom-toolbar >
  <ons-button modifier="large quiet_orange no_shadow" class="full_width" onclick="showPage('creditcards.html')" >
      <span class="trn">Add credit card</span>
    </ons-button> 
  </ons-bottom-toolbar>
  
</ons-page>
</template>  


<template id="creditcards.html">
  <ons-page id="add_creditcards" modifier="is_rtl" >  

  <ons-toolbar modifier="is_rtl" >
	  <div class="left">
	    <ons-back-button>Back</ons-back-button>
	  </div>	  
	  <div class="center">
	    <!-- <span class="trn">CREDIT CARD</span> -->
	  </div>
  </ons-toolbar>
  
<form id="frm_creditcard" class="frm_creditcard" method="POST">
<input type="hidden" class="cc_id" name="cc_id" id="cc_id">  
  <ons-list modifier="field_list" id="login_list">     
	<ons-list-item>
	  <ons-input type="text" name="card_name" id="card_name" required class="full_width card_name" modifier="underbar"  placeholder="Cardholders Name" float></ons-input>
	</ons-list-item>
	
	<ons-list-item>
	  <ons-input type="number" maxlength="16" required name="credit_card_number"  class="full_width credit_card_number" modifier="underbar"  placeholder="Credit Card Number" float></ons-input>
	</ons-list-item>
	
	<ons-list-item>
	  <ons-row>
	  	<ons-col width="25%" class="expiration_month_wrap mr20"></ons-col>
	  	<ons-col width="25%" class="expiration_yr_wrap mr20"></ons-col>
	  	<ons-col width="10px"></ons-col>
       <ons-col>
         <ons-input type="number" maxlength="4" name="cvv" required class="full_width cvv" modifier="underbar"  placeholder="CVV" float></ons-input>
       </ons-col>
      </ons-row>
	</ons-list-item>
	
	<ons-list-item>
	  <ons-input type="text" name="billing_address" required  class="full_width billing_address" modifier="underbar"  placeholder="Billing address" float></ons-input>
	</ons-list-item>		
  </ons-list>	
</form>  
  
  <div class="bottom_gap"></div>
  
   <ons-bottom-toolbar modifier="transparent" >   
       <ons-button modifier="large quiet_orange no_shadow" class="full_width button_nopadding" onclick="saveCard()" >     
         <span class="cc_action trn">Save</span>
       </ons-button>          
    </ons-bottom-toolbar> 

</ons-page>
</template>    

<template id="addressbook_list.html">
  <ons-page id="addressbook_list" modifier="is_rtl" >  

  <ons-toolbar modifier="is_rtl" >
      <!-- <div class="center trn">YOUR ADDRESS BOOK</div> -->
	  <div class="left">
	    <ons-back-button>Back</ons-back-button>
	  </div>	  
  </ons-toolbar>
  

  <ons-pull-hook id="pull_addressbook_list">
   <span class="trn">Pull to refresh</span>
  </ons-pull-hook>  
 
  <input type="hidden" name="addressbook_infinite" class="addressbook_infinite" value="">

  <div class="wrap mb20">
  	<h3 class="trn">Address book</h3>
  	<p class="small trn">Manage your list of saved addresses</p>
  </div>
  
  <ons-list id="ons_addressbook_list">     
  </ons-list>
  
  <div class="addressbook_list_loader bottom_loader"></div>

  <ons-bottom-toolbar >
  <ons-button modifier="large quiet_orange no_shadow" class="full_width" onclick="switchhAddressBook()" >
      <span class="trn">Add address</span>
    </ons-button> 
  </ons-bottom-toolbar>
  
</ons-page>
</template>  


<template id="addressbook.html">
  <ons-page id="addressbook" modifier="is_rtl" >  

  
  <ons-back-button modifier="fixed_back_button">Back</ons-back-button> 
  <div class="map_half" id="map_address"></div>

  <div class="header_grey" style="text-align: right">
    <ons-button id="location_change" class="noborder" modifier="quiet button_small trn" onclick="showPage('map_enter_address.html')" >
    <span class="trn">CHANGE</span>
    </ons-button>
  </div>
  

<form id="frm_addressbook" class="frm_addressbook" method="POST">
<input type="hidden" class="book_id" name="book_id" id="book_id">
<input type="hidden" name="lat" id="lat" class="lat">
<input type="hidden" name="lng" id="lng" class="lng">
<input type="hidden" name="mapbox_drag_map" class="mapbox_drag_map" id="mapbox_drag_map">
<input type="hidden" name="mapbox_drag_end" class="mapbox_drag_end" id="mapbox_drag_end">
      
<ons-list modifier="field_list" id="login_list">     
	<ons-list-item>
	  <ons-input type="text" name="street" id="street" required class="full_width street" modifier="underbar"  placeholder="Street" float></ons-input>
      <img class="stic-icon" src="lib/icons/pin.svg" onerror="this.src='pin.png'">
	</ons-list-item>
	
	<ons-list-item>
	  <ons-input type="text" name="city" required class="full_width city" modifier="underbar"  placeholder="City" float></ons-input>
      <img class="stic-icon" src="lib/icons/pin.svg" onerror="this.src='pin.png'">
	</ons-list-item>
	
	<ons-list-item>
	  <ons-input type="text" name="state" required class="full_width state" modifier="underbar"  placeholder="State" float></ons-input>
	  <img class="stic-icon" src="lib/icons/pin.svg" onerror="this.src='pin.png'">
	</ons-list-item>
	
	<ons-list-item>
	  <ons-input type="text" name="zipcode" required class="full_width zipcode" modifier="underbar"  placeholder="Zip code" float></ons-input>
	  <img class="stic-icon" src="lib/icons/pin.svg" onerror="this.src='pin.png'">
	</ons-list-item>
	
	<ons-list-item class="country_list_wrap">
	</ons-list-item>
	
	<ons-list-item>
	  <ons-input type="text" name="location_name" required class="full_width location_name" modifier="underbar"  placeholder="Location name" float></ons-input>
	  <img class="stic-icon" src="lib/icons/booking-history.svg" onerror="this.src='booking-history.png'">
	</ons-list-item>
	
	<ons-list-item>
	   <label class="left min34">
        <ons-checkbox name="as_default" input-id="as_default" class="as_default" value="2" ></ons-checkbox>
      </label>
      <label for="as_default" class="center">
        <span class="trn">Use as default address</span>
      </label>  
	</ons-list-item>
		
</ons-list>	  
</form>
  

<div class="bottom_gap"></div>

<ons-bottom-toolbar modifier="transparent" >

<ons-button modifier="large quiet_orange no_shadow" class="full_width button_nopadding" onclick="saveAddressBook()" >     
 <span class="addressbook_action">SAVE</span>
</ons-button>       

</ons-bottom-toolbar> 

</ons-page>
</template>    


<template id="orders.html">
  <ons-page id="orders" modifier="grey_background" class="image_loaded" >  
  
   <ons-toolbar modifier="transparent_toolbar is_rtl">
	  <div class="center">
	    <!-- <span class="trn">ORDERS</span> -->
	  </div>	  	  
<!-- 	  <div class="right">
	     <ons-toolbar-button onclick="showPage('search_order.html','none')">
          <ons-icon icon="md-search" size="25px" ></ons-icon>
        </ons-toolbar-button>                
	  </div> -->
  </ons-toolbar>
  
  <ons-pull-hook id="orders_pull">
	<span class="trn">Pull to refresh</span>
  </ons-pull-hook>

  <div class="search_wrapper" id="stic_search">
    <ons-search-input placeholder="Enter Order ID or Restaurant Name" onclick="showPage('search_order.html','none')" ></ons-search-input>
    <div class="stic-icon">
      <div>
        <img src="lib/icons/search.svg" onerror="this.src='search.png'">
      </div>
    </div>
  </div> 
  
  <ons-carousel id="orders_tabs" class="carousel_small" swipeable auto-scroll 
     overscrollable direction="horizontal"  item-width="30%" >                 
  </ons-carousel>
  
  <input type="hidden" name="orders_infinite" class="orders_infinite" value="">
  <input type="hidden" name="orders_tab_active" class="orders_tab_active">
  
   <ons-list id="orders_list" modifier="no_background is_rtl">    
   </ons-list>
  
   <div class="orders_loader bottom_loader bottom_gap"></div>
  
  </ons-page>
</template>    



<template id="search_order.html">
<ons-page id="search_order" class="image_loaded" modifier="white_background is_rtl" >  

 <ons-toolbar modifier="is_rtl" >
	  <div class="left">
	    <ons-back-button>Back</ons-back-button>
	  </div>	  
	  <!-- <div class="center"><span class="trn">SEARCH ORDER</span></div> -->
  </ons-toolbar>

  <div class="search_wrapper" id="stic_search">
    <ons-search-input id="search_order_field" placeholder="Enter Order ID or Transaction Type"></ons-search-input>
    <div class="stic-icon">
       <img src="lib/icons/search.svg" onerror="this.src='search.png'">
    </div>
  </div> 
   
   <input type="hidden" name="search_order_infinite" class="search_order_infinite" value="">
   
   <ons-list id="search_order_list" modifier="list_small" >     
   </ons-list>  
   
   <div class="search_order_loader bottom_loader"></div>  
   <div class="bottom_gap"></div>	  

</ons-page>
</template>      

<template id="order_details.html">
  <ons-page id="order_details" modifier="is_rtl" >  
  
  <ons-toolbar modifier="is_rtl" >
	  <div class="left">
	    <ons-back-button>Back</ons-back-button>
	  </div>	  
	  <!-- <div class="center"><span class="trn">VIEW ORDER</span></div> -->
  </ons-toolbar>

  <div class="wrap mb20">
    <h3 class="trn">Order details</h3>
    <p class="small trn order_id"></p>
  </div>
  
    <div class="order_details_wrap"></div>
    <div class="order_details_html"></div>

    </ons-page>
</template>    


<template id="reviews.html">
<ons-page id="reviews" modifier="grey_background is_rtl" class="image_loaded"  >  

  <ons-toolbar modifier="is_rtl" >
	  <div class="left">
	    <ons-back-button>Back</ons-back-button>
	  </div>	  
	  <!-- <div class="center"><span class="trn">REVIEWS</span></div> -->
  </ons-toolbar>

<ons-pull-hook id="reviews_pull">
<span class="trn">Pull to refresh</span>
</ons-pull-hook> 

<input type="hidden" name="reviews_infinite" class="reviews_infinite" value="">

<div class="wrap">
  <h3 class="trn">Reviews</h3>
</div>

<ons-list id="reviews_list">    
</ons-list>

<div class="reviews_loader bottom_loader bottom_gap"></div>

</ons-page>
</template>    


<template id="info.html">
  <ons-page id="info" modifier="white_background is_rtl" >  
    

<ons-pull-hook id="info_pull">
<span class="trn">Pull to refresh</span>
</ons-pull-hook> 
  
   <!-- <ons-back-button modifier="fixed_back_button">Back</ons-back-button>  -->

   <div class="info_wrap"></div>

   <div class="menu_book wrap_booking" onclick="showPage('book.html')">
   	<span class="color_green trn">Book a table</span>
   </div>
   
   <div class="info_wrap2"></div>
  
    <!--<ons-fab position="bottom right" onclick="backToHome();">     
        <ons-icon icon="md-home" class="color_green"></ons-icon>     
    </ons-fab>-->

    </ons-page>
</template>    


<template id="map.html">
  <ons-page id="map" modifier="grey_background is_rtl" >  
  
  <ons-toolbar modifier="transparent_toolbar is_rtl" class="transparent">
      <div class="left">        
        <ons-back-button>Back</ons-back-button>
      </div>
	  <div class="center">
	    <!-- <span class="trn">LOCATION</span> -->
	  </div>	  
  </ons-toolbar>
    
    <input type="hidden" name="merchant_lat" id="merchant_lat" class="merchant_lat" >
    <input type="hidden" name="merchant_lng" id="merchant_lng" class="merchant_lng" >
    <ul id="map_instructions" class="hide"></ul>
    
    <div class="map_canvas" id="map_canvas"></div>
      
    
   <ons-speed-dial position="bottom right" direction="up">
    <ons-fab>
      <ons-icon icon="md-pin" class="color_green" ></ons-icon>
    </ons-fab>
    
    <ons-speed-dial-item onclick="merchantLocationRoute();">
      <ons-icon icon="md-turning-sign"></ons-icon>
    </ons-speed-dial-item>
    
    <ons-speed-dial-item onclick="viewExternalDirection();">
      <ons-icon icon="md-car"></ons-icon>
    </ons-speed-dial-item>
    
    <ons-speed-dial-item onclick="map_center();">
      <ons-icon icon="md-center-focus-strong"></ons-icon>
    </ons-speed-dial-item>
        
    
  </ons-speed-dial>
    
    </ons-page>
</template>    


<template id="book.html">
  <ons-page id="book" modifier="white_background is_rtl" >  
  
  <ons-toolbar modifier="transparent_toolbar is_rtl">
      <div class="left">        
        <ons-back-button>Back</ons-back-button>
      </div>
	  <div class="center">
	    <!-- <span class="trn">BOOKING INFORMATION</span> -->
	  </div>	  	  	  
  </ons-toolbar>

<div class="wrap">
	<h3 class="trn">Booking details</h3>	
</div>
                
      
<form id="frm_book" class="frm_book" method="POST">  
<ons-list modifier="field_list" id="login_list">     
  <ons-list-item>	   
    <ons-input type="number" maxlength="10"  name="number_guest" id="number_guest" required class="full_width number_guest" modifier="underbar"  placeholder="Number of guest" float></ons-input>        
   	<img class="stic-icon" src="lib/icons/group.svg" onerror="this.src='group.png'">
  </ons-list-item>
  
  <ons-list-item>	   
    <ons-input type="text" name="date_booking" required class="full_width date_booking delivery_date" modifier="underbar" placeholder="Date of booking" float  onfocus="showDeliveryDateList()"  ></ons-input>
   	<img class="stic-icon" src="lib/icons/calendar.svg" onerror="this.src='calendar.png'">
  </ons-list-item>
  
  <ons-list-item>	   
    <ons-input type="text" name="booking_time" required class="full_width booking_time delivery_time" 
        modifier="underbar"  placeholder="Time" float  onfocus="showDeliveryTime()" ></ons-input>        
   	<img class="stic-icon" src="lib/icons/time.svg" onerror="this.src='time.png'">
  </ons-list-item>
  
  <ons-list-item>	   
   <ons-input type="text" name="booking_name" required class="full_width booking_name" modifier="underbar"  placeholder="Name" float></ons-input>        
   <img class="stic-icon" src="lib/icons/user.svg" onerror="this.src='user.png'">
  </ons-list-item>
  
  <ons-list-item>	   
    <ons-input type="email" name="email" required class="full_width email" modifier="underbar"  placeholder="Email address" float></ons-input>        
   <img class="stic-icon" src="lib/icons/mail.svg" onerror="this.src='mail.png'">
  </ons-list-item>
  
  <ons-list-item>	   
    <ons-input type="text" name="mobile" required class="full_width mobile contact_phone" modifier="underbar"  placeholder="Contact number" float onclick="showPage('enter_phone.html')" onfocus="showPage('enter_phone.html')" ></ons-input>        
    <img class="stic-icon" src="lib/icons/mobile.svg" onerror="this.src='mobile.png'">
  </ons-list-item>
  
  <ons-list-item>	   
    <textarea name="booking_notes" style="margin: 0 !important; padding: 10px !important;" id="booking_notes" class="booking_notes textarea  textarea--transparent full_width" rows="3" placeholder="Special instructions"></textarea>
  </ons-list-item>
  
<ons-list>
</form>
          
    
    <ons-bottom-toolbar modifier="transparent" >    
       <ons-button modifier="large quiet_orange no_shadow" class="full_width button_nopadding" onclick="saveBooking()" >     
         <span class="trn">Submit</span>
       </ons-button>           
    </ons-bottom-toolbar>      

    </ons-page>
</template>    


<template id="booking_ty.html">
  <ons-page id="booking_ty" modifier="white_background is_rtl" >

  <div class="content-wrap">
     <img class="stic-successful" src="lib/icons/successful.svg" onerror="this.src='successful.png'">
  </div>
  
   <div class="stic-lateral-wrap stic-center">
    <h3 class="trn">Booking Success</h3>  
    <p class="booking_message small trn"></p>
   </div>

  <ons-bottom-toolbar modifier="">                    
    <ons-button modifier="large to_orange no_shadow" onclick="backToHome(1);" >
    <span class="trn">Back to Home</span>
    </ons-button>   
  </ons-bottom-toolbar> 
  
  </ons-page>
</template>


<template id="photo.html">
  <ons-page id="photo" class="image_loaded" modifier="is_rtl" >  
  
  <ons-toolbar modifier="transparent_toolbar is_rtl">
      <div class="left">
        <ons-back-button>Back</ons-back-button>
      </div>
	  <div class="center">
	    <span class="trn">GALLERY</span>
	  </div>	  
  </ons-toolbar>
  
 
<ons-pull-hook id="photo_pull">
<span class="trn">Pull to refresh</span>
</ons-pull-hook> 

<ons-list id="photo_list" modifier="is_rtl">     
</ons-list>

<div class="photo_loader bottom_loader"></div>
      
    </ons-page>
</template>    



<template id="promos.html">
  <ons-page id="promos" modifier="white_background is_rtl" >  
  
  <ons-toolbar modifier="transparent_toolbar is_rtl">
      <div class="left">        
        <ons-back-button>Back</ons-back-button>
      </div>
	  <div class="center">
	    <span class="trn">PROMO</span>
	  </div>	  
</ons-toolbar>

<ons-pull-hook id="promos_pull">
<span class="trn">Pull to refresh</span>
</ons-pull-hook> 

    <div class="promo_wrap"></div>
    <div class="promos_loader bottom_loader bottom_gap"></div>		  
         
    </ons-page>
</template>    


<template id="notification.html">
  <ons-page id="notification" modifier="is_rtl" >  
  
  <ons-toolbar modifier="transparent_toolbar is_rtl">
      <div class="left">        
        <ons-back-button>Back</ons-back-button>
      </div>
	  <div class="center">	    
	    <!-- <span class="trn">NOTIFICATIONS</span> -->
	  </div>	  
	  <div class="right clear_notification">
	     <ons-toolbar-button onclick="confirmClearNotification();">
            <ons-icon icon="md-delete" size="25px" ></ons-icon>
         </ons-toolbar-button>
	  </div>
  </ons-toolbar>  

<ons-pull-hook id="notification_pull">
<span class="trn">Pull to refresh</span>
</ons-pull-hook> 

<input type="hidden" name="notification_infinite" class="notification_infinite" value="">

<ons-list id="notification_list">     
</ons-list>

<div class="notification_loader bottom_loader bottom_gap"></div>		  


</ons-page>
</template>    

<template id="booking_history.html" >
  <ons-page id="booking_history" class="image_loaded">  
  
  <ons-toolbar modifier="transparent_toolbar is_rtl">
      <div class="left">        
        <ons-back-button>Back</ons-back-button>
      </div>
	  <div class="center">	    
	    <!-- <span class="trn">BOOKING HISTORY</span> -->
	  </div>	  
  </ons-toolbar>

      <ons-pull-hook id="booking_pull">
	  <span class="trn">Pull to refresh</span>
     </ons-pull-hook>

     <div class="search_wrapper" id="stic_search">
       <ons-search-input placeholder="Enter Booking ID or Restaurant Name" onclick="showPage('search_booking.html','none')" ></ons-search-input>
       <div class="stic-icon">
         <div>
           <img src="lib/icons/search.svg" onerror="this.src='search.png'">
         </div>
       </div>
     </div>  
     
     <ons-carousel id="booking_tabs" class="carousel_small" swipeable auto-scroll 
     overscrollable direction="horizontal"  item-width="30%" >                 
     </ons-carousel>
     
     <input type="hidden" name="booking_infinite" class="booking_infinite" value="">
     <input type="hidden" name="booking_tab_active" class="booking_tab_active">
     
     <ons-list id="booking_list" modifier="no_background is_rtl">       
     </ons-list>
     
     <div class="booking_loader bottom_loader bottom_gap"></div>	  
  
    </ons-page>
</template>    


<template id="dinein_forms.html" >
  <ons-page id="dinein_forms"  modifier="white_background"  >  
  
  <ons-toolbar modifier="transparent_toolbar">
      <div class="left">        
        <ons-back-button>Back</ons-back-button>
      </div>
	  <div class="center">	    
	  </div>	  
  </ons-toolbar>
       
   <div class="wrap2">
    <h3 class="trn">Dine in information</h3>
  </div>
    
   <form id="frm_dinein" class="frm_dinein" method="POST">
   <ons-list modifier="field_list" >
   
     <ons-list-item>
           <ons-input type="number" required name="dinein_number_of_guest" class="dinein_number_of_guest" id="dinein_number_of_guest" modifier="transparent" placeholder="Number of guest" ></ons-input>  
     </ons-list-item>
     
     <ons-list-item>
           <ons-input type="text" required name="dinein_table_number" class="dinein_table_number" id="dinein_table_number" modifier="transparent" placeholder="Table number" ></ons-input>  
     </ons-list-item>
     
     <ons-list-item>
            <ons-input type="text" name="contact_phone"  required class="full_width contact_phone" modifier="underbar" placeholder="Mobile number" float  onfocus="showPage('enter_phone.html')" onclick="showPage('enter_phone.html')"></ons-input>
     </ons-list-item>
     
     <ons-list-item>
       <textarea name="dinein_special_instruction" id="dinein_special_instruction" 
         class="dinein_special_instruction textarea textarea--transparent full_width" rows="5" placeholder="Special instructions"></textarea>
     </ons-list-item>
     
   </ons-list>
   </form>         
    
  <ons-bottom-toolbar modifier="transparent" >    
       <ons-button modifier="large quiet_orange no_shadow"  onclick="vDinein()" >     
         <span class="trn">Place order</span>
       </ons-button>           
  </ons-bottom-toolbar>

    </ons-page>
</template>    



<template id="paypal.html" >
  <ons-page id="paypal"  modifier="white_background"  >  
   
 <ons-toolbar>
	  <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <div class="center"><span class="trn">Paypal</span></div>
  </ons-toolbar>
  
  <div class="wrap2 make_center" style="padding-top:80px;">
     <h3 class="paypal_total_to_pay"></h3>
     <div id="paypal-button-container"></div>
  </div>
  
</ons-page>
</template>    


<template id="select_creditcards.html" >
  <ons-page id="select_creditcards"  modifier="white_background is_rtl"  >  
   
 <ons-toolbar modifier="is_rtl">
	  <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <div class="center"><span class="trn">SELECT CREDIT CARD</span></div>
  </ons-toolbar>
   
  <div class="wrap2">
       <div class="select_cc_list"></div>
  </div>

  <ons-button class="stic-bottom-btn" modifier="quiet to_text_orange margin_auto" onclick="showPage('creditcards.html')"  >
    <span class="trn">Add credit card</span>
  </ons-button>

  <ons-bottom-toolbar modifier="" >    
       <ons-button modifier="large quiet_orange no_shadow" class="full_width button_nopadding" onclick="setSelectedCC()" >     
         <span class="trn">Place order</span>
       </ons-button>         
  </ons-bottom-toolbar>
  
</ons-page>
</template>    


<template id="stripe.html" >
  <ons-page id="stripe"  modifier="white_background"  >  
   
 <ons-toolbar>
	  <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <div class="center"><span class="trn">Stripe</span></div>
  </ons-toolbar>
  
   
  <div class="wrap2" style="padding-top:30px;">
  
  <input type="hidden" name="order_id" class="order_id" id="order_id">
     
  <form method="post" id="payment-form" onsubmit="return false;">   
	  <p class="trn">Credit or debit card</p>
	  <div id="card-element"></div>	  
	  
	  <p class="trn">Expiry date</p>
	  <div id="card-expirydate"></div>
	  
	  <p class="trn">CVC</p>
	  <div id="card-cvc"></div>
	  
	  <div id="card-errors" class="error"></div>
	  
  </form>
     
     
  </div> <!--wrap-->
  
  <ons-bottom-toolbar modifier="transparent" >
    <div class="wrap">
       <ons-button modifier="green_button" class="full_width button_nopadding" onclick="payStripe()" >     
         <span class="trn">Place order</span>
       </ons-button>       
    </div>
  </ons-bottom-toolbar>
  
</ons-page>
</template>    



<template id="select_payondelivery.html" >
  <ons-page id="select_payondelivery"  modifier="white_background is_rtl"  >  
   
 <ons-toolbar modifier="is_rtl">
	  <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <div class="center"><span class="trn">Select card type</span></div>
  </ons-toolbar>
   
  <div class="wrap2">
       <div class="select_card_type_list"></div>
  </div>
  
   
  <ons-bottom-toolbar modifier="transparent" >    
       <ons-button modifier="large quiet_orange no_shadow" class="full_width button_nopadding" onclick="setSelectedCards()" >     
         <span class="trn">Place order</span>
       </ons-button>           
  </ons-bottom-toolbar>
  
</ons-page>
</template>    


<template id="braintree_form.html" >
  <ons-page id="braintree_form"  modifier="white_background"  >  
   
 <ons-toolbar>
	  <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <div class="center"><span class="trn">BRAINTREE</span></div>
  </ons-toolbar>
   
  <div class="wrap2" style="padding-top:10px;">      
       <div class="dropin-container" id="dropin-container"></div>       
       <ons-button id="braintee_submit_button" modifier="green_button" class="full_width button_nopadding" >          
         <span class="trn">Place order</span>
       </ons-button>       
       
  </div>    
  
</ons-page>
</template>    


<template id="verification_mobile.html" >
  <ons-page id="verification_mobile"  modifier="white_background is_rtl"  >  
   
 <ons-toolbar modifier="is_rtl">
	  <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <div class="center"><span class="trn">VERIFICATION</span></div>
  </ons-toolbar>
   
  <div class="wrap2" >      
     <form id="frm_verification_mobile" class="frm_verification_mobile" method="POST" onsubmit="return false;">
     <input type="hidden" name="token" class="token" id="token">
     <input type="hidden" name="next_step" class="next_step" id="next_step">
     <p class="trn small">We have sent verification code to your mobile number</p>
     
     <div class="field_wrap">
        <ons-input type="text" name="code" maxlength="6" id="code" required class="full_width" modifier="material" placeholder="Enter code" float></ons-input>
     </div>
     
    <p class="small"><span class="trn">Did not receive the code?</span>
     <ons-button modifier="quiet" onclick="resendVerificationCode('sms')" >
	   <span class="trn orange_text">Click here to resend OTP</span>
	</ons-button>
	</p>
           
     </form>
  </div> <!--wrap-->
  
  <ons-bottom-toolbar >
    <ons-button modifier="large quiet_orange no_shadow" class="full_width" onclick="verificationMobile()" >
        <span class="trn">NEXT</span>
      </ons-button>
  </ons-bottom-toolbar>
  
</ons-page>
</template>    


<template id="verification_email.html" >
  <ons-page id="verification_email"  modifier="white_background is_rtl"  >  
   
 <ons-toolbar modifier="is_rtl">
	  <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <div class="center"><span class="trn">VERIFICATION</span></div>
  </ons-toolbar>
   
  <div class="wrap2" >      
     <form id="frm_verification_email" class="frm_verification_email" method="POST" onsubmit="return false;" >
     <input type="hidden" name="token" class="token" id="token">
     <input type="hidden" name="next_step" class="next_step" id="next_step">
     <p class="trn">We have sent verification code to your email address</p>
          
     
     <div class="field_wrap">
        <ons-input type="text" name="code" maxlength="6" id="code" required class="full_width" modifier="material" placeholder="Enter code" float></ons-input>
     </div>
     
     <p class="small"><span class="trn">Did not receive the code?</span>
     <ons-button modifier="quiet" onclick="resendVerificationCode('email')" >
	   <span class="trn orange_text">Click here to resend OTP</span>
	</ons-button>
	</p>
          
           
     </form>
  </div> <!--wrap-->
  
  <ons-bottom-toolbar >
    <ons-button modifier="large quiet_orange no_shadow" class="full_width" onclick="verificationEmail()" >
        <span class="trn">NEXT</span>
      </ons-button>
  </ons-bottom-toolbar>
  
</ons-page>
</template>    

<template id="order_sms_page.html" >
  <ons-page id="order_sms_page"  modifier="white_background"  >  
   
 <ons-toolbar>
	  <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <div class="center"><span class="trn">VERIFICATION</span></div>
  </ons-toolbar>
   
  <div class="wrap2" >      
     <form id="frm_order_sms" class="frm_order_sms" method="POST" onsubmit="return false;" >     
     
     <input type="hidden" name="order_sms_session" id="order_sms_session" class="order_sms_session">   
     
     <p class="trn">We have sent verification code to your mobile number</p>
     <p class="small trn">This merchant has required SMS verification before you can place your order.</p>
         
     <div class="field_wrap">
        <ons-input type="text" name="sms_code" maxlength="6" id="sms_code" required class="full_width" modifier="material" placeholder="Enter code" float></ons-input>
     </div>
          
	<p class="small"><span class="trn">Did not receive code?</span>
	<ons-button modifier="quiet" onclick="resendOrderSMS()" >
	<span class="trn orange_text">Click here to resend OTP</span>
	</ons-button>
	</p>
           
     </form>
  </div> <!--wrap-->
  
  <ons-bottom-toolbar >
    <ons-button modifier="large quiet_orange no_shadow" class="verify_order_sms" onclick="verifyOrderSMSCODE()" >
        <span class="trn">Submit</span>
      </ons-button>
  </ons-bottom-toolbar>
  
</ons-page>
</template>    


<template id="dialog_order_history.html">
  <ons-dialog id="dialog_order_history" cancelable modifier="large_dialog">
    <ons-page id="dialog_order_history" modifier="white_background" >      
      <input type="hidden" name="order_id" class="order_id" id="order_id">
      <div class="history_wrap"></div>      
    </ons-page>
  </ons-dialog>
</template>



<template id="dialog_mobilecode_list.html">
  <ons-dialog id="dialog_mobilecode_list" cancelable modifier="large_dialog">
    <ons-page id="dialog_mobilecode_list" modifier="white_background" >            
      <div class="mobilecode_list"></div>      
    </ons-page>
  </ons-dialog>
</template>


<template id="dialog_invalidkey.html">
  <ons-dialog id="dialog_invalidkey"  modifier="mymedium_dialog">
    <ons-page id="dialog_invalidkey" modifier="white_background" >            
    
      
    <div>
      <div class="wrap_green">
         <ons-icon icon="md-alert-octagon" size="50px" style="color:#fff;"></ons-icon>         
      </div>     
      <div class="content_white">
          <h4 class="trn">Invalid merchant keys!</h4>
          <p class="trn">Looks like you supplied an invalid merchant keys in your config.js</p>
          
          <ons-button modifier="quiet quiet_green no_shadow" class="" onclick="closeapp()" >
	        <span class="trn">close app</span>
	      </ons-button> 
          
      </div>
    </div> 
    
    </ons-page>
  </ons-dialog>
</template>


<template id="dialog_no_net.html">
  <ons-dialog id="dialog_no_net"  modifier="mymedium_dialog">
    <ons-page id="dialog_no_net" modifier="black_background" >            
    
      
    <div class="net_wrap">   
      <img src="images/nonet.jpg">
      <p class="trn">No internet connection</p>
    </div> 
    
    </ons-page>
  </ons-dialog>
</template>
  


<template id="forgot_pass.html" >
  <ons-page id="forgot_pass"  modifier="white_background is_rtl"  >  
   
 <ons-toolbar modifier="is_rtl">
	  <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <!-- <div class="center"><span class="trn">FORGOT PASSWORD</span></div> -->
  </ons-toolbar>

  <div class="wrap mb20">
    <h3 class="trn">Forgot password</h3>
    <p class="small trn">We'll send you an email recovery code</p>
  </div>
   
  <div class="wrap2" >      
     <form id="frm_forgot_pass" class="frm_forgot_pass" method="POST">
     
     <ons-list modifier="field_list" id="login_list">     
        <ons-list-item>
          <ons-input type="text" name="user_email" id="user_email" required class="full_width user_email" modifier="material" placeholder="Enter your email or username" float></ons-input>
    	   <img class="stic-icon" src="lib/icons/mail.svg" onerror="this.src='mail.png'">          
        </ons-list-item>
     </ons-list>  
           
     </form>
  </div> <!--wrap-->
  
  <ons-bottom-toolbar >
    <ons-button modifier="large quiet_orange no_shadow" class="full_width" onclick="requestForgotPass()" >
        <span class="trn">Submit</span>
      </ons-button>
  </ons-bottom-toolbar>
  
</ons-page>
</template>    



<template id="map_select.html" >
  <ons-page id="map_select"  modifier="white_background"  >  
   
 <ons-toolbar>
	  <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <div class="center"><span class="trn">SELECT FROM MAP</span></div>
  </ons-toolbar>
  
  <input type="hidden" name="selected_lat" id="selected_lat" class="selected_lat">
  <input type="hidden" name="selected_lng" id="selected_lng" class="selected_lng">
  
  <div class="map_canvas2" id="map_canvas2"></div>
  
  <ons-bottom-toolbar modifier="transparent" >
    <div class="wrap">
       <ons-button modifier="quiet quiet_green no_shadow" class="full_width button_nopadding" onclick="geoCode()" >     
         <span class="trn">Apply</span>
       </ons-button>       
    </div>
  </ons-bottom-toolbar>
  
</ons-page>
</template>    



<template id="device_id.html" >
  <ons-page id="device_id"  modifier="is_rtl"  >  
   
 <ons-toolbar modifier="is_rtl" >
	  <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <!-- <div class="center"><span class="trn">DEVICE INFORMATION</span></div> -->
  </ons-toolbar>

  <div class="iphonex_margin">
  <ons-list id="device_information_list" modifier="is_rtl">        
  </ons-list> 
  </div>
  
  
</ons-page>
</template>    



<template id="points_main.html" >
  <ons-page id="points_main" modifier="is_rtl"   >  
   
 <ons-toolbar modifier="is_rtl" >
	  <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <div class="center"><span class="trn">YOUR POINTS</span></div>
  </ons-toolbar>
  
   <ons-pull-hook id="pull_points_main">
	<span class="trn">Pull to refresh</span>
   </ons-pull-hook> 

   <ons-list id="points_main_list" modifier="no_chevron">     
   </ons-list>
   
   <div class="points_main_loader bottom_loader bottom_gap"></div>
  
</ons-page>
</template>    



<template id="points_details.html" >
  <ons-page id="points_details" modifier="is_rtl"   >  
   
 <ons-toolbar modifier="is_rtl" >
	  <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <div class="center"><span class="trn page_title"></span></div>
  </ons-toolbar>
          
  <ons-pull-hook id="points_details_pull">
	<span class="trn">Pull to refresh</span>
  </ons-pull-hook> 
  
  <input type="hidden" name="points_details_infinite" class="points_details_infinite" value="">
  
  <ons-list id="points_details_list">    
  </ons-list>
  
  <div class="points_details_loader bottom_loader bottom_gap"></div>
  
</ons-page>
</template>    


<template id="dialog_error.html">
  <ons-dialog id="dialog_error"  modifier="mymedium_dialog">
    <ons-page id="dialog_error" modifier="white_background" >            
    
      
    <div>
      <div class="wrap_green">
         <ons-icon icon="md-alert-octagon" size="50px" style="color:#fff;"></ons-icon>         
      </div>     
      <div class="content_white">
          <h4 class="trn dialog_error_title"></h4>
          <p class="trn dialog_error_msg"></p>
          
          <ons-button modifier="quiet quiet_green no_shadow" class="" onclick="closeapp()" >
	        <span class="trn">close app</span>
	      </ons-button> 
          
      </div>
    </div> 
    
    </ons-page>
  </ons-dialog>
</template>

<template id="clear_cart_dialog.html">
  <ons-alert-dialog id="clear_cart_dialog" modifier="rowfooter" cancelable>
     
     <div class="alert-dialog-title trn">Clear cart?</div>
     <div class="alert-dialog-content trn">Are you sure you want to remove all items in your cart?</div>
    
      <div class="alert-dialog-footer">        
        <ons-alert-dialog-button onclick="clearCart();">
         <span class="trn">Yes</span>
        </ons-alert-dialog-button>
        <ons-alert-dialog-button onclick="hideDialog('clear_cart_dialog')">
         <span class="trn">Cancel</span>
        </ons-alert-dialog-button>
      </div>
             
      <!--dialog_wrapper--> 
  </ons-alert-dialog>
</template>

<template id="map_delivery.html">
  <ons-page id="map_delivery" modifier="white_background"   >  
  
  <ons-toolbar>
	  <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <div class="center"><span class="trn">Point your address in the map</span></div>
  </ons-toolbar> 
  
  <form method="POST" id="frm_delivery_location" class="frm_delivery_location">  
  <input type="hidden" name="selected_lat" id="selected_lat" class="selected_lat">
  <input type="hidden" name="selected_lng" id="selected_lng" class="selected_lng">
  </form>
  
  <div class="maps_canvas map_delivery"></div>
  
  <ons-bottom-toolbar modifier="bottom_toolbar_normal" class="bottom_toolbar_checkout">
  <div class="wrap">
    <ons-button modifier="green_button" class="full_width button_nopadding checkout_action" onclick="setDeliveryLocation()" > 
     <span class="trn">Continue</span>
    </ons-button>
  </div>   
  </ons-bottom-toolbar>
  
  </ons-page>
</template>


<template id="search_category.html">
  <ons-page id="search_category" modifier="white_background is_rtl"   >  

   <ons-toolbar modifier="is_rtl">
	  <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <!-- <div class="center"><span class="trn">Search for category</span></div> -->
  </ons-toolbar> 
  
   <div class="search_wrapper" id="stic_search">
     <ons-search-input id="input_search_category" placeholder="Search for category"></ons-search-input>
     <div class="stic-icon">
       <div>
         <img src="lib/icons/search.svg" onerror="this.src='search.png'">
       </div>
     </div>
   </div> 
   
   <div class="search_by_category_result small_resp"></div>
   <ons-list id="search_by_category_result" modifier="list_small is_rtl">
   </ons-list>
  
</ons-page>
</template>

<template id="search_item.html">
  <ons-page id="search_item" modifier="white_background is_rtl"   >  

   <ons-toolbar modifier="is_rtl" >
	  <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <!-- <div class="center"><span class="trn">Search for item</span></div> -->
  </ons-toolbar>

  <div class="search_wrapper" id="stic_search">
    <ons-search-input id="input_search_item" class="search_for_item" placeholder="Search for item"></ons-search-input>
    <div class="stic-icon">
      <div>
        <img src="lib/icons/search.svg" onerror="this.src='search.png'">
      </div>
    </div>
  </div>  
   
   <div class="search_by_item_result small_resp"></div>
   <ons-list id="search_by_item_result" modifier="list_small is_rtl">
   </ons-list>
  
</ons-page>
</template>  


<template id="authorize_form.html">
<ons-page id="authorize_form" modifier="white_background is_rtl"  >  

 <ons-toolbar modifier="is_rtl">
	  <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <div class="center"><span class="trn">Pay using Authorize.net</span></div>
  </ons-toolbar> 
  
<form id="frm_authorize" class="frm_authorize" method="POST">
<input type="hidden" name="order_id" class="order_id">


<ons-list modifier="field_list" >  

<ons-list-item>
  <ons-input type="number" maxlength="16" required name="credit_card_number"  class="full_width credit_card_number" modifier="underbar"  placeholder="Credit card number" float></ons-input>
</ons-list-item>

<ons-list-item>
  <ons-row>
   <ons-col width="25%" class="expiration_month_wrap mr20"></ons-col>
   <ons-col width="25%" class="expiration_yr_wrap mr20"></ons-col>
   <ons-col width="10px"></ons-col>
   <ons-col>
     <ons-input type="number" maxlength="4" name="cvv" required class="full_width cvv" modifier="underbar"  placeholder="CVV" float></ons-input>
   </ons-col>
  </ons-row>
</ons-list-item>
	
	
<ons-list-item>
  <ons-input type="text" name="first_name" required class="full_width first_name" modifier="underbar"
          placeholder="First name" float></ons-input>
</ons-list-item>

<ons-list-item>
  <ons-input type="text" name="last_name" required class="full_width last_name" modifier="underbar"
          placeholder="Last Name" float></ons-input>
</ons-list-item>

<ons-list-item>
  <ons-input type="text" name="address" required class="full_width address" modifier="underbar"
          placeholder="Address" float></ons-input>
</ons-list-item>

<ons-list-item>
  <ons-input type="text" name="city" required class="full_width city" modifier="underbar"
          placeholder="City" float></ons-input>
</ons-list-item>

<ons-list-item>
  <ons-input type="text" name="state" required class="full_width state" modifier="underbar"
          placeholder="State" float></ons-input>
</ons-list-item>

<ons-list-item>
   <ons-input type="text" name="zip_code" required class="full_width zip_code" modifier="underbar"
          placeholder="Zip Code" float></ons-input>
</ons-list-item>

<ons-list-item>
  <div class="field_wrap country_list_wrap"></div>  
</ons-list-item>

</ons-list>

</form>        

   <ons-bottom-toolbar modifier="transparent" >    
       <ons-button modifier="large quiet_orange no_shadow" class="full_width button_nopadding" onclick="PayAuthorize()" >     
         <span class="cc_action trn">PAY NOW</span>
       </ons-button>           
    </ons-bottom-toolbar>   

</ons-page>
</template>  
  
<template id="track_order.html">
<ons-page id="track_order" class="image_loaded" modifier="is_rtl"  >  

 <ons-toolbar modifier="is_rtl">
	  <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <!-- <div class="center"><span class="trn">TRACK ORDER</span></div> -->
  </ons-toolbar> 
  
   <ons-pull-hook id="track_order_pull">
	<span class="trn">Pull to refresh</span>
  </ons-pull-hook>   
  
  <input type="hidden" name="track_order_id" class="track_order_id">  
  
  <div class="details_with_logo"></div>  
		
  <ons-list id="track_order_list" class="mt20">   
  </ons-list>
  
  <div class="track_order_loader bottom_loader bottom_gap"></div>
  
   <ons-bottom-toolbar >   
    <ons-button modifier="large quiet_orange no_shadow" id="track_driver_button"
         class="full_width button_nopadding" onclick="showTrackinMap();" >     
         <span class="cc_action trn">Track courier</span>
       </ons-button>       
    </ons-bottom-toolbar>   

</ons-page>
</template>  


<template id="tracking_map.html">
<ons-page id="tracking_map" modifier="white_background is_rtl"  >  

 <ons-toolbar class="no_shadow" modifier="is_rtl">
	  <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <div class="center"><span class="trn">TRACK COURIER</span></div>
	  <div class="right">
	     <ons-toolbar-button onclick="map_center();">
            <ons-icon icon="ion-android-locate" size="28" class="color_green"></ons-icon>
         </ons-toolbar-button>
	  </div>
  </ons-toolbar> 

  <input type="hidden" name="driver_phone" class="driver_phone">  
  <input type="hidden" name="track_order_id" class="track_order_id">
  <input type="hidden" name="track_task_id" class="track_task_id">
     
  
  <div class="map_canvas" id="map_canvas" ></div>
  <ul id="map_instructions" class="hide"></ul>

  <ons-bottom-toolbar modifier="track_bottom_toolbar">
  
  <div class="track_header image_loaded">
    <ons-row>
        <ons-col vertical-align="center" width="55px" >    
        
        <div class="is-loading xxsmall-loader">
	         <div class="spinner"></div>
		     <img class="driver_avatar" src="images/avatar.jpg">    
	     </div>
        
        </ons-col>                 
        
       <ons-col vertical-align="center" width="15">    
         <ons-button modifier="quiet"  onclick="callDriver();">
          <ons-icon class="color_green" size="25px" icon="ion-ios-telephone"></ons-icon>           
         </ons-button>
       </ons-col>                 
       
       <ons-col vertical-align="center"  >             
         <span class="driver-name"></span>
       </ons-col>            
            
       <ons-col vertical-align="center" width="15" >
         <div class="track_loader"></div>
       </ons-col>            
       
    </ons-row>        
     
  </div>  
  
  </ons-bottom-toolbar>
  
</ons-page>
</template>  


<template id="custom_page.html">
<ons-page id="custom_page" modifier="is_rtl"  >  

 <ons-toolbar modifier="is_rtl" >
	  <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <div class="center"><span class="custom_page_title"></span></div>
  </ons-toolbar> 
  
  <ons-pull-hook id="custom_page_pull">
    <span class="trn">Pull to refresh</span>
  </ons-pull-hook> 
    
  <div class="custom_page_loader bottom_loader"></div>
  <div class="bottom_gap"></div>

</ons-page>
</template>  

<template id="add_review.html">
<ons-page id="add_review" class="image_loaded" modifier="is_rtl" >  

<ons-toolbar modifier="is_rtl">
  <div class="left"><ons-back-button>Back</ons-back-button></div>
  <!-- <div class="center"><span class="trn">WRITE REVIEW</span></div> -->
</ons-toolbar> 


<div class="details_with_logo"></div> 

<form method="POST" id="frm_review" class="frm_review">  

   <input type="hidden" name="rating" class="rating">
   <input type="hidden" name="order_id" class="order_id">   
   
   <div class="form_wrapper">
   
   <ons-list>
    <ons-list-item>        
       <div class="center">         
         <textarea name="review" class="review textarea textarea--transparent" 
          rows="3" required placeholder="What do you think of your order?"></textarea>
      </div>
    </ons-list-item>
    
    <ons-list-item> 
      <label class="left min34">
         <ons-checkbox name="as_anonymous" input-id="check_anonymous" value="1"></ons-checkbox>
      </label>
   
      <label for="check_anonymous" class="center">
        <span class="trn">Review anonymously</span>
      </label>  
    </ons-list-item>
    
  </div>
</form>    

 <ons-bottom-toolbar modifier="">	     	        	  
	  <ons-button modifier="large quiet_orange no_shadow" onclick="submitForm('.frm_review','addReviewNew','POST')" >
	   <span class="trn">Submit</span>
	  </ons-button>	  
  </ons-bottom-toolbar>

</ons-page>
</template>  

<template id="cart_temp.html">
  <ons-page id="cart_temp" modifier="page_white" > 
</ons-page>
</template>


<template id="floating_category.html">
  <ons-dialog id="floating_category" cancelable modifier="floating_category" >

  <ons-list id="floating_category_list" modifier="list_style1 floating_category is_rtl">     	
  </ons-list>   
  
  </ons-dialog>
</template>


<template id="map_enter_address.html">
<ons-page id="map_enter_address" modifier="white_background is_rtl" > 


<ons-toolbar modifier="no_shadow is_rtl">
	  <div class="left">
	    <ons-back-button modifier="toolbar_button">Back</ons-back-button>
	  </div>	  
</ons-toolbar>


<ons-pull-hook id="map_enter_address_pull">
<span class="trn">Pull to refresh</span>
</ons-pull-hook> 

  <div class="search_wrapper" id="stic_search">
    <ons-search-input name="search_address" id="search_address" class="search_address" placeholder="Search for your location"></ons-search-input>
   	<div id="mapbox_s_goecoder" class="mapbox_s_goecoder"></div>
    <div class="stic-icon">
    	<img src="lib/icons/search.svg" onerror="this.src='search.png'">
    </div>
  </div> 
  
<ons-list modifier="list_style_left">
<ons-list-item tappable onclick="ReCurrentLocation();" >
  <div class="left min34">
    <ons-icon icon="ion-android-locate" class="list-item__icon"></ons-icon>
  </div>
  <div class="center">
      <span class="list-item__title bold trn">Current Location</span>
      <span class="list-item__subtitle trn">Using GPS</span>
  </div>
</ons-list-item>
</ons-list>

<input type="hidden" name="map_enter_address_infinite" id="map_enter_address_infinite"
           class="map_enter_address_infinite" value="0">  
  
<ons-list modifier="list_style_left" id="map_enter_address_list">
   <ons-list-header>
     <ons-row>
        <ons-col vertical-align="center" class="f18 trn" >Recent location</ons-col>
        <ons-col class="text-right delete_recent_loc_wrap" vertical-align="center" >
        
        <ons-button id="clear_recent_location" class="noborder" style="padding-right: 0" modifier="quiet button_small trn" onclick="clearRecentLocation()" >
        <span class="trn">CLEAR</span>
        </ons-button>
        
        </ons-col>
     </ons-row>
   </ons-list-header> 
</ons-list>

<div class="map_enter_address_loader bottom_loader bottom_gap"></div>

</ons-page>
</template>



<template id="favorites.html" >
  <ons-page id="favorites" class="image_loaded" >  
   
 <ons-toolbar>
	  <div class="left"><ons-back-button>Back</ons-back-button></div>
	  <div class="center"><span class="trn">FAVORITES</span></div>
  </ons-toolbar>
          
  <ons-pull-hook id="favorites_pull">
	<span class="trn">Pull to refresh</span>
  </ons-pull-hook> 
  
  <input type="hidden" name="favorites_infinite" class="favorites_infinite" value="">
  
  <ons-list id="favorites_list" modifier="no_background">    
  </ons-list>
  
  <div class="favorites_loader bottom_loader bottom_gap"></div>
  
</ons-page>
</template>    


<template id="cancel_order_form.html">
<ons-page id="cancel_order_form" class="image_loaded" modifier="is_rtl"  >  

<ons-toolbar modifier="is_rtl">
  <div class="left"><ons-back-button>Back</ons-back-button></div>
  <!-- <div class="center"><span class="trn">CANCEL ORDER</span></div> -->
</ons-toolbar> 

<div class="details_with_logo"></div> 


<form id="frm_cancel_order_form" class="frm_cancel_order_form" method="POST">
   
   <input type="hidden" name="order_id" class="order_id">   
   
   <div class="form_wrapper">  
   <ons-list>
    <ons-list-item>        
       <div class="center">         
         <textarea name="cancel_reason" class="cancel_reason textarea textarea--transparent" 
          rows="3" required placeholder="state your reason for cancellation"></textarea>
      </div>
    </ons-list-item>            
  </div>
</form>    

<ons-bottom-toolbar modifier="">	     	        	  
	  <ons-button modifier="large quiet_orange no_shadow" onclick="submitForm('.frm_cancel_order_form','CancelOrder','POST')" >
	   <span class="trn">Submit</span>
	  </ons-button>	  
  </ons-bottom-toolbar>

</ons-page>
</template>    


<template id="rate_driver.html">
<ons-page id="rate_driver" class="image_loaded" modifier="is_rtl" >  

<ons-toolbar modifier="is_rtl">
  <div class="left"><ons-back-button>Back</ons-back-button></div>
  <div class="center"><span class="trn">RATE YOUR DELIVERY</span></div>
</ons-toolbar> 

<div class="details_with_logo"></div> 

<form method="POST" id="frm_rate_task" class="frm_rate_task">  

   <input type="hidden" name="rating" class="rating">
   <input type="hidden" name="task_id" class="task_id">   
   
   <div class="form_wrapper">
   
   <ons-list>
    <ons-list-item>        
       <div class="center">         
         <textarea name="review" class="review textarea textarea--transparent" 
          rows="3" required placeholder="What do you think of your delivery?"></textarea>
      </div>
    </ons-list-item>
    
    <ons-list-item> 
	  <label class="left min34">
	     <ons-checkbox name="as_anonymous" input-id="check_anonymous" value="1"></ons-checkbox>
	  </label>

	  <label for="check_anonymous" class="center">
	    <span class="trn">Review anonymously</span>
	  </label>  
    </ons-list-item>
    
  </div>
</form>    

 <ons-bottom-toolbar modifier="">	     	        	  
	  <ons-button id="rate_button" modifier="large quiet_orange no_shadow" onclick="submitForm('.frm_rate_task','RateTask','POST')" >
	   <span class="trn">Submit</span>
	  </ons-button>	  
  </ons-bottom-toolbar>


</ons-page>
</template>    


<ons-modal id="modal_pop" direction="up">
  <div id="modal_pop_content" style="text-align: center" class="image_loaded modal_notification">
   
  </div>
</ons-modal>



<template id="search_booking.html">
<ons-page id="search_booking" class="image_loaded" modifier="white_background is_rtl" >  

 <ons-toolbar modifier="is_rtl"> 
	  <div class="left">
	    <ons-back-button>Back</ons-back-button>
	  </div>	  
	  <!-- <div class="center"><span class="trn">SEARCH BOOKING</span></div> -->
  </ons-toolbar>

   <div class="search_wrapper" id="stic_search">
     <ons-search-input id="search_booking_field" placeholder="Enter Booking ID or Restaurant Name"></ons-search-input>
     <div class="stic-icon">
     	<img src="lib/icons/search.svg" onerror="this.src='search.png'">
     </div>
   </div>  
   
   <ons-list id="search_booking_list" modifier="list_small" >     
   </ons-list>  
   
   <div class="search_booking_loader bottom_loader"></div>  
   <div class="bottom_gap"></div>	  

</ons-page>
</template>     


<template id="booking_details.html">
<ons-page id="booking_details" class="image_loaded" modifier="is_rtl"  >  

  <ons-toolbar modifier="is_rtl" >
	  <div class="left">
	    <ons-back-button>Back</ons-back-button>
	  </div>	  
	  <!-- <div class="center"><span class="trn">BOOKING DETAILS</span></div> -->
  </ons-toolbar>
  
  
   <ons-pull-hook id="booking_details_pull">
	<span class="trn">Pull to refresh</span>
   </ons-pull-hook> 
      
   <ons-list id="booking_details_list" >       
   </ons-list>     
   
   <div class="booking_details_loader bottom_loader"></div>  
   <div class="bottom_gap"></div>
   
</ons-page>
</template>     


<template id="startup_language.html">
  <ons-page id="startup_language" modifier="white_background is_rtl" > 

   <ons-toolbar modifier="is_rtl">	        
	  <!-- <div class="center"><span class="trn">SELECT LANGUAGE</span></div> -->
    </ons-toolbar>
    
	<ons-pull-hook id="language_pull">
	<span class="trn">Pull to refresh</span>
	</ons-pull-hook>

	<div class="wrap mb20">
	  <h3 class="trn">Select language</h3>
	  <p class="small trn">Choose the language you prefer</p>
	</div>  
	
	<ons-list id="language_list">     
	</ons-list>  
	
	<div class="language_loader bottom_loader"></div>
	
	<div class="bottom_gap"></div>
              
  </ons-page>
</template>


<template id="startup_banner.html">
<ons-page id="startup_banner" modifier="white_background" > 

  <ons-carousel id="startup_banner_carousel" class="startup_banner_carousel" 
  fullscreen swipeable auto-scroll auto-scroll-ratio="0.1" overscrollable >  
  </ons-carousel>
  <div class="banner-paging startup_banner_paging is_rtl">
    <ul class="dots">
    </ul>
  </div>
  <input type="hidden" name="startup_banner_index" class="startup_banner_index">  

</ons-page>
</template>  


<template id="favorites_item.html">
  <ons-page id="favorites_item" class="image_loaded" modifier="is_rtl" > 

   <ons-toolbar modifier="is_rtl">	        
      <div class="left">
	    <ons-back-button>Back</ons-back-button>
	  </div>
	  <!-- <div class="center"><span class="trn">FAVORITES</span></div> -->
    </ons-toolbar>
    
    
	<ons-pull-hook id="favorites_item_pull">
	<span class="trn">Pull to refresh</span>
	</ons-pull-hook>  
	
	<input type="hidden" name="favorites_item_done" id="favorites_item_done" class="favorites_item_done" value="0">  
	<div class="wrap">
		<h3 class="trn">Favorites</h3>
		<p class="trn s small mb20">Order your favorite dishes again</p>
	</div>

	<ons-list id="favorites_item_list">     
	</ons-list>  
	
	<div class="favorites_item_loader bottom_loader"></div>
	
	<div class="bottom_gap"></div>
              
  </ons-page>
</template>

<template id="addressbook_location.html">
  <ons-page id="addressbook_location" class="image_loaded" modifier="is_rtl" > 
  
  <ons-back-button modifier="fixed_back_button">Back</ons-back-button> 
  <div class="map_half" id="map_address"></div>

  <div class="header_grey" style="text-align: right;">
    <ons-button id="location_change" class="noborder" modifier="quiet button_small trn" onclick="showPage('map_enter_address.html')" >
    <span class="trn">CHANGE</span>
    </ons-button>
  </div>
  
<form id="frm_addressbook_location" class="frm_addressbook_location" method="POST">

<input type="hidden" class="book_location_id" name="book_location_id" id="book_location_id">
<input type="hidden" name="lat" id="lat" class="lat">
<input type="hidden" name="lng" id="lng" class="lng">
<input type="hidden" name="mapbox_drag_map" class="mapbox_drag_map" id="mapbox_drag_map">
<input type="hidden" name="mapbox_drag_end" class="mapbox_drag_end" id="mapbox_drag_end">

<input type="hidden" name="state_id" id="state_id" class="state_id" value="">
<input type="hidden" name="state_raw" id="state_raw" class="state_raw" value="">
<input type="hidden" name="country_id" id="country_id" class="country_id" value="">
<input type="hidden" name="country_name" id="country_name" class="country_name" value="">

<input type="hidden" name="city_id" id="city_id" class="city_id" value="">
<input type="hidden" name="city_name_raw" id="city_name_raw" class="city_name_raw" value="">

<input type="hidden" name="area_id" id="area_id" class="area_id" value="">
<input type="hidden" name="area_name_raw" id="area_name_raw" class="area_name_raw" value="">

<ons-list modifier="field_list is_rtl">     
	<ons-list-item>
	  <ons-input type="text" name="street" id="street" required class="full_width street"
	   modifier="underbar"  placeholder="Street" float></ons-input>
    <img class="stic-icon" src="lib/icons/pin.svg" onerror="this.src='pin.png'">
	</ons-list-item>	
		
	<ons-list-item>
	  <ons-input type="text" name="state_name" id="state_name" required class="full_width state_name"
	   modifier="underbar" placeholder="State/Region" float onclick="showPage('location_state.html','none')" onfocus="showPage('location_state.html','none')"></ons-input>
    <img class="stic-icon" src="lib/icons/pin.svg" onerror="this.src='pin.png'">
	</ons-list-item>	
	
	<ons-list-item>
	  <ons-input type="text" name="city_name" id="city_name" required class="full_width city_name"
	   modifier="underbar"  placeholder="City" float onclick="showLocationCity();" onfocus="showLocationCity();"></ons-input>
    <img class="stic-icon" src="lib/icons/pin.svg" onerror="this.src='pin.png'">
	</ons-list-item>	
	
	<ons-list-item>
	  <ons-input type="text" name="area_name" id="area_name" required class="full_width area_name"
	   modifier="underbar"  placeholder="Distric/Area/neighborhood" float onclick="showArea();" onfocus="showArea();"></ons-input>
    <img class="stic-icon" src="lib/icons/pin.svg" onerror="this.src='pin.png'">
	</ons-list-item>	
	
	<ons-list-item>
	  <ons-input type="text" name="location_name" id="location_name" required class="full_width location_name"
	   modifier="underbar"  placeholder="Floor/unit/Room #" float></ons-input>
    <img class="stic-icon" src="lib/icons/pin.svg" onerror="this.src='pin.png'">
	</ons-list-item>	
	
    <ons-list-item>
	   <label class="left min34">
        <ons-checkbox name="as_default" input-id="as_default" class="as_default" value="1" ></ons-checkbox>
      </label>
      <label for="as_default" class="center">
        <span class="trn">Use as default address</span>
      </label>  
	</ons-list-item>
	
</ons-list>	  	

</form>
    
<div class="bottom_gap"></div>

<ons-bottom-toolbar modifier="transparent" >
<ons-button modifier="large quiet_orange no_shadow" class="full_width button_nopadding" 
onclick="submitForm('.frm_addressbook_location','SaveAddresBookLocation');" >     
 <span class="addressbook_location_action">SAVE</span>
</ons-button>       
</ons-bottom-toolbar> 

  </ons-page>
</template>    


<template id="location_state.html">
<ons-page id="location_state" modifier="white_background is_rtl"   > 

<ons-toolbar>
	  <div class="left">
	    <ons-back-button>Back</ons-back-button>
	  </div>
	  <div class="center">
	   <!-- <span class="trn">SELECT STATE</span> -->
	  </div>
  </ons-toolbar>
  
<ons-pull-hook id="location_state_pull">
<span class="trn">Pull to refresh</span>
</ons-pull-hook>

<div class="wrap">
  <h3 class="trn">Select state</h3>
</div>

<input type="hidden" name="location_state_done" id="location_state_done" class="location_state_done" value="0">

<div class="search_wrapper" id="stic_search">
  <ons-search-input id="location_state_input" placeholder="State/Region"></ons-search-input>
  <div class="stic-icon">
    <img src="lib/icons/search.svg" onerror="this.src='search.png'">
  </div>
</div>   

<ons-list id="location_state_list" modifier="list_small" >      
</ons-list>

<div class="location_state_loader bottom_loader bottom_gap"></div>  

</ons-page>
</template>    


<template id="location_city.html">
<ons-page id="location_city" modifier="white_background is_rtl"  > 

<ons-toolbar>
	  <div class="left">
	    <ons-back-button>Back</ons-back-button>
	  </div>
	  <div class="center">
	   <!-- <span class="trn">SELECT CITY</span> -->
	  </div>
  </ons-toolbar>
  
<ons-pull-hook id="location_city_pull">
<span class="trn">Pull to refresh</span>
</ons-pull-hook> 

<input type="hidden" name="location_city_done" id="location_city_done" class="location_city_done" value="0">  

<div class="wrap">
  <h3 class="trn">Select city</h3>
</div>

<div class="search_wrapper" id="stic_search">
  <ons-search-input id="location_city_input" placeholder="City"></ons-search-input>
  <div class="stic-icon">
    <img src="lib/icons/search.svg" onerror="this.src='search.png'">
  </div>
</div> 

<ons-list id="location_city_list">    
</ons-list>

<div class="location_city_loader bottom_loader bottom_gap"></div>  

</ons-page>
</template>    

<template id="location_area.html">
<ons-page id="location_area" modifier="white_background is_rtl"  > 

<ons-toolbar>
	  <div class="left">
	    <ons-back-button>Back</ons-back-button>
	  </div>
	  <div class="center">
	   <!-- <span class="trn">SELECT AREA</span> -->
	  </div>
  </ons-toolbar>
  
<ons-pull-hook id="location_area_pull">
<span class="trn">Pull to refresh</span>
</ons-pull-hook> 

<input type="hidden" name="location_area_done" id="location_area_done" class="location_area_done" value="0">  

<div class="wrap">
  <h3 class="trn">Select area</h3>
</div>

<div class="search_wrapper" id="stic_search">
  <ons-search-input id="location_area_input" placeholder="District/Area"></ons-search-input>
  <div class="stic-icon">
    <img src="lib/icons/search.svg" onerror="this.src='search.png'">
  </div>
</div> 

<ons-list id="location_area_list">    
</ons-list>

<div class="location_area_loader bottom_loader bottom_gap"></div>  

</ons-page>
</template>    


<template id="address_form_location.html">
<ons-page id="address_form_location" modifier="is_rtl" > 

<ons-back-button modifier="fixed_back_button">Back</ons-back-button> 
<div class="map_half" id="map_address"></div>

<div class="header_grey" style="text-align: right">
<ons-button id="location_change" class="noborder" modifier="quiet button_small trn" onclick="showPage('map_enter_address.html')" >
<span class="trn">CHANGE</span>
</ons-button>
</div>

<form id="frm_address_location" class="frm_address_location" method="POST">
<input type="hidden" name="lat" id="lat" class="lat">
<input type="hidden" name="lng" id="lng" class="lng">
<input type="hidden" name="mapbox_drag_map" class="mapbox_drag_map" id="mapbox_drag_map">
<input type="hidden" name="mapbox_drag_end" class="mapbox_drag_end" id="mapbox_drag_end">
<input type="hidden" name="search_address2" id="search_address2" class="search_address2">

<input type="hidden" name="state_id" id="state_id" class="state_id" value="">
<input type="hidden" name="state_raw" id="state_raw" class="state_raw" value="">
<input type="hidden" name="country_id" id="country_id" class="country_id" value="">
<input type="hidden" name="country_name" id="country_name" class="country_name" value="">

<input type="hidden" name="city_id" id="city_id" class="city_id" value="">
<input type="hidden" name="city_name_raw" id="city_name_raw" class="city_name_raw" value="">

<input type="hidden" name="area_id" id="area_id" class="area_id" value="">
<input type="hidden" name="area_name_raw" id="area_name_raw" class="area_name_raw" value="">

<ons-list modifier="field_list">     
	<ons-list-item>
	  <ons-input type="text" name="street" id="street" required class="full_width street"
	   modifier="underbar"  placeholder="Street" float></ons-input>
      <img class="stic-icon" src="lib/icons/pin.svg" onerror="this.src='pin.png'">
	</ons-list-item>	
		
	<ons-list-item>
	  <ons-input type="text" name="state_name" id="state_name" required class="full_width state_name"
	   modifier="underbar" placeholder="State/Region" float onclick="showPage('location_state.html','none')" onfocus="showPage('location_state.html','none')"></ons-input>
     <img class="stic-icon" src="lib/icons/pin.svg" onerror="this.src='pin.png'">
	</ons-list-item>	
	
	<ons-list-item>
	  <ons-input type="text" name="city_name" id="city_name" required class="full_width city_name"
	   modifier="underbar"  placeholder="City" float onclick="showLocationCity();" onfocus="showLocationCity();"></ons-input>
    <img class="stic-icon" src="lib/icons/pin.svg" onerror="this.src='pin.png'">
	</ons-list-item>	
	
	<ons-list-item>
	  <ons-input type="text" name="area_name" id="area_name" required class="full_width area_name"
	   modifier="underbar"  placeholder="Distric/Area/neighborhood" float onclick="showArea();" onfocus="showArea();"></ons-input>
    <img class="stic-icon" src="lib/icons/pin.svg" onerror="this.src='pin.png'">
	</ons-list-item>	
	
	<ons-list-item>
	  <ons-input type="text" name="location_name" id="location_name" required class="full_width location_name"
	   modifier="underbar"  placeholder="Floor/unit/Room #" float></ons-input>
    <img class="stic-icon" src="lib/icons/pin.svg" onerror="this.src='pin.png'">
	</ons-list-item>	
	
	<ons-list-item>	   
	    <ons-input type="text" name="contact_phone" required  class="full_width contact_phone" modifier="underbar" placeholder="Contact number" float onclick="showPage('enter_phone.html')" onfocus="showPage('enter_phone.html')" ></ons-input>
      <img class="stic-icon" src="lib/icons/mobile.svg" onerror="this.src='mobile.png'">
	</ons-list-item>	 
	
	<ons-list-item>	
    <ons-input type="text" name="delivery_instruction"  class="full_width delivery_instruction" modifier="underbar" placeholder="Delivery instructions" float></ons-input>   
    <img class="stic-icon" src="lib/icons/edit.svg" onerror="this.src='edit.png'">
	</ons-list-item>
	
    <ons-list-item>
	   <label class="left min34">
        <ons-checkbox name="save_address" input-id="save_address" class="save_address" value="1" ></ons-checkbox>
      </label>
      <label for="save_address" class="center">
        <span class="trn">Save to my address book</span>
      </label>  
	 </ons-list-item>
	
</ons-list>	  	

</form>

<div class="bottom_gap"></div>
   
   <ons-bottom-toolbar >
   <ons-button modifier="large quiet_orange no_shadow" class="full_width button_nopadding"
   onclick="submitForm('.frm_address_location','setDeliveryLocationFee');" 
    >
        <span class="trn">Apply</span>
      </ons-button> 
  </ons-bottom-toolbar>    

</ons-page>
</template>    


<template id="pickup_forms.html" >
  <ons-page id="pickup_forms"  modifier="white_background"  >  
  
  <ons-toolbar modifier="transparent_toolbar">
      <div class="left">        
        <ons-back-button>Back</ons-back-button>
      </div>
	  <div class="center">	    
	  </div>	  
  </ons-toolbar>
       
   <div class="wrap2">
    <h3 class="trn">Contact information</h3>
  </div>
    
   <form id="frm_pickup" class="frm_pickup" method="POST" onsubmit="return false;">
   <ons-list modifier="field_list" >  
    
     <ons-list-item>
          <ons-input type="text" name="contact_phone"  id="contact_phone"
          required class="full_width contact_phone" modifier="underbar" placeholder="Mobile number" float  onfocus="showPage('enter_phone.html')" onclick="showPage('enter_phone.html')"></ons-input>
     </ons-list-item>
     
     <ons-list-item></ons-list-item>
          
   </ons-list>
   </form>         
    
  <ons-bottom-toolbar modifier="transparent" >    
       <ons-button modifier="large quiet_orange no_shadow"  onclick="vPickup()" >     
         <span class="trn">Place order</span>
       </ons-button>           
  </ons-bottom-toolbar>

    </ons-page>
</template>    

<template id="contact_us.html" >
  <ons-page id="contact_us"  modifier="white_background is_rtl"  >  
    
  
   <ons-back-button modifier="fixed_back_button">Back</ons-back-button> 

   <div class="stic-fake-toolbar" style="margin-bottom: 0"></div>

   <div class="wrap mb20">
    <h3 class="trn">Contact us</h3>
  	<p class="small trn">We are always happy to hear from our clients and visitors, you may contact us anytime</p>
   </div>
  
  <form class="frm_contact_us"  id="frm_contact_us" onsubmit="return false;">
    <ons-list modifier="field_list" id="contact_us_list">     
    </ons-list>    
  </form>  
    
<ons-bottom-toolbar >
<ons-button modifier="large quiet_orange no_shadow" onclick="submitForm('.frm_contact_us','ContactUs','POST')" >
    <span class="trn">Submit</span>
  </ons-button> 
</ons-bottom-toolbar>    
    
    </ons-page>
</template>      

<template id="contact_us_ty.html">
  <ons-page id="contact_us_ty" modifier="white_background" >

  <div class="content-wrap">
     <img class="stic-successful" src="lib/icons/successful.svg" onerror="this.src='successful.png'">
  </div>
  
   <div class="stic-lateral-wrap stic-center">
    <h3 class="trn">Thank you</h3>  
    <p class="contact_us_message small trn"></p>
   </div>

  <ons-bottom-toolbar modifier="">                    
    <ons-button modifier="large to_orange no_shadow" onclick="backToHome(1);" >
    <span class="trn">Back to Home</span>
    </ons-button>   
  </ons-bottom-toolbar>  

  </ons-page>
</template>

<?php wp_footer(); ?>