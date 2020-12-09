<?php include "includes/header.php"?>

<section>
<p>Flexbox is a layout module for CSS that allows you to arrange and size websites. With flexbox you have a container with children (elements within) which are placed along flex lines. The lines can be tailored to suit the designer, meaning the size and spacing along the axis can be changed, and the neighboring elements will adjust automatically.</p>
 
<p>“CSS methods like floats, inline-blocks, and absolute positioning have certain limitations and were not meant to handle today’s responsive layouts.</p>

<p>Floats, for example, weren’t intended for page layout, they were meant for wrapping text around images. When using floats for layout they require clear fixes to prevent the element from collapsing. With inline-block you are always fighting with the default white space created by the browser. And positioning can be tricky because it requires context and other content on the page behaves as if the positioned elements didn’t even exist(Gary).” </p>

<p>Flexbox use is recommended for small-scale layouts and applications such as navigations menus, card layouts, media items, and web forms. It can be used as a block layout for laying out documents, a table layout for 2D tabular data, an inline layout for text, an inline layout for laying out text, and as a positioned layout for explicit positioning. Flexbox is a one-dimensional layout that aligns content on either a horizontal or vertical axis, meaning you can have either a row-based or column-based layout. With a flex layout you can create multiple rows or columns.</p>
 
<p>Flexbox is best for arranging elements in either a single row, or a single column. Grid is best for arranging elements in multiple rows and columns(Sarker).” </p>
 
 
<h2>Common Flexbox Properties</h2>

<h2>1. Display Flex</h2>
<p>
To designate an element as a flex element you must set the display property to flex or inline-flex.</p><p>#container {Display: Flex;}
</p> 

<h2>2. Flex Direction</h2>
<p>A flexbox container has two axes: a main and a cross axis. Flex direction lets you rotate the main axis. The main axis goes from horizontal to vertical. A couple other options include: row-reverse and column-reverse.</p> 
    <p>#container { display: flex; flex-direction: column; } </p>

<h2>3. Justify Content</h2>
<p>This determines where content gets placed on the main axis.</p>
<p>{justify-content:flex-start;} (Also: flex-start, flex-end, center, space-between, space-around.)</p>

<h2> 4. Align Items </h2>
<p>Align items determines where content goes on the cross axis.</p>

 <p>“Flexbox was first proposed at the beginning of the past decade and recommended by the W3C for adoption in 2012. Since then, browsers have started supporting it and, by now, all modern browsers are able to deal with flexbox."</p>

    
    
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Citations</h3>

<p>Gary. “What is Flexbox?” refresh-digital, 07 October 2018, <a href="https://refresh-digital.com/getting-to-grips-with-flexbox/">https://refresh-digital.com/getting-to-grips-with-flexbox/</a></p>

<p>Sarker, Kunal. “Grid vs Flexbox: Which Should You Choose.” webdesignerdepot, 26 November 2018, <a href="https://www.webdesignerdepot.com/2018/09/grid-vs-flexbox-which-should-you-choose/">https://www.webdesignerdepot.com/2018/09/grid-vs-flexbox-which-should-you-choose/ </a>
</p>  

</aside>
<!-- END RIGHT COL -->
 
<?php include "includes/footer.php"?>