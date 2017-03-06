<?php 

namespace JobDesk\Traits;

use Response;

trait ErrorHandable {

	public function handleError($error) {
		return Response::json(['error' => $error]);
	}

}