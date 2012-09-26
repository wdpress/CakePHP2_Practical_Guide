<div class="timeline index">
	<?php if (!empty($timeline)): ?>
	  <h2><?php echo __('Home Timeline');?></h2>
	  <table cellpadding="0" cellspacing="0">
	  <tr>
	  <th width="200px">ScreenName</th>
	  <th>Tweet</th>
	  <th width="200px">created_at</th>
	  </tr>
	  <?php foreach($timeline as $tweet): ?>
	    <tr>
	    <td>
	      <?php 
	        echo $this->Html->image(
	         $tweet['user']['profile_image_url_https']);
	      ?><br />
	      <?php 
	        echo $this->Html->link(
	          $tweet['user']['screen_name'], 
	          "https://twitter.com/{$tweet['user']['screen_name']}"
	        ); 
	      ?>
	    </td>
	    <td><?php echo nl2br(h($tweet['text'])); ?></td>
	    <td>
	      <?php 
	        echo $this->Time->niceShort($tweet['created_at']); ?>
	    </td>
	    </tr>
	  <?php endforeach;?>
	  </table>
	<?php endif; ?>
	</div>

