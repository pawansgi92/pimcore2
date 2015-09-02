<div class="frame-pagging">
    <div class="main-pagging">
        <hr></hr>
        <div class="show">
            <p>Show : 
                    <select name="filter">
                        <option value="12">12</option>
                        <option value="18">18</option>
                        <option value="24">24</option>
                    </select>
            </p>
        </div>
        <div class="pagging">
            <ul class="page">
                <?php if (isset($this->first)): ?>
                    <li><a href="<?php echo $this->urlprefix . $this->first?>">|&lt;</a></li>
                <?php else: ?>
                    &nbsp;
                <?php endif; ?>

                <?php if (isset($this->previous)): ?>
                    <li><a href="<?php echo $this->urlprefix . $this->previous?>">&lt;</a></li>
                <?php else: ?>
                    &nbsp;
                <?php endif; ?>

                <?php foreach ($this->pagesInRange as $page): ?>
                    <?php if ($page != $this->current): ?>
                        <li><a href="<?php echo $this->urlprefix . $page ?>"><?php echo $page; ?></a></li>
                    <?php else: ?>
                        <li class="active"><a href=""><?php echo $page; ?></a></li>
                    <?php endif; ?>
                <?php endforeach; ?>


                <li><a href="javascript:void(0)">&gt;</a></li>

                <?php if (isset($this->last)): ?>
                    <li><a href="<?php echo $this->urlprefix . $this->last ?>">&gt;|</a></li>
                <?php else: ?>
                    &nbsp;
                <?php endif;?>
                
            </ul>
        </div>
    </div>
</div>