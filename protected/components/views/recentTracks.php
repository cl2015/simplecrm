<ul>     <?php foreach($this->getRecentTracks() as $track): ?>    <div class="author">         <?php echo $track->creater->username; ?> 更新了客户追踪信息.    </div>     <div class="issue">        <?php echo CHtml::link(CHtml::encode($track->content),                array('track/view', 'id'=>$track->id)); ?>    </div>     <?php endforeach; ?></ul>