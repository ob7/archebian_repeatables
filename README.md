<h2>Archebian Repeatables</h2>
<h4>A C5 Plugin</h4>
<hr>
<p>
Repeatables refers to an element that is repeated by adding or substracting them via the blocks edit form.
</p>
<p>
What makes this package special is in the options menu you can toggle what kind of elements you want to repeat, whether it be images or links, or a combination.<br>
This makes it so one block can do the job of what typically would be mutliple blocks, saving us great time in our web development process.
</p>
<h3>Background:</h3>
<p>
Typically when coding a website we start from a finished design file (illustrator).  Making a fully functioning C5 site is a combination of coding the style sheets and creating blocks that mimic the design.  Very often we need our blocks to contain a variable amount of what we call 'repeatble elements'.  Elements that can be repeated depending on content added.  For example, a list of sponsor logos at the bottom of the page would be a repeatable images block, where the images are added to the form and the blocks view.css and view.php outputs the images according to the design.
</p>
<p>
Well I have a great idea to hopefully save lots of time, it involves using one block for any type of repeatable element.  We need repeatable elements for all kinds of things, a custom menu for example is just a repeated custom link.  A locations map with multiple locations is a group of data that can be repeated and is then output within a google map and navigation that can toggle the locations.
</p>
<p>
I have already created many custom blocks for creating these addons for each site we make, the goal of this project is to combine most of them into one block, further saving time by making it so we only need to alter styles rather than the controller, form, and db based on what content needs to be repeated basde on the design.  Sometimes we need to make a repeatable image block that includes a link, sometimes the repeatable image block needs a link and a title, etc.  This block aims to consolidate this by allowing toggleable options via each blocks form enabling or disabling those different available elements for each repeated item.
</p>
<hr>
<h3>Disclaimer:</h3>
<p>
I just started on this package and the description above is the end goal, not what the code actually does at this point.
</p>
