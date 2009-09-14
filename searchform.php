<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<div id="buscador"><input type="text" value="<?php echo (strlen(get_search_query()) ? get_search_query() : "Buscar"); ?>" name="s" id="s"   onblur="if (this.value == '')  
  {this.value = 'Buscar';}"  
  onfocus="if (this.value == 'Buscar')  
  {this.value = '';}"/>
<!-- <input type="submit" id="searchsubmit" value="Buscar" /> -->
</div>
</form>
