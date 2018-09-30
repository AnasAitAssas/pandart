function initSideMenu(item, subItem)
{
	$(item).addClass("current_section");
	if(subItem!=null)
		$(subItem).addClass("act_item");
}