<li <?php if($this->uri->segment(3)==''){ ?>class="active"<?php } ?>><a href="<?=base_url('editor/characters')?>">Characters</a></li>
<li <?php if($this->uri->segment(3)=='classes'){ ?>class="active"<?php } ?>><a href="<?=base_url('editor/characters/classes')?>">Classes</a></li>
<li <?php if($this->uri->segment(3)=='races'){ ?>class="active"<?php } ?>><a href="<?=base_url('editor/characters/races')?>">Races</a></li>
<li <?php if($this->uri->segment(3)=='zodiacs'){ ?>class="active"<?php } ?>><a href="<?=base_url('editor/characters/zodiacs')?>">Zodiacs</a></li>
<li <?php if($this->uri->segment(3)=='attributes'){ ?>class="active"<?php } ?>><a href="<?=base_url('editor/characters/attributes')?>">Attributes</a></li>
<li <?php if($this->uri->segment(3)=='skills'){ ?>class="active"<?php } ?>><a href="<?=base_url('editor/characters/skills')?>">Skills</a></li>
<li <?php if($this->uri->segment(3)=='abilities'){ ?>class="active"<?php } ?>><a href="<?=base_url('editor/characters/abilities')?>">Abilities</a></li>
<li <?php if($this->uri->segment(3)=='powers'){ ?>class="active"<?php } ?>><a href="<?=base_url('editor/characters/powers')?>">Powers</a></li>