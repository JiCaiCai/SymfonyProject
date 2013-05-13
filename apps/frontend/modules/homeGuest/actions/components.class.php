<?php
class homeGuestComponents extends sfComponents
{
	public function executeCurrentDate()
	{
		$this->CurrentTime = date("Y-m-d H:i:s");
	}
}