<style>
.scroll-left {
 height: 50px;	
 overflow: hidden;
 position: relative;
 background: black;
 color: white;
 border: 1px black;
}
.scroll-left p {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 transform:translateX(100%);
 /* Apply animation to this element */
 animation: scroll-left 15s linear infinite;
}
/* Move it (define the animation) */
@keyframes scroll-left {
 0%   {
 transform: translateX(100%); 		
 }
 100% {
 transform: translateX(-100%); 
 }
}
</style>

<div class="scroll-left">
<p>GroceryBazar is a PHP Based E-Commerce Website. You can buy daily grocery items like Meat & Fish, Oil, Bread, Butter, Milk, Eggs, Onions, Fruits, and Vegetables etc. It is best for one click handy shopping & hassale free services.</p>
</div>

