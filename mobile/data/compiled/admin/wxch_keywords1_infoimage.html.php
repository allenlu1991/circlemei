<!-- $Id: wxch_keywords_infoimage.html 17126 2010-04-23 10:30:26Z liuhui $ -->
<?php echo $this->fetch('wxch_pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../data/static/js/utils.js,./js/selectzone.js,./js/colorselector.js')); ?>
<script type="text/javascript" src="../data/static/js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../data/static/js/calendar/calendar.css" rel="stylesheet" type="text/css" />

<!-- start goods form -->
<div class="tab-div">
    <!-- tab bar -->
    <div class="tab-div">
<div id="tabbar-div">
    <p>
        <span class="tab-back" id="two-table">图文信息</span>
    </p>
</div>
<div id="tabbody-div">
<form enctype="multipart/form-data" action="" method="post" name="theForm" >
<!-- 通用信息 -->
<table width="100%" id="two-table" align="center" >

            <!-- 详细描述 -->
          <tr>
            <td colspan="3">
              <img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
              文章标题 <input type="text" name="article_title" />
              <input type="button" value="搜索" onclick="searchArticle()" class="button" />
            </td>
          </tr>
          <tr>
            <td width="45%">
              <select name="source_select3" size="20" style="width:100%" multiple ondblclick="sz3.addItem(false, 'add_article', imageId">
              </select>
            </td>
            <td align="center">
              <p><input type="button" value=">>" onclick="sz3.addItem(true, 'add_article', imageId)" class="button" /></p>
              <p><input type="button" value=">" onclick="sz3.addItem(false, 'add_article', imageId)" class="button" /></p>
              <p><input type="button" value="<" onclick="sz3.dropItem(false, 'drop_article', imageId)" class="button" /></p>
              <p><input type="button" value="<<" onclick="sz3.dropItem(true, 'drop_article', imageId)" class="button" /></p>
            </td>
            <td width="45%">
              <select name="target_select3" size="20" style="width:100%" multiple ondblclick="sz3.dropItem(false, 'drop_goods_article', imageId, elements['is_single'][0].checked)">
                <?php $_from = $this->_var['article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
                <option value="<?php echo $this->_var['article']['article_id']; ?>"><?php echo $this->_var['article']['title']; ?></option>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </select>
            </td>
          </tr>
</table>
</div>
</div>      


        <div class="button-div">
          <input type="hidden" name="id" value="<?php echo $this->_var['data']['id']; ?>" />
          <input type="submit" value="保存" class="button" />
          <input type="reset" value="重置" class="button" />
        </div>
      
    
</div>
</form>
<!-- end keywords form -->
<script language="JavaScript">
    var imageId = '<?php echo $this->_var['data']['id']; ?>';
    var elements = document.forms['theForm'].elements;
    var sz1 = new SelectZone(1, elements['source_select1'], elements['target_select1']);
    var sz2 = new SelectZone(2, elements['source_select2'], elements['target_select2'], elements['price2']);
    var sz3 = new SelectZone(1, elements['source_select3'], elements['target_select3']);
    document.getElementById("tabbar-div").onmouseover = function(e)
{
    var obj = Utils.srcElement(e);

    if (obj.className == "tab-back")
    {
        obj.className = "tab-hover";
    }
}

document.getElementById("tabbar-div").onmouseout = function(e)
{
    var obj = Utils.srcElement(e);

    if (obj.className == "tab-hover")
    {
        obj.className = "tab-back";
    }
}

document.getElementById("tabbar-div").onclick = function(e)
{
    var obj = Utils.srcElement(e);

    if (obj.className == "tab-front")
    {
        return;
    }
    else
    {
        objTable = obj.id.substring(0, obj.id.lastIndexOf("-")) + "-table";

        var tables = document.getElementsByTagName("table");
        var spans  = document.getElementsByTagName("span");

        for (i = 0; i < tables.length; i++)
        {
            if (tables[i].id == objTable)
            {
                tables[i].style.display = (Browser.isIE) ? "block" : "table";
            }
            else
            {
                tables[i].style.display = "none";
            }
        }
        for (i = 0; spans.length; i++)
        {
            if (spans[i].className == "tab-front")
            {
                spans[i].className = "tab-back";
                obj.className = "tab-front";
                break
            }
        }
    }
}

function showNotice(objId)
{
    var obj = document.getElementById(objId);

    if (obj)
    {
        if (obj.style.display != "block")
        {
            obj.style.display = "block";
        }
        else
        {
            obj.style.display = "none";
        }
    }
}

 function searchArticle()
  {
    var filters = new Object;

    filters.title = Utils.trim(elements['article_title'].value);

    sz3.loadOptions('get_article_list', filters);
  }

</script>
<?php echo $this->fetch('wxch_pagefooter.htm'); ?>
