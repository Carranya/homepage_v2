<style>
.main{
   position: absolute;
   width: 100%;
   height: 100%;
   overflow: hidden;
}

label{
   cursor: pointer;

}

.menu{
   position: absolute;
   top: 0;
   left: 0;
   width: 240px;
   height: 100%;
   transform: translate3d(-240px, 0, 0);
   transition: transform 1s;
}

label.toggle{
   position: absolute;
   right: -60px;
   width: 60px;
   height: 60px;
   line-height: 0px;
   display: block;
   padding: 0;
   text-indent: -9999px;
   background: #fff url(hamicon.png) 50% 50% / 25px 25px no-repeat;
}

ul, li{
   list-style: none;
}

a{
   display: block;
   text-align: center;
   padding: 0 20px;
   line-height: 60px;
   text-decoration: none;
   color: #000;
}

a .hover{
   color: #666;
}


.menu-checkbox{
   display: none;
}

.menu .menu label.toggle{
   background: none;
}

.menu-checkbox:checked + .menu{
   transform: translate3d(0, 0, 0);
}

</style>

<div class='main'>
<input type='checkbox' name='menu' id='menu' class='menu-checkbox'>
<div class='menu'>
   <label class='toggle' for='menu'></label>
      <ul>
         <li><a href='test21.html'>Menü-1</a></li>
         <li><a href='test22.html'>Menü-2</a></li>
         <li><a href='test23.html'>Menü-3</a></li>
      </ul>
</div>


