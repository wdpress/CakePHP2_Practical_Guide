	<!-- app/View/Sample/test.ctp -->
	<?php
		//通常の記述
		echo $this->Demo->cakesite();
	?>
	<br/>
	<?php
		//HelperCollection経由での呼び出し
		echo $this->Helpers->Demo->cakesite();
	?>