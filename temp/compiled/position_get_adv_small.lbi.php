<div class="hd">
      <ul>
      <?php $_from = $this->_var['ad_child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_0_25168400_1427642200');if (count($_from)):
    foreach ($_from AS $this->_var['child_0_25168400_1427642200']):
?>
        <li></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
      </ul>
    </div>
    <div class="bd">
     <ul>
		<?php $_from = $this->_var['ad_child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_0_25207800_1427642200');if (count($_from)):
    foreach ($_from AS $this->_var['child_0_25207800_1427642200']):
?>
            <li><a href="<?php echo $this->_var['child_0_25207800_1427642200']['ad_link']; ?>" target="_blank"><img src="data/afficheimg/<?php echo $this->_var['child_0_25207800_1427642200']['ad_code']; ?>" alt="" class="goodsimg" /></a></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>                             	
    </ul>
    </div>
  </div>
